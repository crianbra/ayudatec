<?include_once("../auth.php");?>
<?include_once("../../collectors/detallecalificacionCollector.php");?>
<?include_once("../../collectors/calificacionCollector.php");?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">

    <title>Detalle Calificaciones</title>

    <?php
        include_once("../css.php");
    ?>

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
                    <h4> <strong>DETALLE CALIFICACIONES</strong> </h4>

                    </header>
                    <div class="panel-body">
                        <div class="adv-table editable-table ">
                            <div class="clearfix">
                                <div class="btn-group">
                                    <a href="nuevo.php" class="btn btn-primary">
                                        Nuevo detalle calificación <i class="fa fa-plus"></i>
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
                            <table id="example" class="display" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    
                                    <th>Fecha</th>
                                    <th>Técnico</th>
                                    <th>Promedio</th>
                                    <th>Escala</th>
                                    <th>Valoracion</th>
                                    <th>Cliente</th>
                                    <th>Comentario</th>
                                    <th></th>
                                    
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $DetcalificacionCollectorObj = new DetallecalificacionCollector();
                                    $detcalificacion = $DetcalificacionCollectorObj->showDetcalificaciones();
                                    foreach ($detcalificacion as $c){
                                        $calificacion1Obj= new CalificacionCollector();
                                        $calificacion1 = $calificacion1Obj->showCalificacion($c->getCalificacionid()->getIdcalificacion());
                                ?>
                                    <tr class="b-filas">
                                        
                                        <td><?=$c->getFecha();?></td>
                                        <td> <?=$calificacion1->getTecnicoid()->getNombreusuario();?></td>
                                        <td><?=$c->getCalificacionid()->getPromedio();?></td>
                                        
                                            <?php
                                                /* if(($c->getPromedio() >= $c->getDesempenioid()->getMinimo()) ||
                                                ($c->getPromedio() >= $c->getDesempenioid()->getMinimo())){

                                                    echo $c->getDesempenioid()->getEscala();

                                                } */
                                            
                                            ?>
                                        <td><?=$calificacion1->getDesempenioid()->getEscala();?></td>
                                        <td><?=$c->getValoracion();?></td>
                                        <td><?=$c->getClienteid()->getNombreusuario();?></td>
                                        <td><?=$c->getComentario();?></td>
                                        
                                        
                                        <td class="b-acciones">
                                        <!--<a title="Editar" href="editar.php?id=<?=$c->getIddetallecalificacion();?>"><i class="fa fa-edit"></i></a>-->
                                            <a title="Eliminar" href="eliminar.php?id=<?=$c->getIddetallecalificacion();?>"><i class="fa fa-trash-o"></i></a>
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

<?php
    include_once("../js.php");
?>

</body>
</html>
