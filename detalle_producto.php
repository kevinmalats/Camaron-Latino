<?php

class detalle_producto
{
    private $idDetalleProducto;
    private $idProducto;
    private $nombre;
    private $fecha;
    private $descripcion;

     function __construct() {
     }
    
 
     function setIdDetalleProducto($idDetalleProducto){
       $this->idDetalleProducto = $idDetalleProducto;
     } 
     function getIdDetalleProducto(){
       return $this->idDetalleProducto;
     }
     function setIdProducto($idProducto){
       $this->idRegistro = $idRegistro;
     } 
     function getIdProducto(){
       return $this->idProducto;
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