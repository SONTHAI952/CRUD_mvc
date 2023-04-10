<?php
namespace MVC;
class Request{
    public $url;
    //Gán URL của trang hiện tại cho biến $url
    public function __construct()
    {
        $this->url = $_SERVER["REQUEST_URI"];
    }
}
?>