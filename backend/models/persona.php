<?php

class Persona
{
    private $idpersona;
    private $nombre;
    private $apellido;
    private $cedula;
    private $email;
    private $telefono;
    private $ciudad;
    private $zona;
    private $sexo;
    
	function __construct($idpersona,$nombre,$apellido,$cedula,$email,$telefono,$ciudad,$zona,$sexo) {
	$this->idpersona = $idpersona;
	$this->nombre = $nombre;
	$this->apellido = $apellido;
	$this->cedula = $cedula;
	$this->email = $email;
	$this->telefono = $telefono;
	$this->ciudad = $ciudad;
	$this->zona = $zona;
	$this->sexo = $sexo;

	}
  
     function setIdpersona($idpersona){
       $this->idpersona = $idpersona;
     } 
     function getIdpersona(){
       return $this->idpersona;
     } 
     function setNombre($nombre){
       $this->nombre = $nombre;
     } 
     function getNombre(){
       return $this->nombre;
     }
    function setApellido($apellido){
       $this->apellido = $apellido;
     } 
     function getApellido(){
       return $this->apellido;
     }
    function setCedula($cedula){
       $this->cedula = $cedula;
     } 
     function getCedula(){
       return $this->cedula;
     }
    function setEmail($email){
       $this->email = $email;
     } 
     function getEmail(){
       return $this->email;
     }
    function setTelefono($telefono){
       $this->telefono = $telefono;
     } 
     function getTelefono(){
       return $this->telefono;
     }
    function setCiudad($ciudad){
       $this->ciudad = $ciudad;
     } 
     function getCiudad(){
       return $this->ciudad;
     }
    function setZona($zona){
       $this->zona = $zona;
     } 
     function getZona(){
       return $this->zona;
     }
    function setSexo($sexo){
       $this->sexo = $sexo;
     } 
     function getSexo(){
       return $this->sexo;
     }
    
}

?>
