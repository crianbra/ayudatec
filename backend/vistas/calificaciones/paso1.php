<?include_once("../auth.php");?>

<?php

    $guardado = false;
    $msg = "";
    if (isset($_POST['tecnicoid']) && $_POST['tecnicoid'] ==! "") {
        //session_start();
        
        
        include_once("../../collectors/profesionCollector.php");
        $ProfesionCollectorObj = new ProfesionCollector();
        $profesion = $ProfesionCollectorObj->createProfesion($_POST['usuarioid'],$_POST['categoriaid']);
        /* echo "Resultado: <br>";
        var_dump($citas); */
        if ($profesion == true) {
            $msg = "La profesion fue guardada con éxito";
            $guardado = true;
        } else {
            $msg = "error";
            
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

    <title>AYUDATEC :: Califica al técnico</title>

    <?include_once("../css.php");?>

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
                    <h4> <strong>NUEVO CALIFICACIÓN</strong> </h4>

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

                                <form class="cmxform form-horizontal " id="citaForm" method="post" action="paso2.php">
                                   
                                    <div class="form-group ">
                                        <label for="categoriaid" class="control-label col-lg-3">Categoría</label>
                                        <div class="col-lg-6">
                                                <select class="form-control" id="categoriaid" name="categoriaid" required>
                                                    <option value="" hidden>Seleccione la categoria que busca</option>
                                                    <?php
                                                        include_once("../../collectors/categoriaCollector.php");
                                                        $categoriaCollectorObj = new CategoriaCollector();
                                                        $categorias = $categoriaCollectorObj->showCategorias();
                                                        foreach ($categorias as $ca){
                                                    ?>
                                                    <option value="<?=$ca->getIdcategoria();?>"><?=$ca->getDescripcion();?></option>
                                                    <?php
                                                        }
                                                    ?>
                                                </select>
                                        </div>
                                    </div>
                                   
                                    
                                    <div class="form-group">
                                        <div class="col-lg-offset-3 col-lg-6">
                                            <button class="btn btn-primary" type="submit">Siguiente</button>
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

<?include_once("../js.php");?>

</body>
</html>
