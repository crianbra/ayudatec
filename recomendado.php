<?php
	session_start();
?>
<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>AYUDATEC :: Recomendación</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/vendors/fontello/css/instagram.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/fav-icon.png" />
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script>$( "#btnEnviar" ).click(function() {
          console.log($("#politica").val());  
          if ($("#politica").val() == true) {
  }
});</script>

</head>

<body>
    <!-- <body onload="cargarUser()"> -->
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
                    <form class="form-inline mt-4 my-lg-0"> <a href="registro.html" id="loginbtn" class="btn my-2 my-sm-0 btn-lineal">
                            Inicio sesión o Registro 
                            <i class="icon-right-small"></i>
                    </a>
                        <div class="btn-group font-white btnUsuario" id="usuariopanel" role="group">
                            <!--                        <span class="cursor-pointer align-self-center font-20px">
                           <i class="icon-bell-alt font-white"></i><span class="notifi">1</span>
                        </span>-->
                        <span id="nombreusuario"> </span>
                            <button id="btnGroupUser" type="button" class="btn font-white dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <img style="width: 30px;" src="" alt="Ayudatec" id="fotousuario"> </button>
                            <div class="dropdown-menu" aria-labelledby="btnGroupUser"> <a class="dropdown-item" href="#">Perfil</a> <a class="dropdown-item" id="logout" href="index.php">Cerrar Sesión</a> </div>
                        </div>
                    </form>
                </div>
            </div>
        </nav>
    </header>
    <section id="comentarios" class="mt-5 py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="col-12 font-24px"> Recomendación</h3>
                    <div class="col-12 font-12px font-red py-2 ">
                            <strong>* CAMPOS OBLIGATORIOS</strong>
                            </div>
                            
                    <div class="row justify-content-center">
                        <div class="col-8 font-14px">
                         <div class="pb-3 font-20px font-darkblue">Datos del técnico a recomendar</div>
                          <form action="preregistro.php" method="post">
                           
                            <div class="form-group row">
                                <label for="txtNombre" class="col-sm-2 col-form-label">Nombre:*</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre"> </div>
                            </div>
                            <div class="form-group row">
                                <label for="txtCorreo" class="col-sm-2 col-form-label">Correo:</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="correo" name="correo" placeholder="Correo"> </div>
                            </div>
                            <div class="form-group row">
                                <label for="txtTelefono" class="col-sm-2 col-form-label">Teléfono:*</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Teléfono"> </div>
                            </div>
                            <div class="form-group row">
                                <label for="txtCiudad" class="col-sm-2 col-form-label">Ciudad:*</label>
                                <div class="col-sm-10">
                                    <select class="custom-select my-1 mr-sm-2" id="ciudad" name="ciudad">
                                        <option selected>Ciudad...</option>
                                        <option value="1">Guayaquil</option>
                                        <option value="2">Quito</option>
                                        <option value="3">Cuenca</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label for="txtGenero" class="col-sm-2 col-form-label">Género:*</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="genero" id="genero" value="option1">
                                    <label class="form-check-label" for="genero">Masculino</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="genero" id="genero" value="option2">
                                    <label class="form-check-label" for="inlineRadio2">Femenino</label>
                                </div>
                            </div>
                          <div class="py-2 font-20px font-darkblue">Servicios que ofrece</div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1"> Por ejemplo: Cerrajería, Tapicería, zapatería, etc.</label>
                                <textarea class="form-control" id="especialidad" name="especialidad" rows="3"></textarea>
                            </div>
                            
                            <div class="pt-4 font-20px font-darkblue">Háblenos más del servicio que le brindó el técnico</div>
                            <div class="form-group font-14px">
                                <label for="exampleFormControlTextarea1">Puede ser por ejemplo: La calidad, puntualidad, profesionalismo, etc.</label>
                                <textarea class="form-control" id="mensaje" name="mensaje" rows="3"></textarea>
                            </div> 
                            
                            
                            <div class="col-12 mt-4 text-center mx-2" role="group">
                                <input id="submit" type="submit" name="submit" value="Enviar" id="btnEnviar" class="tn px-2 py-1 mx-1 my-1 btn-lineal btn-blue font-18px">
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer id="fot-perfil" class="py-4 font-12px">
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
                        <div class="col-12 font-lightgray font-w-100"> © 2018 Ayudatec. Todos los derechos reservados. </div>
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
                                <div> <img src="assets/images/tecnicos/juan-r001.png" alt="Ayudatec"> </div>
                                <div> JUAN R. </div>
                                <div> <i class="icon-star font-yellow"></i> <i class="icon-star font-yellow"></i> <i class="icon-star font-yellow"></i> <i class="icon-star font-yellow"></i> <i class="icon-star font-yellow"></i></div>
                                <div><span class="pr-1 font-blue">Teléfono:</span>0998192271</div>
                                <div><span class="pr-1 font-blue">Zona:</span>Centro, Sur</div>
                                <div><span class="pr-1 font-blue">Opciones para contactarlo:</span>
                                    <div class="font-yellow font-28px"> <i class="icon-phone"></i> <i class="icon-mail"></i> <i class="icon-whatsapp"></i> <i class="icon-at "></i> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-center">
                    <!--
        <button type="button" class="btn btn-primary" data-dismiss="modal">Listo</button>
        
--><a href="gracias.html" class="btn btn-primary">Listo</a> </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
    <script src="https://www.gstatic.com/firebasejs/4.8.2/firebase.js"></script>
    <script>
        // Initialize Firebase
        var config = {
            apiKey: "AIzaSyCrBbuj6yLwG_t_gyfhi1bi9ZjRuLnbSDA"
            , authDomain: "ayudatec-3e0ee.firebaseapp.com"
            , databaseURL: "https://ayudatec-3e0ee.firebaseio.com"
            , projectId: "ayudatec-3e0ee"
            , storageBucket: "ayudatec-3e0ee.appspot.com"
            , messagingSenderId: "5686820743"
        };
        firebase.initializeApp(config);
    </script>
    <script src="assets/js/app.js"></script>
</body>

</html>