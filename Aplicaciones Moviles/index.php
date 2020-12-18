<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="img/inicio.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Aplicaciones móviles:</title>
</head>

<body>
    <section class="navbarInicial">
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark">
            <div class="container-xl">
                <a class="navbar-brand hidden-lg-up " href="#"><img src="#" alt="">Aplicaciones móviles:</a>
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
    <section class="carouselPrincipal" >
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
                        <h1>AUN FALTA APLICAR CSS</h1>
                            <!-- <h1>!fiesta Dulce!</h1>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Pedir</a></p>-->
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/nativaVShibrida.jpg" alt="" />
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>App Nativas</h1>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/inicio.jpg" alt="" />
                    <div class="container">
                        <div class="carousel-caption text-right">
                            <h1>Apps Hibridas</h1>
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
                <div class="col-md-12 ml-auto" style="text-align: center;">
                    <h2>Aplicaciones Mobiles: Tipos y Diferencias </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 ml-auto">
                    <div class="cardCuadros">
                        <h4>¿Qué es una aplicación móvil?</h4>
                        <div class="cardCuadros-body">
                            <p>Se tratan de un software que es instalado ya sea en
                                dispositivos móviles o tablets, que cumple una o varias
                                funciones determinadas para lo que fue creada.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 ml-auto">
                    <div class="cardCuadros">
                        <img src="img/appmob.jpg" class="card-img-top" alt="Que es una aplicacion movil">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 ml-auto">
                    <div class="cardCuadros">
                        <img src="img/appmob2.jpg" class="card-img-top" alt="Que es una aplicacion movil">
                    </div>
                </div>
                <div class="col-md-6 ml-auto">
                    <div class="cardCuadros">
                        <h4>¿Para qué sirven las aplicaciones móviles?</h4>
                        <div class="cardCuadros-body">
                            <p>Las aplicaciones móviles, entre sus categorías,
                                tienen diversas funciones. La principal es lograr
                                que las personas puedan facilitar las tareas diarias,
                                la mayoría tiene funciones específicas que puede ser entretener,
                                informar, educar, entre otras. Por eso debemos conocer que ofrece
                                la aplicación antes de ser instalada.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 ml-auto" style="text-align: center;">
                    <h4>Tipos de aplicaciones móviles</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 ml-auto">
                    <div class="cardCuadros">
                        <h4>Aplicaciones móviles Hibridas</h4>
                        <p>Las aplicaciones móviles híbridas, por su parte, son aplicaciones
                            desarrolladas utilizando lenguajes de programación que se manejan
                            para aplicaciones web y framework específicos para desarrollo de
                            Apps híbridas. Estas se adaptan a cualquier sistema operativo tales
                            como, iOS, Android. Por lo tanto en las aplicaciones híbridas, los
                            componentes son variables y no identifican el estilo de un determinado
                            sistema operativo.</p>
                        <img src="img/appmobHibrida.png" class="card-img-top" alt="Que es una aplicacion movil">
                    </div>
                </div>
                <div class="col-md-6 ml-auto">
                    <div class="cardCuadros">
                        <h4>Aplicaciones móviles Nativas</h4>
                        <p>Las aplicaciones nativas se denominan así porque se desarrollan en el
                            lenguaje nativo del propio terminal. Dependiendo de la plataforma para
                            la que queramos nuestra aplicación, desarrollaremos en un lenguaje específico
                            para la misma. Por ejemplo, para desarrollar en Android se utiliza Java,
                            en iOS Objective C, y ahora también el nuevo Swift, y en Windows Phone se
                            usa C# y Visual Basic. NET.</p>
                        <img src="img/appmobNativ.png" class="card-img-top" alt="Que es una aplicacion movil">
                    </div>
                </div>
            </div>
            <div class="row" id="tituloDiferencia">
                <div class="col-md-12 ml-auto" style="text-align: center;">
                    <h4>¿En qué se diferencian?</h4>
                    <div class="conceptoDiferencia">
                        <p>Principalmente, una app nativa es como un traje hecho a medida por un sastre,
                            mientras que una híbrida se podría considerar un traje estándar de nuestra talla,
                            que cumple su función correctamente, no tiene un costes excesivo ni la comodidad
                            del traje del sastre pero es funcional.</p>
                        <img src="img/nativaVShibrida.jpg" class="card-img-top" alt="Que es una aplicacion movil">
                    </div>
                </div>
            </div>
            <div class="row" id="concepDiferencia">
                <div class="col-md-12 ml-auto">
                    <div class="cardCuadros">
                        <h5>Rendimiento</h5>
                        <p>Obviamente, una aplicación nativa creada exclusivamente para una plataforma
                            especifica tendrá un rendimiento más óptimo, será más fluida, rápida y
                            aprovechará mejor los recursos del terminal. Mientras que la híbrida necesita
                            el navegador nativo para funcionar, utiliza una capa más de recursos lo que se
                            traduce en un rendimiento menor, puesto que no está optimizada igual que la nativa.</p>
                        <img src="img/difRendimiento.jpg" class="card-img-top" alt="Que es una aplicacion movil">
                    </div>
                </div>
                <div class="col-md-12 ml-auto">
                    <div class="cardCuadros">
                        <h5>Interfaz gráfico</h5>
                        <p>Evidentemente, resulta más sencillo realizar un interfaz nativo para un único sistema
                            operativo, siempre y cuando dispongas del SDK (Software Developer Toolkit) adecuado,
                            que realizar un diseño adaptable todas las plataformas que se requieran.</p>
                    </div>
                </div>
                <div class="col-md-12 ml-auto">
                    <div class="cardCuadros">
                        <h5>Coste del producto</h5>
                        <p>Como todo buen traje a medida, los costes se disparan en las apps nativas debido a todas
                            las personalizaciones que requiere el sistema operativo. Además, como casi todas las aplicaciones
                            deben estar disponibles para las principales plataformas (Android, IOS o Windows Phone). Si mencionar
                            el tiempo empleado, que se puede multiplicar por dos o por tres, en fnción de la disponibilidad que
                            queramos darle, así como los conocimientos y costes de la herramienta específicas por parte el desarrollador.
                            <br><br>
                            Por contrapartida, las apps híbridas se crearán una sola vez utilizando las herramientas de desarrollo
                            web, ya que será compatible en todos los sistemas operativos, por lo que el coste claramente inferior.</p>
                    </div>
                </div>
                <div class="col-md-12 ml-auto">
                    <div class="cardCuadros">
                        <h5>Frameworks de desarrollo.</h5>
                        <p>
                            Hay una gran variedad de frameworks para desarrolla apps. <br> <br>
                            Para aplicaciones nativas, los principales son: <br>
                            <li>Titanium (propiedad de appCelerator), basado en JavaScript.</li>
                            <li>React Native, basado en JavaScript y React.</li>
                            <li>Xamarin (propiedad de Microsoft), aplicado sobre Visual Studio permite crear apps nativas para iOS o Android.</li>
                            <li>Native Script, que soporta el framework AngularJS.</li>
                            <br>En aplicaciones híbridas los más destacables son: <br><br>
                            <li>Ionic, trabaja sobre AngularJS y Apache Cordova.</li>
                            <li>PhoneGap (propiedad de Adobe).</li>
                            <li>Jquery Mobile, compatible con PhoneGap entre otros.</li>
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 ml-auto" style="text-align: center; padding:10rem;">
                    <h4>Conclusion</h4>
                    <div class="conclusionInicial" style="text-align: justify;">
                        <p>Antes de elegir el tipos de aplicación para desarrollar, debemos tener muy
                            presentes estos dos factores por encima de todo:</p>
                        <li> Las prestaciones que debe ofrecer. Para una app que necesite el uso de componentes
                            locales o parte del hardware del terminal (como el GPS, la cámara, etc.) es aconsejable
                            desarrollarla como nativa.</li><br>
                        <li> Coste del proyecto. El presupuesto disponible determina la mayoría de proyectos, por eso
                            el coste de desarrollo suele ser un factor clave en la creación de apps. Puede determinar
                            la decisión fácilmente.</li><br>
                        <p>
                            Así pues, antes de iniciar el desarrollo de una app es muy importante analizar las características
                            que debe tener, a qué tipo de usuarios va destinada y de qué presupuesto disponemos para realizar
                            la elección correcta. En JustDigital somos expertos en el desarrollo de soluciones mobile en función
                            de las necesidades del cliente, te ayudamos a realizar la elección correcta y ofrecemos un servicio
                            de calidad adaptado a tus necesidades.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="footer" style="background-color: #0002; color: #2bf2f2; font-size:1em;">  
      <div class="row">
          <div class="col-md-12 ml-auto">
              <p>derechos reservados por @JeanC 2021</p>
          </div>
      </div>
    </section>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
</body>

</html>