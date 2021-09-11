<?php
namespace App\Controllers;

use Core\Controller;

class cadController extends Controller {
    
    public function cadastro() {
        $this->view('cadastro');
    }
    public function home() {
        $this->view('home');
    }
}
