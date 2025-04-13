<?php 

require_once "inc/conn.php";
header("Access-Control-Allow-Methods: POST") ;
if($_SERVER['REQUEST_METHOD'] == 'POST'){   

    $name = mysqli_real_escape_string($conn ,htmlspecialchars(trim($_POST['name'])));
    $email = mysqli_real_escape_string($conn ,htmlspecialchars(trim($_POST['email'])));
    $password = mysqli_real_escape_string($conn ,htmlspecialchars(trim($_POST['password'])));

    //we deal with it as post becaue its come from another file in post 
    $image = mysqli_real_escape_string($conn ,htmlspecialchars(trim($_POST['image'])));

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
}else{
    $data = [
        'status' => http_response_code(400),
        'message'=> "method not allowed"
    ] ;
    echo json_encode($data);
} 