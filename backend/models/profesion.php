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
    
     function setIdprofesion($idprofesion){
       $this->idprofesion = $idprofesion;
     } 
<<<<<<< HEAD
     function getIdprofesion(){
=======
     function getIdProfesion(){
>>>>>>> e65836d42e996dc46854eb2bf4b61248dcc3e4c9
       return $this->idprofesion;
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