<?include_once("../auth.php");?>

<?php

    $guardado = false;
    $msg = "";
    if ((isset($_POST['tecnicoid']) && $_POST['tecnicoid'] ==! "") && (isset($_POST['categoriaid']) && $_POST['categoriaid'] ==! "")) {
        //session_start();
        
        include_once("../../collectors/categoriaCollector.php");
        $CategoriaCollectorObj = new CategoriaCollector();
        $categoria = $CategoriaCollectorObj->showCategoria($_POST['categoriaid']);


        include_once("../../collectors/usuarioCollector.php");
        $UsuarioCollectorObj = new UsuarioCollector();
        $tecnico = $UsuarioCollectorObj->showUsuario($_POST['tecnicoid']);
      
    } else {
        if ((isset($_POST['tecnico']) && $_POST['tecnico'] ==! "") && (isset($_POST['valoracion']) && $_POST['valoracion'] ==! "") && (isset($_POST['comentario']) && $_POST['comentario'] ==! "")){
            
            include_once("../../collectors/calificacionCollector.php");
            $CalificacionCollectorObj = new CalificacionCollector();
            $calificacion = $CalificacionCollectorObj->showTecnicoCalificacion($_POST['tecnico']);
            if ($calificacion !== null) {
                echo "Existe";
            } else {
                echo "No existe";
                exit();
            }


        } else {
            if($_SERVER["SERVER_NAME"] == "localhost") {
                header("Location: http://localhost/ayudatec/backend/vistas/calificaciones/", true, 301);
                exit();
            }
            else
            {
                header("Location: http://ayudatec.herokuapp.com/backend/vistas/calificaciones/", true, 301);
                exit();
            }
        }
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

    <title>AYUDATEC :: Califica al técnico</title>

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
                        <li><a href="index.php">Calificaciones</a></li>
                        <li class="active">Nueva calificación</li>
                    </ul>
                    <!--breadcrumbs end -->

        <div class="row">
            <div class="col-sm-12">
                <section class="panel">
                    <header class="panel-heading">
                    <h4> <strong>NUEVA CALIFICACIÓN</strong> </h4>

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

                                <form class="cmxform form-horizontal " id="citaForm" method="post" action="">
                                    <div class="form-group ">
                                        <label for="categoriaid" class="control-label col-lg-3">Categoria</label>
                                        <div class="col-lg-6">
                                            <input type="hidden" value="<?=$categoria->getIdcategoria();?>" name="categoria">
                                            <h5 id="categoriaid"><?=$categoria->getDescripcion();?></h5>
                                        </div>
                                    </div>
                                   <div class="form-group ">
                                        <label for="tecnicoid" class="control-label col-lg-3">Técnico</label>
                                        <div class="col-lg-6">
                                            <input type="hidden" value="<?=$tecnico->getIdusuario();?>" name="tecnico">
                                            <h5 id="tecnicoid"><?=$tecnico->getNombreusuario();?></h5>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="valoracion" class="control-label col-lg-3">Valoración (De 0 al 5)</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="valoracion" name="valoracion" type="number" min="0" max="5" length=""/>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="comentario" class="control-label col-lg-3">Comentario</label>
                                        <div class="col-lg-6">
                                            <textarea class=" form-control" id="comentario" name="comentario" type="textarea" placeholder="Cuéntenos qué le pareció el servicio del técnico"></textarea>
                                        </div>
                                    </div>
                                   
                                    
                                    <div class="form-group">
                                        <div class="col-lg-offset-3 col-lg-6">
                                            <button class="btn btn-primary" type="submit">Guardar</button>
                                            <a href="paso1.php" class="btn btn-default" type="button">Volver</a>
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
                            <a href="index.php">Volver a profesion</a>
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
    
</script>

</body>
</html>
