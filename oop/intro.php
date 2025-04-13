<?php 
// we should name the file with the name of class 
//class should named with pascal style (first char of any word is capital)

class User {
    // properties 
    public string $name  , $email , $gender = "null";
    public int $age ; 
    public string $type = 'user' ;

    // methods
    // not do any thing if not calling  
    public function greet(){
        echo "Hello , $this->name";
    }

    public function promote(){
        $this->type = 'admin';
    }

    //update email
    public function updateEmail($email){
        return $this->email = $email ;
    }

}

//create the object 
$ahmed = new User ; 
$ahmed->name = 'Ahmed taha' ;
$ahmed->email = 'ahmed@gmail.com' ;
$ahmed->gender = 'male' ;
$ahmed->age = 15 ;
 
//call function 
$ahmed->greet();
$ahmed->promote();
$ahmed->updateEmail("a@a.com");
echo "<pre>";
print_r($ahmed);
echo "</pre>";


// second object
echo "<br>";
$ali = new User ; 
$ali->name = 'ali reda' ;
$ali->email = 'ali@gmail.com' ;
$ali->gender = 'male' ;
$ali->age = 15 ;

//call function 
$ali->greet();

echo "<pre>";
print_r($ali);
echo "</pre>";



?>