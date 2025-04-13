<?php 
## deep dive in arrays 

$fruits = ['apple' , 'banana' , 'orange'];

echo $fruits[0]. '<br>'; //first element
echo $fruits[count($fruits)-1]; //last element

// associative array
echo "<br>";
$person = [
    "name" => "ahmed",
    "age" => 25 ,
    "city" => "cairo"
];

echo $person['name'];
echo "<br>";
echo $person['age'];

echo "<br>";
// multidimensional array
$students = [
    ["ahmed" , 25 , 'sharqia'],
    ['mohammed' , 30 , 'sewis'] ,
    ['amira' , 22 , 'cairo']
];

echo $students[0][2] . "<br>";



// array functions 
echo count($fruits) . "<br>";
echo is_array($fruits)?"yes" :"no";


// adding and removing 
//adding 
array_push($fruits , 'pinaple'); // adding in end
array_unshift($fruits , "carotte"); // adding in first
print_r($fruits); 

//removing 
array_pop($fruits); //delete from last
array_shift($fruits); // delete from first
print_r($fruits); 


//search 
echo in_array("orange",$fruits)?"found":"not found"; // true or false
echo array_search("orange" , $fruits); // get the index , if not found false

//sorting 

# sort() and rsort(reverse)
rsort($fruits);
print_r($fruits);


# asort() -> sort to values  ,, ksort ->sort to keys


//foreach 

foreach($fruits as $f){
    echo $f . "\n";
}

echo "<br>";
$ages = [
    "ahmed" => 25 ,
    "said" => 28 ,
    "mory" => 29 ,

];

foreach($ages as $keys=>$values){
    echo "the age of $keys is $values <br>";
}



//loops with arrays
$numbers = range(1,10);
$even = [];
$odd = [];

foreach($numbers as $n){
    if($n%2==0){
        $even[] = $n;
    }else{
        $odd[] = $n;
    }
}
echo "<br>";
print_r($even);
echo "<br>";
print_r($odd);



//multiplication table 

for ($i=1; $i <=12 ; $i++) { 
    for ($j=1; $j <=12 ; $j++) {
        echo "$i * $j = ".$i * $j . '<br>';
    }
}
?>

