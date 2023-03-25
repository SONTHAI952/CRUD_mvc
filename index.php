<?php
class Student{
    private $__noStudent ='1';
    private $__nameStudent = 'Thai Son';
    function setName($nameStudent){
        $this -> __nameStudent = $nameStudent;
    }
    function getName(){
        return $this ->__nameStudent;
    }
}

    $hocsinh = new Student();
    $hocsinh->setName("Messi");
    echo $hocsinh->getName();

?>