<?php

//عاوزين نعمل كذا نوع من الخصومات 
interface Discount{
    public function apply($amount);
} 


class fixedDisc implements Discount {
    public function apply($amount){
        return $amount - 10 ;
    }

}

class PerDisc implements Discount {
    public function apply($amount){
        return $amount * 0.9 ;

    }

}

class FifPerc implements Discount{
    public function apply($amount){
        return $amount * 0.5 ;

    }
}

// apply the Dependancy inversion (oc and D )are related 
class Cart{
    public function applyDisc($amount , Discount $discount){
        return $discount->apply($amount);
    }
}

$fixed = new fixedDisc;
$percent = new PerDisc;
$fifpercent = new FifPerc;

$cart = new Cart;
echo $cart->applyDisc(500 , $fixed);
echo "<br>";
echo $cart->applyDisc(500 , $percent);
echo "<br>";
echo $cart->applyDisc(500 , $fifpercent);



// $fixed = new fixedDisc();
// $percent = new PerDisc();
// echo $fixed->apply(500);
// echo "<br>";
// echo $percent->apply(100);