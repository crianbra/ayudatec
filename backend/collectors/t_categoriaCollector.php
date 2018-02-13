<?php

include_once('t_categoria.php');
include_once('collector.php');

class t_categoriaCollector extends collector
{
  
  function showT_Categorias() {
    $rows = self::$db->getRows("SELECT * FROM t_categoria");        
    
    $array t_categoria= array();        
    foreach ($rows as $c){
      $aux = new t_categoria($c{'idcategoria'},$c{'descripcion'});
      array_push($arrayT_Categoria, $aux);
    }
    return $array t_categoria;        
  }

  function showT_Categoria($id){
    $row = self::$db->getRows("SELECT * FROM t_categoria where idcategoria= ? ", array("{$id}"));

    $ObjT_Categoria = new T_Categoria($row[0]{'idcategoria'},$row[0]{'descripcion'});
    return $ObjT_Categoria;

}


function updateT_Categoria($id,$descripcion){
	$insertrow = self::$db->updateRow("UPDATE public.t_categoria SET descripcion= ? WHERE idcategoria= ?", array("{descripcion}", $id));

}

function deleteT_Categoria($id){
	$deleterow = self::$db->deleteRow("DELETE FROM public.t_categoria WHERE idcategoria= ?", array("{$id}"));

}

function createT_Categoria($descripcion){
	$insertarrow = self::$db->insertRow("INSERT INTO public.t_categoria (descripcion) VALUES (?)", array ("{$descripcion}"));

}

}
?>