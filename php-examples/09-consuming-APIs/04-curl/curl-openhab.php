<?php
// http://codular.com/curl-with-php
// Get cURL resource
$curl = curl_init();

//curl_setopt($curl, CURLOPT_PORT, 8080);
//curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
// Set some options - we are passing in a useragent too here

curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    //CURLOPT_URL => 'http://www.google.com/',
    CURLOPT_URL => 'http://localhost/rest/items/',
    CURLOPT_PORT => '8080',
    CURLOPT_USERAGENT => 'Codular Sample cURL Request'
));

// Send the request & save response to $resp
$resp = curl_exec($curl);
// Close request to clear up some resources
curl_close($curl);

//var_dump($resp);

print_r($resp);
?>