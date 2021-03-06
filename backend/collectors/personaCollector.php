<?php

include_once('../../models/persona.php');
include_once('../../config/collector.php');

class PersonaCollector extends Collector
{
  
  function showPersonas() {
    $rows = self::$db->getRows("SELECT * FROM persona ");        
    
    $arrayPersona = array();        
    foreach ($rows as $c){
      $aux = new Persona($c{'idpersona'},$c{'nombre'},$c{'apellido'},$c{'cedula'},$c{'email'},$c{'telefono'},$c{'ciudad'},$c{'zona'},$c{'sexo'});
      array_push($arrayPersona, $aux);
    }
    return $arrayPersona;        
  }

  function showPersona($id){
    $row = self::$db->getRows("SELECT * FROM persona where idpersona= ? ", array("{$id}"));

    $ObjPersona = new Persona($row[0]{'idpersona'},$row[0]{'nombre'},$row[0]{'apellido'},$row[0]{'cedula'},$row[0]{'email'},$row[0]{'telefono'},$row[0]{'ciudad'},$row[0]{'zona'},$row[0]{'sexo'});
    return $ObjPersona;

}


function updatePersona($id, $nombre, $apellido, $cedula, $email, $telefono, $ciudad, $zona, $sexo){
	return $insertrow = self::$db->updateRow("UPDATE public.persona SET nombre= ? , apellido= ? , cedula= ? , email= ? , telefono= ? , ciudad= ? , zona= ? , sexo= ? WHERE idpersona= ?", array("{$nombre}","{$apellido}","{$cedula}","{$email}","{$telefono}","{$ciudad}","{$zona}","{$sexo}",$id));

}

function deletePersona($id){
	return $deleterow = self::$db->deleteRow("DELETE FROM public.persona WHERE idpersona= ?", array("{$id}"));

}

function createPersona($nombre, $apellido, $cedula, $email, $telefono, $ciudad, $zona, $sexo){
	return $insertarrow = self::$db->insertRow("INSERT INTO public.persona (nombre, apellido, cedula, email, telefono, ciudad, zona, sexo) VALUES (?,?,?,?,?,?,?,?)", array ("{$nombre}","{$apellido}","{$cedula}","{$email}","{$telefono}","{$ciudad}","{$zona}","{$sexo}"));

}

}
?>
