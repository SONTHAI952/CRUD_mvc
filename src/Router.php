<?php
namespace MVC;
use MVC\Request;

class Router{
    //băm nhỏ địa chỉ URL đc request
    static public function parse($url, $request)
    {
        $url =trim($url);
        if($url == "/crud_mvc/"){
            $request->controller ="notes";
            $request->action ="index";
            $request->params =[];
        }
        else{
            $explode_url = explode('/',$url);
            $explode_url = array_slice($explode_url,2);
            $request->controller = $explode_url[0];
            $request->action = $explode_url[0];
            $request->params = array_slice($explode_url,2);
        }
    }
}
?>