<?php
include_once(RUTA_BACKEND.'config/collector.php'); 
include_once(RUTA_BACKEND.'models/desempenio.php');

class DesempenioCollector extends Collector
{
  
  function showDesempenios() {
    $rows = self::$db->getRows("SELECT * FROM desempenio ");        
    
    $arrayDesempenio = array();        
    foreach ($rows as $c){
      $aux = new Desempenio($c{'iddesempenio'},$c{'maximo'},$c{'minimo'},$c{'escala'});
      array_push($arrayDesempenio, $aux);
    }
    return $arrayDesempenio;        
  }
    
  function showDesempenio($id){
    $row = self::$db->getRows("SELECT * FROM desempenio where iddesempenio= ? ", array("{$id}"));

    $ObjDesempenio = new Desempenio($row[0]{'iddesempenio'},$row[0]{'maximo'},$row[0]{'minimo'},$row[0]{'escala'});
    return $ObjDesempenio;
}

function updateDesempenio($id,$maximo,$minimo,$escala){
	$insertrow = self::$db->updateRow("UPDATE public.desempenio SET maximo= ?, minimo= ?, escala= ? WHERE iddesempenio= ?", array("{$maximo}", "{$minimo}","{$escala}", $id));
  return $insertrow;
}

function deleteDesempenio($id){
	$deleterow = self::$db->deleteRow("DELETE FROM public.desempenio WHERE iddesempenio= ?", array("{$id}"));
  return $deleterow;
}

function createDesempenio($maximo,$minimo,$escala){
	$insertarrow = self::$db->insertRow("INSERT INTO public.desempenio (maximo, minimo, escala) VALUES (?, ?, ?)", array ("{$maximo}","{$minimo}","{$escala}"));
  return $insertarrow;
}

}
?>

