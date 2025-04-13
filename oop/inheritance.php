<?php 


class User {
    //properties 
    public $name , $email , $gender ; 


    public function __construct($name , $email ,$gender)
    { 
        $this->name = $name ; 
        $this->email = $email ; 
        $this->gender = $gender ; 

        $this->greet();
    }
    //methods 
    public function greet(){
        echo "Hello , $this->name";
    }

}

class Student extends User {
    public function degree($d1 , $d2){
        return $d1 + $d2 ; 
    }

    //can edit body not (parameters)
    public function greet()
    {
        echo "Hello Student , $this->name";
        
    }
}


class Instractor extends User {
    public $subject ;
    

    //means over
    public function __construct($name , $email ,$gender ,$subject)
    { 
        $this->name = $name ; 
        $this->email = $email ; 
        $this->gender = $gender ; 
        $this->subject= $subject ; 

        $this->greet();
    }

    public function greet()
    {
        echo "Hello Instractor , $this->name";
        
    }
    public function subject($sname){
        $this->subject = $sname ;  
    }
}



$st = new Student("ahmed" ,"a@a.com" , "male");
echo "<pre>";
print_r($st);
echo "</pre>";

$inst = new Instractor("yousif" , 'y@y.com' , 'male' , 'php');

echo "<pre>";
print_r($inst);
echo "</pre>";

?>