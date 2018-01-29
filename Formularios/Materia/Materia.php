<?php

class Materia
{
  private $cod_materia;
    private $descripcion;
     
    function __construct($cod_materia,$descripcion) {

       $this->descripcion = $descripcion;
      $this->cod_materia = $cod_materia;
       

     }

   


   function setdescripcion($descripcion){
       $this->descripcion = $descripcion;
     } 

     function getdescripcion(){
       return $this->descripcion;
     }
  function setcod_materia($cod_materia){
    $this->cod_materia = $cod_materia;
  }

  function getcod_materia(){
    return $this->cod_materia;
  }

   
       
 
}
