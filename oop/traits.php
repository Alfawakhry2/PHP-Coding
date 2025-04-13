<?php 

trait finger{
    public function fingerSensor() {
        echo "This Phone has The Finger Property ! <br>";
    }
    public function openLock(){
        echo "Now Your Phone is open with finger <br>";
    }
}

trait face{
    public function faceSensor(){
        echo "This Phone has The Front camera Property ! <br>";
    }
    public function openLock(){
        echo "Now Your Phone is open with face <br>";
    }
}

class Iphone{

    // this do when there are two traits have the same function name but there are an diff in body
    use finger , face {
        finger::openLock insteadof face ;
        face ::openLock as face;
    }
    
    public function sayhello(){
        echo "hello from Iphone ";
    }
}


$iphone = new Iphone;
$iphone->face() ;
$iphone->sayhello();
