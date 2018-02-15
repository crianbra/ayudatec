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
    <header>
        <nav id="menu-usuario" class="navbar fixed-top navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand ml-md-2" href="index.php"> <img src="assets/images/logo_ayudatec_bn.png" alt="Ayudatec"> </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu_principal" aria-controls="menu_principal" aria-expanded="false" aria-label="Toggle navigation"> <i class="icon-list-nested font-white"></i> </button>
                <div class="collapse navbar-collapse justify-content-between" id="menu_principal">
                    <ul class="navbar-nav justify-content-around flex-1 bt-menu">
                        <li class="nav-item active"> <a class="nav-link" href="conocenos.php">CONÓCENOS </a> </li>
                        <li class="nav-item active"> <a class="nav-link" href="tecnicos.php">TÉCNICOS </a> </li>
                        <li class="nav-item "> <a class="nav-link disabled" href="comoFunciona.php">CÓMO FUNCIONA</a> </li>
                        <li class="nav-item "> <a class="nav-link disabled" href="contactenos.php">CONTÁCTENOS</a> </li>
                    </ul>
                    <form class="form-inline mt-4 my-lg-0"> <a href="registro.php" id="loginbtn" style.display="block" class="btn my-2 my-sm-0 btn-lineal">
                            Inicio sesión o Registro 
                            <i class="icon-right-small"></i>
                    </a>
                        <div class="btn-group font-white btnUsuario" id="usuariopanel" style.display="none" role="group">
                            <!--                        <span class="cursor-pointer align-self-center font-20px">
                           <i class="icon-bell-alt font-white"></i><span class="notifi">1</span>
                        </span>
