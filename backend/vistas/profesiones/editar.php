<?include_once("../auth.php");?>
<?php

    

    $guardado = false;
    $msg = "";
    if (isset($_GET['id']) && $_GET['id'] ==! "") {

        include_once("../../collectors/profesionCollector.php");
        $ProfesionCollectorObj = new ProfesionCollector();
        $profesion = $ProfesionCollectorObj->showProfesion($_GET['id']);

        if ((isset($_POST['usuarioid']) && $_POST['usuarioid'] ==! ""))
        {

            $ProfesionCollectorObj = new ProfesionCollector();
            $resp = $ProfesionCollectorObj->updateProfesion($_GET['id'], $_POST['usuarioid'], $_POST['categoriaid']);

            if ($resp == true) {
                $msg = "La profesión fue modificada con éxito";
                $guardado = true;
            } else {
                $msg = "error";

                
            }
        }

    } else {
        $msg = "No ha llegado ningún ID de Profesion";
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

    <title>Editar Profesión</title>

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
                        <li><a href="index.php">Profesión</a></li>
                        <li class="active">Editar profesión</li>
                    </ul>
                    <!--breadcrumbs end -->

        <div class="row">
            <div class="col-sm-12">
                <section class="panel">
                    <header class="panel-heading">
                    <h4> <strong>EDITAR PROFESIÓN</strong> </h4>

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
                                        <label for="usuarioid" class="control-label col-lg-3">Técnico</label>
                                        <div class="col-lg-6">
                                                <select class="form-control" id="usuarioid" name="usuarioid">
                                                    <option value="" hidden>Seleccione el técnico que busca</option>
                                                    <?php
                                                        include_once("../../collectors/usuarioCollector.php");
                                                        $UsuarioCollectorObj = new UsuarioCollector();
                                                        $usuario = $UsuarioCollectorObj->showTecnicos();
                                                        foreach ($usuario as $ca){
                                                            if ($ca->getIdusuario() == $profesion->getUsuarioid()){
                                                    ?>
                                                                <option value="<?=$ca->getIdusuario();?>" selected><?=$ca->getNombreusuario();?></option>
                                                    <?php
                                                            } else {
                                                    ?>
                                                    
                                                    <option value="<?=$ca->getIdusuario();?>"><?=$ca->getNombreusuario();?></option>
                                                    <?php
                                                            }
                                                        }
                                                    ?>
                                                </select>
                                        </div>
                                    </div>
                                   
                                    <div class="form-group ">
                                        <label for="categoriaid" class="control-label col-lg-3">Categoría</label>
                                        <div class="col-lg-6">
                                                <select class="form-control" id="categoriaid" name="categoriaid">
                                                    <option value="" hidden>Seleccione la categoria que busca</option>
                                                    <?php
                                                        include_once("../../collectors/categoriaCollector.php");
                                                        $CategoriaCollectorObj = new CategoriaCollector();
                                                        $categorias = $CategoriaCollectorObj->showCategorias();
                                                        foreach ($categorias as $ca){
                                                            if ($ca->getIdcategoria() == $profesion->getCategoriaid()){
                                                    ?>
                                                                <option value="<?=$ca->getIdcategoria();?>" selected><?=$ca->getDescripcion();?></option>
                                                    <?php
                                                            } else {
                                                    ?>
                                                    
                                                    <option value="<?=$ca->getIdcategoria();?>"><?=$ca->getDescripcion();?></option>
                                                    <?php
                                                            }
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
    $('#categoria').on('change', function() {
        /* alert( this.value ); */
        var id_categoria = this.value;
        $.ajax({
            url: 'nuevo.php',
            type: 'POST',
            dataType : 'text',
            data : 'idcategoria='+id_categoria,
            success: function(result) {
                $("#select_tecnico").html(result);
            },
            error : function(xhr, status) {
                alert('Disculpe, existió un problema');
            }
        });

    })


</script>

</body>
</html>
