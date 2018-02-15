 <?php
    //define("RUTA_PRINCIPAL", $_SERVER['DOCUMENT_ROOT'].'/ayudatec/');
    //define("RUTA_BACKEND", RUTA_PRINCIPAL.'backend/');
    include_once("../constantes.php");

    $guardado = false;
    $msg = "";
    if (isset($_POST['nombre']) && $_POST['nombre'] ==! "") {
        session_start();
        /*include_once("../../collectors/usuarioCollector.php");
        $usuarioCollectorObj = new UsuarioCollector();
        $_SESSION["user"] = $usuarioCollectorObj->showUsuario(3);
         var_dump($_SESSION["user"]->getIdusuario());
        exit(); */

        /* echo "descripcion". $_POST['descripcion'];
        exit(); */

        include_once("../../collectors/personaCollector.php");
        $personaCollectorObj = new personaCollector();
        $persona = $personaCollectorObj->createPersona($_POST['nombre'], $_POST['apellido'], $_POST['cedula'], $_POST['email'], $_POST['telefono'], $_POST['ciudad'], $_POST['zona'], $_POST['sexo']);
        /* echo "Resultado: <br>";
        var_dump($citas); */
        if ($persona == true) {
            $msg = "La persona fue guardada con éxito";
            $guardado = true;
        } else {
            $msg = "Error:".$resp;
        }

    } else {
        $guardado = false;
    }
     session_start();
    //$_SESSION["exito"] = "true";
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
<!--header start-->
<?=include_once("../header.php");?>
<!--header end-->
<!--aside start-->
<?=include_once("../aside.php");?>
<!--aside end-->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
        <!-- page start-->

         <!--breadcrumbs start -->
                    <ul class="breadcrumb">
                        <li><a href="index.php">Personas</a></li>
                        <li class="active">Nueva Persona</li>
                    </ul>
                    <!--breadcrumbs end -->

        <div class="row">
            <div class="col-sm-12">
                <section class="panel">
                    <header class="panel-heading">
                    <h4> <strong>NUEVA PERSONA</strong> </h4>

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
                                        <label for="nombre" class="control-label col-lg-3">Nombre</label>
                                        <div class="col-lg-6">
                                            <input class="form-control" id="nombre" name="nombre" type="text" placeholder="Nombre"/>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="apellido" class="control-label col-lg-3">Apellido</label>
                                        <div class="col-lg-6">
                                            <input class="form-control" id="apellido" name="apellido" type="text" placeholder="Apellido"/>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="cedula" class="control-label col-lg-3">Cedula</label>
                                        <div class="col-lg-6">
                                            <input class="form-control" id="cedula" name="cedula" type="text" placeholder="Cedula"/>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="email" class="control-label col-lg-3">Email</label>
                                        <div class="col-lg-6">
                                            <input class="form-control" id="email" name="email" type="text" placeholder="Email"/>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="telefono" class="control-label col-lg-3">Telefono</label>
                                        <div class="col-lg-6">
                                            <input class="form-control" id="telefono" name="telefono" type="text" placeholder="Telefono"/>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="ciudad" class="control-label col-lg-3">Ciudad</label>
                                        <div class="col-lg-6">
                                            <input class="form-control" id="ciudad" name="ciudad" type="text" placeholder="Ciudad"/>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="zona" class="control-label col-lg-3">Zona</label>
                                        <div class="col-lg-6">
                                            <input class="form-control" id="zona" name="zona" type="text" placeholder="Zona"/>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="sexo" class="control-label col-lg-3">Sexo</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="sexo" name="sexo" type="text" placeholder="Sexo"/>
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
