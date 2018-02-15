<?php

class Detallecalificacion
{
    private $iddetallecalificacion;
    private $fecha;
    private $valoracion;
    private $comentario;
    private $calificacionid;
    private $clienteid;
    
	function __construct($iddetallecalificacion,$fecha,$valoracion,$comentario,$calificacionid,$clienteid) {
      $this->iddetallecalificacion = $iddetallecalificacion;
      $this->fecha = $fecha;
      $this->valoracion = $valoracion;
      $this->comentario = $comentario;
      $this->calificacionid = $calificacionid;
      $this->clienteid = $clienteid;
     }
  
     function setIddetallecalificacion($iddetallecalificacion){
       $this->iddetallecalificacion = $iddetallecalificacion;
     } 
     function getIddetallecalificacion(){
       return $this->iddetallecalificacion;
     } 
    function setFecha($fecha){
       $this->fecha = $fecha;
     } 
     function getFecha(){
       return $this->fecha;
     }
    function setValoracion($valoracion){
       $this->valoracion = $valoracion;
     } 
     function getValoracion(){
       return $this->valoracion;
     }
    function setComentario($comentario){
       $this->comentario = $comentario;
     } 
     function getComentario(){
       return $this->comentario;
     }
    function setCalificacionid($calificacionid){
       $this->calificacionid = $calificacionid;
     } 
     function getCalificacionid(){
       return $this->calificacionid;
     }
    function setClienteid($clienteid){
       $this->clienteid = $clienteid;
     } 
     function getClienteid(){
       return $this->clienteid;
     }
}
    
?>