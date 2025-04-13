<?php 

$curl = curl_init();

curl_setopt($curl , CURLOPT_URL , 'https://jsonplaceholder.typicode.com/posts');

echo "<pre>";
print_r(curl_exec($curl));
echo "</pre>";
