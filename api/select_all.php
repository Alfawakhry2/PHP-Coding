<?php
require_once "inc/conn.php";
header("Access-Control-Allow-Methods: GET") ;

if($_SERVER['REQUEST_METHOD'] == 'GET'){

    $query = 'SELECT * FROM `user`';
    $result = mysqli_query($conn , $query);
    $row_count  =mysqli_num_rows($result);
    if($row_count > 0){
        $user = json_encode(mysqli_fetch_all($result , MYSQLI_ASSOC));
        echo $user ;
    }else{
        echo json_encode("NO Users Found !");
        http_response_code('404');
        
    }
}else{
    echo json_encode("Method Not Allowed");
    http_response_code('403');

}



?>