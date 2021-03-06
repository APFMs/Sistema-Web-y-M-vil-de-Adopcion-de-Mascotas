<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.87.0">
    <title>ADMINISTRADOR</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href="<?php echo base_url(); ?>css/panel.css" rel="stylesheet">

    <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">
    <!---<link rel="canonical" href="css/sign-in/">--->

</head>

<body>
    <div class="text-center">
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
                                <a class="btn btn-header btn-outline-warning" id="paddingButtonNav" href="" tabindex="-1" aria-disabled="true">Mascotas</a>

                            </li>
                            <li class="nav-item">
                                <a class="btn btn-header btn-outline-warning" id="paddingButtonNav" href="" tabindex="-1" aria-disabled="true">Adopciones</a>

                            </li>
                            <li class="nav-item">
                                <a class="btn btn-header btn-outline-warning" id="paddingButtonNav" href="" tabindex="-1" aria-disabled="true">Seguimientos</a>

                            </li>
                            <li class="nav-item">
                                <a class="btn btn-header btn-outline-warning" id="paddingButtonNav" href="" tabindex="-1" aria-disabled="true">Adoptantes</a>

                            </li>
                            <li class="nav-item">
                                <a class="btn btn-header btn-outline-warning" id="paddingButtonNav" href="" tabindex="-1" aria-disabled="true">Usuarios</a>
                            </li>
                            <div class="position-absolute top-0 end-0" style="padding-top: 15px;">
                                <li class="nav-item">
                                    <a class="navbar-brand colorLetra" href="#"><?php echo $this->session->userdata('tipo') ?></a>
                                </li>
                            </div>

                            <li class="nav-item">
                                <a class="btn btn-header btn-outline-warning" id="paddingButtonNav" href="<?php echo base_url(); ?>index.php/usuarioController/logout" tabindex="-1" aria-disabled="true">Salir</a>
                            </li>
                    </div>
                </div>
            </nav>
        </header>
    </div>
    <br><br><br><br>
    <div class="container text-center">
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <h2>
                    <strong class="text-center">CREACION DE UNA NUEVA MASCOTA</strong>
                </h2>
                <br>
                <?php
                $atributos = array('class' => 'form-group', 'id' => 'crearNuevaMascota');
                echo form_open_multipart('mascotaController/crearMascotaBD', $atributos);
                ?>
                <input type="hidden" name="idMASCOTA" value="">

                <div class="form-floating">
                    <input id="nombre" class="form-control" type="text" name="nombre" value="" required><br>
                    <label for="nombre">NOMBRE DE LA MASCOTA</label>
                </div>
                <div class="form-floating">
                    <input id="edad" class="form-control" type="text" name="edad" value="" required><br>
                    <label for="edad">EDAD</label>
                </div>
                <div class="form-floating">
                    <select id="disabledSelect" class="form-select" name="sexo" required>
                        <option value="Macho">Macho</option>
                        <option value="hembra">Hembra</option>
                    </select>
                    <label for="disabledSelect">SEXO</label>
                </div>
                <br>
                <div class="form-floating">
                    <input id="color" class="form-control" type="text" name="color" value="" required><br>
                    <label for="color">COLOR</label>
                </div>
                <div class="form-floating">
                    <input id="caracteristicas" class="form-control" type="text" name="caracteristicas" value="" required><br>
                    <label for="caracteristicas">CARACTERISTICAS</label>
                </div>

                <div class="form-floating">
                    <input id="tamanio" class="form-control" type="text" name="tamanio" value="" required><br>
                    <label for="tamanio">TAMA??O</label>
                </div>

                <br>
                <button class="btn btn-success" type="submit"> GUARDAR </button>
                <?php
                echo form_close();
                ?>
                <hr>
                <div class="card text-white bg-dark mb-3">
                    <div class="card-header">ATENCION!</div>
                    <div class="card-body">
                        <h5 class="card-title">MASCOTA</h5>
                        <p class="card-text">...</p>

                    </div>
                </div>
            </div>
            <div class="col-sm-4">

            </div>
        </div>

    </div>


    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!--IMPORTANTE...!!!!!!!!!!!! A??ADIR LINK CDN EN CASO DE UTILIZAR JAVASCRIPT-->

</body>

</html>