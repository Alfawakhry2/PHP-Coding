<?php 
namespace Alfaw\Mvc;

class Requests {
    //properties 



    //methods
    public function Get($key){
        return (isset($_GET[$key])) ? $_GET[$key] : null ;
    }
    public function Post($key){
        return (isset($_POST[$key])) ? $_POST[$key] : null ;
    }
    public function CheckPost($key){
        return isset($_POST[$key]);
    }
    public function CheckGet($key){
        return isset($_GET[$key]);
    }
    public function CheckMethod(){
        return $_SERVER['REQUEST_METHOD'];
    }
    public function Clean($key){
        return trim(htmlspecialchars($key));
    }
    public function queryString(){
        return $_SERVER['QUERY_STRING'];
    }
}





?>