<?php
	session_start();
?>
<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/vendors/fontello/css/fontello.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link rel="shortcut icon" type="image/x-icon" href="assets/images/fav-icon.png" />

    <link rel="stylesheet" href="assets/css/style.css">

    <title>AYUDATEC :: Cómo Funciona</title>
</head>

<body>

    <header>
        <nav id="menu-usuario" class="navbar fixed-top navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                    <img src="assets/images/logo_ayudatec_bn.png" alt="Ayudatec" >
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu_principal" aria-controls="menu_principal" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="icon-list-nested font-white"></i>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="menu_principal">
                    <ul class="navbar-nav justify-content-around flex-1 bt-menu">
			            <li class="nav-item active">
                            <a class="nav-link" href="conocenos.php">CONÓCENOS </a>
                        </li>                        
			            <li class="nav-item active">
                            <a class="nav-link" href="tecnicos.php">TÉCNICOS </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link disabled" href="comoFunciona.php">CÓMO FUNCIONA</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link disabled" href="contactenos.php">CONTÁCTENOS</a>
                        </li>
                    </ul>
                    <div class="btn-group font-white btnUsuario" role="group">
                        <span class="cursor-pointer align-self-center font-20px">
                           <i class="icon-bell-alt font-white"></i><span class="notifi">1</span>
                        </span>
                        <button id="btnGroupUser" type="button" class="btn font-white dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         <img style="width: 30px;" src="assets/images/ft_testimonio1.png" alt="Ayudatec">
                          Lidia
                        </button>
                        <div class="dropdown-menu" aria-labelledby="btnGroupUser">
                            <a class="dropdown-item" href="#">Dropdown link</a>
                            <a class="dropdown-item" href="#">Cerrar Sesión</a>
                        </div>
                    </div>
                </div>

            </div>

        </nav>
    </header>

    <section id="how-work" class="py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <h3 class="col-12 pt-3 text-center titulo font-darkgray">
                    ¿Cómo funciona AYUDATEC?
                </h3>
                <div class="col-12 col-lg-8 pt-3 text-center font-gray">
                    <span> 
En Ayudatec estamos firmemente comprometidos con nuestros clientes y trabajamos para ofrecerles un servicio y una experiencia excelente gracias a nuestra apuesta por la calidad y la innovación. Poseemos la certificación ISO 9.001, con la que AENOR confirma la capacidad de la empresa para ofrecer productos y servicios basados en un sistema de gestión de calidad apoyado en el ciclo de mejora continua de los procesos.</span>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-4 text-center align-self-center pt-5 pt-lg-0">
                    <img src="assets/images/mascota.svg" alt="Ayudatin">
                </div>
                <div class="col-12 col-lg-8 pt-4 pasos font-gray ">
                    <ol>
                        <li> <div class="font-bold">Indica que servicio o profesional necesitas.</div> En el buscador de la Web escribe qué necesitas solucionar o qué tipo de profesional necesitas.
                        </li>
                        <li><div class="font-bold">Escoge al profesional que más te gusta.</div> Revisa perfiles de los profesionales interesados, elige al que más te gusta
                        </li>
                        <li><div class="font-bold"> Llama al profesional y acuerden una cita.</div> Pregunta por precio y disponibilidad. </li>
                    </ol>
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
                            ¿Cómo funciona?
                        </div>
                        <div class="col-12 col-lg mb-3 mb-lg-0">
                            Preguntas frecuentes
                        </div>
                        <div class="col-12 col-lg mb-3 mb-lg-0">
                            Términos y Condiciones
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-4 text-center align-self-center">
                    <i class="icon-facebook font-28px"></i>
                    <i class="icon-twitter font-28px"></i>
                    <i class="icon-linkedin-squared font-28px"></i>
                </div>

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
                            <button class="btn-lineal btn-yellow font-12px py-1 px-2" type="submit">
                                QUIERO SER TÉCNICO
                            </button>
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
                            <br> Telf.: 0998192272 Email soporte@ayudatec.info
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 text-center order-lg-1 text-lg-left">
                    <div class="row">
                        <div class="col-12">
                            <a class="navbar-brand" href="#"><img src="assets/images/logo_ayudatec_bn.png" alt="Ayudatec" ></a>
                        </div>
                        <div class="col-12 font-lightgray font-w-100">
                            © 2017 Ayudatec. Todos los derechos reservados.
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
</body>

</html>
