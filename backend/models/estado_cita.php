<?php

class EstadoCita
{
    private $idestadocita;
    private $ec_descripcion;
    
	function __construct($idestadocita, $ec_descripcion) {
        $this->idestadocita = $idestadocita;
        $this->ec_descripcion = $ec_descripcion;
    }
  
     function setIdestadocita($idestadocita){
       $this->idestadocita = $idestadocita;
     } 
     function getIdestadocita(){
       return $this->idestadocita;
     } 
     function setDescripcion($descripcion){
       $this->ec_descripcion = $ec_descripcion;
     } 
     function getDescripcion(){
       return $this->ec_descripcion;
     }
}
?>