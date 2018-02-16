<?php
	session_start();
    if (isset($_SESSION['user'])){
                session_destroy();
              
        }
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

    <title>AYUDATEC :: Registro</title>
</head>

<body>

    <header>
        <nav id="menu-registro" class="navbar navbar-expand-lg pt-3">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                <img src="assets/images/logo_ayudatec_bn.png" alt="Ayudatec" >
                </a>
                
                <form class="form-signin" action="backend/vistas/usuarios/validarusuario.php" method="post">
                                
                    <div class="btn-toolbar pt-2 justify-content-center" role="toolbar">
                        <div class="input-group pr-md-4">
                            <input type="text" id="nombreusuario" name="nombreusuario" class="form-control font-12px" placeholder="Usuario" >
                        </div>
                        <div class="input-group mt-3 mt-sm-0 ml-sm-2 pr-md-4">
                            <input type="password" id="contrasenia" name="contrasenia" class="form-control font-12px" placeholder="Contraseña">
                        </div>
                        
                        <input type="submit" class="btn btn-lineal btn-blue mx-2 mt-1 font-12px" name="login" value="ENTRAR">
                </div>
                </form>
                
            </div>
        </nav>
    </header>

     <section id="formulario" class="py-5">
        <div class="container">
          <!--<div class="row pb-5">
              <div class="col-12 font-20px text-center">
                
                </div>
                <h3 class="col-12 font-20px text-center">
                    Regístrate y encuentra tu técnico 
                </h3>
          </div> -->
          <div class="row">
              <div class="col-12 col-lg-6 pb-4">
                  <div class="row">
                    <div class="col-12 text-center text-lg-center">
                        <h1><img src="assets/images/mascota.svg" alt=""></h1>
                    </div>
                  </div>
              </div>
              <!--<form method="post" class="col-12 col-lg-8 pb-3">-->
              <div class="col-12 col-md">
                  <div class="row">
                      <h3 class="col-12 font-20px pt-3 mb-0 text-center text-lg-left">
                        Regístrese con su correo 
                    </h3>
                    <div class="col-12 font-18px pb-3 text-center text-lg-left">
                        y encuentre a su técnico 
                    </div>
                            <!--<div class="col-12 col-lg-7 pb-3">
                                <input type="text" id="nombre" class="form-control " placeholder="Nombre">
                            </div>
                            <div class="col-12 col-lg-5 pb-3">
                                <input type="text" id="telefono" class="form-control" placeholder="Telefono">
                            </div>-->
                            <div class="col-12 col-lg-4 pb-3 text-lg-left">
                                Correo:
                            </div>
                            <div class="col-12 col-lg-6 pb-3 text-lg-left">
                                <input type="email" id="correo" class="form-control" placeholder="ejemplo@mail.com" required>
                            </div>
                            <div class="col-12 col-lg-4 pb-3 text-lg-left">
                                Contraseña:
                            </div>
                            <div class="col-12 col-lg-6 pb-3 text-lg-left">
                                <input type="password" id="contrasena" class="form-control" placeholder="mínimo 6 caracteres" required minlength="6">
                            </div>
                            
                           <!-- <div class="col-12 col-lg-4 pb-3">
                                <select class="custom-select my-1 mr-sm-2" id="ciudad">
                                    <option selected>Ciudad...</option>
                                    <option value="1">Guayaquil</option>
                                    <option value="2">Quito</option>
                                    <option value="3">Cuenca</option>
                                  </select>
                            </div>
                            <div class="col-12 col-lg-4">
                                <select class="custom-select my-1 mr-sm-2" id="zona">
                                    <option selected>Zona...</option>
                                    <option value="1">Norte</option>
                                    <option value="2">Sur</option>
                                    <option value="3">Este</option>
                                  </select>
                            </div>-->
                           <!-- <div class="col-12 mt-3">
                               <div class="form-check form-check-inline">
                                  <label class="form-check-label" for="inlineRadio1">Sexo:</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                  <label class="form-check-label" for="inlineRadio1">Hombre</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                  <label class="form-check-label" for="inlineRadio2">Mujer</label>
                                </div>
                            </div>
                            -->
                            <div class="col-12 font-12px font-red pt-3 ">
                            <strong>TODOS LOS DATOS SON OBLIGATORIOS</strong>
                            </div>
                            <div class="col-12 mt-4 text-center" role="group">
                                <!--<a href= "tecnicos.html" class="btn btn-lineal btn-blue font-12px">REGISTRARSE</a>-->
                                <!--<input id="submit" type="submit" name="submit" value="REGISTRARSE" onclick="registrar()" class="btn btn-lineal btn-blue font-12px">-->
                                <button type="button" onclick="registrar()" class="btn btn-lineal btn-blue font-12px">REGISTRARSE</button>
                            </div>
                            
                            <div class="col-12 font-12px my-3">
                                <em>Al dar click en "Registrarse" estará de acuerdo con los <a class="font-darkblue" href="politicas.html">Términos y política de privacidad</a> de AYUDATEC.</em>
                            </div>
              </div>
          </div>
          <!--</form>-->
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
                            <a class="navbar-brand" href="#"><img src="assets/images/logo_ayudatec_bn.png" alt="Ayudatec" ></a>
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

<script src="assets/js/autenticar.js"></script>
<script src="assets/js/app.js"></script>
</body>

</html>
