<?php

include_once(RUTA_BACKEND.'config/collector.php'); 
include_once(RUTA_BACKEND.'models/tecnico_x_categoria.php');

class TecnicoPorCategoriaCollector extends Collector
{
  
  function showTecnico_x_Categorias() {
    $rows = self::$db->getRows("SELECT * FROM tecnico_x_categoria");        
    
    $arrayTecnico_x_Categoria= array();        
    foreach ($rows as $c){
      $aux = new TecnicoPorCategoria($c{'idtecnicoxcategoria'},$c{'usuarioid'},$c{'categoriaid'});
      array_push($arrayTecnico_x_Categoria, $aux);
    }
    return $arrayTecnico_x_Categoria;        
  }

  function showTecnico_x_Categoria($id){
    $row = self::$db->getRows("SELECT * FROM tecnico_x_categoria where idtecnicoxcategoria= ? ", array("{$id}"));

    $ObjTecnico_x_Categoria = new TecnicoPorCategoria($row[0]{'idtecnicoxcategoria'},$row[0]{'usuarioid'},$row[0]{'categoriaid'});
    return $ObjTecnico_x_Categoria;

}


function updateTecnico_x_Categoria($id,$usuarioid,$categoriaid){
	$insertrow = self::$db->updateRow("UPDATE public.tecnico_x_categoria SET usuarioid= ?, categoriaid= ? WHERE idtecnicoxcategoria= ?", array("{usuarioid}","{categoriaid}", $id));

}

function deleteTecnico_x_Categoria($id){
	$deleterow = self::$db->deleteRow("DELETE FROM public.tecnico_x_categoria WHERE idtecnicoxcategoria= ?", array("{$id}"));

}

function createTecnico_x_Categoria($usuarioid,$categoriaid){
	$insertarrow = self::$db->insertRow("INSERT INTO public.tecnico_x_categoria (usuarioid, categoriaid) VALUES (?,?) ", array ("{$usuarioid}", "{$categoriaid}"));

}

    
    
}
?>