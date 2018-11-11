<?php

$controller = 'pagina';

// c de controlador
// a de accion


//si no hay ninguna peticion de controlador se cargará el index de la pagina
if(!isset($_REQUEST['c'])){
    require_once "controller/$controller.controller.php";
    $controller = ucwords($controller) . 'Controller';
    $controller = new $controller;
    $controller->index();

}else{
    // obtenemos el controlador que queremos cargar
    $controller = strtolower($_REQUEST['c']);
    $accion = isset($_REQUEST['a']) ? $_REQUEST['a'] : 'Index';

    // instanciamos el controlador
    require_once "controller/$controller.controller.php";
    $controller = ucwords($controller) . 'Controller';
    $controller = new $controller;

    // llama a la funcion
    call_user_func(array($controller, $accion));

}