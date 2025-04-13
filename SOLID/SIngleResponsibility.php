<?php
// المثال هيكون على مطعم 

// not clean code (not apply the Single Responsibility) شغال عاادي جدا ولكن مش بيحقق المبدء

// class Order{
//     //properties 
//     private $items ;

//     //methods
//     public function addItem($items){
//         $this->items []= $items ;
//     }

//     public function getItem() {
//         return $this->items;
//     }

//     public function calcTotal(){
//         $total = 0 ;
//         foreach($this->items as $item){
//             $total += $item['price'];
//         }
//         return $total;
//     }

//     public function printInvoice(){
//         echo "The Invoice :- <br>";
//         foreach($this->items as $item){
//             echo $item['name'] . " - " . $item['price'] . "<br>";
//         }
//         echo "Total: " . $this->calcTotal() . "<br>";
//     }
// }


// $cust1 = new Order();
// $cust1->addItem(['name'=>'Pizza' , 'price'=>500]);
// $cust1->addItem(['name'=>'Burger' , 'price'=>200]);
// $cust1->addItem(['name'=>'water' , 'price'=>10]);

// $cust1->calcTotal();
// $cust1->printInvoice();


### عشان نطبق المبدء(SIngle Responsibility)

class Order
{
    //properties 
    private $items;

    //methods
    public function addItem($items)
    {
        $this->items[] = $items;
    }

    public function getItem()
    {
        return $this->items;
    }
}

class Invoice
{

    public function calcTotal(Order $order)
    {
        $total = 0;
        foreach ($order->getItem() as $item) {
            $total += $item['price'];
        }
        return $total;
    }
}

class Printer
{

    public function printInvoice(Order $order , Invoice $invoice)
    {
        echo "The Invoice :- <br>";
        foreach ($order->getItem() as $item) {
            echo $item['name'] . " - " . $item['price'] . "<br>";
        }
        echo "Total: " . $invoice->calcTotal($order) . "<br>";
    }
}


$order = new Order();
$order->addItem(['name'=>'Pizza' , 'price'=>500]);
$order->addItem(['name'=>'Burger' , 'price'=>200]);
$order->addItem(['name'=>'water' , 'price'=>10]);
$order->addItem(['name'=>'choco' , 'price'=>50]);


$invoice = new Invoice();
$print = new Printer();

$print->printInvoice($order , $invoice);