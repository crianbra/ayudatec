<?include_once("../auth.php");?>
<?php
    include_once("../../collectors/personaCollector.php");

    $guardado = false;
    $msg = "";
    if ((isset($_GET['id']) && $_GET['id'] ==! "")) {
        
        if (isset($_POST['id']) && $_POST['id'] ==! "") {
            $PersonaCollectorObj = new PersonaCollector();
            $resp = $PersonaCollectorObj->deletePersona($_POST['id']);
            if ($resp == true) {
                $msg = "La persona fue eliminada con éxito";
                $guardado = true;
            } else {
                $msg = "Error:".$resp;
            }
        } else {
            $PersonaCollectorObj = new PersonaCollector();
            $persona = $PersonaCollectorObj->showPersona($_GET['id']);
        }

    } else {
            $msg = "No ha llegado ningún ID del Técnico";
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
                        <li><a href="index.php">Persona</a></li>
                        <li class="active">Eliminar Persona</li>
                    </ul>
                    <!--breadcrumbs end -->

        <div class="row">
            <div class="col-sm-12">
                <section class="panel">
                    <header class="panel-heading">
                    <h4> <strong>ELIMINAR PERSONA</strong> </h4>

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
                                    <input type="text" name="id" hidden value="<?=$persona->getIdpersona();?>">
                                    <div class="form-group ">
                                        <h3 class="text-center">¿Seguro que desea eliminar esta persona?</h3>
                                    </div>
                                    <div class="form-group ">
                                        <label for="nombre" class="control-label col-lg-3">Nombre</label>
                                        <div class="col-lg-6">
                                            <h5 id="nombre"><?=$persona->getNombre();?></h5>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="apellido" class="control-label col-lg-3">Apellido</label>
                                        <div class="col-lg-6">
                                            <h5 id="apellido"><?=$persona->getApellido();?></h5>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="cedula" class="control-label col-lg-3">Cedula</label>
                                        <div class="col-lg-6">
                                            <h5 id="cedula"><?=$persona->getCedula();?></h5>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="telefono" class="control-label col-lg-3">Telefono</label>
                                        <div class="col-lg-6">
                                            <h5 id="telefono"><?=$persona->getTelefono();?></h5>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-offset-3 col-lg-6">
                                            <!-- <h3>¿Seguro que desea eliminar esta cita?</h3> -->
                                            <button class="btn btn-primary" type="submit">Aceptar</button>
                                            <a href="index.php" class="btn btn-default" type="button">Cancelar</a>
                                            <!-- <h3>¿Seguro que desea eliminar esta cita?</h3> -->
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
                            <a href="index.php">Volver a personas</a>
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
