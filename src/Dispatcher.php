<?php
namespace MVC;
class Dispatcher{
    private $request;
    //Xử lý điều hướng
    public function dispatch(){
        $this->request = new Request();
        Router::parse($this->request->url,$this->request);
        $controller = $this-> loadController();
        call_user_func_array([$controller, $this->request->action], $this->request->params); //Truyền tham số dưới dạng mảng params vào hàm loadController
    }
    //Return về object controler theo controler vừa lấy được trên url
    public function loadController(){
        $nameController = $this->request->controller . "Controller";
        $file = ROOT . 'Controllers/' . $nameController . '.php';
        require($file);
        $controller = new $nameController();
        return $controller;
    }
}
?>