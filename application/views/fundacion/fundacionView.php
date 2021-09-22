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
    <br><br><br><br><br>
    <div class="container">
        <h1>
            <strong>LISTADO DE FUNDACIONES</strong>
        </h1>
        <BR>
        <table class="table table-bordered table-responsive-md table-striped">
            <thead>
                <tr>
                    <th class="th-sm">
                        NOMBRE DE LA FUNDACION
                    </th>
                    <th class="th-sm">
                        DIRECCION
                    </th>
                    <th class="th-sm">
                        TELEFONO
                    </th>
                    <th class="th-sm">
                        FECHA DE CREACION
                    </th>
                    <th class="th-sm">
                        FECHA DE ACTUALIZACION
                    </th>
                    <th class="th-sm">
                        EDITAR
                    </th>
                    <th class="th-sm">
                        ELIMINAR
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($fundaciones->result() as $row) {
                ?>
                    <tr>
                        <td class="p-2 m-0"><?php echo $row->nombre ?></td>
                        <td class="p-2 m-0"><?php echo $row->direccion ?></td>
                        <td class="p-2 m-0"><?php echo $row->telefonos ?></td>
                        <td class="p-2 m-0"><?php echo $row->fechaCreacion ?></td>
                        <td class="p-2 m-0"><?php echo $row->fechaActualizacion ?></td>

                        <td class="p-2 m-0">
                            <?php
                            $atributos = array('class' => 'form-group', 'id' => 'editarFundacion');
                            echo form_open_multipart('fundacionController/modificarFundacionView', $atributos);
                            ?>
                            <input type="hidden" name="idFUNDACION" value="<?php echo $row->idFUNDACION ?>">
                            <button type="sudmit" class="btn btn-warning ">EDITAR</button>
                            <?php
                            echo form_close();
                            ?>
                        </td>
                        <td class="p-2 m-0">
                            <?php
                            $atributos = array('class' => 'form-group', 'id' => 'editarUsario');
                            echo form_open_multipart('fundacionController/eliminarFundacion', $atributos);
                            ?>
                            <input type="hidden" name="idFUNDACION" value="<?php echo $row->idFUNDACION ?>">
                            <span class="table-remove" style="padding-top: 1.4rem;">
                                <button type="sudmit" class="btn btn-danger">ELIMINAR</button>
                            </span>
                            <?php
                            echo form_close();
                            ?>
                        </td>
                    </tr>
                <?php
                }
                ?>

            </tbody>
            <tfoot>
                <tr>
                    <th class="th-sm">
                        NOMBRE DE LA FUNDACION
                    </th>
                    <th class="th-sm">
                        DIRECCION
                    </th>
                    <th class="th-sm">
                        TELEFONO
                    </th>
                    <th class="th-sm">
                        FECHA DE CREACION
                    </th>
                    <th class="th-sm">
                        FECHA DE ACTUALIZACION
                    </th>
                    <th class="th-sm">
                        EDITAR
                    </th>
                    <th class="th-sm">
                        ELIMINAR
                    </th>
                </tr>
            </tfoot>
        </table>
        <div>
            <?php
            $atributos = array('class' => 'from-group', 'id' => 'crearFundacionView');
            echo form_open_multipart('fundacionController/crearFundacionView', $atributos);
            ?>
            <button type="submit" class="btn btn-success"><i class="fas fa-plus fa-lg"></i>
                CREAR NUEVA FUNDACION
            </button>
            <?php
            echo form_close();
            ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!--IMPORTANTE...!!!!!!!!!!!! AÑADIR LINK CDN EN CASO DE UTILIZAR JAVASCRIPT-->

</body>

</html>