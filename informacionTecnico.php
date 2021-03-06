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
    <link rel="stylesheet" href="assets/vendors/fontello/css/instagram.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/fav-icon.png" />
    <link rel="stylesheet" href="assets/css/style.css">
    <title>AYUDATEC :: Técnicos recomendados</title>
</head>

<body>
    <div ></div>
    
    <header>
        <nav id="menu-usuario" class="navbar fixed-top navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="index.php"> <img src="assets/images/logo_ayudatec_bn.png" alt="Ayudatec"> </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu_principal" aria-controls="menu_principal" aria-expanded="false" aria-label="Toggle navigation"> <i class="icon-list-nested font-white"></i> </button>
                <div class="collapse navbar-collapse justify-content-between" id="menu_principal">
                    <ul class="navbar-nav justify-content-around flex-1 bt-menu">
                        <li class="nav-item active"><a class="nav-link" href="conocenos.php">CONÓCENOS </a></li>
                        <li class="nav-item active"> <a class="nav-link" href="tecnicos.php">TÉCNICOS </a> </li>
                        <li class="nav-item "> <a class="nav-link disabled" href="comoFunciona.php">CÓMO FUNCIONA</a> </li>
                        <li class="nav-item "> <a class="nav-link disabled" href="contactenos.php">CONTÁCTENOS</a> </li>
                    </ul>
                    <form class="form-inline mt-4 my-lg-0">
                    <a href="registro.html" id="loginbtn" style.display="block" class="btn my-2 my-sm-0 btn-lineal">
                            Inicio sesión o Registro 
                            <i class="icon-right-small"></i>
                    </a>
                    
                    <div class="btn-group font-white btnUsuario" id="usuariopanel" style.display="none" role="group">

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
                <h3 class="col-12 font-24px"> Perfil del técnico</h3>
                <div class="col-12">
                    <div class="row pt-4">
                        <div class="col-12 col-lg-8">
                            <div class="row">
                                <div class="col-12 col-lg-auto text-center">
                                    <div> <img id="fototecnicoA" src="" alt="Ayudatec"> </div>
                                    
                                    
                                    <div id="tcnIniciar" class="pt-3" style="display: block">
                                        Debes iniciar sesión para poder contactar al técnico<br>
                                        <a href="registro.php" id="iniciaSesion" class="btn my-2 my-sm-0 btn-primary">
                                            Inicio sesión o Registro 
                                        <i class="icon-right-small"></i>
                                        </a>
                                    </div>
                                    
                                    <div id="tcnContacto" class="pt-3" style="display: none">
                                        <!-- Button trigger modal -->
                                        
                                        <button type="button" class="btn btn-primary font-12px" data-toggle="modal" data-target="#exampleModalCenter"> CONTACTARLO </button>
                                    </div>
                                    
                                </div>
                                <div class="col-12 col-lg text-center text-lg-left">
                                    <div id="nombreA"> </div>
                                    <div> <i class="icon-star font-yellow"></i> <i class="icon-star font-yellow"></i> <i class="icon-star font-yellow"></i> <i class="icon-star font-yellow"></i> <i class="icon-star font-yellow"></i> (15) </div>
                                    <div id="categoria" class="py-2 font-blue">
                                       
                                    </div>
                                    
                                    <div id="zonaA" class="font-12px"> </div>
                                    <div class="pt-1 font-14px" id="descripcion"> </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4 py-3 text-center text-lg-left">
                            <div class="row">
                                <div class="col-12 order-lg-2">
                                    <div class="py-2 font-14px"> <span class="">
                                       OTROS SERVICIOS <para></para>
                                    </span> </div>
                                    <div class="row justify-content-center justify-content-lg-start">
                                        <div class="col-3">
                                            <div class="row">
                                                <div class="col-12"> <img src="assets/images/categorias/electricidad.png" alt="Electricidad"> </div>
                                                <div class="col-12 font-12px"> Electricidad </div>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="row">
                                                <div class="col-12"> <img src="assets/images/categorias/electricidad.png" alt="Electricidad"> </div>
                                                <div class="col-12 font-12px"> Gasfitería </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="pt-1 font-12px"> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="comentarios">
        <div class="container">
            <div class="row">
                <div class="col">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item mr-md-3"> <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Comentarios</a> </li>
                        <li class="nav-item mx-md-3"> <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Horario</a> </li>
                        <li class="nav-item mx-md-3"> <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Acerca de mí</a> </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            <div class="row">
                                <!--<div class="col-12 font-14px py-2 font-gray"> 2 comentarios </div>
                                <div class="col-12 font-14px font-darkgray"> <em>Quiero comunicar mi infinito agradecimiento al equipo de AYUDATEC por todo el soporte y la gran ayuda brindada!</em> </div>
                                --><div class="col-12">
                                    <form action="">
                                        <div class="form-group py-2">
                                            <!--<textarea class="form-control font-14px" id="exampleFormControlTextarea1" placeholder="Escribe tu comentario" rows="3"></textarea>-->
                                            <div class="fb-comments" data-href="http://www.ayudatec.info/informacionTecnico.html" data-numposts="5" data-width="100%" data-order-by="social"></div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            
                        --></div>
                        <div class="tab-pane fade py-2" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <div class="row pb-3 justify-content-center justify-content-lg-start">
                                <div class="col-3 font-14px">
                                   <div>8:00 - 17:00 Lunes a viernes</div>
                                   <div>8:00 - 14:00 Sábados</div>
                                   <div>8:00 - 13:00 Domingos</div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade pb-5 font-14px" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                        Soy un trabajador honrado y responsable. Tengo 10 años de experiencia en la jardinería. Tengo disponibilidad para movilizarme hasta donde el cliente lo necesite. Desde pequeño he trabajado en los jardines de las casa de mi familia. Puedo asesorarlo para el control de plagas y de plantas decorativas del jardín.
                        </div>
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
                        <div class="col-12 col-lg  mb-3 mb-lg-0"> <a class="font-white" href="conocenos.php">¿Quiénes somos?</a> </div>
                        <div class="col-12 col-lg mb-3 mb-lg-0"> <a class="font-white" href="faq.php">Preguntas frecuentes</a> </div>
                        <div class="col-12 col-lg mb-3 mb-lg-0"> <a class="font-white" href="politicas.php">Términos y Condiciones</a> </div>
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
    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Contáctalo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div> <img id ="fototecnicoB" src="" alt="Ayudatec"> </div>
                                <div id="nombreB"> </div>
                                <div> <i class="icon-star font-yellow"></i> <i class="icon-star font-yellow"></i> <i class="icon-star font-yellow"></i> <i class="icon-star font-yellow"></i> <i class="icon-star font-yellow"></i></div>
                                <div><span class="pr-1 font-blue">Teléfono:</span><div id="telefono"></div></div>
                                <div><span class="pr-1 font-blue">Zona:</span><div id="zonaB"></div></div>
                                <div><span class="pr-1 font-blue">Opciones para contactarlo:</span>
                                    <div class="font-yellow font-28px"> <i class="icon-phone"></i> <i class="icon-mail"></i> <i class="icon-whatsapp"></i> <i class="icon-at "></i> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-center">
            
        
--><a href="gracias.html" class="btn btn-primary">Listo</a> </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
  
</script>
    
    
    <script src="assets/js/app.js"></script>
    <script src="assets/js/infoDB.js"></script>
    
</body>

</html>