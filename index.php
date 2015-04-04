<!DOCTYPE html>
<html lang="es">
<head>
    <title>Tu título aquí</title>
    <meta charset="utf-8"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <meta name="keywords" content=""/>
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css"/>
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="index.css"/>
</head>
<body>
    <!--Navegador-->
    <div class="navbar-wrapper">
        <div class="container">
            <nav class="navbar navbar-inverse navbar-static-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">Proyecto</a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="#">Inicio</a></li>
                            <li><a href="#about">Registro</a></li>
                            <li><a href="#contact">Contacto</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Opciones <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Enlace</a></li>
                                    <li><a href="#">Enlace</a></li>
                                    <li><a href="#">Enlace</a></li>
                                    <li class="divider"></li>
                                    <li class="dropdown-header"></li>
                                    <li><a href="#">Enlace</a></li>
                                    <li><a href="#">Enlace</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div> <!--/Navegador-->


    <!-- Carrusel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img class="first-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="First slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Lorem Ipsum.</h1>
                        <p>Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor .</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Entrar</a></p>
                    </div>
                </div>
            </div>
            <div class="item">
                <img class="second-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Lorem Ipsum.</h1>
                        <p>Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor ..</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Ver más</a></p>
                    </div>
                </div>
            </div>
            <div class="item">
                <img class="third-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Lorem Ipsum.</h1>
                        <p>Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor ..</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Ver más</a></p>
                    </div>
                </div>
            </div>
        </div>
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Atrás</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Adelante</span>
        </a>
    </div><!-- /.carrusel -->


    <div class="contenedor">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="jumbotron">
                        <h3 class="text-center">Lorem Ipsum</h3>
                        <p class="text-justify">Lorem Ipsum Dolor Lorem Ipsum Dolor.</p>
                        <center><button class="btn btn-success">Ver más</button></center>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="jumbotron">
                        <h3 class="text-center">Lorem Ipsum</h3>
                        <p class="text-justify">Lorem Ipsum Dolor Lorem Ipsum Dolor.</p>
                        <center><button class="btn btn-success">Ver más</button></center>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="jumbotron">
                        <h3 class="text-center">Lorem Ipsum</h3>
                        <p class="text-justify">Lorem Ipsum Dolor Lorem Ipsum Dolor.</p>
                        <center><button class="btn btn-success">Ver más</button></center>
                    </div>
                </div>
            </div>
        </div>
    </div>
    



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
</body>
</html>