<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--Import Google Icon Font-->
    <!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->
    <link rel="stylesheet" href="recursos/css/all.css">
    <link rel="stylesheet" href="recursos/css/materialize.css">
    <link rel="stylesheet" href="recursos/css/estilo.css">
    <link rel="stylesheet" href="recursos/css/contacto.css">
    <title>PROYECTO WEB</title>
</head>
<body>
<header>
<div id="logo" style="display:flex;justify-content:center;margin-bottom:0.2em;">
    <img  width="100px" height="100px" src="recursos/img/logo_default.png" alt="">
</div>
<nav id="nav" class="container white" >
        <a href="#" data-target="mobile-demo" class="sidenav-trigger black-text valign-wrapper">
            <i class="fas fa-2x fa-bars"></i>
        </a> 
        <ul class="hide-on-med-and-down " style="display:flex;justify-content:space-between;">
            <div style="width:30%"></div>
            <div style="width:40%display-flex;justify-content:center;">
                <li><a class="black-text" href="#nosotros">Nosotros</a></li>
                <li><a class="black-text" href="#">Servicios</a></li>
                <li><a class="black-text" href="#contacto">Contacto</a></li>
            </div>
            <div style="width:30%">
            <div class="nav-wrapper">
                <form>
                    <div class="input-field">
                        <input id="search" type="search" required>
                        <label class="label-icon " for="search">
                            <i class="fas fa-search"></i>
                        </label>
                        <i class="material-icons"><i class="fas fa-times"></i></i>
                    
                    </div>
                </form>
            </div>
            </div>
        </ul>
    
</nav>
<ul class="sidenav" id="mobile-demo">
    <li><a class="black-text" href="sass.html">Nosotros</a></li>
    <li><a class="black-text" href="badges.html">Servicios</a></li>
    <li><a class="black-text" href="collapsible.html">Contacto</a></li>
  </ul>

</header>