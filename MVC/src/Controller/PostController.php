<?php 
namespace Alfaw\Mvc\Controller ;

use Alfaw\Mvc\Model\Post;
use Alfaw\Mvc\View ; 

class PostController{
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
        //model  (deal with db)
        $user = new Post ;
        $data['users'] = $user->all();

        View::render("all.php" , $data);
    }
}