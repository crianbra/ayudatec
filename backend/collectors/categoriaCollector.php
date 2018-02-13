<?php

include_once(RUTA_BACKEND.'config/collector.php'); 
include_once(RUTA_BACKEND.'models/categoria.php');

class CategoriaCollector extends Collector
{
  
  function showCategorias() {
    $rows = self::$db->getRows("SELECT * FROM categoria");        
    
    $arrayCategoria = array();
    foreach ($rows as $c){
      $aux = new Categoria($c{'idcategoria'},$c{'descripcion'});
      array_push($arrayCategoria, $aux);
    }
    return $arrayCategoria;        
  }

  function showCategoria($id){
    $row = self::$db->getRows("SELECT * FROM categoria where idcategoria= ? ", array("{$id}"));

    $ObjCategoria = new Categoria($row[0]{'idcategoria'},$row[0]{'descripcion'});
    return $ObjCategoria;

  }

  function updateCategoria($id,$descripcion){
    return $insertrow = self::$db->updateRow("UPDATE public.categoria SET descripcion= ? WHERE idcategoria= ?", array("{descripcion}", $id));

  }

  function deleteCategoria($id){
    return $deleterow = self::$db->deleteRow("DELETE FROM public.categoria WHERE idcategoria= ?", array("{$id}"));

  }

  function createCategoria($descripcion){
    return $insertarrow = self::$db->insertRow("INSERT INTO public.categoria (descripcion) VALUES (?)", array ("{$descripcion}"));

  }

}
?>