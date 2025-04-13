<?php

namespace Alfaw\Mvc;


//this class means the routing 
class App
{
    //properties 
    private $url, $controller, $method;

    //construct 
    public function __construct($request)
    {
        $this->url = $request->queryString();
        $this->separateUrl();
        $this->callMethod();
    }
    //methods
    public function separateUrl()
    {
        $url_arr = explode('/', $this->url);
        //need controller name , due to go to controller page name (PostController) 
        @$this->controller = ucfirst($url_arr[0]) . "Controller";
        @$this->method = $url_arr[1];
    }

    public function callMethod()
    {
        $this->controller = "Alfaw\Mvc\Controller\\" . $this->controller;
        if (class_exists($this->controller)) {
            $objectController = new $this->controller;
            if (method_exists($objectController, $this->method)) {

                call_user_func([$objectController, $this->method]);
            } else {
                die("Method Not Found");
            }
        } else {
            // this for only test but this not appear to user 
            die("Class Not Found");
        }
    }
}
