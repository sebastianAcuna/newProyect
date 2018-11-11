<?php
require_once 'Database.php';
require_once 'Usuario.entidad.php';

class UsuarioModel
{
    public $pdo;

    public function __CONSTRUCT(){
        try{
            $this->pdo = Database::StartUp();
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function loguearse($user, $pass){
        try{
            $usr = new Usuario();
            // $result = array();
            $stm = $this->pdo->prepare("SELECT * FROM usuario WHERE rut_usuario = ? AND pass_usuario = ? ");
            $stm->execute(array($user, $pass));
            $usr = $stm->fetchObject();

            if($stm->rowCount() > 0)
                return $usr;
            else 
                return null;
            

        }catch(Exception $e){
            die($e->getMessage());
        }
    }
}


