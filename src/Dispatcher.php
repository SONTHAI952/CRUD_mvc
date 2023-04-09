<?php
namespace MVC;
class Dispatcher{
    private $request;

    public function dispatch(){
        $this->request = new Request();
        Router::parse($this->request->url,$this->request);
        $controller = $this-> loadController();
        call_user_func_array([$controller, $this->request->action], $this->request->params); //Truyền tham số dưới dạng mảng vào hàm loadController
    }
    public function loadController(){
        $name = $this->request->controller . "Controller";
        $file = ROOT . 'Controllers/' . $name . '.php';
        require($file);
        $controller = new $name();
        return $controller;
    }
}
?>