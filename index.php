<?php
	session_start();
?>
<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="ayudatec, tecnicos, ecuador, ayuda, cerrajeros, albañiles, mecanico, refrigeradoras, electricista, pintor, tecnico recomendado, guayaquil">
    <meta name="description" content="AYUDATEC es una empresa que busca proporcionar a nuestros clientes la mejor asistencia del hogar y la tranquilidad de no tener que preocuparse en caso de averías urgentes, garantizándoles los mejores reparadores a precios competitivos">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/vendors/fontello/css/instagram.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/fav-icon.png" />

    <link rel="stylesheet" href="assets/css/style.css">

    <title>AYUDATEC :: Técnicos recomendados</title>
</head>

<body>

    <header>
        <nav id="menu" class="navbar fixed-top navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="index.html"><img src="assets/images/logo_ayudatec_bn.png" alt="Ayudatec"></a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu_principal" aria-controls="menu_principal" aria-expanded="false" aria-label="Toggle navigation">
                <i class="icon-list-nested font-white"></i>
            </button>

                <div class="collapse navbar-collapse justify-content-between" id="menu_principal">
                    <ul class="navbar-nav justify-content-around flex-1 bt-menu">
                        <li class="nav-item active">
                            <a class="nav-link" href="conocenos.php">CONÓCENOS </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="tecnicos.php">TÉCNICOS</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link disabled" href="comoFunciona.php">CÓMO FUNCIONA</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link disabled" href="contactenos.php">CONTÁCTENOS</a>
                        </li>
                    </ul>

                    <form class="form-inline mt-4 my-lg-0">
                        <a href="registro.php" id="loginbtn" style.display="block" class="btn my-2 my-sm-0 btn-lineal">
                            Inicio sesión o Registro 
                            <i class="icon-right-small"></i>
                    </a>


                        <div class="btn-group font-white btnUsuario" id="usuariopanel" style.display="none" role="group">
                            <!--                        <span class="cursor-pointer align-self-center font-20px">
                           <i class="icon-bell-alt font-white"></i><span class="notifi">1</span>
                        </span>
-->
                            <span id="nombreusuario"> </span>
                            <button id="btnGroupUser" type="button" class="btn font-white dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         <img style="width: 30px;" src="assets/images/profile.png" alt="Ayudatec" id="fotousuario">
                          
                        </button>
                            <div class="dropdown-menu" aria-labelledby="btnGroupUser">
                                <a class="dropdown-item" href="perfil.php">Perfil</a>
                                <a class="dropdown-item" id="logout" href="index.php">Cerrar Sesión</a>
                            </div>
                        </div>

                    </form>
                </div>

            </div>

        </nav>
    </header>
    <div id="background"></div>
    <section id="banner-principal">

        <div class="container" id="texto-busqueda">
            <div class="row justify-content-center">
                <div class="col-12 premisa">
                    DE MANERA SENCILLA, RÁPIDA Y SEGURA
                </div>
                <h1 class="col-12 titulo">
                    Soluciona tus problemas
                </h1>
                <h3 class="col-12 mb-5 subtitulo">
                    de mantenimiento, reparación y otros
                </h3>

                <!-- <div class="col-8 mt-4 busqueda-inicio">
                   <div class="input-group mb-3">
                       <input type="text" class="form-control input-busqueda" placeholder="¿Qué servicio estás buscando?" aria-label="Recipient's username" aria-describedby="basic-addon2">  
                        <div class="input-group-append">
                        <button class="btn btn-lineal-big" type="button">Encontrar</button>
                    </div>
                    </div>
                </div>-->

                <!--<script type="text/javascript">
    $(document).ready(function() {
        var newUrl = "";
        $("#picksite").change(function() {
            $newUrl = $("#picksite option:selected").val();
        });
        $("#executelink").click(function() {
            location = $newUrl ;
        });
    });
</script>
-->
                <!--
<select id="picksite">
    <option value="">Pick A Website</option>
    <option value="http://google.com">Google</option>
    <option value="http://facebook.com">Facebook</option>
    <option value="http://twitter.com">Twitter</option>
    <option value="http://gmail.com">Gmail</option>
</select>

