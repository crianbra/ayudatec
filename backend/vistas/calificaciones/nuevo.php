<?include_once("../auth.php");?>
<?php

    $guardado = false;
    $msg = "";
    if (isset($_POST['promedio']) && $_POST['promedio'] ==! "") {
        session_start();
        include_once("../../collectors/usuarioCollector.php");
        $usuarioCollectorObj = new UsuarioCollector();
        $_SESSION["user"] = $usuarioCollectorObj->showUsuario(3);
        /* var_dump($_SESSION["user"]->getIdusuario());
        exit(); */

        /* echo "descripcion". $_POST['descripcion'];
        exit(); */

        include_once("../../collectors/calificacionCollector.php");
        $CalificacionCollectorObj = new CalificacionCollector();
        $calificacion = $CalificacionCollectorObj->createCalificacion($_POST['promedio'], $_POST['desempenioid'] , $_POST['tecnicoid']);
        /* echo "Resultado: <br>";
        var_dump($citas); */
        if ($calificacion == true) {
            $msg = "La calificación del técnico fue guardada con éxito";
            $guardado = true;
        } else {
            $msg = "Error:".$calificacion;
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

    <title>Nueva calificación</title>

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
                        <li><a href="index.php">Calificación técnico</a></li>
                        <li class="active">Nueva calificación de técnico</li>
                    </ul>
        <!--breadcrumbs end -->

        <div class="row">
            <div class="col-sm-12">
                <section class="panel">
                    <header class="panel-heading">
                    <h4> <strong>NUEVA CALIFICACIÓN DE TÉCNICO</strong> </h4>

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

                                <form class="cmxform form-horizontal " id="promedioForm" method="post" action="">
                                    <div class="form-group ">
                                        <label for="promedio" class="control-label col-lg-3">Promedio</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="promedio" name="promedio" type="text" placeholder=""/>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="desempenioid" class="control-label col-lg-3">Desempeño</label>
                                        <div class="col-lg-6">
                                                <select class="form-control" id="desempenioid" name="desempenioid" required>
                                                    <option value="" hidden>Seleccione la escala que busca</option>
                                                    <?php
                                                        include_once("../../collectors/desempenioCollector.php");
                                                        $DesempenioCollectorObj = new DesempenioCollector();
                                                        $desempenio = $DesempenioCollectorObj->showDesempenios();
                                                        foreach ($desempenio as $ca){
                                                    ?>
                                                    <option value="<?=$ca->getIddesempenio();?>"><?=$ca->getEscala();?></option>
                                                    <?php
                                                        }
                                                    ?>
                                                </select>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group ">
                                        <label for="tecnicoid" class="control-label col-lg-3">Tecnico</label>
                                        <div class="col-lg-6">
                                                <select class="form-control" id="tecnicoid" name="tecnicoid" required>
                                                    <option value="" hidden>Seleccione el tecnico que busca</option>
                                                    <?php
                                                        include_once("../../collectors/usuarioCollector.php");
                                                        $UsuarioCollectorObj = new UsuarioCollector();
                                                        $usuario = $UsuarioCollectorObj->showUsuarios();
                                                        foreach ($usuario as $ca){
                                                    ?>
                                                    <option value="<?=$ca->getIdusuario();?>"><?=$ca->getNombreusuario();?></option>
                                                    <?php
                                                        }
                                                    ?>
                                                </select>
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
