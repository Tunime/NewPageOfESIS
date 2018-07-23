@extends('templante/menufooter')
@section('body')
     <!--inicio del carrusel-->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active header__principal" style="height: 70vh;">
                    <div class="seccion carousel-caption ">
                       <div class="header d-flex align-items-center">
                            <span class="text-left">
                                <h1 class="header__titulo"><span class="text-white">ESCUELA PROFESIONAL DE</span><br> INGENIERÍA EN INFORÁTICA Y<br> SISTEMAS</h1>
                                <div class="header__pie backprimario"></div>
                                <p  class="header__subtitulo">FACULTAD DE INGENIERIA</p>
                                <a class="header__boton btn--activado" href="#">LEER MAS</a>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="carousel-item header__segundario" style="height: 70vh;">
                    <div class="seccion carousel-caption ">
                       <div class="header d-flex align-items-center">
                            <span class="text-left">
                                <h1 class="header__titulo"><span class="text-white">DISFRUTA DEL EVENTO<br> DE EGRESADOS<br>POSMASTER</span></h1>
                                <div class="header__pie backprimario"></div>
                                <p  class="header__subtitulo">FACULTAD DE INGENIERIA</p>
                                <a class="header__boton btn--activado" href="#">LEER MAS</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div><!--Fin del carusel-->
    <!--Comienso del contenido-->
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-7">
                    <!--Comiensa las noticias-->
                    <div class="container-fluid">
                        <div id="vision" class="container noticias ">
                            <h2 class="presentacion__title ">Plana Docente</h2>
                            <article class="noticias__item">
                                <div class="row d-flex align-items-center">
                                    <figure class="col-lg-3">
                                        <img src="images/gmalaga.jpeg" alt="..." class="img-thumbnail">
                                    </figure>
                                    <div class="col-lg-9">
                                        <h3 class="item__title">GIANFRANCO ALEXEY MÁLAGA TEJADA</h3>
                                        <p>Ingeniero de Sistemas con grado de Magíster en Administración y Dirección de Empresas, y Doctorado culminado(c) en Ingeniería de Sistemas. Docente asociado, adscrito al Departamento Académico de Ingeniería en Informática y Sistemas, de la Universidad Nacional Jorge Basadre Grohmann. Gerente general de IMATIC SAC.</p>
                                    </div>
                                </div>
                            </article>
                            <article class="noticias__item">
                                <div class="row d-flex align-items-center">
                                    <figure class="col-lg-3">
                                        <img src="images/anacori.jpg" alt="..." class="img-thumbnail">
                                    </figure>
                                    <div class="col-lg-9">
                                        <h3 class="item__title">ANA SILVIA CORI MORÓN</h3>
                                        <p>Tiene experiencia profesional como docente y ha desempeñado distintos cargos administrativos además de apoyar la extensión y proyección social, ha laborado en empresas del sector privado e instituciones públicas; Promujer Perú (2003-2009), Caja Municipal de Ahorro y Credito de Arequipa (2009-2010), Municipalidad Provincial de Mariscal Nieto de Moquegua (2010), en la Universidad Nacional Jorge Basadre Grohmann (2012-2018). Es miembro del Colegio de Ingenieros del Perú.</p>
                                    </div>
                                </div>
                            </article>
                             <article class="noticias__item">
                                <div class="row d-flex align-items-center">
                                    <figure class="col-lg-3">
                                        <img src="images/ksupo.png" alt="..." class="img-thumbnail">
                                    </figure>
                                    <div class="col-lg-9">
                                        <h3 class="item__title">KARIN YANET SUPO GAVANCHO</h3>
                                        <p>Ing. de Informatica y Sistemas, Mgr. en Metodos de Apoyo para la decisión(Inteligencia Artificial), Dr. en Educacion. Me desempeño como docente Universitaria en diferentes universidades del Perú. </p>
                                    </div>
                                </div>
                            </article>
                            <article class="noticias__item">
                                <div class="row d-flex align-items-center">
                                    <figure class="col-lg-3">
                                        <img src="images/jimim.png" alt="..." class="img-thumbnail">
                                    </figure>
                                    <div class="col-lg-9">
                                        <h3 class="item__title">JIMMY MUÑOS MIRANDA</h3>
                                        <p>Ingeniero de sistemas con conocimientos en programación de computadoras en aplicaciones empresariales e ingeniería de software, donde hasta la fecha continuo mejorándolas, a su vez cuento con capacidad de habilidad y autoaprendizaje para gestión de sistemas de información, abierto al uso de nuevas tecnologías y de enseñar a otras personas</p>
                                    </div>
                                </div>
                            </article>
                            <article class="noticias__item">
                                <div class="row d-flex align-items-center">
                                    <figure class="col-lg-3">
                                        <img src="images/ralvarez.jpg" alt="..." class="img-thumbnail">
                                    </figure>
                                    <div class="col-lg-9">
                                        <h3 class="item__title">ROLANDO ALVAREZ </h3>
                                        <p>Ingeniero de Sistemas de la Universidad Privada de Tacna con registro de colegiatura N° 137037, Estudios de Post Grado - Maestría en Administración de Tecnologías e Ingeniería de Sistemas en la ESPG-UNJBG, estudios en Administración de Empresas de la Universidad Nacional Jorge Basadre Grohmann, Egresado de la segunda especialidad en Ingeniería Informática de la Universidad San Agustín de Arequipa.</p>
                                    </div>
                                </div>
                            </article>
                           <article class="noticias__item">
                                <div class="row d-flex align-items-center">
                                    <figure class="col-lg-3">
                                        <img src="images/albertoc.jpg" alt="..." class="img-thumbnail">
                                    </figure>
                                    <div class="col-lg-9">
                                        <h3 class="item__title">ALBERTO ENRIQUE COHAILA BARRIOS</h3>
                                        <p>Alberto E. Cohaila B. es profesor de Electrónica de la Escuela Académico Profesional de Ingeniería Informática y Sistemas (desde el 2017). El recibió su MSc. en Computación e Informática por la Universidad Nacional Jorge Basadre Grohmann el 2007.</p>
                                    </div>
                                </div>
                            </article>
                            <article class="noticias__item">
                                <div class="row d-flex align-items-center">
                                    <figure class="col-lg-3">
                                        <img src="images/hbarraza.jpg" alt="..." class="img-thumbnail">
                                    </figure>
                                    <div class="col-lg-9">
                                        <h3 class="item__title">HUGO MANUEL BARRAZA VIZCARRA</h3>
                                        <p>Profesional en Computación, con pregrado en Ingeniería en Informática y Sistemas (UNJBG, 2012), y con maestría en Administración de Tecnologías de Información (UNJBG, 2016). Trabaja actualmente como docente contratado en la E.P. Ingeniería en Informática y Sistemas de la Universidad Nacional Jorge Basadre Grohmann de Tacna (UNJBG).</p>
                                    </div>
                                </div>
                            </article>
                            <article class="noticias__item">
                                <div class="row d-flex align-items-center">
                                    <figure class="col-lg-3">
                                        <img src="images/edith.png" alt="..." class="img-thumbnail">
                                    </figure>
                                    <div class="col-lg-9">
                                        <h3 class="item__title">EDITH ELIZABETH ALFARO GONZALES</h3>
                                        <p>Ingeniero de Sistemas e Informática, egresada de la maestría de Administración de Tecnologías de la Información y estudios concluidos de doctorado en la especialidad de Ingeniería de Sistemas. Con conocimientos en edición y publicación científica. Con 12 años de experiencia en la administración pública vinculadas a actividades informáticas y gestión.</p>
                                    </div>
                                </div>
                            </article>
                            <article class="noticias__item">
                                <div class="row d-flex align-items-center">
                                    <figure class="col-lg-3">
                                        <img src="images/jpolar.jpeg" alt="..." class="img-thumbnail">
                                    </figure>
                                    <div class="col-lg-9">
                                        <h3 class="item__title">JAIME FREDDY POLAR FUENTES</h3>
                                        <p>Ingeniero de Sistemas colegiado, tesis de grado sobre criptografía y seguridad informática, egresado de la Maestría en Ingeniería de Sistemas e Informática – Administración de Tecnologías de Información, con tesis en desarrollo sobre Metodología para el Levantamiento de Activos de Información.</p>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                    <!--Fin de las noticias-->
                </div>
                <div class="col-lg-4 col-md-5">
                    <!--Comienso de link-->
                    <div class="container-fluid backsegundario pb-3">
                        <div class="container eventos backsegundario">
                            <h2 class="presentacion__title">Enlases Útiles</h2>
                                <li  class="menulateral d-flex align-items-center">
                                    <i class="material-icons">keyboard_arrow_right</i>
                                    <a class=" menulateral__item" href="#">Autoridades</a>
                                </li>
                                <li  class="menulateral d-flex align-items-center">
                                    <i class="material-icons">keyboard_arrow_right</i>
                                    <a class=" menulateral__item" href="#">Plana docente</a>
                                </li>
                        </div>
                    </div>
                    <!--Fin de link-->
                     <!--Comienso de comunicados-->
                    <div class="container-fluid backsegundario">
                        <div class="container eventos backsegundario">
                            <h2 class="presentacion__title">Comunicados Importantes</h2>
                            <article class="noticias__item">
                                <time class="item__fecha">23 noviembre 2018</time>
                                <h5 class="item__title--comunicado"><a class="text-dark" href="#">Long Established fact that a reader will be distracted by the readable</a></h5>
                            </article>
                            <article class="noticias__item">
                                <time class="item__fecha">23 noviembre 2018</time>
                                <h3 class="item__title--comunicado"><a class="text-dark" href="#">Long Established fact that a reader will be distracted by the readable</a></h3>
                            </article>
                            <div class="pt-5"></div>
                        </div>
                    </div>
                    <!--Fin de comunicados-->
                     <!--Comienso de eventos-->
                    <div class="container-fluid backsegundario">
                        <div class="container eventos backsegundario pb-3">
                            <h2 class="presentacion__title">Nuestros eventos</h2>
                            <article class="noticias__item">
                                <time class="item__fecha">23 noviembre 2018</time>
                                <h3 class="item__title"><a class="text-dark" href="#">Long Established fact that a reader will be distracted by the readable</a></h3>
                            </article>
                            <article class="noticias__item">
                                <time class="item__fecha">23 noviembre 2018</time>
                                <h3 class="item__title"><a class="text-dark" href="#">Long Established fact that a reader will be distracted by the readable</a></h3>
                            </article>
                            <article class="noticias__item">
                                <time class="item__fecha">23 noviembre 2018</time>
                                <h3 class="item__title"><a class="text-dark" href="#">Long Established fact that a reader will be distracted by the readable</a></h3>
                            </article>
                        </div>
                    </div>
                    <!--Fin de eventos-->
                </div>
            </div>
        </div>
    </div>
    <!--Fin del contenido-->
@endsection