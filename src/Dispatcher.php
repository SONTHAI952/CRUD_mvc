<?php
namespace MVC;
class Dispatcher{
    private $request;
    //Xử lý điều hướng
    public function dispatch(){
        $this->request = new Request();
        Router::parse($this->request->url,$this->request);
        $controller = $this-> loadController();
        call_user_func_array([$controller, $this->request->action], $this->request->params); //Truyền tham số dưới dạng mảng vào hàm loadController
    }
    //Return về object controler theo controler vừa lấy được trên url
    public function loadController(){
        $name = $this->request->controller . "Controller";
        $file = ROOT . 'Controllers/' . $name . '.php';
        require($file);
        $controller = new $name();
        return $controller;
    }
}
?>