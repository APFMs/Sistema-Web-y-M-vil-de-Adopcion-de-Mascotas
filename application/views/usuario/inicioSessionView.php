<?php

switch ($msg) {

    case '1':
?>
        <!----<div class="alert alert-danger alertas">
            <strong>Alerta!</strong> Acceso no valido
        </div>---->

    <?php
        break;

    case '2':
    ?>
        <!----<div class="alert alert-danger">
            <strong>Error!</strong>
        </div>----->
    <?php
        break;

    case '3':
    ?>
        <!----<div class="alert alert-success">
            <strong>Gracias por usar el sistema</strong>
        </div>---->
    <?php
        break;

    case '4':
    ?>
        <!----<div class="alert alert-success">
            <strong>Usuario Creado Correctamente!</strong>
        </div>---->
<?php
        break;

    default:
        echo "";
        break;
}
?>



<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.87.0">
    <title>INICIO DE SESION</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="<?php echo base_url(); ?>css/inicioSession.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">
    <!---<link rel="canonical" href="css/sign-in/">--->

</head>

<body class="text-center">

    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">SISTEMA DE ADOPCION</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="btn btn-header btn-outline-warning" id="paddingButtonNav" href="" tabindex="-1" aria-disabled="true">Inicio</a>

                        </li>
                        <li class="nav-item">
                            <a class="btn btn-header btn-outline-warning" id="paddingButtonNav" href="" tabindex="-1" aria-disabled="true">Mascotas</a>

                        </li>
                        <li class="nav-item">
                            <a class="btn btn-header btn-outline-warning" id="paddingButtonNav" href="" tabindex="-1" aria-disabled="true">Ingresar</a>
                            </form>
                </div>
            </div>
        </nav>
    </header>


    <main class="form-signin">

        <img class="rounded-circle" src="<?php echo base_url(); ?>img/logo2.png" alt="" width="150" height="150">
        <h1 class="h3 mb-3 fw-normal">Ingresar</h1>

        <div id="valores"></div>
        <?php
        echo form_open_multipart('usuarioController/validarUsuario');
        ?>
        <div>
            <div class="form-floating">
                <input type="" class="form-control" id="paddingButton" name='usuario' placeholder="name@example.com">
                <label for="floatingInput">Correo Electronico </label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="paddingButton" name='password' placeholder="Password">
                <label for="floatingPassword">Contraseña</label>
            </div>

            <button type="submit" class="w-100 btn btn-lg btn-outline-dark" id="paddingButton" onclick="">Ingresar</button>
        </div>
        <?php
        echo form_close();
        ?>
        <p class="mt-5 mb-3 text-muted">&copy; Soy Tu Voz CBBA-2021</p>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!--IMPORTANTE...!!!!!!!!!!!! AÑADIR LINK CDN EN CASO DE UTILIZAR JAVASCRIPT-->

</body>

</html>