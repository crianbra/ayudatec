<?php

class Profesion
{
    private $idprofesion;
    private $usuarioid;
    private $categoriaid;
    
     function __construct($idprofesion, $usuarioid, $categoriaid) {
       $this->idprofesion = $idprofesion;
       $this->usuarioid = $usuarioid;
       $this->categoriaid = $categoriaid;
     }
    
     function setIdProfesion($idprofesion){
       $this->idprofesion = $idprofesion;
     } 
     function getIdProfesion(){
       return $this->$idprofesion;
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