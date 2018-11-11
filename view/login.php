<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="./recursos/css/estilo.css">
    <link rel="stylesheet" href="recursos/css/all.css">
    <link rel="stylesheet" href="recursos/css/materialize.css">
</head>
<body class="">
    <form role="form" name="form1" action="?c=Usuario&a=validarDatos" method="POST">
        <div class="valign-wrapper sectionPrincipal">
            <section style="width:30%;margin:0 auto;">
                <div class="col m6 white z-depth-5 center">
                    <div class="row">
                        <h5>Administrativos</h5>
                    </div>
                    <div class="row">
                    <div class="input-field col s11 " style="padding:1em;">
                                <i class="material-icons prefix"><i class="fas fa-user-circle"></i></i>
                                <input type="text" name="usuario" id="nombre" class="validate">
                                <label for="nombre">Usuario</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s11 " style="padding:1em;">
                                <i class="material-icons prefix"><i class="fas fa-key fa-flip-horizontal"></i></i>
                                <input type="password" name="password" id="correo" class="validate">
                                <label for="correo">Contraseña</label>
                        </div>
                    </div>
                    <div class="row">
                        <button 
                        type="submit"
                        class=" btn-large waves-effect waves-light red darken-1" 
                        style="margin-bottom:0.5em;"
                        > Ingresar </button>
                    </div>
                </div>
            </section>
        </div>
    </form>
<script src="recursos/js/materialize.js"></script>
<script src="recursos/js/all.js"></script>
</body>
</html>