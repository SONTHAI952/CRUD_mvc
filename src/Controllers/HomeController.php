<?php
namespace MVC\Controllers;

use MVC\Models\User;

class HomeController 
{
    public function actionIndex()
    {
        return (new User)->list();
    }
}
?>