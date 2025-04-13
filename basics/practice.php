<?php
// 1️⃣ Write a function that finds the max value in an array.
function maxVal($arr)
{
    $mx = $arr[0];
    for ($i = 1; $i < count($arr); $i++) {
        if ($mx < $arr[$i]) {
            $mx = $arr[$i];
        }
    }
    return $mx;
}
function minVal($arr)
{
    $min = $arr[0];
    for ($i = 1; $i < count($arr); $i++) {
        if ($min > $arr[$i]) {
            $min = $arr[$i];
        }
    }
    return $min;
}
echo 'The max value in this array :' . maxVal([40, 5, 7, 1, 3, 10, 0, -1, 20, 30]) . "<br>";
echo 'The min value in this array :' . minVal([40, 5, 7, 1, 3, 10, 0, -1, 20, 30]) . "<br>";

// ** Write a function that finds the max and min value in an array in one function.
function minMax($arr)
{
    $mx = $arr[0];
    for ($i = 1; $i < count($arr); $i++) {
        if ($mx < $arr[$i]) {
            $mx = $arr[$i];
        }
    }
    $min = $arr[0];
    for ($i = 1; $i < count($arr); $i++) {
        if ($min > $arr[$i]) {
            $min = $arr[$i];
        }
    }

    return ["max" => $mx, "min" => $min];
}

$n = [50, 0, 70, 17, 40, 5, 7, 1, 3, 10, 0, -1, 20, 30];
if (empty($n)) {
    echo "The array is empty !";
} else {

    $res = minMax($n);
    echo $res['max'] . "<br>";
    echo $res['min'] . "<br>";
}


//  2️⃣ Create a function to check if a number is prime.
// نعرف الرقم الاولي ازاي ؟ 
//1- ميكنش اقل من الاتنين 
//2- لايقبل القسمه الا على نفسه والواحد فقط 

// at first we will check if number is prime or not
function isPrime($num)
{
    if ($num < 2) {
        return false;
    }
    //sqrt to make code more efficent
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}

// then we will create functtion to get the prime number 
function getPrime($numbers)
{
    $primeNumbers = [];
    foreach ($numbers as $n) {
        if (isPrime($n)) {
            $primeNumbers[] = $n;
        }
    }
    return $primeNumbers;
}

// then test function with inputs 
$numbers = [10, 3, 5, 18, 2, 7, 11, 20, 23, 29, 31, 4];
$primes = getPrime($numbers);
sort($primes);
// print_r($primes);
echo "Prime Numbers :" . implode(' , ', $primes);


// 3️⃣ Build a PHP program that reverses an array without array_reverse().
echo "<br>";
function revArr($arr)
{
    $reversedArray = [];
    for ($i = count($arr) - 1; $i >= 0; $i--) {
        $reversedArray[] = $arr[$i];
    }
    return $reversedArray;
}

$numbers = [1, 5, 15, 16, 17];
$res = revArr($numbers);
echo "The array before reversed : " . implode(' , ', $numbers) . "<br>";
echo "The array after reversed : " . implode(' , ', $res);


// 4️⃣ Loop through an associative array and convert all keys to uppercase.
//Built in function
// function UcAssoc($arr){
//     return array_change_key_case($arr ,CASE_UPPER);
// }
// $person = [
//     "name"=>'ahmed' ,
//     "age" =>15 
// ];
// print_r (UcAssoc($person));


// with my hand
function UcAssoc($arr)
{
    $UpperCaseKey = [];
    foreach ($arr as $k => $v) {
        $UpperCaseKey[] = [strtoupper($k) => $v];
    }
    return $UpperCaseKey;
}
$person = [
    "name" => 'ahmed',
    "age" => 15
];
print_r(UcAssoc($person));


// 5️⃣ Create a PHP script that prints Fibonacci numbers up to n.
//عباره عن  fibonacci number هنا ال 
// fn = fn-1 + fn-2 
echo "<br>";
function fibonacci($number)
{
    if ($number < 1) return []; // Return empty array if invalid input
    if ($number == 1) return [0]; // Special case for n = 1
    $fibo = [0, 1];
    for ($i = 2; $i <= $number; $i++) {
        $fibo[] = $fibo[$i - 1] +  $fibo[$i - 2];
    }
    return $fibo;
}

$res = fibonacci(2);
echo "<pre>";
print_r($res);
echo "</pre>";


/*****************/

// 1️⃣ Write a function to calculate the factorial of a number.
function factorial($number)
{
    $factorial = 1;
    for ($i = $number; $i >= 1; $i--) {
        $factorial *= $i;
    }
    return $factorial;
}

$num = 5;
echo "The factorial of $num = " . factorial($num);


// 2️⃣ Create a script that reads a file and prints its content in reverse order.
echo "<br>";
$file = fopen('test.txt', 'r');
$content = fread($file, filesize('test.txt'));
echo "The content before reverse : $content";
$revfile = [];
for ($i = strlen($content) - 1; $i >= 0; $i--) {
    $revfile[] = $content[$i];
}
echo "<br>";
echo "The content after reverse : " . implode('', $revfile);
fclose($file);





// 3️⃣ Set a cookie for theme preference and apply it to the webpage.

if(isset($_COOKIE['background'])){
    echo "<style>
    body{ background-color : ".$_COOKIE['background'] ."}
    </style>";
}


if($_SERVER["REQUEST_METHOD"] == "POST"){
    setcookie("background" , $_POST["bg-color"] ,strtotime("+1 day"));
    header("location: " .$_SERVER['REQUEST_URI']);
    exit();
}


?>
<form action="" method="post">
    <input type="color" name="bg-color">
    <input type="submit" value="Choose Color">
</form>



<?php 

//  Write a function that creates a file and writes an array to it in JSON format.

function arrToJson($arr , $file){

    // create json file 
    $jsondata = json_encode($arr , JSON_PRETTY_PRINT);

    //check if json file created 
    if($jsondata === false){
        return "error while created";
    }

    //write json in file 
    $f = fopen($file , 'w');
    fwrite($f , $jsondata);
    fclose($f);

    return "file '$file' created succfully" ; 


}

$users = [
    "1" => [
    "name" => "ahmed",
    "age" => "50"
    ],

    "2"=>[
    "name" => "said",
    "age" => "40"
    ],

    "3"=>[
        "name" => "fathy",
        "age" => "30"
        ],
        

] ;


echo arrToJson($users , "test.json"); 

echo "<br>" ;





//  Write a function that reads a file but handles errors if the file is missing.


function readfiles($fileName){
    @$file = fopen("$fileName" , 'r') or die("The file Not found") ;
    $content  = fread($file , filesize("$fileName"));
    fclose($file); 
    return "$content" ;
}

$fileName = "new.txt";
echo readfiles($fileName);


echo "<br>";
//  Modify a function to catch division errors (division by zero).

function div($num1 , $num2){
    if($num2 == 0){
        throw new Exception ("division by zero not allowed");
    }
    return $num1 / $num2 ; 
}

try{
echo div(5,0);
}catch(Exception $e){
    echo "error: ".$e->getMessage();
}

echo "<br>";
//  Set a cookie that expires after 1 hour and check if it's set.

setcookie("name" , "ahmed", time()+3600 , '/');
if(isset($_COOKIE['name'])){
    echo $_COOKIE['name'];
}else{
    echo "Name not set";
}


// Write a script to log all PHP errors into a file.

ini_set("log_error" , 1);
ini_set("error_log" , "php_errors.log");




echo $a ;
?>