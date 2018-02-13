<?php

include_once('estado_cita.php');
include_once('../collector.php');

class Estado_CitaCollector extends Collector
{
  
  function showEstado_citas() {
    $rows = self::$db->getRows("SELECT * FROM estado_cita ");        
    
    $arrayEstado_cita = array();        
    foreach ($rows as $c){
      $aux = new EstadoCita($c{'idestadocita'},$c{'descripcion'});
      array_push($arrayEstado_cita, $aux);
    }
    return $arrayEstado_cita;        
  }
    
  function showEstado_cita($id){
    $row = self::$db->getRows("SELECT * FROM estado_cita where idestadocita= ? ", array("{$id}"));

    $ObjRol = new Rol($row[0]{'idestadocita'},$row[0]{'descripcion'});
    return $ObjRol;

}


function updateEstado_cita($id,$descripcion){
	$insertrow = self::$db->updateRow("UPDATE public.estado_cita SET descripcion= ? WHERE idestadocita= ?", array("{$descripcion}", $id));

}

function deleteEstado_cita($id){
	$deleterow = self::$db->deleteRow("DELETE FROM public.estado_cita WHERE idestadocita= ?", array("{$id}"));

}

function createEstado_cita($descripcion){
	$insertarrow = self::$db->insertRow("INSERT INTO public.estado_cita (descripcion) VALUES (?)", array ("{$descripcion}"));

}

}
?>

