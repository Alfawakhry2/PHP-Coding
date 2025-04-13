<?php 

#read file
$file = fopen("test.txt" , 'r');
$content = fread($file , filesize("test.txt"));
fclose($file);
echo $content;

// write 
$file = fopen("new.txt" , 'w');
fwrite($file , "this file contain nothing");
fclose($file);


//append 
$file = fopen("new.txt" , 'a');
fwrite($file , "\nthis is new text with append functions");

echo "<br>";
//read file line by line 
$file = fopen('new.txt' , 'r');
while(!feof($file)){
    echo fgets($file) . "<br>";
}
fclose($file);

//check if file exist 
if(file_exists('new.txt')){
    echo 'this file is exist';
}else{
    echo "this file not exist";
}



//deleting files 

if(file_exists('new.txt')){
    unlink('test.txt');
    echo "file deleted";
}