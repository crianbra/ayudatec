<?php

class Cita
{
    private $idcita;
    private $descripcion;
    private $fecha;
    private $hora;
    private $usuarioid;
    
	function __construct() {
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
    function setUsuarioid($usuarioid){
       $this->usuarioid = $usuarioid;
     } 
     function getUsuarioid(){
       return $this->usuarioid;
     }
}

?>

   

   
<!--
   
    require_once "conexion.php";

    $con = new conector_pg();
    $sql1 = 'SELECT * FROM cita';
    $result=$con->consultar($sql1);
    while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
                foreach ($line as $col_value) {
                    echo $col_value;
                }
            }
    $con->__destruct();
-->
