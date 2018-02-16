<?php

include_once('../../models/rol.php');
include_once('../../config/collector.php');

class RolCollector extends Collector
{
  
  function showRols() {
    $rows = self::$db->getRows("SELECT * FROM rol ");        
    
    $arrayRol = array();        
    foreach ($rows as $c){
      $aux = new Rol($c{'idrol'},$c{'descripcion'});
      array_push($arrayRol, $aux);
    }
    return $arrayRol;        
  }

  function showRol($id){
    $row = self::$db->getRows("SELECT * FROM rol where idrol= ? ", array("{$id}"));

    $ObjRol = new Rol($row[0]{'idrol'},$row[0]{'descripcion'});
    return $ObjRol;

}


function updateRol($id,$descripcion){
	return $insertrow = self::$db->updateRow("UPDATE public.rol SET descripcion= ? WHERE idrol= ?", array("{$descripcion}", $id));

}

function deleteRol($id){
	return $deleterow = self::$db->deleteRow("DELETE FROM public.rol WHERE idrol= ?", array("{$id}"));

}

function createRol($descripcion){
	return $insertarrow = self::$db->insertRow("INSERT INTO public.rol (descripcion) VALUES (?)", array ("{$descripcion}"));

}

}
?>

