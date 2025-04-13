<?php
require_once 'inc/conn.php';
header("Access-Control-Allow-Methods: POST") ;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $uri = $_SERVER['REQUEST_URI'];
    $uri_arr = explode('/', $uri);
    $id = end($uri_arr);

    $selectQuery = "select * from user where id = '$id'";
    $res = mysqli_query($conn, $selectQuery);
    $data = mysqli_fetch_assoc($res);
    
    if (mysqli_num_rows($res) == 1) {

        $oldImg = $data['image'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        // show if user exist or no 

        if (isset($_FILES['image']) && $_FILES['image']['name']) {
            $image = $_FILES['image'];
            $imageName = $image['name'];
            $imageSize = $image['size'] / (1024 * 1024);
            $imageError = $image['error'];
            $imageEx = strtolower(pathinfo($imageName, PATHINFO_EXTENSION));

            ## should to post not files image (cause image is send as name not file from api)
            ## if we want to put in another file 
            $img_tmp = $image['tmp_name'];
            $newImage = uniqid() . time() . "." . $imageEx;
            
            $update_query = "UPDATE `user` SET `name` = ? , `email` = ? , `password`=? , `image` = ? WHERE `id` = '$id'";
            $prepare = mysqli_prepare($conn, $update_query);
            mysqli_stmt_bind_param($prepare, 'ssss', $name, $email, $password, $newImage);
            $done = mysqli_stmt_execute($prepare);
            if ($done) {
                unlink('upload/'.$oldImg);
                move_uploaded_file($img_tmp, 'upload/' . $newImage);
                $data = [
                    'status' => http_response_code(200),
                    'message' => 'Data Updated Successfully'
                ];
                echo json_encode($data['message']);
            }
            
        } else {
            $newImage = $oldImg;
            $update_query = "UPDATE `user` SET `name` = ? , `email` = ? , `password`=? , `image` = ? WHERE `id` = '$id'";
            $prepare = mysqli_prepare($conn, $update_query);
            mysqli_stmt_bind_param($prepare, 'ssss', $name, $email, $password, $newImage);
            $done = mysqli_stmt_execute($prepare);
            if ($done) {
                $data = [
                    'status' => http_response_code(200),
                    'message' => 'Data Updated Successfully'
                ];
                echo json_encode($data['message']);
            }
        }

    } else {
        $data = [
            'status' => http_response_code(404),
            'message' => 'USer not found'
        ];
        echo json_encode($data['message']);
    }
} else {
    echo json_encode("Method Not Allowed");
    http_response_code('403');
}
