<?php

class Rol
{
    private $idrol;
    private $descripcion;
    
	function __construct($idrol,$descripcion) {
	$this->idrol = $idrol;
	$this->descripcion = $descripcion;     
	}
  
     function setIdrol($idrol){
       $this->idrol = $idrol;
     } 
     function getIdrol(){
       return $this->idrol;
     } 
     function setDescripcion($descripcion){
       $this->descripcion = $descripcion;
     } 
     function getDescripcion(){
       return $this->descripcion;
     } 
}

?>