<button id="executelink">Go To Site</button>
-->
                <div class="col-10 col-lg-8 col-xl-6 mt-4 busqueda-inicio ">
                    <div class="input-group mb-3 ">

                        <select id="picksite" class="custom-select input-busqueda pl-4 font-gray">
                            <option selected value="notfound.php">¿Qué servicio buscas?</option>
                            <option value="especialidades/jardineria.php">Jardinería</option>
                            <option value="especialidades/zapateria.php">Zapatería</option>
                            <option value="especialidades/cerrajeria.php">Cerrajería</option>
                            <option value="notfound.php">Gasfitería</option>
                            <option value="notfound.php">Electricidad</option>
                            <option value="notfound.php">Pintura</option>
                            <option value="especialidades/tapiceria.php">Tapiceria</option>
                        </select>
                        <div class="input-group-append">
                            <button class="btn px-4 pt-2 btn-lineal-big font-20px font-gray" onClick="loadPage()"><i class="icon-search"></i></button>

                            <!-- <a href="tecnicos.html" class="btn px-4 pt-2 btn-lineal-big font-20px font-gray"><i class="icon-search"></i></a>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="how-work" class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <h3 class="col-12 pt-3 text-center titulo font-darkgray">
                    ¿Cómo funciona AYUDATEC?
                </h3>
                <div class="col-12 col-lg-8 pt-3 text-center font-gray">
                    <span>Soluciona tus problemas de mantenimiento y reparación de manera rápida y fácil. Pide un servicio en tan sólo estos tres pasos.</span>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-4 text-center align-self-center pt-5 pt-lg-0">
                    <img src="assets/images/mascota.svg" alt="Ayudatin">
                </div>
                <div class="col-12 col-lg-8 pt-4 pasos font-gray">
                    <ol>
                        <li>Indica que servicio o profesional necesitas. En el buscador de la Web escribe qué necesitas solucionar o qué tipo de profesional necesitas.

                        </li>
                        <li>Escoge al profesional que más te gusta. Revisa perfiles de los profesionales interesados, elige al que más te gusta</li>
                        <li> Llama al profesional y acuerden una cita. Pregunta por precio y disponibilidad. </li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section id="ventajas" class="py-5">
        <div class="container">
            <div class="row mb-5">
                <h3 class="col-12 pt-2 text-center titulo">
                    Ventajas que ofrece AYUDATEC
                </h3>
                <div class="col-12 pt-3 text-center font-gray">
                    Encuentra ayuda de confianza y resuelve los problemas técnicos donde los necesites.
                </div>

            </div>
            <div class="row">
                <div class="col-12 col-lg-4 mb-5 text-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 pt-2 text-center">
                                <img src="assets/images/ventaja1.png" alt="Ayudatec">
                            </div>
                            <div class="col-12 pt-4 text-center ">
                                TÉCNICOS RECOMENDADOS
                            </div>
                            <div class="col-12 pt-3 text-center font-gray font-14px">
                                Te ponemos en contacto con técnicos de confianza, que han sido recomendados por otros. Consulta su reputación y califica su trabajo.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 mb-5 text-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 pt-2 text-center">
                                <img src="assets/images/ventaja2.png" alt="Ayudatec">
                            </div>
                            <div class="col-12 pt-4 text-center">
                                TU DIRECTORIO TELEFÓNICO
                            </div>
                            <div class="col-12 pt-3 text-center font-gray font-14px">
                                ¿Has perdido el contacto con el técnico que te gustaba trabajar? En AYUDATEC podrás crear un directorio con tus técnicos favoritos y tenerlo siempre actualizado.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 mb-5 text-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 pt-2 text-center">
                                <img src="assets/images/ventaja3.png" alt="Ayudatec">
                            </div>
                            <div class="col-12 pt-4 text-center">
                                NO SOMOS INTERMEDIARIOS
                            </div>
                            <div class="col-12 pt-3 text-center font-gray font-14px">
                                Cuidamos tu bolsillo. No te cobramos ningún rubro, por ponerte en contacto con el técnico que elijas. La negociación es directa con el técnico.
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="recomendar" class="pt-1">
        <div class="container">
            <div class="row">
                
                <div class="col-12 col-lg pt-4 pasos font-gray">
                    <div class="row">
                        <h3 class="col-12 pt-5 font-24px font-darkgray">
                            ¿Conoces a un buen técnico?
                        </h3>
                        <div class="col-12 col-lg-8 pt-1 pb-2 font-blue">
                            <span class="font-28px">¡Invítalo a nuestro equipo!</span>
                        </div>
                    </div>
                    <div>
                        Envíanos los datos del técnico que nos quieres recomendar para ponernos en contacto con él, y poder agregarlo a nuestra red de técnicos de AYUDATEC.
                    </div>
                    <div class="row py-5">
                        <div class="col-12">
                            <a href="recomendado.html" class="btn btn-lineal btn-blue font-20px">
                                Déjanos su contacto
                            </a>
                        </div>
                    </div>

                </div>
                <div class="col-12 col-lg-auto text-center align-self-center pt-5 pt-lg-0">
                    <img src="assets/images/tecnicos/tecnico_recomendado.png" alt="tecnicoRecomendado">
                </div>

            </div>
        </div>

    </section>

    <section id="testimonios" class="pt-5">
        <!-- <div class="comillas px-0 px-sm-5">
            <i class="icon-quote rotacion"></i>
            <i class="icon-quote"></i>
        </div> -->
        <div class="container">
            <div class="row justify-content-center">
                <h3 class="col-12 pt-2 text-center titulo">
                    Testimonios
                </h3>
                <div class="col-12 col-md-10">
                    <div id="carouselComentarios" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators ">
                            <li data-target="#carouselComentarios" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselComentarios" data-slide-to="1"></li>
                            <li data-target="#carouselComentarios" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-12 text-center py-3">
                                            <img src="assets/images/testimonios/ft_testimonio3.png" alt="testimonio1">
                                        </div>
                                        <h5 class="col-12 text-center">
                                            Carlos Andrade
                                        </h5>
                                        <div class="col-12 col-md-10 text-center">
                                            Contraté los servicios de un electricista y un gasfitero, me fue muy bien con los técnicos que vinieron. Los volvería a contratar.
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="carousel-item">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-12 text-center py-3">
                                            <img src="assets/images/testimonios/ft_testimonio1.png" alt="testimonio2">
                                        </div>
                                        <h5 class="col-12 text-center">
                                            Ana Rodríguez
                                        </h5>
                                        <div class="col-12 col-md-10 text-center">
                                            Contraté los servicios de un electricista y un gasfitero, me fue muy bien con los técnicos que vinieron. Los volvería a contratar.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-12 text-center">
                                            <img src="assets/images/testimonios/ft_testimonio2.png" alt="testimonio3">
                                        </div>
                                        <h5 class="col-12 text-center py-3">
                                            Claudia Pérez
                                        </h5>
                                        <div class="col-12 col-md-10 text-center">
                                            Contraté los servicios de un electricista y un gasfitero, me fue muy bien con los técnicos que vinieron. Los volvería a contratar.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselComentarios" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselComentarios" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <footer class="py-4 font-12px">
        <div class="container">
            <div class="row">
                <div class="col-6 col-lg-8 text-lg-center align-self-center">
                    <div class="row">
                        <div class="col-12 col-lg  mb-3 mb-lg-0">
                            <a class="font-white" href="conocenos.php">¿Quiénes somos?</a>
                        </div>
                        <div class="col-12 col-lg mb-3 mb-lg-0">
                            <a class="font-white" href="faq.php">Preguntas frecuentes</a>
                        </div>
                        <div class="col-12 col-lg mb-3 mb-lg-0">
                            <a class="font-white" href="politicas.php">Términos y Condiciones</a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-4 text-center align-self-center iconos-white-a ">
                    <a href="https://www.facebook.com/AyudatecLatam/" target="_blank"><i class="icon-facebook font-28px"></i></a>
                    <a href="https://twitter.com/miayudatec" target="_blank"><i class="icon-twitter font-28px"></i></a>
                    <a href="https://www.instagram.com/miayudatec/" target="_blank"><i class="icon-instagram-filled font-28px"></i></a>
                </div>



                <!--<div class="col-6 text-center mb-3">
                    ¿Cómo funciona?
                </div>
                <div class="col-6 text-center mb-3">
                    Preguntas frecuentes
                </div>
                <div class="col-6 text-center mb-3">
                    Términos y Condiciones
                </div>
                <div class="col-6 text-center">
                    <i class="icon-facebook font-28px"></i>
                    <i class="icon-twitter font-28px"></i>
                    <i class="icon-linkedin-squared font-28px"></i>
                </div>-->
                <div class="col-12 my-3 linea-hor">
                </div>
            </div>

            <div class="row pt-3">
                <div class="col-12 col-lg-4 text-center mb-4 order-lg-3">

                    <div class="row">
                        <div class="col-12 mb-2">
                            AFILÍATE
                        </div>
                        <div class="col-12">
                            <a href="preregistro.html" class="btn-lineal btn-yellow font-12px py-1 px-2">
                                QUIERO SER TÉCNICO
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 text-center mb-4 order-lg-2 text-lg-left">
                    <div class="row">
                        <div class="col-12 mb-2">
                            CONTÁCTANOS
                        </div>
                        <div class="col-12 font-lightgray font-w-100">
                            Si tienes alguna duda o inquietud puede contactarnos a
                            <br> Telf.: 0998192272 - Email soporte@ayudatec.info
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 text-center order-lg-1 text-lg-left">
                    <div class="row">
                        <div class="col-12">
                            <a class="navbar-brand" href="#"><img src="assets/images/logo_ayudatec_bn.png" alt="Ayudatec"></a>
                        </div>
                        <div class="col-12 font-lightgray font-w-100">
                            © 2018 AYUDATEC. Todos los derechos reservados.
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </footer>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
    <script src="assets/js/script.js"></script>





    <script src="https://www.gstatic.com/firebasejs/4.8.2/firebase.js"></script>
    <script>
        // Initialize Firebase
        var config = {
            apiKey: "AIzaSyCrBbuj6yLwG_t_gyfhi1bi9ZjRuLnbSDA",
            authDomain: "ayudatec-3e0ee.firebaseapp.com",
            databaseURL: "https://ayudatec-3e0ee.firebaseio.com",
            projectId: "ayudatec-3e0ee",
            storageBucket: "ayudatec-3e0ee.appspot.com",
            messagingSenderId: "5686820743"
        };
        firebase.initializeApp(config);
    </script>

    <script src="assets/js/app.js"></script>
    <!--<script src="assets/js/registro.js"></script>-->
    <!--<script src="assets/js/database.js"></script>-->

</body>

</html>