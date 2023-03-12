<?php
// Get the request data from the Python script
$requestData = file_get_contents('php://input');

// Set the OpenAI API endpoint
$endpoint = 'https://api.openai.com/v1/completions';

// Set the OpenAI API key
$apiKey = 'REPLACE_IT_WITH_YOUR_OPEN_AI_KEY;

// Set up the cURL request
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $endpoint);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $requestData);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
  'Content-Type: application/json',
  'Authorization: Bearer ' . $apiKey,
));

// Disable SSL verification if needed
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

// Send the request to the OpenAI API
$response = curl_exec($ch);

// Get the response status code
$httpStatus = curl_getinfo($ch, CURLINFO_HTTP_CODE);

// Check the response status code
if ($httpStatus !== 200) {
  // If the status code is not 200, show the exact status
 http_response_code($httpStatus);
}

// Return the response to the Python script
echo $response;
