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
    <title>AYUDATEC :: Técnicos recomendados</title>
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
                    
                    <form class="form-inline mt-4 my-lg-0">
                    <a href="registro.php" id="loginbtn" class="btn my-2 my-sm-0 btn-lineal">
                            Inicio sesión o Registro 
                            <i class="icon-right-small"></i>
                    </a>
                    
                    <div class="btn-group font-white btnUsuario" id="usuariopanel" role="group">
<!--                        <span class="cursor-pointer align-self-center font-20px">
                           <i class="icon-bell-alt font-white"></i><span class="notifi">1</span>
                        </span>
-->
                        <span id="nombreusuario"> </span>
                        <button id="btnGroupUser" type="button" class="btn font-white dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         <img style="width: 30px;" src="" alt="Ayudatec" id="fotousuario">
                          
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

    <section id="tecnicos" class="mt-5 py-5">
        <div class="container">
            <div class="row">
                <h3 class="col-12 font-24px"> Albañiles disponibles</h3>
                <div class="col-12 col-lg">
                    <form class="input-group my-3">
                        <div class="input-group-prepend fondo-search"> <i class="icon-search"></i> </div>
                        <input type="text" class="form-control input-text" placeholder="¿Qué servicio necesitas?">
                        <button type="reset" class="input-group-append cursor-pointer fondo-x"> <i class="icon-cancel-circled"></i> </button>
                    </form>
                    <div class="row pt-4">
                        <!--Foto, estrella y botón perfil técnico 1-->
                        <div class="col-12 mb-4 linea-hor-gray "></div>
                        <div class="col-12 col-lg-5 text-center">
                            <div class="row">
                                <div class="col-6 col-lg-12"> 
                                    <img src="assets/images/tecnicos/juan-r001.png" alt="Ayudatec"> 
                                </div>
                                <div class="col-6 col-lg-12 py-2">
                                    <div class="row">
                                        <div class="col-12 d-lg-none" id="nombre1"> </div>
                                        <div class="col-12"> 
                                            <i class="icon-star font-yellow"></i> 
                                            <i class="icon-star font-yellow"></i> 
                                            <i class="icon-star font-yellow"></i> 
                                            <i class="icon-star font-yellow"></i> 
                                            <i class="icon-star font-yellow"></i> 
                                        </div>
                                        <div class="col-12"> 
                                            <a href="informacionTecnico.php" class="btn btn-lineal btn-blue">
                                                VER PERFIL
                                            </a> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Datos técnico-->
                        <div class="col-12 col-lg text-center">
                            <div class="row">
                                <div class="col-12 d-none d-lg-block"> JUAN R. </div>
                                <div class="col-12 py-3"> <span class="tag-categoria" id="categoria1">
                                        
                                    </span> </div>
                                <div class="col-12 font-12px" id="zona1"> </div>
                                <div class="col-12 pb-4" id="descripcion1"> </div>
                            </div>
                        </div>
                        <!--Foto, estrella y botón perfil técnico 2-->
                        <div class="col-12 my-4 linea-hor-gray "></div>
                        <div class="col-12 col-lg-5 text-center">
                            <div class="row">
                                <div class="col-6 col-lg-12"> 
                                    <img src="assets/images/tecnicos/enrique-t002.png" alt="Ayudatec"> 
                                </div>
                                <div class="col-6 col-lg-12 py-2">
                                    <div class="row">
                                        <div class="col-12 d-lg-none" id="nombre2"> </div>
                                        <div class="col-12"> 
                                            <i class="icon-star font-yellow"></i> 
                                            <i class="icon-star font-yellow"></i> 
                                            <i class="icon-star font-yellow"></i> 
                                            <i class="icon-star font-yellow"></i> 
                                            <i class="icon-star font-gray"></i> 
                                        </div>
                                        <div class="col-12"> 
                                            <a href="informacionTecnico.php" class="btn btn-lineal btn-blue">
                                                VER PERFIL
                                            </a> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Datos técnico-->
                        <div class="col-12 col-lg text-center">
                            <div class="row">
                                <div class="col-12 d-none d-lg-block"> ENRIQUE T. </div>
                                <div class="col-12 py-3"> <span class="tag-categoria" id="categoria2">
                                        
                                    </span> </div>
                                <div class="col-12 font-12px" id="zona2"> </div>
                                <div class="col-12 pb-4" id="descripcion2"> </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="col-12 col-lg-auto text-right">
                    <div class="row">
                        <div class="col-12 font-blue"> Cerca del norte, Guayaquil - Ecuador </div>
                        <div class="col-12 pb-3">
                            <button type="button" class="btn py-1 btn-lineal btn-blue"> Cambiar zona </button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12"> <img class="img-fluid" src="assets/images/mapa_norte.jpg" alt="mapa"> </div>
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
                <div class="col-6 col-lg-4 text-center align-self-center"> <i class="icon-facebook font-28px"></i> <i class="icon-twitter font-28px"></i> <i class="icon-linkedin-squared font-28px"></i> </div>
                
                <div class="col-12 my-3 linea-hor"> </div>
            </div>
            <div class="row pt-3">
                <div class="col-12 col-lg-4 text-center mb-4 order-lg-3">
                    <div class="row">
                        <div class="col-12 mb-2"> AFILÍATE </div>
                        <div class="col-12">
                            <button class="btn-lineal btn-yellow font-12px py-1 px-2" type="submit"> QUIERO SER TÉCNICO </button>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 text-center mb-4 order-lg-2 text-lg-left">
                    <div class="row">
                        <div class="col-12 mb-2"> CONTÁCTANOS </div>
                        <div class="col-12 font-lightgray font-w-100"> Si tienes alguna duda o inquietud puede contactarnos a
                            <br> Telf.: 0998192272 - Email soporte@ayudatec.info </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 text-center order-lg-1 text-lg-left">
                    <div class="row">
                        <div class="col-12">
                            <a class="navbar-brand" href="#"><img src="assets/images/logo_ayudatec_bn.png" alt="Ayudatec"></a>
                        </div>
                        <div class="col-12 font-lightgray font-w-100"> © 2018 AYUDATEC. Todos los derechos reservados. </div>
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
    <script src="assets/js/database.js"></script>
</body>

</html>
