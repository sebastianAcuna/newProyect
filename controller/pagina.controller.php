<?php
require_once 'model/Pagina.php';

class PaginaController{
    private $model;

    public function __CONSTRUCT(){
        $this->model = new Pagina();
    }

    public function index(){
        require_once 'view/header.php';
        require_once 'view/index.php';
        require_once 'view/footer.php';
    }

    public function login(){
        require_once 'view/login.php';
    }


}