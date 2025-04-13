<?php 
require_once 'inc/conn.php';
header("Access-Control-Allow-Methods: POST") ;

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $name = $_POST['name'] ; 
    $email = $_POST['email'];
    $password = $_POST['password'];
    if(isset($_FILES['image']) && $_FILES['image']['name']){
        $image = $_FILES['image'];
        $imageName = $image['name'];
        $imageSize = $image['size']/(1024 * 1024);
        $imageError = $image['error'];
        $imageEx = strtolower(pathinfo($imageName , PATHINFO_EXTENSION));

        ## should to post not files image (cause image is send as name not file from api)
        ## if we want to put in another file 
        $img_tmp = $image['tmp_name'];
        $newImage = uniqid() . time() .".".$imageEx ; 
        $insert_query = "INSERT INTO `user` (name , email , password , image) values (?, ? , ? , ?)";
        $prepare = mysqli_prepare($conn, $insert_query);
        mysqli_stmt_bind_param($prepare, 'ssss', $name, $email, $password, $newImage);
        $done = mysqli_stmt_execute($prepare);
        if ($done) {
            move_uploaded_file($img_tmp, 'upload/'. $newImage);
            $data = [
                'status' => http_response_code(200),
                'message' => 'Inserted Successfully'
            ];
            echo json_encode($data['message']);
        }
    }else{
        $data = [
            'status' => http_response_code(300),
            'message' => 'Error occourd while insert' 
        ];
        echo json_encode($data['message']);
    }

}else{
    echo json_encode("Method Not Allowed");
    http_response_code('403');
}





?>