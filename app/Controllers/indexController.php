<?php
namespace App\Controllers;

use Core\Controller;
use Core\Request;

class IndexController extends Controller {

    public function index() {
        $this->view('cabecalho');
        $this->view('index');
        $this->view('rodape');
    }
    public function user(Request $request) {
        //instanciar o usuario inserido metodo GET
        $user = $request->getParams();
        //converter o array em uma string para ser comparado no "IF"
        $user = $user['get'];
        $userGet = 'eduardo';

            if($user == $userGet){
                $this->view('eduardoPage');
            } else {
                return(
                    loadNotFound()
                ); 
            }
    }
}
