<?php
//if we need to not intiated the object from this class 
class StaticClass{
    public static $name;
    public $email ;
    const PI = 3.14 ;
    public function greet(){
        echo "Hello ". self::$name;
    }

    //access only static 
    public static function say($name){
        echo "Hello ". self::$name = $name . "<br>";
        
    }

    // can accsess static and non-static
    public function say2($name,$email){
        echo "Your Name is " . self::$name = $name . "<br>";
        echo "Your Email is " . $this->email = $email . "<br>";
    }

    //access only static 
    public static function printPI(){
        echo self::PI . "<br>";
        
    }
    


}



// echo StaticClass::say("ahmed" , "a@s.c");
$x = new StaticClass;
echo $x->say2("rady","a@a.com");
// echo $x->printPI() ;
echo StaticClass::printPI() ;
// echo $x->say("medo"); 


?>