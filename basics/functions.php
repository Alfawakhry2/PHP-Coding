<?php 
function greeting($name = "Ahmed"){
    echo "Hello , $name";
}

greeting('mohsen');


echo "<br>";
function add($a , $b){
    return $a + $b ;
}

echo add(1 , 2);

echo "<br>";
// pass by reference
function increment(&$value){
    return $value++ ;
}
$num = 10 ; 
increment($num);
echo $num ; 


echo "<br>";
// multi args 
function sumall(...$nums){
    return array_sum($nums);
}
echo sumall(10 , 20 , 30);


echo "<br>";
// anonymous function 
$sum = function($a , $b){
    return $a + $b ;
};
echo $sum(1 , 5);


echo "<br>";
//arrow function
$sum = fn($a , $b)=>$a+$b;
echo $sum(50 , 60);
?>