<?php

abstract class MakeDevice{
    ## abstracted methods (RULES)
    abstract public function testPerformance();
    abstract public function verifyOwner();
    abstract public function sayWelcome($name);

}

class IPhone extends MakeDevice {

    public $name ; 

    ##methods
    public function testPerformance()
    {
        echo "Performance is good";
    }
    public function verifyOwner()
    {
        echo "Owner Verified";
    }
    public function sayWelcome($name)
    {
        $this->name = $name ; 
        echo "Welcome :".$this->name;
    }

}

class IPad extends MakeDevice {
    public $name ; 

    public function testPerformance()
    {
        echo "Performance is so good";
    }
    public function verifyOwner()
    {
        echo "Owner Verified";
    }
    public function sayWelcome($name)
    {
        $this->name = $name ; 
        echo "Welcome :".$this->name;
    }
}

$iphone = new IPhone ; 
$name = $iphone->name= 'Ahmed';
$iphone->sayWelcome($name);
echo "<pre>";
print_r($iphone);
echo "</pre>";

$ipad = new Ipad ; 
$name2 = $ipad->name = 'Mohammed';
$ipad->sayWelcome($name2);

echo "<pre>";
print_r($ipad);
echo "</pre>";



?>