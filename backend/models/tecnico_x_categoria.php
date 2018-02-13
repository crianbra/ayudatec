<?php

class TecnicoPorCategoria
{
    private $idTecnicoxCategoria;
    private $usuarioid;
    private $categoriaid;
    
     function __construct($idTecnicoxCategoria, $usuarioid, $categoriaid) {
       $this->idTecnicoxCategoria = $idTecnicoxCategoria;
       $this->usuarioid = $usuarioid;
       $this->categoriaid = $categoriaid;
     }
    
     function setIdTecnicoxCategoria($idTecnicoxCategoria){
       $this->idTecnicoxCategoria = $idTecnicoxCategoria;
     } 
     function getIdTecnicoxCategoria(){
       return $this->idTecnicoxCategoria;
     } 
     function setUsuarioid($usuarioid){
       $this->usuarioid = $usuarioid;
     } 
     function getUsuarioid(){
       return $this->usuarioid;
     }
    
    function setCategoriaid($categoriaid){
       $this->categoriaid = $categoriaid;
     } 
     function getCategoriaid(){
       return $this->categoriaid;
     } 
}

?> 