<?php
include_once(RUTA_BACKEND.'config/collector.php'); 
include_once(RUTA_BACKEND.'models/detcalificacion.php');
include_once(RUTA_BACKEND."models/calificacion.php");
include_once(RUTA_BACKEND."models/usuario.php");

class DetcalificacionCollector extends Collector
{
  
  function showDetcalificaciones() {
    /* $rows = self::$db->getRows("SELECT * FROM calificacion ");   */
    
    $rows = self::$db->getRows(
      "SELECT * FROM detalle_calificacion 
      INNER JOIN calificacion
      ON (detalle_calificaion.calificacionid = detalle_calificacion.iddetallecalificacion  )
      INNER JOIN usuario
      ON (detalle_calificacion.clienteid = usuario.idusuario)"
    );
    
    $arrayDetcalificacion = array();        
    foreach ($rows as $c){

      $calificacionObj = new Calificacion($c{'idcalificacion'},$c{'promedio'},$c{'tecnicoid'},)
      $clienteObj = new Usuario($c{'idusuario'}, $c{'nombreusuario'}, $c{'contrasenia'}, $c{'personaid'}, $c{'rolid'});
      
      $aux = new Detcalificacion($c{'iddetallecalificacion'},$c{'fecha'},$c{'valoracion'},$c{'comentario'},$calificacionObj,$clienteObj);
      array_push($arrayDetcalificacion, $aux);

    }
    return $arrayDetcalificacion;        
  }


  function showDetcalificacion($id){
    $row = self::$db->getRows("SELECT * FROM detalle_calificacion where iddetallecalificacion= ? ", array("{$id}"));

    $ObjDetcalificacion = new Detcalificacion ($row[0]{'iddetallecalificacion'},$row[0]{'fecha'},$row[0]{'valoracion'},$c{'comentario'},$c{'calificaionid'},$c{'clienteid'});
    return $ObjDetcalificacion;

}


function updateDetcalificacion($id,$fecha, $valoracion, $comentario, $calificacionid, $clienteid){
	$insertrow = self::$db->updateRow("UPDATE public.detalle_calificacion SET fecha= ?, valoracion= ?,comentario= ?,calificaionid= ?,clienteid= ?,WHERE iddetcalificacion= ?", array("{$fecha}","{$valoracion}","{$comentario}","{$calificacionid}","{$clienteid}", $id));

}

function deleteCalificacion($id){
	$deleterow = self::$db->deleteRow("DELETE FROM public.detalle_calificacion WHERE iddetcalificacion= ?", array("{$id}"));

}

function createCalificacion($fecha, $valoracion, $comentario, $calificacionid, $clienteid){
	$insertarrow = self::$db->insertRow("INSERT INTO public.detalle_calificacion (fecha, valoracion, comentario, calificacionid, clienteid) VALUES (?,?,?,?,?)", array ("{$fecha}","{$valoracion}","{$comentario}","{$calificacionid}","{$clienteid}"));

}

}
?>

