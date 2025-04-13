<?php 

class test{


    private $name , $email ;

    public function setName($name){
        $this->name = $name ;
    }
    public function getName(){
        return $this->name ;
    }

    public function greet(){
        echo "Hello ," . $this->getName();
    }

}

$a = new test; 
$a->setName("sead");
$a->greet();


?>