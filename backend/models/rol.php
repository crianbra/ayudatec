<?php

class rol
{
    private $idRol;
    private $descripcion;
    
	function __construct() {
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
