<?php

include_once(RUTA_BACKEND.'config/collector.php'); 
include_once(RUTA_BACKEND.'models/usuario.php');

class UsuarioCollector extends Collector
{
  
  function showUsuarios() {
    $rows = self::$db->getRows("SELECT * FROM usuario ");        
    
    $arrayUsuario = array();        
    foreach ($rows as $c){
      $aux = new Usuario($c{'idusuario'},$c{'nombreusuario'},$c{'contrasenia'},$c{'personaid'},$c{'rolid'});
      array_push($arrayUsuario, $aux);
    }
    return $arrayUsuario;        
  }

  function showUsuario($id){
    $row = self::$db->getRows("SELECT * FROM usuario where idusuario= ? ", array("{$id}"));

    $ObjUsuario = new Usuario($row[0]{'idusuario'},$row[0]{'nombreusuario'},$row[0]{'contrasenia'},$row[0]{'personaid'},$row[0]{'rolid'});
    return $ObjUsuario;

}


function updateUsuario($id, $nombreusuario, $contrasenia, $personaid, $rolid){
	$insertrow = self::$db->updateRow("UPDATE public.usuario SET nombreusuario= ? , contrasenia= ? , personaid= ? , rolid= ? WHERE idusuario= ?", array("{$nombreusuario}","{$contrasenia}","{$personaid}","{$rolid}",$id));

}

function deleteUsuario($id){
	$deleterow = self::$db->deleteRow("DELETE FROM public.usuario WHERE idusuario= ?", array("{$id}"));

}

function createUsuario($nombreusuario, $contrasenia, $personaid, $rolid){
	$insertarrow = self::$db->insertRow("INSERT INTO public.usuario (nombreusuario,contrasenia,personaid,rolid) VALUES (?,?,?,?)", array ("{$nombreusuario}","{$contrasenia}","{$personaid}","{$rolid}"));

}

}
?>