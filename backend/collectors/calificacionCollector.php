<?php
include_once('../../config/collector.php'); 
include_once('../../models/calificacion.php');
include_once("../../models/usuario.php");
include_once("../../models/desempenio.php");

class CalificacionCollector extends Collector
{
  
  function showCalificaciones() {
    /* $rows = self::$db->getRows("SELECT * FROM calificacion ");   */
    
    $rows = self::$db->getRows(
      "SELECT * 
      FROM calificacion 
      INNER JOIN usuario
      ON (calificacion.tecnicoid = usuario.idusuario)
      INNER JOIN desempenio
      ON (calificacion.desempenioid = desempenio.iddesempenio)"

    );
    
    $arrayCalificacion = array();        
    foreach ($rows as $c){

      $tecnicoObj = new Usuario($c{'tecnicoid'}, $c{'nombreusuario'}, $c{'contrasenia'}, $c{'personaid'}, $c{'rolid'});
      $desempenioObj = new Desempenio($c{'iddesempenio'}, $c{'maximo'}, $c{'minimo'}, $c{'escala'});

      $aux = new Calificacion($c{'idcalificacion'},$c{'promedio'},$desempenioObj,$tecnicoObj);
      array_push($arrayCalificacion, $aux);

    }
    return $arrayCalificacion;        
  }


  function showCalificacion($id){
    $row = self::$db->getRows("
        SELECT * FROM calificacion 
        INNER JOIN usuario ON (calificacion.tecnicoid = usuario.idusuario )
        INNER JOIN desempenio ON (calificacion.desempenioid = desempenio.iddesempenio)
        WHERE idcalificacion= ? ", array("{$id}"));
      
    $tecnicoObj= new Usuario($row[0]{'idusuario'}, $row[0]{'nombreusuario'}, $row[0]{'contrasenia'}, $row[0]{'personaid'}, $row[0]{'rolid'});
    $desempenioObj= new Desempenio($row[0]{'iddesempenio'},$row[0]{'maximo'},$row[0]{'minimo'},$row[0]{'escala'});  
     
    $ObjCalificacion = new Calificacion ($row[0]{'idcalificacion'},$row[0]{'promedio'},$desempenioObj, $tecnicoObj);
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

