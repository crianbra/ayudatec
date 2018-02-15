<?php
include_once(RUTA_BACKEND.'config/collector.php'); 
include_once(RUTA_BACKEND.'models/detallecalificacion.php');
include_once(RUTA_BACKEND."models/calificacion.php");
include_once(RUTA_BACKEND."models/usuario.php");

class DetallecalificacionCollector extends Collector
{
  
  function showDetcalificaciones() {
    $rows = self::$db->getRows(
      "SELECT * FROM detalle_calificacion 
      INNER JOIN calificacion
      ON (detalle_calificacion.calificacionid = calificacion.idcalificacion)
      INNER JOIN usuario
      ON (detalle_calificacion.clienteid = idusuario)"
    );
    
      echo "Hola";
      
    $arrayDetallecalificacion = array();        
    foreach ($rows as $c){
<<<<<<< HEAD:backend/collectors/detcalificacionCollector.php

      $calificacionObj = new Calificacion($c{'idcalificacion'},$c{'promedio'},$c{'tecnicoid'});
      $clienteObj = new Usuario($c{'clienteid'}, $c{'nombreusuario'}, $c{'contrasenia'}, $c{'personaid'}, $c{'rolid'});


      $aux = new Detallelificacion($c{'iddetallecalificacion'},$c{'fecha'},$c{'valoracion'},$c{'comentario'},$calificacionObj,$clienteObj);
      array_push($arrayDetcalificacion, $aux);
=======
        
        
      $calificacionObj = new Calificacion($c{'idcalificacion'},$c{'promedio'},$c{'desempenioid'},$c{'tecnicoid'});
      $usuarioObj = new Usuario($c{'idusuario'}, $c{'nombreusuario'}, $c{'contrasenia'}, $c{'personaid'}, $c{'rolid'});
        
      
      $aux = new Detallecalificacion($c{'iddetallecalificacion'},$c{'fecha'},$c{'valoracion'},$c{'comentario'},$calificacionObj,$usuarioObj);
      array_push($arrayDetallecalificacion, $aux);
>>>>>>> 92ff9bd1982d1d08ac6df91b511fc7f971f3f790:backend/collectors/detallecalificacionCollector.php

    }
    return $arrayDetallecalificacion;        
  }


  function showDetcalificacion($id){
    $row = self::$db->getRows("SELECT * FROM detalle_calificacion where iddetallecalificacion= ? ", array("{$id}"));

    $ObjDetcalificacion = new Detallecalificacion ($row[0]{'iddetallecalificacion'},$row[0]{'fecha'},$row[0]{'valoracion'},$c{'comentario'},$c{'calificaionid'},$c{'clienteid'});
    return $ObjDetcalificacion;

}


function updateDetcalificacion($id,$fecha, $valoracion, $comentario, $calificacionid, $clienteid){
	$insertrow = self::$db->updateRow("UPDATE public.detalle_calificacion SET fecha= ? , valoracion= ? , comentario= ? , calificaionid= ? , clienteid= ? WHERE iddetallecalificacion= ?", array("{$fecha}","{$valoracion}","{$comentario}","{$calificacionid}","{$clienteid}", $id));

}

function deleteCalificacion($id){
	$deleterow = self::$db->deleteRow("DELETE FROM public.detalle_calificacion WHERE iddetallecalificacion= ?", array("{$id}"));

}

function createCalificacion($fecha, $valoracion, $comentario, $calificacionid, $clienteid){
	$insertarrow = self::$db->insertRow("INSERT INTO public.detalle_calificacion (fecha, valoracion, comentario, calificacionid, clienteid) VALUES (?,?,?,?,?)", array ("{$fecha}","{$valoracion}","{$comentario}","{$calificacionid}","{$clienteid}"));

}

}
?>

