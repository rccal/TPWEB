<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Inicio</title>
</head>

<body>
    <section class="navbarInicial">
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark">
            <div class="container-xl">
                <a class="navbar-brand hidden-lg-up " href="#"><img src="#" alt="">brand</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07XL" aria-controls="navbarsExample07XL" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarsExample07XL">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Inicio</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown07XL" data-toggle="dropdown" aria-expanded="false">Productos</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown07XL">
                                <a class="dropdown-item" href="#">Tortas</a>
                                <a class="dropdown-item" href="#">Panes</a>
                            </div>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Nosotros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contáctanos</a>
                        </li>
                        <!--ruta para entrar => public/usuarios/login   -->
                        <li class="nav-item ">
                            <a class="nav-link" href="#">Log-in</a>
                        </li>
                        <!--Crud Administrador -->
                    </ul>
                </div>
            </div>
        </nav>
    </section>
    <section class="carouselPrincipal">
        <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/inicio.jpg" alt="" />
                    <div class="container">
                        <div class="carousel-caption text-left">
                            <!-- <h1>!fiesta Dulce!</h1>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Pedir</a></p>-->
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/inicio.jpg" alt="" />
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>SMS</h1>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Pedir</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/inicio.jpg" alt="" />
                    <div class="container">
                        <div class="carousel-caption text-right">
                            <h1>SMS</h1>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Pedir</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- carousel de productos -->
    </section>
    <section class="descripcion">
        <div class="container-md">
            <div class="row">
                <div class="col-md-6 ml-auto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus perferendis molestiae vero, tempora error iure rerum illo fuga quidem veniam voluptates nostrum facere fugit exercitationem atque eum libero vel ipsum!</div>
                <div class="col-md-6 ml-auto">Hola2</div>
            </div>
        </div>
    </section>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
</body>

</html>