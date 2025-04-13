<?php
// interface worker {
//     public function work();
//     public function eat();
// }


// class human{
//     //can work and eat 
//     public function work(){

//     }
//     public function eat(){

//     }
// }

// //robot shouldnot implement eat 
// class robot{
//     //can work only 
//     public function work(){

//     }
//     // 
//     public function eat(){
//         throw new Exception("not eat");
//     }
// }

interface workeable{
    public function work();
}

interface eatable{
    public function eat();
}


class human implements workeable , eatable{
    //can work and eat 
    public function work(){

    }
    public function eat(){

    }
}

//robot shouldnot implement eat 
class robot implements workeable{
    //can work only 
    public function work(){

    }

}

?>