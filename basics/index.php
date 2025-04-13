<?php
// fast revesion of syntax and datatypes
$fname = "ahmed"; 
$lname = "alfawakhry"; 
$age = 45 ;
$salary = 45000.500 ;
$marriage_status = false ;
$preferd_languages = ['php' , 'c++' , 'js'];


echo gettype($fname) . "<br>";
echo gettype($age) . "<br>";
echo gettype($salary) . "<br>";
echo gettype($marriage_status) . "<br>";
echo gettype($preferd_languages) . "<br>";


echo "my name :" . $fname . " ". $lname . "<br>" ;
echo "The length of name : ".strlen($fname.$lname) ;

// fast revesion of arrays
echo "<br>";
$arr = ['banana' , 'apple' , 'orange'];
echo $arr[0]; //first one 
echo "<br>";
echo $arr[count($arr)-1]; // last one
echo "<br>";
echo count($arr); // count of array
echo "<br>";


// fast revesion of condations
$age = 1 ;
if($age >= 18){
    echo "you are adult !";
}else{
    echo 'not adult ';
}

echo "<br>";


// fast revesion on loops 

// for($i= 1 ; $i<=10 ; $i++){
//     echo "$i <br>";
// }

$i = 1 ; 
while($i<=10){
    echo "$i <br>";
    $i++ ; 
}

foreach($preferd_languages as $lang){
    echo "$lang <br>";
}

// fast revesion on functions
function greet ($name){
    echo "Hello , $name";
} 

greet($fname.' '.$lname);

echo "<br>";

//get method
if(isset($_GET['name'])){
    $name = $_GET['name'];
    echo "$name";
}

// echo "<pre>";
// print_r($_SERVER);
// echo "</pre>";


?>


<form action="" method="post">
    <input type="text" name="name">
    <input type="submit" >
</form>

<?php
//post method
if($_SERVER['REQUEST_METHOD']=='POST'){
    $name = $_POST['name'];
    echo "$name";
}
?>


<?php 
//revesion in file handling
file_put_contents('test.txt' , 'name:ahmed taha');
echo file_get_contents('test.txt');

?>