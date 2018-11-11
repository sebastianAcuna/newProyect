<?php
require_once 'model/Usuario.model.php';
require_once 'model/Usuario.entidad.php';
class UsuarioController{
    private $model;

    public function __CONSTRUCT(){
        $this->model = new UsuarioModel();
    }

    public function validarDatos(){

        error_reporting( E_ALL );
        if(isset($_REQUEST['usuario']) && isset($_REQUEST['password'])){
            $usr = new Usuario();
            
            $usuario = $_REQUEST['usuario'];
            $password = $_REQUEST['password'];
            
            $user =  filter_var ( $usuario, FILTER_SANITIZE_STRING); 
            $pass =  filter_var ( $password, FILTER_SANITIZE_STRING); 

            $usr = $this->model->loguearse($user, $pass);

            if($usr != null){
                require_once 'view/header_admin.php';
                
                require_once 'view/welcome_admin.php';
                require_once 'view/footer.php';
                
            }else{
                echo "nada un";
            }

        }else{
            return "<span> Debe ingresar usuario y contraseña</span>";
        }
        
    }
}