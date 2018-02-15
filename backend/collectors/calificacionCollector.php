<?php
include_once(RUTA_BACKEND.'config/collector.php'); 
include_once(RUTA_BACKEND.'models/calificacion.php');
include_once(RUTA_BACKEND."models/usuario.php");

class CalificacionCollector extends Collector
{
  
  function showCalificaciones() {
    /* $rows = self::$db->getRows("SELECT * FROM calificacion ");   */
    
    $rows = self::$db->getRows(
      "SELECT * 
      FROM calificacion 
      INNER JOIN usuario
      ON (calificacion.tecnicoid = idusuario)"
    );
    
    $arrayCalificacion = array();        
    foreach ($rows as $c){

      $tecnicoObj = new Usuario($c{'tecnicoid'}, $c{'nombreusuario'}, $c{'contrasenia'}, $c{'personaid'}, $c{'rolid'});
      
      $aux = new Calificacion($c{'idcalificacion'},$c{'promedio'},$tecnicoObj);
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
	return $insertrow = self::$db->updateRow("UPDATE public.calificacion SET rating= ? WHERE idcalificacion= ?", array("{$rating}", $id));

}

function deleteCalificacion($id){
	return $deleterow = self::$db->deleteRow("DELETE FROM public.calificacion WHERE idcalificacion= ?", array("{$id}"));

}

function createCalificacion($rating){
	return $insertarrow = self::$db->insertRow("INSERT INTO public.calificacion (rating) VALUES (?)", array ("{$rating}"));

}

}
?>

