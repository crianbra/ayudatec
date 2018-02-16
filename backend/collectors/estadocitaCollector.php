<?php
include_once('../../config/collector.php'); 
include_once('../../models/estado_cita.php');

class EstadoCitaCollector extends Collector
{
  
  function showEstadoCitas() {
    $rows = self::$db->getRows("SELECT * FROM estado_cita ");        
    
    $arrayEstado_cita = array();        
    foreach ($rows as $c){
      $aux = new EstadoCita($c{'idestadocita'},$c{'ec_descripcion'},$c{'estado'});
      array_push($arrayEstado_cita, $aux);
    }
    return $arrayEstado_cita;        
  }
    
  function showEstadoCita($id){
    $row = self::$db->getRows("SELECT * FROM estado_cita where idestadocita= ? ", array("{$id}"));

    $ObjRol = new EstadoCita($row[0]{'idestadocita'},$row[0]{'ec_descripcion'},$row[0]{'estado'});
    return $ObjRol;

}

function updateEstadoCita($id,$descripcion,$estado){
	$insertrow = self::$db->updateRow("UPDATE public.estado_cita SET ec_descripcion= ?, estado= ? WHERE idestadocita= ?", array("{$descripcion}", "{$estado}", $id));
  return $insertrow;
}

function deleteEstadoCita($id){
	$deleterow = self::$db->deleteRow("DELETE FROM public.estado_cita WHERE idestadocita= ?", array("{$id}"));
  return $deleterow;
}

function createEstadoCita($descripcion, $estado){
	$insertarrow = self::$db->insertRow("INSERT INTO public.estado_cita (ec_descripcion, estado) VALUES (?, ?)", array ("{$descripcion}","{$estado}"));
  return $insertarrow;
}

}
?>

