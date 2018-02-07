<?php
class Comentario
{
    private $idComentario
    private $nombre
    private $comentario
    private $usuarioid
    private $fecha  
    
    function __construct($idComentario, $nombre, $comentario, $usuarioid, $fecha) {
       $this->$idComentario = $idComentario;
       $this->nombre = $nombre;
     }
    
     function setIdComentario($idComentario){
       $this->idComentario = $idComentario;
     } 
     function getIdComentario(){
       return $this->idComentario;
     } 
    
    function setNombre($nombre){
       $this->nombre = $nombre;
     } 
     function getNombre(){
       return $this->nombre;
     } 
    
    function setComentario($comentario){
       $this->comentario = $comentario;
     } 
     function getComentario(){
       return $this->Comentario;
     } 
    
    function setUsuarioId($usuarioid){
       $this->usuarioid = $usuarioid;
     } 
     function getUsuarioId(){
       return $this->usuarioid;
     } 
    
    function setFecha($fecha){
       $this->fecha = $fecha;
     } 
     function getFecha(){
       return $this->fecha;
     } 
}
?>
