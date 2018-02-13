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
    <link rel="shortcut icon" href="../images/favicon.png">

    <title>Roles</title>

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
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">

    <a href="citas.php" class="logo">
        <img src="../../assets/images/logo_ayudatec_bn.png" alt="Ayudatec">
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->


<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
        <li>
            <input type="text" class="form-control search" placeholder=" Search">
        </li>
        <!-- user login dropdown start-->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <img alt="" src="../../assets/images/avatar1_small.jpg">
                <span class="username">John Doe</span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <li><a href="#"><i class=" fa fa-male"></i>Perfil</a></li>
                <li><a href="#"><i class="fa fa-lock"></i> Seguridad</a></li>
                <li><a href="login.html"><i class="fa fa-key"></i> Cerrar sesión</a></li>
            </ul>
        </li>
        <!-- user login dropdown end -->

    </ul>
    <!--search & user info end-->
</div>
</header>
<!--header end-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->            <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
            <li class="sub-menu">
                <a href="../personas/index.php">
                    <i class="fa fa-user"></i>
                    <span>Personas</span>
                </a>
            </li>
            <li>
                <a href="../tecnicos/index.php">
                    <i class="fa fa-group"></i>
                    <span>Técnicos</span>
                </a>
            </li>
            <li class=" ">
                <a href="index.php" class="active">
                    <i class="fa fa-book"></i>
                    <span>Citas agendadas</span>
                </a>
            </li>
            <li>
                <a href="../calificacion/index.php">
                    <i class="fa fa-comments-o"></i>
                    <span>Feedback </span>
                </a>
            </li>
            <li class="sub-menu">
                 <a href="">
                    <i class="fa fa-cog"></i>
                    <span>Configuración </span>
                </a>
                    <ul class="sub">
                        <li><a href="../usuarios/index.php">Usuarios</a></li>
                        <li><a href="../roles/index.php">Roles</a></li>
                        <li><a href="../estado_citas/index.php">Estado de citas</a></li>
                        <li><a href="../tecnico_x_categoria/index.php">Categoria de técnicos</a></li>
                    </ul>
                </li>
        </ul></div>        
<!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
        <!-- page start-->

        <div class="row">
            <div class="col-sm-12">
                <section class="panel">
                    <header class="panel-heading">
                    <h4> <strong>ROLES</strong> </h4>

                    </header>
                    <div class="panel-body">
                        <div class="adv-table editable-table ">
                            <div class="clearfix">
                                <div class="btn-group">
                                    <a href="nuevo.php" class="btn btn-primary">
                                        Nueva Rol <i class="fa fa-plus"></i>
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
                                    <th>IdRol</th>
                                    <th>Descripcion</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                    include_once("../../collectors/RolCollector.php");
                                    
                                    $RolCollectorObj = new RolCollector();
                                    $roles = $RolCollectorObj->showRoles();
                                    foreach ($roles as $c){
                                ?>
                                    <tr class="b-filas">
                                        <td><?=$c->getIdrol();?></td>
                                        <td><?=$c->getDescripcion();?></td>
                                        <td class="b-acciones">
                                            <a class="edit" href="nuevo.php"><i class="fa fa-edit"></i></a>
                                            <a class="delete" href=""><i class="fa fa-trash-o"></i></a>
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