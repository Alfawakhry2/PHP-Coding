<?php
//cookies store the peace of data on the client-side 


setcookie("user" , "Ahmed" , time()+3600 , '/'); //define the cookie

if(isset($_COOKIE['user'])){ // check if cookie is defined
    echo "hello ". $_COOKIE['user'];
}else{
    echo "The cookie is not set";
}
setcookie("user" , '' , time()-3600 , '/'); //deleting cookie
?>