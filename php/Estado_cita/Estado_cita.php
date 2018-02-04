<?php

class Estado_cita
{
    private $idestadocita;
    private $descripcion;
    private $citaid;
    
	function __construct() {
     }
  
     function setIdestadocita($idestadocita){
       $this->idestadocita = $idestadocita;
     } 
     function getIdestadocita(){
       return $this->idestadocita;
     } 
     function setDescripcion($descripcion){
       $this->descripcion = $descripcion;
     } 
     function getDescripcion(){
       return $this->descripcion;
     }
    
    function setCitaid($citaid){
       $this->citaid = $citaid;
     } 
     function getCitaid(){
       return $this->citaid;
     }
}



   /* require_once "conexion.php";

    $con = new conector_pg();
    $sql1 = 'SELECT * FROM estado_cita';
    $result=$con->consultar($sql1);
    while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
                foreach ($line as $col_value) {
                    echo $col_value;
                }
            }
    $con->__destruct();*/
?>