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
                        <a class="btn btn-header btn-outline-warning" id="paddingButton" href="" tabindex="-1" aria-disabled="true">Inicio</a>

                    </li>
                    <li class="nav-item">
                        <a class="btn btn-header btn-outline-warning" id="paddingButton" href="" tabindex="-1" aria-disabled="true">Mascotas</a>

                    </li>
                    <li class="nav-item">
                        <a class="btn btn-header btn-outline-warning" id="paddingButton" href="<?php echo site_url('usuarioController/index'); ?>" tabindex="-1" aria-disabled="true">Ingresar</a>

                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                    <button type="button" class="btn btn-outline-warning">Buscar</button>
                </form>
            </div>
        </div>
    </nav>
</header>

<main>

    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <svg class="bd-placeholder-img" width="100%" height="10%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <rect width="100%" height="100%" fill="#777" />
                </svg>
                <img src="img/mascota3.jpg" alt="">
                <div class="container">
                    <div class="carousel-caption text-start">
                        <h1>Adopta, que esperan por tí.</h1>
                        <p>No vamos a cambiar el mundo ayudando a un animal, pero al menos el mundo habrá cambiado para él.</p>
                        <button type="button" class="btn btn-lg btn-outline-dark">Encuentralos aquí</button>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <rect width="100%" height="100%" fill="#777" />
                </svg>
                <img src="img/mascota02.jpg" alt="">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Requisitos para adoptar.</h1>
                        <p>Al cumplir estas condiciones, llevaras al mejor ser querido.</p>
                        <button type="button" class="btn btn-lg btn-outline-warning">Más Información</button>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <rect width="100%" height="100%" fill="#777" />
                </svg>
                <img src="img/mascota4.jpg" alt="">

                <div class="container">
                    <div class="carousel-caption text-end">
                        <h1>Realizamos un seguimiento.</h1>
                        <p>Como cada mascota encontro a su familia. que esperas para seguir el ejemplo.</p>
                        <button type="button" class="btn btn-lg btn-outline-secondary">Vealos Aquí</button>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">55555</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">66666</span>
        </button>
    </div>


    <div class="container marketing">
        <div class="row">
            <div class="col-lg-4">
                <img src="img/mascota05.jpg" class="img-thumbnail" alt="...">
                <h2>Presume a tú mascota</h2>
                <p>A muchos nos gustaria presumir a nuestra mascota adoptada, pero ahora puedes hacerlo.</p>
                <p><a class="btn btn-secondary" href="#">Más detalles &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img src="img/mascota6.jpg" class="img-thumbnail" alt="...">

                <h2>Requisitos para adoptar</h2>
                <p>Para adoptar a una mascota se debe cumplir los requisitos que se te pide.</p>
                <p><a class="btn btn-secondary" href="#">Ver más detalles &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img src="img/mascota03.jpg" class="img-thumbnail" alt="...">

                <h2>Busca a tu mascota</h2>
                <p>Ellos esperan que les des una oprtunidad.</p>
                <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->


        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">Salva una vida. <span class="text-muted">Y mejora tu vida, de una forma mucho mas sencilla.</span></h2>
                <p class="lead">Ellos esperan por ti! Adopta a tu mascota, nos especializamos en ayudarte a conseguirlo.</p>
            </div>
            <div class="col-md-5">
                <img src="img/mascota8.jpg" class="img-thumbnail" alt="...">

            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading">¿Que tan importante es Adoptar?. <span class="text-muted">¿Por que deberia adoptar a una mascota?.</span></h2>
                <p class="lead">Las mascotas te brindan amor incondicional.Que pase lo que pase ellos jamas te abandonarian.</p>
            </div>
            <div class="col-md-5 order-md-1">
                <img src="img/mascota7.jpg" class="img-thumbnail" alt="...">

            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">Hasta que no hayas amado a un animal, <span class="text-muted">una parte de tu alma permanecera dormida.</span></h2>
                <p class="lead">Ya que pasar una vida con una mascota, hace que tu vida sea más increíble.</p>
            </div>
            <div class="col-md-5">

                <img src="img/mascota5.jpg" class="img-thumbnail" alt="...">
            </div>
        </div>

        <hr class="featurette-divider">

        <!-- /END THE FEATURETTES -->

    </div><!-- /.container -->


    <!-- FOOTER -->
    <footer class="container">
        <p class="float-end"><a href="#">Back to top</a></p>
        <p>&copy; 2021 CBBA. &middot; <a href="#">PAGINA PRIVADA</a> &middot; <a href="#">Terms</a></p>
    </footer>
</main>


<script src="js/bootstrap.bundle.min.js"></script>