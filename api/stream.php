<?php 



/// not supported 

if(isset($_FILES['image']) && isset($_FILES['image']['name'])){

    $imageName = $_FILES['image']['name'];
    $header = 'content-type : application/x-www-form-urlencoded';
    $data = [
        "name" => "adel",
        "email" => "adel@a.com",
        "password" => '1233',
        "image" => $imageName
    ];

    $context = stream_context_create(array(
        'http'=> array(
            'method' =>'POST',
            'header' => $header,
            'content' =>http_build_query($data), 
        )
        ));

        $res = file_get_contents('http://localhost/api/post_curl.php' , false , $context);

    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test photo</title>
</head>
    <form method="post" enctype="multipart/form-data"> 
        <input type="file" name="image" id="">
        <input type="submit" value="upload" name = "submit">
    </form>
</body>
</html>