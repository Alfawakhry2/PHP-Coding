<?php 
// #deep dive in var and strings


// // global variables
// $x = 10 ; 
// function test(){
//     global $x ;
//     echo $x ;
// }
// //test();



// $fname = 'ahmed';
// $lname = 'khaled';

// echo $fname . ' ' . $lname ;  // . concatenation 

// echo "<br>";

// $name = 'ahmed';
// $name .= ' khaled'; //  appending 


// echo $name ; 
// echo "<br>";


// $sentece = "  Hello there where Are you going ";
// echo strlen($sentece); 
// echo "<br>";
// echo str_word_count($sentece);
// echo "<br>";
// echo substr($sentece , 0 ,5); // part of sentece
// echo "<br>";
// echo strpos($sentece , 'there');
// echo "<br>";
// echo str_contains($sentece , "no"); //check if word in this sentence or no 
// echo "<br>";
// echo str_replace("there" , "dear" , $sentece); // replace word against word
// echo "<br>";
// ## case (upper , lower , etc)
// echo strtoupper($sentece); // all sen convert to upper case 
// echo "<br>";
// echo strtolower($sentece); // all sen convert to lower case
// echo "<br>";
// echo ucwords($sentece) ; // each first char in any word will converts to upper 
// echo "<br>";
// echo ucfirst($sentece) ; // only first char in whole sen will converts to upper 


// echo "<br>";
// // triming strings 
// echo strlen(trim($sentece)); 

// echo "<br>";
// //padding string
// $ss = 'medo';
// echo str_pad($ss,11,"*", STR_PAD_BOTH) ;

// //explode (separate the sentence into arr) => spliting
// echo "<br>";
// $arrs = explode(' ' , trim($sentece));
// print_r($arrs);

// echo "<br>";
// //implode =>joining
// $new_sen = implode(' ' , $arrs);
// echo $new_sen ;



// #formatting print 
// echo "<br>";

// $n = 5 ; 
// define("PI" , 3.1455555);
// $name = "kareem";

// printf("The Number is %d " , $n);
// echo "<br>";
// printf("The const is %.2f " , PI);
// echo "<br>";
// printf("The name is :%s" , $name);

// echo "<br>";

// //hashing password
// $password = '123456';
// $hash = password_hash($password , PASSWORD_DEFAULT);

// if(password_verify('12346' , $hash)){
//     echo  "success";
// }else{
//     echo"failed";
// }
?>


<?php 
//tasks
## Reverse a string without using strrev()
$name = "ahmed";
for($i=strlen($name)-1 ; $i>=0 ; $i--){
    echo $name[$i];
}
echo "<br>";
## Count how many times the letter "a" appears in a string
$name2 = "ahmed ahmed ahmad taha" ; 
$charcount = 0;
$charsearch = 'z';
for($i=0 ; $i<strlen($name2); $i++){
    if($name2[$i] == $charsearch){
        $charcount ++ ;
    }
}
echo "There are $charcount '$charsearch' in $name2";


echo "<br>";
##Extract domain name from an email address
$email = "a@a.com";
$flag = strpos($email ,'@');
if($flag == true){

    $domain = substr($email ,$flag+1);
    echo $domain;
}else{
    echo "incorrect format";
}

##Check if a string is a palindrome (aca => aca) after reversation
echo "<br>";
$word = "madam";
$rev_word = '';
for($i= strlen($word)-1; $i >= 0 ; $i--){
    $rev_word .= $word[$i];
}

if($word == $rev_word){
    echo "The word is palindrome";
}else{
    echo "The word is Not palindrome";

}


## Format a number like currency (1,234.56)
$number = 1234.56;
echo number_format($number , 2);
?>