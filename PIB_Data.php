<?php

$url = 'https://publicinfobanjir.water.gov.my/?lang=en';

// Initialize cURL session
$ch = curl_init();

// Set cURL options
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Disable SSL verification (not recommended for production)
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2); // Check the existence of a common name and also verify that it matches the hostname provided
curl_setopt($ch, CURLOPT_SSLVERSION, CURL_SSLVERSION_TLSv1_2); // Use TLS version 1.2

// Execute cURL session and fetch content
$content = curl_exec($ch);

// Check for cURL errors
if (curl_errno($ch)) {
    echo 'Curl error: ' . curl_error($ch);
}

// Close cURL session
curl_close($ch);

// Output the content
echo $content;

?>