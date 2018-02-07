<?php

include_once('Cita.php');
include_once('Collector.php');

class CitaCollector extends Collector
{
  
  function showCitas() {
    $rows = self::$db->getRows("SELECT * FROM cita ");        
    
    $arrayCita = array();        
    foreach ($rows as $c){
      $aux = new Cita($c{'idcita'},$c{'descripcion'});
      array_push($arrayCita, $aux);
    }
    return $arrayCita;        
  }

  function showCita($id){
    $row = self::$db->getRows("SELECT * FROM cita where idcita= ? ", array("{$id}"));

    $ObjRol = new Rol($row[0]{'idcita'},$row[0]{'descripcion'});
    return $ObjRol;

}


function updateCita($id,$descripcion){
	$insertrow = self::$db->updateRow("UPDATE public.cita SET descripcion= ? WHERE idcita= ?", array("{$descripcion}", $id));

}

function deleteCita($id){
	$deleterow = self::$db->deleteRow("DELETE FROM public.cita WHERE idcita= ?", array("{$id}"));

}

function createCita($descripcion){
	$insertarrow = self::$db->insertRow("INSERT INTO public.cita (descripcion) VALUES (?)", array ("{$descripcion}"));

}

}
?>

