<?php

class Categoria
{
    private $idCategoria;
    private $descripcion;
    
    function __construct($idCategoria, $descripcion) {
      $this->idCategoria = $idCategoria;
      $this->descripcion = $descripcion;
    }
    
    function setIdCategoria($idCategoria){
      $this->idCategoria = $idCategoria;
    } 
    function getidCategoria(){
      return $this->idCategoria;
    } 
    function setDescripcion($descripcion){
      $this->descripcion = $descripcion;
    } 
    function getDescripcion(){
      return $this->descripcion;
    } 
}

?> 
