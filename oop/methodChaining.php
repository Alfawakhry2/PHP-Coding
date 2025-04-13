<?php 

class calc {
    public $num1 , $num2 ; 
    public $op ;
    // public $sum , $sub , $mul ;
    public function __construct($num1 , $num2)
    {
        $this->num1 = $num1 ;
        $this->num2 = $num2 ;
    }

    public function sum(){
        $this->num1 += $this->num2 ; 
        return $this ; 
    }
    public function sub(){
        $this->num1 -= $this->num2 ; 
        return $this ; 
    }
    public function mul(){
        $this->num1 *= $this->num2 ; 
        return $this ; 
    }
    public function output(){
        echo $this->num1 ;
    }
    
}


$op = new calc(2 , 2);
$op->sum()->mul()->sub()->output();
?>