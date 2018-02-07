<?php

include_once('cita.php');
include_once('collector.php');

class citaCollector extends collector
{
  
  function showCitas() {
    $rows = self::$db->getRows("SELECT * FROM cita ");        
    
    $arrayCita = array();        
    foreach ($rows as $c){
      $aux = new Cita($c{'idcita'},$c{'descripcion'}, $c{'fecha'}, $c{'hora'}, $c{'usuarioid'});
      array_push($arrayCita, $aux);
    }
    return $arrayCita;        
  }

  function showCita($id){
    $row = self::$db->getRows("SELECT * FROM cita where idcita= ? ", array("{$id}"));

    $ObjRol = new Rol($row[0]{'idcita'},$row[0]{'descripcion'},$row[0]{'fecha'},$row[0]{'hora'},$row[0]{'usuarioid'});
    return $ObjRol;
}


function updateCita($id,$descripcion,$fecha,$hora,$usuarioid){
	$insertrow = self::$db->updateRow("UPDATE public.cita SET descripcion= ?, fecha= ?, hora= ?, usuarioid= ? WHERE idcita= ?", array("{$descripcion}", "{$fecha}", "{$hora}", "{$usuarioid}", $id));

}

function deleteCita($id){
	$deleterow = self::$db->deleteRow("DELETE FROM public.cita WHERE idcita= ?", array("{$id}"));

}

function createCita($descripcion,$fecha,$hora,$usuarioid){
	$insertarrow = self::$db->insertRow("INSERT INTO public.cita (descripcion, hora, fecha, usuarioid) VALUES (?, ?, ?, ?)", array ("{$descripcion}","{$fecha}","{$hora}","{$usuarioid}"));

}

}
?>

