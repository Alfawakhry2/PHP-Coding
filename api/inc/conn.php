<?php 

$conn = mysqli_connect("localhost", "root" , ""  , 'c40');

// for CORS (Cross Origin Resource Sharing)

//allow to access to all origins => not secure 
header("Access-Control-Allow-Origin:*");

//for security
// header("Access-Control-Allow-Origin: https://your-frontend.com");


//specify which header is allowed
header("Access-Control-Allow-headers:access");

//specify the content_type (text formating ) and encoding 
header("Content-Type:application/json ; charset=UTF-8");


//limit the method , if you choose post then all are ignored 
// header("Access-Control-Allow-Methods: POST , GET") ;
header("Access-Control-Allow-Header:Content-type , Authorization , X-Requested-With");


?>