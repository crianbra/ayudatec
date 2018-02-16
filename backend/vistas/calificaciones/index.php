<!--constantes start-->
<?include_once("../constantes.php");?>
<!--constantes end-->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">

    <title>Calificaciones</title>

    <?include_once("../css.php");?>  

</head>

<body>

<section id="container" >
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

        <div class="row">
            <div class="col-sm-12">
                <section class="panel">
                    <header class="panel-heading">
                    <h4> <strong>CALIFICACIONES DE LOS TÉCNICOS</strong> </h4>

                    </header>
                    <div class="panel-body">
                        <div class="adv-table editable-table ">
                            <div class="clearfix">
                            </div>
                            <div class="space15"></div>
                            <table id="example" class="display" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Promedio</th>
                                    <th>Desempeño</th>
                                    <th>Técnico</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                    include_once("../../collectors/calificacionCollector.php");
                                    
                                    $CalificacionCollectorObj = new CalificacionCollector();
                                    $calificaciones = $CalificacionCollectorObj->showCalificaciones();
                                    foreach ($calificaciones as $c){
                                ?>
                                    <tr class="b-filas">
                                        <td><?=$c->getIdcalificacion();?></td>
                                        <td><?=$c->getPromedio();?> de 5</td>
                                        <td>
                                            <?php
                                                if(($c->getPromedio() >= $c->getDesempenioid()->getMinimo()) ||
                                                ($c->getPromedio() >= $c->getDesempenioid()->getMinimo())){

                                                    echo $c->getDesempenioid()->getEscala();

                                                }
                                            
                                            ?></td>
                                        <td><?=$c->getTecnicoid()->getNombreusuario();?></td>
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
<?include_once("../js.php");?>

</body>
</html>