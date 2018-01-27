<?php
class tipoProducto
{

private $idTipoProducto;
private $nombre;
private $descripcion;

function __construct(){

}

function setIdTipoProducto($idTipoProducto){
$this->idTipoProducto=$idTipoProducto;
}

function getIdTiPoproducto(){
return $this->idTipoProducto;
}

function setNombre($nombre){
$this->nombre=$nombre;
}

function getNombre(){
return $this->nombre;
}

function setDescripcion($descripcion){
$this->descripcion=$descripcion;
}

function getDescripcion(){
return $this->descripcion;
}
?> 



