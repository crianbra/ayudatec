<?php

class Calificacion
{
    private $idcalificacion;
    private $promedio;
    private $tecnicoid;
    
	function __construct($idcalificacion,$promedio,$tecnicoid) {
      $this->idcalificacion = $idcalificacion;
      $this->promedio = $promedio;
      $this->tecnicoid = $tecnicoid;
     }
  
     function setIdcalificacion($idcalificacion){
       $this->idcalificacion = $idcalificacion;
     } 
     function getIdcalificacion(){
       return $this->idcalificacion;
     } 
    function setPromedio($promedio){
       $this->promedio = $promedio;
     } 
     function getPromedio(){
       return $this->promedio;
     }
    function setTecnicoid($tecnicoid){
       $this->tecnicoid = $tecnicoid;
     } 
     function getTecnicoid(){
       return $this->tecnicoid;
     }
}
    
?>