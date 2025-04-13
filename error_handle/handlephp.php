<?php 

// function set_error_handler send to function error 4 parameters 

function errors($code , $msg , $file , $line){
    echo "errrorrrr :" . $msg . " " . $line ; 
}


set_error_handler("errors");
echo $name ; 

