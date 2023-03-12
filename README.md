# BlackBerry Classic assistant built on GPT 3
Do you want to have ChatGPT on your BlackBerry Classic  (or any other BBOS 10 device)? Well, now you can!
With a simple python3.2 script and a PHP script, and a terminal app, and a web hosting, you could finally have again a modern day chat assistant on your BlackBerry phone!

![IMG_20230219_161737](https://user-images.githubusercontent.com/89629317/224575200-85be718d-c377-4cdf-8023-bdd4e5aeba3a.png)

And the best thing about it? It is written by ChatGPT itself!

# Installation
1. Get openAI API key

2. Download *openAIproxy.php* and replace the string *REPLACE_IT_WITH_YOUR_OPEN_AI_KEY* with your open AI key

3. Upload it on any website you own that works without HTTPS

4. Install any terminal that could launch python
* https://github.com/BerryFarm/Term49
* https://github.com/BerryTrucks/BGShellBB10
* anything else that could launch python3.2

5. Download *bbai.py* and replace "http://example.com/openAIproxy.php" with the real address of the script // it must be HTTP, I'll explain soon

6. Place *bbai.py* on your BlackBerry device

7. Enjoy!

# Explanation
This script is written mostly by ChatGPT itself, with a little guidence that helped it overcome the obstacles: BBOS python is outdated and doesn't have most of the libraries. It also often fails to establish secure connections, while openAI API doesn't allow non-encrypted connections. This is why we need to have an openAIproxy.php file: requests from your BlackBerry device are sent non-encrypted, and then the php proxy script passes them to openAI with encrypted connection. Your connection to this file must be HTTP and not HTTPS.

# User guide
To start, open a terminal application and run a command "python3.2 bbai.py" in the folder where you placed this script. Then just start talking to your brand new assistant.

If you want to end the conversation, type "Good bye".

A word of advice: try to not to say too many phrases within the same session, it would cost you more money than you'd probably like to spent.
