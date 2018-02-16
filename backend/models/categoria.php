<?php

class Categoria
{
    private $idcategoria;
    private $descripcion;
    
    function __construct($idcategoria, $descripcion) {
      $this->idcategoria = $idcategoria;
      $this->descripcion = $descripcion;
    }
    
    function setIdCategoria($idcategoria){
      $this->idcategoria = $idcategoria;
    } 
    function getidCategoria(){
      return $this->idcategoria;
    } 
    function setDescripcion($descripcion){
      $this->descripcion = $descripcion;
    } 
    function getDescripcion(){
      return $this->descripcion;
    } 
}

?> 