--><span id="nombreusuario"> </span>
                            <button id="btnGroupUser" type="button" class="btn font-white dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <img style="width: 30px;" src="" alt="Ayudatec" id="fotousuario"> </button>
                            <div class="dropdown-menu" aria-labelledby="btnGroupUser"> <a class="dropdown-item" href="perfil.php">Perfil</a> <a class="dropdown-item" id="logout" href="index.php">Cerrar Sesión</a> </div>
                        </div>
                    </form>
                </div>
            </div>
        </nav>
    </header>


    <section class="mt-5 pt-4 font-12px">
        <nav aria-label="">
            <div class="container">
                <ol class="breadcrumb pl-0">
                    <li class="breadcrumb-item"><a href="index.php" class="font-darkblue">Inicio</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Técnicos disponibles</li>
                </ol>
            </div>
        </nav>
    </section>

    <section id="tecnicos" class="py-3 mb-3">
        <div class="container">
            <div class="row">
                <h3 class="col-12 font-24px"> Técnicos disponibles</h3>
                
                <div class="col-12">
                    <div class="input-group my-3">
                    <div class="input-group mb-3 ">

                        <select id="picksite" class="custom-select input-busqueda-tec pl-4 font-gray">
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
                            <button class="btn btn-lineal-nor font-14px font-gray" onClick="loadPage()"><i class="icon-search"></i></button>
                        </div>
                    </div>
                </div>
                </div>


                <div class="col-12 col-lg order-2 order-lg-1">
                    <div class="row pt-4">

                        <!--Foto, estrellas y botón perfil Técnico 1-->
                        <div class="col-12 col-lg-5 text-center">
                            <div class="row">
                                <div class="col-6 col-lg-12"> <img id="fototecnico1" src="" alt="Jardinero"> </div>
                                <div class="col-6 col-lg-12 py-2">
                                    <div class="row">
                                        <div class="col-12 d-lg-none" id="nombre1"> </div>
                                        <div class="col-12"> <i class="icon-star font-yellow"></i> <i class="icon-star font-yellow"></i> <i class="icon-star font-yellow"></i> <i class="icon-star font-yellow"></i> <i class="icon-star font-yellow"></i> </div>
                                        <div class="col-12"> <a href="informacionTecnico.html" class="btn btn-lineal btn-blue">
                                                VER PERFIL
                                            </a> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Datos técnico 1-->
                        <div class="col-12 col-lg text-center">
                            <div class="row">
                                <div class="col-12 d-none d-lg-block" id="nombre1a"> </div>
                                <div class="col-12 py-3"> <span class="tag-categoria" id="categoria1">
                                        
                                    </span> </div>
                                <div class="col-12 font-12px" id="zona1"> </div>
                                <div class="col-12 pb-4 font-12px" id="descripcion1"> </div>
                            </div>
                        </div>
                        <!--Fin técnico1-->

                        <!--Foto, estrellas y botón perfil técnico 2-->
                        <div class="col-12 my-4 px-4">
                            <div class="linea-hor-gray"></div>
                        </div>
                        <div class="col-12 col-lg-5 text-center">
                            <div class="row">
                                <div class="col-6 col-lg-12"> <img id="fototecnico2" src="" alt="zapatero"> </div>
                                <div class="col-6 col-lg-12 py-2">
                                    <div class="row">
                                        <div class="col-12 d-lg-none" id="nombre2"> </div>
                                        <div class="col-12"> <i class="icon-star font-yellow"></i> <i class="icon-star font-yellow"></i> <i class="icon-star font-yellow"></i> <i class="icon-star font-yellow"></i> <i class="icon-star font-yellow"></i> </div>
                                        <div class="col-12"> <a href="jorgep.html" class="btn btn-lineal btn-blue">
                                                VER PERFIL
                                            </a> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Datos técnico 2-->
                        <div class="col-12 col-lg text-center">
                            <div class="row">
                                <div class="col-12 d-none d-lg-block" id="nombre2a"> </div>
                                <div class="col-12 py-3"> <span class="tag-categoria" id="categoria2">
                                        
                                    </span> </div>
                                <div class="col-12 font-12px" id="zona2"> </div>
                                <div class="col-12 pb-4 font-14px" id="descripcion2"> </div>
                            </div>
                        </div>
                        <!--Fin técnico2-->

                        <!--Foto, estrellas y botón perfil técnico 3-->
                        <div class="col-12 my-4 px-4">
                            <div class="linea-hor-gray"></div>
                        </div>
                        <div class="col-12 col-lg-5 text-center">
                            <div class="row">
                                <div class="col-6 col-lg-12"> <img id="fototecnico3" src="" alt="Tecnico"> </div>
                                <div class="col-6 col-lg-12 py-2">
                                    <div class="row">
                                        <div class="col-12 d-lg-none" id="nombre3"> </div>
                                        <div class="col-12"> <i class="icon-star font-yellow"></i> <i class="icon-star font-yellow"></i> <i class="icon-star font-yellow"></i> <i class="icon-star font-yellow"></i> <i class="icon-star font-yellow"></i> </div>
                                        <div class="col-12"> <a href="albertoG.html" class="btn btn-lineal btn-blue">
                                                VER PERFIL
                                            </a> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Datos técnico 3-->
                        <div class="col-12 col-lg text-center">
                            <div class="row">
                                <div class="col-12 d-none d-lg-block" id="nombre3a"> </div>
                                <div class="col-12 py-3"> <span class="tag-categoria" id="categoria3">
                                        
                                    </span> </div>
                                <div class="col-12 font-12px" id="zona3"> </div>
                                <div class="col-12 pb-4 font-14px" id="descripcion3"> </div>
                            </div>
                        </div>
                        <!--Fin técnico3-->


                        <!--Foto, estrella y botón perfil Técnico 4-->
                        <div class="col-12 my-4 px-4">
                            <div class="linea-hor-gray"></div>
                        </div>
                        <div class="col-12 col-lg-5 text-center">
                            <div class="row">
                                <div class="col-6 col-lg-12"> <img id="fototecnico4" src="" alt="Tecnico"> </div>
                                <div class="col-6 col-lg-12 py-2">
                                    <div class="row">
                                        <div class="col-12 d-lg-none" id="nombre4"> </div>
                                        <div class="col-12"> <i class="icon-star font-yellow"></i> <i class="icon-star font-yellow"></i> <i class="icon-star font-yellow"></i> <i class="icon-star font-yellow"></i> <i class="icon-star font-yellow"></i> </div>
                                        <div class="col-12"> <a href="omarG.html" class="btn btn-lineal btn-blue">
                                                VER PERFIL
                                            </a> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Datos técnico-->
                        <div class="col-12 col-lg text-center">
                            <div class="row">
                                <div class="col-12 d-none d-lg-block" id="nombre4a"> </div>
                                <div class="col-12 py-3"> <span class="tag-categoria" id="categoria4">
                                        
                                    </span> </div>
                                <div class="col-12 font-12px" id="zona4"> </div>
                                <div class="col-12 pb-4 font-14px" id="descripcion4"> </div>
                            </div>
                        </div>
                        <!--Fin técnico4-->

                        <!--Foto, estrella y botón perfil Técnico 5-->
                        <div class="col-12 my-4 px-4">
                            <div class="linea-hor-gray"></div>
                        </div>
                        <div class="col-12 col-lg-5 text-center">
                            <div class="row">
                                <div class="col-6 col-lg-12"> <img id="fototecnico5" src="" alt="Tecnico"> </div>
                                <div class="col-6 col-lg-12 py-2">
                                    <div class="row">
                                        <div class="col-12 d-lg-none" id="nombre5"> </div>
                                        <div class="col-12"> <i class="icon-star font-yellow"></i> <i class="icon-star font-yellow"></i> <i class="icon-star font-yellow"></i> <i class="icon-star font-yellow"></i> <i class="icon-star font-yellow"></i> </div>
                                        <div class="col-12"> <a href="byronJ.html" class="btn btn-lineal btn-blue">
                                                VER PERFIL
                                            </a> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Datos técnico-->
                        <div class="col-12 col-lg text-center">
                            <div class="row">
                                <div class="col-12 d-none d-lg-block" id="nombre5a"> </div>
                                <div class="col-12 py-3"> <span class="tag-categoria" id="categoria5">
                                        
                                    </span> </div>
                                <div class="col-12 font-12px" id="zona5"> </div>
                                <div class="col-12 pb-4 font-14px" id="descripcion5"> </div>
                            </div>
                        </div>
                        <!--Fin técnico5-->
                        <!--Foto, estrella y botón perfil Técnico 6-->
                        <div class="col-12 my-4 px-4">
                            <div class="linea-hor-gray"></div>
                        </div>
                        <div class="col-12 col-lg-5 text-center">
                            <div class="row">
                                <div class="col-6 col-lg-12"> <img id="fototecnico6" src="" alt="Tecnico"> </div>
                                <div class="col-6 col-lg-12 py-2">
                                    <div class="row">
                                        <div class="col-12 d-lg-none" id="nombre6"> </div>
                                        <div class="col-12"> <i class="icon-star font-yellow"></i> <i class="icon-star font-yellow"></i> <i class="icon-star font-yellow"></i> <i class="icon-star font-yellow"></i> <i class="icon-star font-yellow"></i> </div>
                                        <div class="col-12"> <a href="joseP.html" class="btn btn-lineal btn-blue">
                                                VER PERFIL
                                            </a> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Datos técnico-->
                        <div class="col-12 col-lg text-center">
                            <div class="row">
                                <div class="col-12 d-none d-lg-block" id="nombre6a"> </div>
                                <div class="col-12 py-3"> <span class="tag-categoria" id="categoria6">
                                        
                                    </span> </div>
                                <div class="col-12 font-12px" id="zona6"> </div>
                                <div class="col-12 pb-4 font-14px" id="descripcion6"> </div>
                            </div>
                        </div>
                        <!--Fin técnico6-->

                        <!--Foto, estrella y botón perfil Técnico 7-->
                        <div class="col-12 my-4 px-4">
                            <div class="linea-hor-gray"></div>
                        </div>
                        <div class="col-12 col-lg-5 text-center">
                            <div class="row">
                                <div class="col-6 col-lg-12"> <img id="fototecnico7" src="" alt="Tecnico"> </div>
                                <div class="col-6 col-lg-12 py-2">
                                    <div class="row">
                                        <div class="col-12 d-lg-none" id="nombre7"> </div>
                                        <div class="col-12"> <i class="icon-star font-yellow"></i> <i class="icon-star font-yellow"></i> <i class="icon-star font-yellow"></i> <i class="icon-star font-yellow"></i> <i class="icon-star font-yellow"></i> </div>
                                        <div class="col-12"> <a href="felixZ.html" class="btn btn-lineal btn-blue">
                                                VER PERFIL
                                            </a> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Datos técnico-->
                        <div class="col-12 col-lg text-center">
                            <div class="row">
                                <div class="col-12 d-none d-lg-block" id="nombre7a"> </div>
                                <div class="col-12 py-3"> <span class="tag-categoria" id="categoria7">
                                        
                                    </span> </div>
                                <div class="col-12 font-12px" id="zona7"> </div>
                                <div class="col-12 pb-4 font-14px" id="descripcion7"> </div>
                            </div>
                        </div>
                        <!--Fin técnico7-->
                        
                        <!--Foto, estrella y botón perfil Técnico 8-->
                        <div class="col-12 my-4 px-4">
                            <div class="linea-hor-gray"></div>
                        </div>
                        <div class="col-12 col-lg-5 text-center">
                            <div class="row">
                                <div class="col-6 col-lg-12"> <img id="fototecnico8" src="" alt="Tecnico"> </div>
                                <div class="col-6 col-lg-12 py-2">
                                    <div class="row">
                                        <div class="col-12 d-lg-none" id="nombre8"> </div>
                                        <div class="col-12"> <i class="icon-star font-yellow"></i> <i class="icon-star font-yellow"></i> <i class="icon-star font-yellow"></i> <i class="icon-star font-yellow"></i> <i class="icon-star font-yellow"></i> </div>
                                        <div class="col-12"> <a href="darwinC.html" class="btn btn-lineal btn-blue">
                                                VER PERFIL
                                            </a> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Datos técnico-->
                        <div class="col-12 col-lg text-center">
                            <div class="row">
                                <div class="col-12 d-none d-lg-block" id="nombre8a"> </div>
                                <div class="col-12 py-3"> <span class="tag-categoria" id="categoria8">
                                        
                                    </span> </div>
                                <div class="col-12 font-12px" id="zona8"> </div>
                                <div class="col-12 pb-4 font-14px" id="descripcion8"> </div>
                            </div>
                        </div>
                        <!--Fin técnico8-->
                        
                        <!--Foto, estrella y botón perfil Técnico 9-->
                        <div class="col-12 my-4 px-4">
                            <div class="linea-hor-gray"></div>
                        </div>
                        <div class="col-12 col-lg-5 text-center">
                            <div class="row">
                                <div class="col-6 col-lg-12"> <img id="fototecnico9" src="" alt="Tecnico"> </div>
                                <div class="col-6 col-lg-12 py-2">
                                    <div class="row">
                                        <div class="col-12 d-lg-none" id="nombre9"> </div>
                                        <div class="col-12"> <i class="icon-star font-yellow"></i> <i class="icon-star font-yellow"></i> <i class="icon-star font-yellow"></i> <i class="icon-star font-yellow"></i> <i class="icon-star font-yellow"></i> </div>
                                        <div class="col-12"> <a href="antonioV.html" class="btn btn-lineal btn-blue">
                                                VER PERFIL
                                            </a> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Datos técnico-->
                        <div class="col-12 col-lg text-center">
                            <div class="row">
                                <div class="col-12 d-none d-lg-block" id="nombre9a"> </div>
                                <div class="col-12 py-3"> <span class="tag-categoria" id="categoria9">
                                        
                                    </span> </div>
                                <div class="col-12 font-12px" id="zona9"> </div>
                                <div class="col-12 pb-4 font-14px" id="descripcion9"> </div>
                            </div>
                        </div>
                        <!--Fin técnico9-->
                        
                        <!--Foto, estrella y botón perfil Técnico 10-->
                        <div class="col-12 my-4 px-4">
                            <div class="linea-hor-gray"></div>
                        </div>
                        <div class="col-12 col-lg-5 text-center">
                            <div class="row">
                                <div class="col-6 col-lg-12"> <img id="fototecnico10" src="" alt="Tecnico"> </div>
                                <div class="col-6 col-lg-12 py-2">
                                    <div class="row">
                                        <div class="col-12 d-lg-none" id="nombre10"> </div>
                                        <div class="col-12"> <i class="icon-star font-yellow"></i> <i class="icon-star font-yellow"></i> <i class="icon-star font-yellow"></i> <i class="icon-star font-yellow"></i> <i class="icon-star font-yellow"></i> </div>
                                        <div class="col-12"> <a href="darwinM.html" class="btn btn-lineal btn-blue">
                                                VER PERFIL
                                            </a> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Datos técnico-->
                        <div class="col-12 col-lg text-center">
                            <div class="row">
                                <div class="col-12 d-none d-lg-block" id="nombre10a"> </div>
                                <div class="col-12 py-3"> <span class="tag-categoria" id="categoria10">
                                        
                                    </span> </div>
                                <div class="col-12 font-12px" id="zona10"> </div>
                                <div class="col-12 pb-4 font-14px" id="descripcion10"> </div>
                            </div>
                        </div>
                        <!--Fin técnico10-->
                        
                        <!--Foto, estrella y botón perfil Técnico 11-->
                        <div class="col-12 my-4 px-4">
                            <div class="linea-hor-gray"></div>
                        </div>
                        <div class="col-12 col-lg-5 text-center">
                            <div class="row">
                                <div class="col-6 col-lg-12"> <img id="fototecnico11" src="" alt="Tecnico"> </div>
                                <div class="col-6 col-lg-12 py-2">
                                    <div class="row">
                                        <div class="col-12 d-lg-none" id="nombre11"> </div>
                                        <div class="col-12"> <i class="icon-star font-yellow"></i> <i class="icon-star font-yellow"></i> <i class="icon-star font-yellow"></i> <i class="icon-star font-yellow"></i> <i class="icon-star font-yellow"></i> </div>
                                        <div class="col-12"> <a href="williamC.html" class="btn btn-lineal btn-blue">
                                                VER PERFIL
                                            </a> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Datos técnico-->
                        <div class="col-12 col-lg text-center">
                            <div class="row">
                                <div class="col-12 d-none d-lg-block" id="nombre11a"> </div>
                                <div class="col-12 py-3"> <span class="tag-categoria" id="categoria11">
                                        
                                    </span> </div>
                                <div class="col-12 font-12px" id="zona11"> </div>
                                <div class="col-12 pb-4 font-14px" id="descripcion11"> </div>
                            </div>
                        </div>
                        <!--Fin técnico11-->
                        

                        <!--Fin de listado de técnico-->
                    </div>
                </div>
                <div class="col-12 col-lg-auto text-right order-1 order-lg-2">
                    <!--<form class="input-group my-3">
                        <div class="input-group-prepend fondo-search"> <i class="icon-search"></i> </div>
                        <input type="text" class="form-control input-text" placeholder="¿Qué servicio necesitas?">
                        <button type="reset" class="input-group-append cursor-pointer fondo-x"> <i class="icon-cancel-circled"></i> </button>
                    </form>-->
                    <div class="row">
                        <div class="col-12 text-center text-lg-right font-blue font-14px"> De click aquí para ampliar la zona </div>
                    </div>
                    <div class="row justify-content-center justify-content-lg-end pt-2">
                        <div class="col-6 input-group pb-3 ">
                            <select id="cmbZona" class="custom-select input-zona font-white font-14px py-1">
                                <option selected value="notfound.php">Cambiar zona</option>
                                <option value="albanileria.php">Noroeste</option>
                                <option value="notfound.php">Noreste</option>
                                <option value="notfound.php">Suroeste</option>
                                <option value="notfound.php">Sureste</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 text-center d-none d-md-block"> 
                        <img id="imgMapa" class="img-fluid" src="assets/images/zonas/general.jpg" alt="mapa"> </div>
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
                <div class="col-6 col-lg-4 text-center align-self-center iconos-white-a "> <a href="https://www.facebook.com/AyudatecLatam/" target="_blank"><i class="icon-facebook font-28px"></i></a> <a href="https://twitter.com/miayudatec" target="_blank"><i class="icon-twitter font-28px"></i></a> <a href="https://www.instagram.com/miayudatec/"
                        target="_blank"><i class="icon-instagram-filled font-28px"></i></a> </div>
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
                <div class="col-12 my-3 linea-hor"> </div>
            </div>
            <div class="row pt-3">
                <div class="col-12 col-lg-4 text-center mb-4 order-lg-3">
                    <div class="row">
                        <div class="col-12 mb-2"> AFILÍATE </div>
                        <div class="col-12"> <a href="preregistro.php" class="btn-lineal btn-yellow font-12px py-1 px-2">
                                QUIERO SER TÉCNICO
                            </a> </div>
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
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="assets/js/mapa.js"></script>
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
    <script src="assets/js/database.js"></script>
    <script src="assets/js/app.js"></script>

</body>

</html>