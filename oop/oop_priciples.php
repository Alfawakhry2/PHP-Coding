<?php 

// our target to implement the classes with four oop principles ; 
abstract class Anmimal {
    protected $name ; 
    public function __construct($name)
    {
        $this->name = $name ;
        $this->makeVoice();
    }

    abstract public function makeVoice();
}


class Dog extends Anmimal {
    public function makeVoice(){
        echo "Dog make sound haaaw haaaw ! ";
    }

}

class Cat extends Anmimal {
    public function makeVoice()
    {
        echo "cat make sound meow meow !" ;
    }
}

$cat1 = new Cat("Cat");
echo "<br>";
$dog1 = new Dog("Cat");