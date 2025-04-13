<?php 

// class Bird{
//     public function eat(){
//         echo "This Bird Eat";
//     }
//     public function fly(){
//         echo "This Bird fly";
//     }

// }

// class Eagle extends Bird{
//     //cab eat and fly

// }
// class Duck extends Bird{
//     // can eat but not flying
// }


//
class Bird{
    public function eat(){
        echo "This Bird Eat";
    }

}
class FlyBird extends Bird{
    public function fly(){
        echo "This Bird fly";
    }

}

class Eagle extends FlyBird{
    //cab eat and fly
    //can extend eat and fly

}
class Duck extends Bird{
    // can eat but not flying
    //can extend eat only 
}
