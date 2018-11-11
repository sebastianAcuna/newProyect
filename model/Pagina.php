<?php
require_once 'Database.php';
class Pagina {

    public $pdo;
    public $titulo;
    public $img;
    public $descripcionTitulo;
    public $descripcionImagen;

    public function __CONSTRUCT(){
        try{
            $this->pdo = Database::StartUp();
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

}