<?php

require_once "DB/conn.php";

###select All 
// $result = $conn->query("select * from `users`");
// $data = $result->fetchAll(PDO::FETCH_ASSOC);
// echo "<pre>";
// print_r($data)


### select One 
// if(isset($_GET['id'])){
//     $id = $_GET['id'];
//     $prepare = $conn->prepare("SELECT * FROM `users` WHERE `id`=:id");
//     $prepare->bindParam(":id",$id,PDO::PARAM_INT);
//     $prepare->execute();
//     $data = $prepare->fetch(PDO::FETCH_ASSOC);
//     echo "<pre>";
//     print_r($data);
// }else{
//     echo "Method Not allowed";
// }


### Insert 
if (isset($_GET['name']) && isset($_GET['email'])) {
    $name = $_GET['name'];
    $email = $_GET['email'];
    ###select All 
    $result = $conn->query("select * from `users` where `email` = '$email'");
    if($result->rowCount() > 0){
        echo "email Already exist !";
    }else {
        $prepare = $conn->prepare("INSERT INTO `users`(`name` , `email`) VALUES(:name , :email)");
        $prepare->bindParam(":name" , $name );
        $prepare->bindParam(":email" , $email );
        $done = $prepare->execute();
        if ($done) {
            echo "Inserted Successfully";
        }
    }
}else{
    echo "Method Not Allowed";
}



//update 
// if (isset($_GET['id']) && isset($_GET['name']) && isset($_GET['email'])) {
//     $id = $_GET['id'];
//     $name = $_GET['name'];
//     $email = $_GET['email'];
//     ###select All 
//     $result = $conn->query("select * from `users` where `id` = '$id'");
//     if($result->rowCount() == 1){
//         $prepare = $conn->prepare("UPDATE `users` SET `name`=?,`email`=? WHERE `id` = ?");
//         $done = $prepare->execute([$name, $email , $id]);
//         if ($done) {  
//             echo "Updated Successfully";
//         }
//     }else {
//         echo "User Not Found !";
//     }
// }else{
//     echo "Method Not Allowed";
// }



//delete 
// if (isset($_GET['id'])) {
//     $id = $_GET['id'];
//     ###select One where id = $id
//     $result = $conn->query("select * from `users` where `id` = '$id'");
//     if($result->rowCount() == 1){
//         $prepare = $conn->prepare("DELETE FROM `users` WHERE `id` =:id");
//         $prepare->bindParam(":id" , $id);
//         $done = $prepare->execute();
//         if ($done) {  
//             echo "Deleted Successfully";
//         }
//     }else {
//         echo "User Not Found !";
//     }
// }else{
//     echo "Method Not Allowed";
// }

