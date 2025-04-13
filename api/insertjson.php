<?php
require_once 'inc/conn.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //get data from json formatting
    $data = file_get_contents("php://input");
    $allData = json_decode($data); 

    $name = $allData->name;
    $email = $allData->email;
    $password = $allData->password;
    // as text not image
    $image = $allData->image;

    $insert_query = "INSERT INTO `user` (name , email , password , image) values (?, ? , ? , ?)";
    $prepare = mysqli_prepare($conn, $insert_query);
    mysqli_stmt_bind_param($prepare, 'ssss', $name, $email, $password, $image);
    $done = mysqli_stmt_execute($prepare);
    if ($done) {
        $data = [
            'status' => http_response_code(200),
            'message' => 'Inserted Successfully'
        ];
        echo json_encode($data['message']);
    }
} else {
    echo json_encode("Method Not Allowed");
    http_response_code('403');
}
