<!--constantes start-->
<?include_once("../constantes.php");?>
<!--constantes end-->

<?php

    $guardado = false;
    $msg = "";
    if (isset($_POST['maximo']) && $_POST['maximo'] ==! "") {
        /* session_start();
        include_once("../../collectors/usuarioCollector.php");
        $usuarioCollectorObj = new UsuarioCollector();
        $_SESSION["user"] = $usuarioCollectorObj->showUsuario(3); */
        /* var_dump($_SESSION["user"]->getIdusuario());
        exit(); */

        /* echo "descripcion". $_POST['descripcion'];
        exit(); */

        include_once("../../collectors/desempenioCollector.php");
        $DesempenioCollectorObj = new DesempenioCollector();
        $desempenio = $DesempenioCollectorObj->createDesempenio($_POST['maximo'], $_POST['minimo'],$_POST['escala']);
        /* echo "Resultado: <br>";
        var_dump($citas); */
        if ($desempenio == true) {
            $msg = "El parámetro de desempeño fue guardado con éxito";
            $guardado = true;
        } else {
            $msg = "Error:".$desempenio;
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

    <title>Nuevo parámetro de desempeño</title>

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
                        <li><a href="index.php">Parámetros de desempeño</a></li>
                        <li class="active">Nuevo parámetro de desempeño</li>
                    </ul>
        <!--breadcrumbs end -->

        <div class="row">
            <div class="col-sm-12">
                <section class="panel">
                    <header class="panel-heading">
                    <h4> <strong>NUEVO PARÁMETRO DE DESEMPEÑO</strong> </h4>

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

                                <form class="cmxform form-horizontal " id="desempenioForm" method="post" action="">
                                    <div class="form-group ">
                                        <label for="maximo" class="control-label col-lg-3">Máximo</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="maximo" name="maximo" type="text" placeholder="Ejemplo:5"/>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="minimo" class="control-label col-lg-3">Mínimo</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="minimo" name="minimo" type="text" placeholder="Ejemplo:1"/>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="escala" class="control-label col-lg-3">Escala</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="escala" name="escala" type="text" placeholder="Sobresaliente"/>
                                        </div>
                                    </div>
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
                            <a href="index.php">Volver a listar los parámetros de desempeño</a>
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
