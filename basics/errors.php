<?php 
// handling error helps in catching and manage errors instead of breaking the scriopt
// try and catch 

function div($a , $b){
    if($b == 0){
        throw new Exception("Division by zero not allowed");
    }
    return $a / $b ;
}
try{
    echo div(10 ,0);
}catch(Exception $e){
    echo "Error : ". $e->getMessage();
}


// die => handle error with file that stop excution and show errors 
echo "<br>";
if(!file_exists('new.txt')){
    die("Error : this file not found");
}
$file = fopen("new.txt" , 'r');
$content = fread($file , filesize("new.txt"));
echo $content ;




// @ and die supperesses warnings and errors (hide errors and warnings )
echo "<br>";
@$file = fopen('taha.txt' , 'r') or die("This file not exist");
$content = fread($file , filesize('taha.txt'));
echo $content ; 
fclose($file);

?>