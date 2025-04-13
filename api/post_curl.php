<?php 

// require_once "inc/conn.php";

if(isset($_FILES['image']) && isset($_FILES['image']['name'])){
    $image = new CURLFile($_FILES['image']['name']);

    $data = [
        "name" => "ddd",
        "email"=> "sdd@sddss.com",
        "password" => "sss",
        "image" => $image-> name
    ];
     
    
    $curl = curl_init(); 
    curl_setopt($curl , CURLOPT_URL , 'http://localhost/api/insert_curl.php');
    curl_setopt($curl , CURLOPT_POST , true);
    curl_setopt($curl , CURLOPT_POSTFIELDS , $data);
    curl_setopt($curl , CURLOPT_RETURNTRANSFER , true);
    curl_getinfo($curl , CURLINFO_HTTP_CODE);
    
    $res = curl_exec($curl);
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test photo</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data"> 
        <input type="file" name="image" id="">
        <input type="submit" value="upload" name = "submit">
    </form>
</body>
</html>