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
    $row = self::$db->getRows("SELECT * FROM profesion 
    INNER JOIN usuario
    ON (profesion.usuarioid = usuario.idusuario)
    INNER JOIN categoria
    ON (profesion.categoriaid = categoria.idcategoria)
    WHERE idprofesion= ? ", array("{$id}"));


      $usuarioObj= new Usuario($row[0]{'idusuario'}, $row[0]{'nombreusuario'}, $row[0]{'contrasenia'}, $row[0]{'personaid'}, $row[0]{'rolid'});
      
      $categoriaObj= new Categoria($row[0]{'idcategoria'}, $row[0]{'ca_descripcion'});
      
      $ObjProfesion = new Profesion($row[0]{'idprofesion'},$usuarioObj,$categoriaObj);
    return $ObjProfesion;

}


function updateProfesion($id,$usuarioid,$categoriaid){

	$insertrow = self::$db->updateRow("UPDATE public.profesion SET usuarioid= ? , categoriaid= ? WHERE idprofesion= ?", array("{$usuarioid}","{$categoriaid}", $id));

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