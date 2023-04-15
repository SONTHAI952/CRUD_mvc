<?php
namespace MVC\Core;
class Model{
    //Chuyển đổi object $model lấy được từ database ở ResourceModel thành mảng key-value
    public function getProperties($object){
        return get_object_vars($object);
    }
}
?>