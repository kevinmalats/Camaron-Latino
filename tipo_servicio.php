<?php

class tipoServicio
{

private $idTipoServicio;
private $nombre;
private $descripcion;

function __construct(){

}

function setIdTipoServicio($idTipoServicio){
$this->idTipoServicio=$idTipoServicio;
}

function getIdTipoServicio(){
return $this->idTipoServicio;
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
}
?>



