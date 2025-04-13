<?php

namespace Alfaw\Mvc;

class View
{
    static  public function render($file , $data)
    {
 
        $path = "C:/xampp/htdocs/php/MVC/src/View/" . $file;
        if(file_exists($path)){
            //will extract data into variable name posts 
            extract($data);
            require_once($path);
        }else{
            die("file not exist");
        }
    }
}
