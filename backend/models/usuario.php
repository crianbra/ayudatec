<?php

class Usuario
{
    private $idusuario;
    private $nombreusuario;
    private $contrasenia;
    private $personaid;
    private $rolid;
        
	function __construct($idusuario,$nombreusuario,$contrasenia,$personaid,$rolid) {
        $this->idusuario = $idusuario;
        $this->nombreusuario = $nombreusuario;
        $this->contrasenia = $contrasenia;
        $this->personaid = $personaid;
        $this->rolid = $rolid;
     }
      
     function setIdusuario($idusuario){
       $this->idusuario = $idusuario;
     } 
     function getIdusuario(){
       return $this->idusuario;
     } 
     function setNombreusuario($nombreusuario){
       $this->nombreusuario = $nombreusuario;
     } 
     function getNombreusuario(){
       return $this->nombreusuario;
     }
    function setContrasenia($contrasenia){
       $this->contrasenia = $contrasenia;
     } 
     function getContrasenia(){
       return $this->contrasenia;
     }
    function setPersonaid($personaid){
       $this->personaid = $personaid;
     } 
     function getPersonaid(){
       return $this->personaid;
     }
    function setRolid($rolid){
       $this->rolid = $rolid;
     } 
     function getRolid(){
       return $this->rolid;
     }
    
}

?>
