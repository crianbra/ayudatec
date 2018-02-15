<?php
    define("RUTA_PRINCIPAL", $_SERVER['DOCUMENT_ROOT'].'/ayudatec/');
    define("RUTA_BACKEND", RUTA_PRINCIPAL.'backend/');

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <link rel="shortcut icon" href="../../assets/images/favicon.png">

    <title>Personas</title>

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


        <div class="row">
            <div class="col-sm-12">
                <section class="panel">
                    <header class="panel-heading">
                    <h4> <strong>PERSONAS</strong> </h4>

                    </header>
                    <div class="panel-body">
                        <div class="adv-table editable-table ">
                            <div class="clearfix">
                                <div class="btn-group">
                                    <a href="nuevo.php" class="btn btn-primary">
                                        Nueva Persona <i class="fa fa-plus"></i>
                                    </a>
                                </div>
                                <div class="btn-group pull-right">
                                    <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">Acciones <i class="fa fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="#">Imprimir</a></li>
                                        <li><a href="#">Guardar como PDF</a></li>
                                        <li><a href="#">Exportar a Excel</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="space15"></div>
                            <table class="table table-striped table-hover table-bordered" id="editable-sample">
                                <thead>
                                <tr>
                                    <th>IdPersona</th>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>Cedula</th>
                                    <th>Email</th>
                                    <th>Telefono</th>
                                    <th>Ciudad</th>
                                    <th>Zona</th>
                                    <th>Sexo</th>
                                    
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                    include_once("../../collectors/personaCollector.php");
                                    
                                    $PersonaCollectorObj = new PersonaCollector();
                                    $personas = $PersonaCollectorObj->showPersonas();
                                    foreach ($personas as $c){
                                        $idpersona = $_GET['idpersona'];
                                ?>
                                    <tr class="b-filas">
                                        <td><?=$c->getIdpersona();?></td>
                                        <td><?=$c->getNombre();?></td>
                                        <td><?=$c->getApellido();?></td>
                                        <td><?=$c->getCedula();?></td>
                                        <td><?=$c->getEmail();?></td> 
                                        <td><?=$c->getTelefono();?></td>
                                        <td><?=$c->getCiudad();?></td>
                                        <td><?=$c->getZona();?></td>
                                        <td><?=$c->getSexo();?></td>
                                        <td class="b-acciones">
                                            <a title="Editar" href="editar.php?id=<?=$c->getIdpersona();?>"><i class="fa fa-edit"></i></a>
                                            <a title="Eliminar" href="eliminar.php?id=<?=$c->getIdpersona();?>"><i class="fa fa-trash-o"></i></a>
                                        </td>
                                    </tr> 
                                    
                                    <?php
                                    }
                                ?>
                               
                                </tbody>
                            </table>
                        </div>
                    </div>
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
