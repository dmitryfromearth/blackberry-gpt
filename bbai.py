import urllib.request
import json

context = []
def ask_question():
    # API headers
    headers = {
        "Content-Type": "application/json",
    }

    # Construct data payload
    data = {
        "prompt": "\n\n".join(context),
        "model": "text-davinci-003",
        "temperature": 0.5,
        "max_tokens": 500,
    }

    # Send the request
    #response = requests.post(endpoint, headers=headers, data=json.dumps(data))
    req = urllib.request.Request("http://example.com/openAIproxy.php", json.dumps(data).encode(), headers)
    response = urllib.request.urlopen(req)
    # Read the response
    response_text = response.read().decode('utf-8')
    response_data = json.loads(response_text)

    # Check for errors
    if response.status != 200:
        print(response)
        print(response_text)
        raise ValueError("Failed to generate response from OpenAI API. Please check your API key and internet connection.")

    # Parse the response and extract the generated text
    response_text = response_data["choices"][0]["text"].strip()

    return response_text

# Start the conversation
prompt = input("You: ")
context.append('USER:' + prompt)
response = ask_question()

while True:
    print("AI: ", response)
    context.append(response)
    prompt = input("You: ")
    if prompt == "Good bye":
        break
    context.append('USER:' + prompt)
    response = ask_question()
