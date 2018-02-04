<?php

class Calificacion
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
    
/*    require_once "conexion.php";
    
    $con = new conector_pg();
    $sql1 = 'SELECT * FROM calificacion';
    $result=$con->consultar($sql1);
    while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
                foreach ($line as $col_value) {
                    echo $col_value;
                }
            }
    $con->__destruct();*/
?>