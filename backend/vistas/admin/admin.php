<?php
session_start();

    define("RUTA_PRINCIPAL", $_SERVER['DOCUMENT_ROOT'].'/ayudatec/');
    define("RUTA_BACKEND", RUTA_PRINCIPAL.'backend/');


    if (!isset($_SESSION['user'])){
            echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=../../../registro.php'>";
        }else{
            if(!$_SESSION['rol']==1){
                echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=../../../registro.php'>";
            }else{
            
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <link rel="shortcut icon" href="../../assets/images/favicon.png">

    <title>Administrador</title>

    <!--Core CSS -->
    <link href="../../assets/bs3/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../assets/css/bootstrap-reset.css" rel="stylesheet">
    <link href="../../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

    <link rel="stylesheet" href="../../assets/js/data-tables/DT_bootstrap.css" />

    <!-- Custom styles for this template -->
    <link href="../../assets/css/style.css" rel="stylesheet">
    <link href="../../assets/css/style-responsive.css" rel="stylesheet" />

</head>

<body class="body-500">
    
<section id="container" >
<!--header start-->
<?=include_once("../header.php");?>
<!--header end-->
<!--aside start-->
<?=include_once("../aside.php");?>
<!--aside end-->
    <!--main content start-->

<div class="error-head"> </div>

<div class="container ">

  <section class="error-wrapper text-center">
      <h1><img src="../../assets/images/mascota.svg" alt=""></h1>
      <div class="error-desk">
          <h2>Bienvenidos</h2>
          <p class="nrml-txt-alt">A la primera comunidad de técnicos</p>
          <p>en el Ecuador, <a href="../../../contactenos.php" target="_blank" class="sp-link">contáctenos</a> si tiene alguna duda del sistema.</p>
      
          <a href="../citas/index.php" class="back-btn"><i class="fa fa-calendar-o"></i> Ir a citas agendadas</a>
      </div>
      
  </section>

</div>

    <!--main content end-->
    
   

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
     

</body>
</html>

<?php

}

             
    }
?>
