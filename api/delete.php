<?php
require_once "inc/conn.php";

header("Access-Control-Allow-Methods:DELETE") ;

if ($_SERVER['REQUEST_METHOD'] == 'DELETE') {

    $uri = $_SERVER['REQUEST_URI'];
    $uri_arr = explode('/', $uri);
    $id = end($uri_arr);

    $selectQuery = "select * from user where id = '$id'";
    $res = mysqli_query($conn, $selectQuery);

    if (mysqli_num_rows($res) == 1) {
        $data = mysqli_fetch_assoc($res);
        $imgname = $data['image'];
        unlink("upload/$imgname");



        $query = "DELETE FROM `user` WHERE `id` = '$id' ";
        $res = mysqli_query($conn, $query);
        $data = [
            'statue' => http_response_code(200),
            'message' => 'User Deleted Successfully'
        ];

        echo json_encode($data);
    } else {
        $data = [
            'statue' => http_response_code(404),
            'message' => 'User Not Found'
        ];

        echo json_encode($data);
    }
} else {
    $data = [
        'status' => http_response_code(400),
        'message' => 'method not allowed',
    ];
    echo json_encode($data['message']);
}
