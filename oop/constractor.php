<?php 
// we should name the file with the name of class 
//class should named with pascal style (first char of any word is capital)

class User {
    // properties 
    public string $name  , $email , $gender;
    public int $age ; 
    public string $type = 'user' ;



    # constractor 
    public function __construct($name)
    {
        $this->name = $name;
        $this->greet();
    }

    // methods
    // not do any thing if not calling  
    public function greet(){
        echo "Hello , $this->name";
    }

    public function goodbye(){
        echo "Goodbye , $this->name";
    }


    public function promote(){
        $this->type = 'admin';
    }

    //update email
    public function updateEmail($email){
        return $this->email = $email ;
    }



    //destructor without calling
    public function __destruct()
    {
        echo "<br>";
        $this->goodbye();
    }

}

//create the object 
$ahmed = new User('Ahmed') ; 

 
//call function 

echo "<pre>";
print_r($ahmed);
echo "</pre>";


// second object
echo "<br>";
$ali = new User('ali') ; 


//call function 

echo "<pre>";
print_r($ali);
echo "</pre>";



?>