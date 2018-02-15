<?php

include_once("../../config/collector.php");
include_once("../../models/usuario.php");
include_once("../../models/persona.php");
include_once("../../models/rol.php");
//include_once(RUTA_BACKEND.'config/collector.php'); 
//include_once(RUTA_BACKEND.'models/usuario.php');
//include_once(RUTA_BACKEND.'models/persona.php');
//include_once(RUTA_BACKEND.'models/rol.php');

class UsuarioCollector extends collector
{
  
  function showUsuarios() {
    $rows = self::$db->getRows("SELECT * 
      FROM usuario 
      INNER JOIN persona
      ON (usuario.personaid = persona.idpersona)
      INNER JOIN rol
      ON (usuario.rolid = idrol) ");
       
    $arrayUsuario = array();        
    foreach ($rows as $c){
        
      $personaObj = new Persona($c{'idpersona'},$c{'nombre'},$c{'apellido'},$c{'cedula'},$c{'email'},$c{'telefono'},$c{'ciudad'},$c{'zona'},$c{'sexo'}); 
                
      $rolObj = new Rol ($c{'idrol'},$c{'descripcion'});

      $aux = new Usuario($c{'idusuario'},$c{'nombreusuario'},$c{'contrasenia'},$personaObj,$rolObj);
      array_push($arrayUsuario, $aux);
    }
    return $arrayUsuario;        
  }
    

  function showUsuario($id){
    $row = self::$db->getRows("SELECT * FROM usuario where idusuario= ? ", array("{$id}"));

    $ObjUsuario = new Usuario($row[0]{'idusuario'},$row[0]{'nombreusuario'},$row[0]{'contrasenia'},$row[0]{'personaid'},$row[0]{'rolid'});
    return $ObjUsuario;

}
    

function showCategoriaUsuarios($id) {
  $rows = self::$db->getRows(
    "SELECT * 
    FROM profesion 
    INNER JOIN usuario
    ON (profesion.usuarioid = usuario.idusuario)
    WHERE categoriaid= ? ", array("{$id}"));
    
  $arrayUsuario = array();        
  foreach ($rows as $c){

    $aux = new Usuario($c{'idusuario'},$c{'nombreusuario'});
    array_push($arrayUsuario, $aux);
  }
  return $arrayUsuario;        
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