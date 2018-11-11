<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bienvenido</title>
    <link rel="stylesheet" href="recursos/css/all.css">
    <link rel="stylesheet" href="recursos/css/materialize.css">
    <link rel="stylesheet" href="recursos/css/estilo.css">
    <link rel="stylesheet" href="recursos/css/contacto.css">
    
</head>
<body>

    <ul id="slide-out" class="sidenav">
    <li><div class="user-view">
      <div class="background">
        <img src="recursos/img/bck_admin.jpg">
      </div>
      <a href="#user"><img class="circle" src="<?php echo $usr->foto_usuario;?>"></a>
      <a href="#name"><span class="white-text name"><?php echo $usr->nombre_usuario;?></span></a>
      <a href="#email"><span class="white-text email"><?php echo $usr->correo_usuario;?></span></a>
    </div></li>
    <li><a class="subheader">Pagina</a></li>
    <li ><a href="#!" class="waves-effect "><i class="material-icons"><i class="fab fa-2x fa-html5 deep-orange-text lighten-2 "></i></i>Index</a></li>
    <li><a href="#!" class="waves-effect"><i class="material-icons"><i class="fas fa-2x fa-sitemap cyan-text lighten-2 "></i></i>Rubros</a></li>

    <li><div class="divider"></div></li>
    <li><a class="subheader">Sub Funciones</a></li>
    <li><a class="waves-effect" href="#!"><i class="material-icons"><i class="fas fa-2x fa-users-cog black-text"></i></i>Administrar Usuarios</a></li>
    <li><div class="divider"></div></li>
    <li><a class="subheader">Acciones</a></li>
    <li><a class="waves-effect" href="#!"><i class="material-icons"><i class="fas fa-2x fa-sign-out-alt red-text darken-3 fa-flip-horizontal"></i></i>Salir</a></li>
  </ul>
  
  <div class="col s12 right">
    <a href="#" style="margin:0.5em;" data-target="slide-out" class="sidenav-trigger black-text">
        <i class="material-icons"><i class="fas fa-2x fa-bars"></i></i>
    </a>
  </div>
  
  
  


