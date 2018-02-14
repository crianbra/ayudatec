<?php

class EstadoCita
{
    private $idestadocita;
    private $ec_descripcion;
    private $estado;
    
	function __construct($idestadocita, $ec_descripcion, $estado) {
        $this->idestadocita = $idestadocita;
        $this->ec_descripcion = $ec_descripcion;
        $this->estado = $estado;
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
     function setEstado($estado){
      $this->estado = $estado;
    } 
    function getEstado(){
      return $this->estado;
    }
}
?>