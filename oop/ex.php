<?php
abstract class Product
{
    protected $name, $price, $discount, $newprice;
    public function __construct($name, $price, $discount)
    {
        $this->name = $name;
        $this->price = $price;
        $this->discount = $discount;

        $this->setdiscount();
    }

    abstract public function setdiscount();
    abstract public function getdiscount();
}

class mobile extends Product
{


    public function setdiscount()
    {
        $this->newprice = $this->price * (1  - $this->discount);
    }
    public function getdiscount()
    {
        echo "Devive Type : Mobile <br>";
        echo "Device name : $this->name <br>";
        echo "Old Price : $this->price <br>";
        echo "New Price after Discount : $this->newprice <br>";
    }
}

class Labtop extends Product
{


    public function setdiscount()
    {
        $this->newprice = $this->price * (1  - $this->discount);
    }
    public function getdiscount()
    {
        echo "Devive Type : Labtop <br>";
        echo "Device name : $this->name <br>";
        echo "Old Price : $this->price <br>";
        echo "New Price after Discount : $this->newprice <br>";
    }
}

//mobiles 
$iphone = new Mobile("Iphone 6", 1000, 0.15);
echo $iphone->getdiscount();
echo "<hr>";
//labtop
$labtop = new Labtop("Dell Inspiron" , 10000 , 0.25);
$labtop->getdiscount();