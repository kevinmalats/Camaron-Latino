<?php

class sugerencia
{

private $idsugerencia;
private $fecha;
private $mensaje;
private $id_usuario;

function __construct(){
}
function setIdsugerencia($idsugerencia){
$this->idsugerencia=$idsugerencia;
}
function getIdsugerencia(){
return $this->idsugerencia;
}

function setFecha($fecha){
$this->fecha=$fecha;
}

function getFecha(){
return $this->fecha;
}
function setCorreo($correo){
$this->correo=$correo;
}
function getCorreo(){
return $this->correo;
}
function setMensaje($mensaje){
$this->mensaje=$mensaje;
}
function getMensaje(){
return $this->mensaje;
}
function setIdusuario($id_usuario){
$this->id_usuario=$id_usuario;
}
function getIdusuario(){
return $this->id_usuario;
}
}
?> 



