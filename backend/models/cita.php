<?php

class Cita
{
    private $idcita;
    private $descripcion;
    private $fecha;
    private $hora;
    private $tecnico;
    private $cliente;
    private $estadocita;
    
	function __construct($idcita, $descripcion, $fecha, $hora, $tecnico, $cliente, $estadocita) {
        $this->idcita = $idcita;
        $this->descripcion = $descripcion;
        $this->fecha = $fecha;
        $this->hora = $hora;
        $this->tecnico = $tecnico;
        $this->cliente= $cliente;
        $this->estadocita = $estadocita;
     }
  
     function setIdcita($idcita){
       $this->idcita = $idcita;
     } 
     function getIdcita(){
       return $this->idcita;
     } 
     function setDescripcion($descripcion){
       $this->descripcion = $descripcion;
     } 
     function getDescripcion(){
       return $this->descripcion;
     }
    function setFecha($fecha){
       $this->fecha = $fecha;
     } 
     function getFecha(){
       return $this->fecha;
     }
    function setHora($hora){
       $this->hora = $hora;
     } 
     function getHora(){
       return $this->hora;
     }
    function setTecnico($tecnico){
       $this->tecnico = $tecnico;
     } 
     function getTecnico(){
       return $this->tecnico;
     }
    function setCliente($cliente){
       $this->cliente = $cliente;
     } 
     function getCliente(){
       return $this->cliente;
     }
     function setEstadocita($estadocita){
      $this->estadocita = $estadocita;
    } 
    function getEstadocita(){
      return $this->estadocita;
    }
}

?>