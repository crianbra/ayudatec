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
    <title>AYUDATEC :: Preguntas frecuentes</title>
</head>

<body>
    <header>
        <nav id="menu-usuario" class="navbar fixed-top navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="index.php"> <img src="assets/images/logo_ayudatec_bn.png" alt="Ayudatec"> </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu_principal" aria-controls="menu_principal" aria-expanded="false" aria-label="Toggle navigation"> <i class="icon-list-nested font-white"></i> </button>
                <div class="collapse navbar-collapse justify-content-between" id="menu_principal">
                    <ul class="navbar-nav justify-content-around flex-1 bt-menu">
                        <li class="nav-item active"> <a class="nav-link" href="conocenos.php">CONÓCENOS </a> </li>
                        <li class="nav-item active"> <a class="nav-link" href="tecnicos.php">TÉCNICOS </a> </li>
                        <li class="nav-item "> <a class="nav-link disabled" href="comoFunciona.php">CÓMO FUNCIONA</a> </li>
                        <li class="nav-item "> <a class="nav-link disabled" href="contactenos.php">CONTÁCTENOS</a> </li>
                    </ul>
                    <form class="form-inline mt-4 my-lg-0">
                    <a href="registro.html" id="loginbtn" class="btn my-2 my-sm-0 btn-lineal">
                            Inicio sesión o Registro 
                            <i class="icon-right-small"></i>
                    </a>
                    
                    
                    <div class="btn-group font-white btnUsuario" id="usuariopanel" role="group">

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
    <section id="politicas" class="py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-12 col-lg-12 pt-4 pasos font-black ">
                    <h3>Preguntas frecuentes</h3> 
                </div>
                    <div class="col-12 col-lg-12 pt-4 pasos font-darkgray ">
                        
                        <p>El presente Política de Privacidad establece los términos en que Ayudatec usa y protege la información que es proporcionada por sus usuarios al momento de utilizar su sitio web. Esta compañía está comprometida con la seguridad de los datos de sus usuarios. Cuando le pedimos llenar los campos de información personal con la cual usted pueda ser identificado, lo hacemos asegurando que sólo se empleará de acuerdo con los términos de este documento. Sin embargo esta Política de Privacidad puede cambiar con el tiempo o ser actualizada por lo que le recomendamos y enfatizamos revisar continuamente esta página para asegurarse que está de acuerdo con dichos cambios.</p>
                        <p><strong>¿Cómo funciona?</strong></p>
                        <p>Nuestro sitio web podrá recoger información personal por ejemplo: Nombre,&nbsp; información de contacto como&nbsp; su dirección de correo electrónica e información demográfica. Así mismo cuando sea necesario podrá ser requerida información específica para procesar algún pedido o realizar una entrega o facturación.</p>
                        <p><strong>¿Cómo me afilio a AYUDATEC?</strong></p>
                        <p>Nuestro sitio web emplea la información con el fin de proporcionar el mejor servicio posible, particularmente para mantener un registro de usuarios, de pedidos en caso que aplique, y mejorar nuestros productos y servicios. &nbsp;Es posible que sean enviados correos electrónicos periódicamente a través de nuestro sitio con ofertas especiales, nuevos productos y otra información publicitaria que consideremos relevante para usted o que pueda brindarle algún beneficio, estos correos electrónicos serán enviados a la dirección que usted proporcione y podrán ser cancelados en cualquier momento.</p>
                        <p>Ayudatec está altamente comprometido para cumplir con el compromiso de mantener su información segura. Usamos los sistemas más avanzados y los actualizamos constantemente para asegurarnos que no exista ningún acceso no autorizado.</p>
                        
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


    <script src="https://www.gstatic.com/firebasejs/4.8.2/firebase.js"></script>
<script src="assets/js/app.js"></script>
    
    
</body>

</html>