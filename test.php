<html>
<body>

<?php

// Initialize cURL session
$curlSession = curl_init();

// Set cURL options
$url = 'https://panel1.nimplus.space/api/user/account/subscribe/c2a56bb55f98408f727a29b945b787b1?type=android&ip=0&flow=1';
// Replace "%2" with "/"
curl_setopt($curlSession, CURLOPT_URL, $url);
curl_setopt($curlSession, CURLOPT_RETURNTRANSFER, true);

// For demonstration purposes, SSL verification is disabled. In production, this should be enabled.
curl_setopt($curlSession, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curlSession, CURLOPT_SSL_VERIFYHOST, false);

// Execute cURL request
$response = curl_exec($curlSession);

// Check for cURL errors
if ($response === false) {
    $error = curl_error($curlSession);
    echo "<h6>cURL Error: $error</h6>";
} else {
    // Output the raw response for debugging (optional)
    // echo "<pre>" . htmlspecialchars($response) . "</pre>";

    // Decode the response
    $decodedResponse = base64_decode($response);
    if ($decodedResponse === false) {
        echo "<h6>Base64 Decode Error: The response could not be decoded.</h6>";
    } else {
        
        $decodedResponse = str_replace("58076", "", $decodedResponse);
        $decodedResponse = str_replace("%2F", "/", $decodedResponse);
        $decodedResponse = str_replace("D8%AF%D8%B1%D8%B5%D8%AF%20%D8%A7%D8%B2%20%DA%A9%D9%84%20%D8%AD%D8%AC%D9%85", "", $decodedResponse);
        $decodedResponse = str_replace("%D8%A7%D9%86%D9%82%D8%B6%D8%A7", "", $decodedResponse);
        $decodedResponse = str_replace("Tunnel1(vless)%2057788", "SPEED3%E2%80%A2%E1%B4%9B%E1%B4%9C%C9%B4%C9%B4%E1%B4%87%CA%9F%E2%80%A2", $decodedResponse);
        $decodedResponse = str_replace("Tunnel3%20", "SPEED5%E2%80%A2%E1%B4%9B%E1%B4%9C%C9%B4%C9%B4%E1%B4%87%CA%9F%E2%80%A2", $decodedResponse);
        $decodedResponse = str_replace("Tunnel4(vless)", "SPEED7%E2%80%A2%E1%B4%9B%E1%B4%9C%C9%B4%C9%B4%E1%B4%87%CA%9F%E2%80%A2", $decodedResponse);
        $decodedResponse = str_replace("%D8%A2%D9%84%D9%85%D8%A7%D9%86%20(ws)%20", "WS%E2%80%A2%C9%A2%E1%B4%87%CA%80%E2%80%A2", $decodedResponse);
        $decodedResponse = str_replace("%D8%A8%D9%84%DA%98%DB%8C%DA%A9", "WS%E2%80%A2%CA%99%E1%B4%87%CA%9F%E2%80%A2", $decodedResponse);
        $decodedResponse = str_replace("%D8%AA%D8%B1%DA%A9%DB%8C%D9%87(http)%20", "HTTP%E2%80%A2%E1%B4%9B%E1%B4%9C%CA%80%E2%80%A2", $decodedResponse);
        $decodedResponse = str_replace("%D8%AC%D9%85%D9%87%D9%88%D8%B1%DB%8C%20%DA%86%DA%A9(ws)%20", "WS%E2%80%A2%E1%B4%84%CA%9C%E1%B4%A2%E2%80%A2", $decodedResponse);
        $decodedResponse = str_replace("%D9%86%D8%B1%D9%88%DA%98%20(ws)%20", "WS%E2%80%A2%C9%B4%E1%B4%8F%CA%80%E2%80%A2", $decodedResponse);
        $decodedResponse = str_replace("%D9%87%D9%84%D9%86%D8%AF(New%20Ws)%20", "WS%E2%80%A2%C9%B4%E1%B4%87%E1%B4%85%E2%80%A2", $decodedResponse);
        $decodedResponse = str_replace("%2F", "/", $decodedResponse);
        $decodedResponse = str_replace("%2F", "/", $decodedResponse);
        $decodedResponse = str_replace("%2F", "/", $decodedResponse);
        
        // Insert HTML line breaks before newlines
        nl2br($decodedResponse);
    }
}
echo base64_encode($decodedResponse);
// Close cURL session
curl_close($curlSession);
?>

</body>
</html>
