<?php
namespace App\Controllers;

use Core\Controller;
use App\Models\user;
use PDO;
use Core\Request;


class userController extends Controller {
    
    public function busc() 
    {
        $userCad = new user();
        $this->view('consulta');
    }

    public function logar()
    {
        $x = ['password_User'=> $Y];
        //$this->view('cadastro');
        $userCad = new user();
        $users = $userCad->selUser();
        var_dump($users);
        echo "</br>";
        $pass = $_POST['password_User'];
        echo $pass;
        echo "</br>";
        var_dump($_POST);
    }

    public function consultar()
    {
        $userConsulta = new user();
        $users = $userConsulta->selUser();
        var_dump($users);
        echo "</br>";
        var_dump($_POST);
        //$condition = $_POST['condition'];
        $condition = ['password_User'.'='.'KKT44SSW2NL'];
        $column = 'password_User';
        //$conditions = substr($conditions, 4);
        //echo $conditions;
    }


}