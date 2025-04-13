<?php 

$upload_path = 'upload/'. time() . ".jpg";

$host = 'https://images.mlssoccer.com/image/private/t_editorial_landscape_8_desktop_mobile/mls/o4sholk4i0wtljtwknok.jpg';

$fp =fopen($upload_path , 'w');
$curl = curl_init($host);

curl_setopt($curl , CURLOPT_FILE , $fp);

$data = curl_exec($curl);

curl_close($curl);
fclose($fp);
