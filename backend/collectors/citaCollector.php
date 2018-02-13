<?php

/* $path = $_SERVER['DOCUMENT_ROOT'];
echo $path;
echo "Dirnamee";
echo dirname(__FILE__);
exit(); */

include_once(RUTA_BACKEND.'config/collector.php'); 
include_once(RUTA_BACKEND.'models/cita.php');
include_once(RUTA_BACKEND."models/estado_cita.php");
include_once(RUTA_BACKEND."models/usuario.php");

class CitaCollector extends Collector
{
  
  function showCitas() {
    //$rows = self::$db->getRows("SELECT * FROM cita ");
    $rows = self::$db->getRows(
      "SELECT * 
      FROM cita 
      INNER JOIN estado_cita
      ON (cita.estadocitaid = estado_cita.idestadocita)
      INNER JOIN usuario
      ON (cita.tecnicoid = idusuario)"
    );
    
      
    $arrayCita = array();
    foreach ($rows as $c) {
        
      /* var_dump($c);
      exit(); */
      $tecnicoObj = new Usuario($c{'tecnicoid'}, $c{'nombreusuario'});
      
      $cliente = self::$db->getRows("SELECT * FROM usuario where idusuario= ? ", array("{$c{'clienteid'}}"));
      $clienteObj = new Usuario($cliente[0]{'idusuario'}, $cliente[0]{'nombreusuario'});
      /* var_dump($cliente);
      exit(); */
      $estadoCitaObj = new EstadoCita($c{'estadocitaid'}, $c{'ec_descripcion'});
      $aux = new Cita($c{'idcita'},$c{'descripcion'}, $c{'fecha'}, $c{'hora'}, $tecnicoObj, $clienteObj, $estadoCitaObj);
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

function createCita($idcita, $descripcion,$fecha,$hora,$tecnicoid, $clienteid, $estadocitaid = "1"){
	return $insertarrow = self::$db->insertRow(
      "INSERT INTO public.cita (idcita ,descripcion, fecha, hora, tecnicoid, clienteid, estadocitaid)
       VALUES (?, ?, ?, ?, ?, ?, ?)", array ("{$idcita}","{$descripcion}","{$fecha}","{$hora}","{$tecnicoid}","{$clienteid}","{$estadocitaid}"
    ));

}

}
?>

