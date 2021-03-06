<?include_once("../auth.php");?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">

    <title>Citas agendadas</title>

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
                    <h4> <strong>CITAS AGENDADAS</strong> </h4>

                    </header>
                    <div class="panel-body">
                        <div class="adv-table editable-table ">
                            <div class="clearfix">
                                <div class="btn-group">
                                    <a href="nuevo.php" class="btn btn-primary">
                                        Nueva cita <i class="fa fa-plus"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="space15"></div>

                            <table id="example" class="display" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>Descripción</th>
                                        <th>Fecha</th>
                                        <th>Hora</th>
                                        <th>Técnico</th>
                                        <th>Cliente</th>
                                        <th>Estado</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    include_once("../../collectors/citaCollector.php");
                                    
                                    $CitaCollectorObj = new CitaCollector();
                                    $citas = $CitaCollectorObj->showCitas();
                                    foreach ($citas as $c){
                                ?>
                                    <tr class="b-filas">
                                        <td><?=$c->getDescripcion();?></td>
                                        <td><?=$c->getFecha();?></td>
                                        <td><?=$c->getHora();?></td>
                                        <td><?=$c->getTecnico()->getNombreusuario();?></td>
                                        <td><?=$c->getCliente()->getNombreusuario();?></td>
                                        <td><?=$c->getEstadocita()->getDescripcion();?></td>
                                        <td class="b-acciones">
                                            <a title="Editar" href="editar.php?id=<?=$c->getIdcita();?>"><i class="fa fa-edit"></i></a>
                                            <a title="Eliminar" href="eliminar.php?id=<?=$c->getIdcita();?>"><i class="fa fa-trash-o"></i></a>
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

<?include_once("../js.php");?>

</body>
</html>
