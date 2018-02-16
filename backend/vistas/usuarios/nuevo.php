<?php
    //define("RUTA_PRINCIPAL", $_SERVER['DOCUMENT_ROOT'].'/ayudatec/');
    //define("RUTA_BACKEND", RUTA_PRINCIPAL.'backend/');
    include_once("../auth.php");

    $guardado = false;
    $msg = "";
    if (isset($_POST['nombreusuario']) && $_POST['nombreusuario'] ==! "") {
        session_start();
        /*include_once("../../collectors/usuarioCollector.php");
        $usuarioCollectorObj = new UsuarioCollector();
        $_SESSION["user"] = $usuarioCollectorObj->showUsuario(3);
         var_dump($_SESSION["user"]->getIdusuario());
        exit(); */

        /* echo "descripcion". $_POST['descripcion'];
        exit(); */
        
        include_once("../../collectors/usuarioCollector.php");
        $UsuarioCollectorObj = new UsuarioCollector();
        $usuario = $UsuarioCollectorObj->createUsuario($_POST['nombreusuario'], $_POST['contrasenia'], $_POST['personaid'], $_POST['rolid']);
        /* echo "Resultado: <br>";
        var_dump($citas); */
        if ($usuario == true) {
            $msg = "El usuario fue guardado con éxito";
            $guardado = true;
        } else {
            $msg = "Error:".$resp;
        }

    } else {
        $guardado = false;
    }
    /* session_start();
    $_SESSION["exito"] = "true"; */
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <link rel="shortcut icon" href="../../assets/images/favicon.png">

    <title>Nueva Persona</title>

    <!--Core CSS -->
    <link href="../../assets/bs3/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../assets/css/bootstrap-reset.css" rel="stylesheet">
    <link href="../../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

    <link rel="stylesheet" href="../../assets/js/data-tables/DT_bootstrap.css" />

    <!-- Custom styles for this template -->
    <link href="../../assets/css/style.css" rel="stylesheet">
    <link href="../../assets/css/style-responsive.css" rel="stylesheet" />

</head>

<body>

<section id="container" >
<!--header end-->
<!--header start-->
<?include_once("../header.php");?>
<!--header end-->
<!--aside start-->
<?include_once("../aside.php");?>
<!--aside end-->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
        <!-- page start-->
         <!--breadcrumbs start -->
                    <ul class="breadcrumb">
                        <li><a href="index.php">Usuarios</a></li>
                        <li class="active">Nuevo Usuario</li>
                    </ul>
                    <!--breadcrumbs end -->

        <div class="row">
            <div class="col-sm-12">
                <section class="panel">
                    <header class="panel-heading">
                    <h4> <strong>NUEVO USUARIO</strong> </h4>

                    </header>

                    <?php
                    if ($guardado == false) {
                    ?>
                        <div class="panel-body">
                        <?php
                        if ($msg !== "") {
                            echo $msg;
                        }
                        ?>
                            <div class="form">

                                <form class="cmxform form-horizontal " id="personaForm" method="post" action="">
                                    <div class="form-group ">
                                        <label for="nombreusuario" class="control-label col-lg-3">Nombre Usuario</label>
                                        <div class="col-lg-6">
                                            <input class="form-control" id="nombreusuario" name="nombreusuario" type="text" placeholder="Nombre Usuario"/>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="contrasenia" class="control-label col-lg-3">Contrasenia</label>
                                        <div class="col-lg-6">
                                            <input class="form-control" id="contrasenia" name="contrasenia" type="text" placeholder="Contrasenia"/>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="personaid" class="control-label col-lg-3">Nombre Persona</label>
                                        <div class="col-lg-6">
                                                <select class="form-control" id="personaid" name="personaid" required>
                                                    <option value="" hidden>Seleccione la persona que busca</option>
                                                    <?php
                                                        include_once("../../collectors/personaCollector.php");
                                                        $PersonaCollectorObj = new PersonaCollector();
                                                        $persona = $PersonaCollectorObj->showPersonas();
                                                        foreach ($persona as $ca){
                                                    ?>
                                                    <option value="<?=$ca->getIdpersona();?>"><?=$ca->getNombre();?><?=" "?><?=$ca->getApellido();?></option>
                                                    <?php
                                                        }
                                                    ?>
                                                </select>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="rolid" class="control-label col-lg-3">Roles</label>
                                        <div class="col-lg-6">
                                                <select class="form-control" id="rolid" name="rolid" required>
                                                    <option value="" hidden>Seleccione el rol que busca</option>
                                                    <?php
                                                        include_once("../../collectors/rolCollector.php");
                                                        $RolCollectorObj = new RolCollector();
                                                        $rol = $RolCollectorObj->showRols();
                                                        foreach ($rol as $ca){
                                                    ?>
                                                    <option value="<?=$ca->getIdrol();?>"><?=$ca->getDescripcion();?></option>
                                                    <?php
                                                        }
                                                    ?>
                                                </select>
                                        </div>
                                    </div>
                                    
                                    <!-- 
                                    <div class="form-group ">
                                        <label for="agree" class="control-label col-lg-3 col-sm-3">Activo</label>
                                        <div class="col-lg-6 col-sm-9">
                                            <input  type="checkbox" style="width: 20px" class="checkbox form-control" id="activo" name="activo" checked/>
                                        </div>
                                    </div> -->
                                    <div class="form-group">
                                        <div class="col-lg-offset-3 col-lg-6">
                                            <button class="btn btn-primary" type="submit">Guardar</button>
                                            <button class="btn btn-default" type="reset">Limpiar</button>
                                            <a href="index.php" class="btn btn-default" type="button">Cancelar</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        

                
                    <?php
                    } else {
                        ?>
                        <div class="panel-body">
                            <h2><?=$msg?></h2>
                            <a href="index.php">Volver a buscar técnicos</a>
                        </div>
                        <?php
                    }
                    ?>
                    </section>
            </div>
        </div>
        <!-- page end-->
        </section>
    </section>
    <!--main content end-->

</section>

<!-- Placed js at the end of the document so the pages load faster -->

<!--Core js-->
<script src="../../assets/js/jquery-1.10.2.min.js"></script>
<script src="../../assets/js/jquery-migrate.js"></script>

<script src="../../assets/bs3/js/bootstrap.min.js"></script>
<script class="include" type="text/javascript" src="../../assets/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="../../assets/js/jquery.scrollTo.min.js"></script>
<script src="../../assets/js/jQuery-slimScroll-1.3.0/jquery.slimscroll.js"></script>
<script src="../../assets/js/jquery.nicescroll.js"></script>
<!--Easy Pie Chart-->
<script src="../../assets/js/easypiechart/jquery.easypiechart.js"></script>
<!--Sparkline Chart-->
<script src="../../assets/js/sparkline/jquery.sparkline.js"></script>
<!--jQuery Flot Chart-->

<script type="text/javascript" src="../../assets/js/data-tables/jquery.dataTables.js"></script>
<script type="text/javascript" src="../../assets/js/data-tables/DT_bootstrap.js"></script>

<!--common script init for all pages-->
<script src="../../assets/js/scripts.js"></script>

<!--script for this page only-->
<script src="../../assets/js/table-editable.js"></script>

<!-- END JAVASCRIPTS -->
<script>
    jQuery(document).ready(function() {
        EditableTable.init();
    });
//    
//     $(document).ready(function() {
//    $('#editable-sample').DataTable( {
//       "language": {
//        "search": 'Buscar'
//    }
//    } );
//} );
</script>

</body>
</html>
