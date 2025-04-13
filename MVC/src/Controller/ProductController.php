<?php 
namespace Alfaw\Mvc\Controller ;

use Alfaw\Mvc\Model\Product;
use Alfaw\Mvc\View ; 

class ProductController{
    public function all(){
        
        // //consider that controller deal with model and get this data 
        // $data['posts'] = [
        //     ['title'=>'title one' , 'body'=>'body one'] , 
        //     ['title'=>'title two' , 'body'=>'body two'] , 
        // ];
        // $data['users'] = [
        //     ['name'=>'taha' , 'email'=>'t@t.com'] , 
        //     ['name'=>'ahmed' , 'email'=>'a@a.com'] , 
        // ];
        $product = new Product ;
        $data['products'] = $product->all();

        View::render("allproduct.php" , $data);
    }
}