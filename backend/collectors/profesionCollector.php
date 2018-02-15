<?php

include_once(RUTA_BACKEND.'config/collector.php'); 
include_once(RUTA_BACKEND.'models/profesion.php');
include_once(RUTA_BACKEND."models/usuario.php");
include_once(RUTA_BACKEND."models/categoria.php");

class ProfesionCollector extends Collector
{
  
  function showProfesiones() {
    $rows = self::$db->getRows("SELECT * FROM profesion 
      INNER JOIN usuario
      ON (profesion.usuarioid = usuario.idusuario)
      INNER JOIN categoria
      ON (profesion.categoriaid = categoria.idcategoria)"
    );        
    
    $arrayProfesion= array();
      
    foreach ($rows as $c){
        
      $usuarioObj = new Usuario($c{'idusuario'}, $c{'nombreusuario'},$c{'contrasenia'},$c{'personaid'},$c{'rolid'});
      $categoriaObj = new Categoria($c{'idcategoria'}, $c{'ca_descripcion'});
          
      $aux = new Profesion($c{'idprofesion'}, $usuarioObj, $categoriaObj);
      array_push($arrayProfesion, $aux);
    }
    return $arrayProfesion;        
  }

  function showProfesion($id){
    $row = self::$db->getRows("SELECT * FROM profesion where idprofesion= ? ", array("{$id}"));

    $ObjProfesion = new Profesion($row[0]{'idprofesion'},$row[0]{'usuarioid'},$row[0]{'categoriaid'});
    return $ObjProfesion;

}


function updateProfesion($id,$usuarioid,$categoriaid){
	return $insertrow = self::$db->updateRow("UPDATE public.profesion SET usuarioid= ?, categoriaid= ? WHERE idprofesion= ?", array("{$usuarioid}","{$categoriaid}", $id));

}

function deleteProfesion($id){
	return $deleterow = self::$db->deleteRow("DELETE FROM public.profesion WHERE idprofesion= ?", array("{$id}"));

}

function createProfesion($usuarioid,$categoriaid){
	return $insertarrow = self::$db->insertRow("INSERT INTO public.profesion (usuarioid, categoriaid) VALUES (?,?) ", array ("{$usuarioid}", "{$categoriaid}"));

}

    
    
}
?>