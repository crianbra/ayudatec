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
      $tecnicoObj = new Usuario($c{'tecnicoid'}, $c{'nombreusuario'}, $c{'contrasenia'}, $c{'personaid'}, $c{'rolid'});
      
      $cliente = self::$db->getRows("SELECT * FROM usuario where idusuario= ? ", array("{$c{'clienteid'}}"));
      $clienteObj = new Usuario($cliente[0]{'idusuario'}, $cliente[0]{'nombreusuario'}, $cliente[0]{'contrasenia'}, $cliente[0]{'personaid'}, $cliente[0]{'rolid'});
      /* var_dump($cliente);
      exit(); */
      $estadoCitaObj = new EstadoCita($c{'estadocitaid'}, $c{'ec_descripcion'});
      $aux = new Cita($c{'idcita'},$c{'descripcion'}, $c{'fecha'}, $c{'hora'}, $tecnicoObj, $clienteObj, $estadoCitaObj);
      array_push($arrayCita, $aux);
    }
    return $arrayCita;
  }

  function showCita($id){
    $row = self::$db->getRows("SELECT * FROM cita
                              INNER JOIN usuario
                              ON (cita.tecnicoid = idusuario)
                              WHERE idcita= ?", array("{$id}"));

    $tecnicoObj = new Usuario($row[0]{'tecnicoid'}, $row[0]{'nombreusuario'}, $row[0]{'contrasenia'}, $row[0]{'personaid'}, $row[0]{'rolid'});

    $ObjCita = new Cita($row[0]{'idcita'},$row[0]{'descripcion'},$row[0]{'fecha'},$row[0]{'hora'},$tecnicoObj);
    return $ObjCita;
}


function updateCita($id,$descripcion,$fecha,$hora,$tecnicoid){
	return $insertrow = self::$db->updateRow("UPDATE public.cita SET descripcion= ?, fecha= ?, hora= ?, tecnicoid= ? WHERE idcita= ?", array("{$descripcion}", "{$fecha}", "{$hora}", $tecnicoid, $id));

}

function deleteCita($id){
	return $deleterow = self::$db->deleteRow("DELETE FROM public.cita WHERE idcita= ?", array("{$id}"));

}

function createCita($idcita, $descripcion,$fecha,$hora,$tecnicoid, $clienteid, $estadocitaid = "1"){
	return $insertarrow = self::$db->insertRow(
      "INSERT INTO public.cita (idcita ,descripcion, fecha, hora, tecnicoid, clienteid, estadocitaid)
       VALUES (?, ?, ?, ?, ?, ?, ?)", array ("{$idcita}","{$descripcion}","{$fecha}","{$hora}","{$tecnicoid}","{$clienteid}","{$estadocitaid}"
    ));

}

}
?>

