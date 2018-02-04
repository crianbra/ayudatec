<?php

include_once('Calificacion.php');
include_once('Collector.php');

class CalificacionCollector extends Collector
{
  
  function showCalificaciones() {
    $rows = self::$db->getRows("SELECT * FROM calificacion ");        
    
    $arrayCalificacion = array();        
    foreach ($rows as $c){
      $aux = new Calificacion($c{'idcalificacion'},$c{'rating'});
      array_push($arrayCalificacion, $aux);
    }
    return $arrayCalificacion;        
  }

  function showCalificacion($id){
    $row = self::$db->getRows("SELECT * FROM calificacion where idcalificacion= ? ", array("{$id}"));

    $ObjCalificacion = new Calificacion ($row[0]{'idcalificacion'},$row[0]{'rating'});
    return $ObjCalificacion;

}


function updateCalificacion($id,$rating){
	$insertrow = self::$db->updateRow("UPDATE public.calificacion SET rating= ? WHERE idcalificacion= ?", array("{$rating}", $id));

}

function deleteCalificacion($id){
	$deleterow = self::$db->deleteRow("DELETE FROM public.calificacion WHERE idcalificacion= ?", array("{$id}"));

}

function createCalificacion($rating){
	$insertarrow = self::$db->insertRow("INSERT INTO public.calificacion (rating) VALUES (?)", array ("{$rating}"));

}

}
?>

