<?php

class Calificacion
{
    private $idcalificacion;
    private $promedio;
    private $desempenioid;
    private $tecnicoid;
    
	function __construct($idcalificacion,$promedio,$desempenioid,$tecnicoid) {
      $this->idcalificacion = $idcalificacion;
      $this->promedio = $promedio;
    $this->desempenioid = $desempenioid;
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
    function setDesempenioid($desempenioid){
       $this->desempenioid = $desempenioid;
     } 
     function getDesempenioid(){
       return $this->desempenioid;
     }
    function setTecnicoid($tecnicoid){
       $this->tecnicoid = $tecnicoid;
     } 
     function getTecnicoid(){
       return $this->tecnicoid;
     }
}
    
?>