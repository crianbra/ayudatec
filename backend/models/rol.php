<?php

class rol
{
    private $idrol;
    private $descripcion;
    
	function __construct($idrol,$descripcion) {
	$this->idrol = $idrol;
	$this->descripcion = $descripcion;     
	}
  
     function setIdRol($idRol){
       $this->idRol = $idRol;
     } 
     function getIdRol(){
       return $this->idRol;
     } 
     function setDescripcion($descripcion){
       $this->descripcion = $descripcion;
     } 
     function getDescripcion(){
       return $this->descripcion;
     } 
}

?>
