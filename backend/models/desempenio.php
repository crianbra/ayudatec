<?php

class Desempenio
{
    private $iddesempenio;
    private $maximo;
    private $minimo;
    private $escala;
    
	function __construct($iddesempenio, $maximo, $minimo, $escala) {
        $this->iddesempenio = $iddesempenio;
        $this->maximo = $maximo;
        $this->minimo = $minimo;
        $this->escala = $escala;
    }
  
     function setIddesempenio($iddesempenio){
       $this->iddesempenio = $iddesempenio;
     } 
     function getIddesempenio(){
       return $this->iddesempenio;
     } 
     function setMaximo($maximo){
       $this->maximo = $maximo;
     } 
     function getMaximo(){
       return $this->maximo;
     }
     function setMinimo($minimo){
      $this->minimo = $minimo;
    } 
    function getMinimo(){
      return $this->minimo;
    }
     function setEscala($escala){
      $this->escala = $escala;
    } 
    function getEscala(){
      return $this->escala;
    }
}
?>