<?php

class detalle_registro
{
    private $idDetalleRegistro;
    private $idRegistro;
    private $fecha;
    private $descripcion;

     function __construct() {
     }
    
 
     function setIdDetalleRegistro($idDetalleRegistro){
       $this->idDetalleRegistro = $idDetalleRegistro;
     } 
     function getIdDetalleRegistro(){
       return $this->idDetalleRegistro;
     }
     function setIdRegistro($idRegistro){
       $this->idRegistro = $idRegistro;
     } 
     function getIdRegistro(){
       return $this->idRegistro;
     } 
     function setFecha($fecha){
       $this->fecha = $fecha;
     } 
     function getFecha(){
       return $this->fecha;
     } 
      function setDescripcion($descripcion){
       $this->descripcion = $descripcion;
     } 
     function getDescripcion(){
       return $this->descripcion;
     } 
}
?> 