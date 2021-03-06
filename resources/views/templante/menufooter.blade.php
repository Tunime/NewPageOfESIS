<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="icon" type="image/jpg" href="images/icon.jpg" />
    <link rel="stylesheet" href="css/template.css" >
    
    <title>ESIS-UNJBG</title>
  </head>
  <body>
  <span class="ir-arriba icon-arrow-up2"><i class="material-icons">keyboard_arrow_up</i></span>
   <div class="cocontainer-fluid backprimario">
            <div class="container backprimario">
                <nav class=" navbar navbar-expand-lg navbar-dark backprimario">
                    <div class="nenu-moca collapse navbar-collapse d-flex justify-content-end">
                        <ul class="navbar-nav">
                        <li class="nav-item">
                            <div style="padding: .0 1rem;" class="text-white d-flex align-items-center menu__informacion"> <i class="material-icons">mail_outline</i>esis@unjbg.edu.pe</div>
                        </li>
                        <li class="nav-item">
                            <div style="padding: .0 0;" class="text-white d-flex align-items-center menu__informacion"><i class="material-icons">call</i>052-58300 Anexo 2005</div>
                        </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    <div class="container-fluid bg-white">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-white">
                <a class="navbar-brand" href="http://www.unjbg.edu.pe/portal/">
                    <img class="menu__logo" src="images/logounjbg.png" height="50" alt="logo-unjbg">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link menu__item" href="/">INICIO</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle menu__item" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                ACERCA DE
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item menu__item" href="/vision#vision">VISION</a>
                                <a class="dropdown-item menu__item" href="/vision#mision">MISION</a>
                                <a class="dropdown-item menu__item" href="/vision#objetivo">OBJETIVOS</a>
                            </div>
                        </li> 
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle menu__item" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ORGANIZACIÓN</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item menu__item" href="/autoridades">AUTORIDADES</a>
                                <a class="dropdown-item menu__item" href="/planadocente">PLANA DOCENTE</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu__item" href="/plandeestudio">PLAN DE ESTUDIO</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle menu__item" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                ACTIVIDADES DE ESCUELA
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item menu__item" href="#">EXTRACURICULAR</a>
                                <a class="dropdown-item menu__item" href="#">COCURRICULAR</a>
                                <a class="dropdown-item menu__item" href="#">GRUPOS DE ESTUDIO</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle menu__item" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                ALUMNO
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item menu__item" href="/cronogramaacademico">CALENDARIO ACADEMICO</a>
                                <a class="dropdown-item menu__item" href="#">HORARIOS</a>
                                <a class="dropdown-item menu__item" href="http://www.aula.unjbg.edu.pe/login/index.php">AULA VIRTUAL</a>
                                <a class="dropdown-item menu__item" href="#">REGLAMENTOS</a>
                            </div>
                        </li> 
                        <li class="nav-item ">
                            <a class="nav-link menu__item" href="#">EGRESADOS</a>
                        </ 
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <!--Terminamos la barra de navegacion-->
    @yield('body')
    <!--inicio SECCION DE FOOTER-->
    <footer class="pt-5 footer">
        <div class="container-fluid backprimario">
            <div class="container pt-3 backprimario">
                <div class="row">
                    <div class="col-md-12 col-lg-4">
                         <a class="navbar-brand" href="#">
                            <img class="menu__logo" src="images/logounjbg.png" height="50" alt="logo-unjbg">
                        </a>
                        <p class="footer__pie ml-5">Ciudad Universitaria<br>Av.miraflores S/N Tacna -Perú<br>central telefonico 052-583000</p>
                    </div>
                    <div class="col-md-8 col-lg-6 d-none d-md-block">
                        <div class="container">
                            <div class="row">
                                <div class="col-2 d-none d-md-block">
                                    <a class="footer__menu" href="#">INICIO</a>
                                    <a class="footer__menu" href="#">VISION</a>
                                    <a class="footer__menu" href="#">MISION</a>
                                </div>
                                <div class="col-3 d-none d-md-block">
                                    <a class="footer__menu" href="#">OBJETIVOS</a>
                                    <a class="footer__menu" href="#">HISTORIA</a>
                                    <a class="footer__menu" href="#">AUTORIDADES</a>
                                </div>
                                <div class="col-3 d-none d-md-block">
                                    <a class="footer__menu" href="#">PLANA DOCENTE</a>
                                    <a class="footer__menu" href="#">NOVEDADES</a>
                                    <a class="footer__menu" href="#">HORARIOS</a>
                                </div>
                                <div class="col-3 d-none d-md-block">
                                    <a class="footer__menu" href="#">AULA VIRTUAL</a>
                                    <a class="footer__menu" href="#">NORMATIVA</a>
                                    <a class="footer__menu" href="#">REGLAMENTO</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid bg-dark">
            <div class="container bg-dark">
                <div class="footer__pie text-white bg-dark d-flex justify-content-center p-1">ESCUELA PROFESIONAL DE INGENIERÍA EN INFORMATICA Y SISTEMAS</div>
            </div>
        </div>
    </footer>
<!--fin SECCION DE FOOTER-->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="js/main.js"></script>
    <script src="js/mocatemplante.js"></script>
  </body>
</html>