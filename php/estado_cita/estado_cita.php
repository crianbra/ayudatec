<?php

class estado_cita
{
    private $idestadocita;
    private $descripcion;
    private $citaid;
    
	function __construct() {
     }
  
     function setIdestadocita($idestadocita){
       $this->idestadocita = $idestadocita;
     } 
     function getIdestadocita(){
       return $this->idestadocita;
     } 
     function setDescripcion($descripcion){
       $this->descripcion = $descripcion;
     } 
     function getDescripcion(){
       return $this->descripcion;
     }
    
    function setCitaid($citaid){
       $this->citaid = $citaid;
     } 
     function getCitaid(){
       return $this->citaid;
     }
}
?>