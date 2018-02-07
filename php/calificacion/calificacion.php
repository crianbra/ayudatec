<?php

class calificacion
{
    private $idcalificacion;
    private $rating;
    private $comentario;
    private $usuarioid;
    
	function __construct() {
     }
  
     function setIdcalificacion($idcalificacion){
       $this->idcalificacion = $idcalificacion;
     } 
     function getIdcalificacion(){
       return $this->idcalificacion;
     } 
    function setRating($rating){
       $this->rating = $rating;
     } 
     function getRating(){
       return $this->rating;
     }
    function setComentario($comentario){
       $this->comentario = $comentario;
     } 
     function getComentario(){
       return $this->comentario;
     }
    function setUsuarioid($usuarioid){
       $this->usuarioid = $usuarioid;
     } 
     function getUsuarioid(){
       return $this->usuarioid;
     }
}
    
?>