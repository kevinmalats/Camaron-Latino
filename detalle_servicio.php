<?php

class detalle_servicio
{
    private $idDetalleServicio;
    private $idServicio;
    private $nombre;
    private $fecha;
    private $descripcion;

     function __construct() {
     }
    
 
     function setIdDetalleServicio($idDetalleServicio){
       $this->idDetalleServicio = $idDetalleServicio;
     } 
     function getIdDetalleServicio(){
       return $this->idDetalleServicio;
     }
     function setIdServicio($idServicio){
       $this->idServicio = $idServicio;
     } 
     function getIdServicio(){
       return $this->idServicio;
     }
     function setNombre($nombre){
       $this->nombre = $nombre;
     } 
     function getNombre(){
       return $this->nombre;
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