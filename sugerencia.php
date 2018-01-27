<?php

class sugerencia
{

private $idsugerencia;
private $nombre;
private $fecha;
private $correo;
private $telefono;
private $mensaje;

function __construct(){

}

function setIdsugerencia($idsugerencia){
$this->idsugerencia=$idsugerencia;
}

function getIdsugerencia(){
return $this->idsugerencia;
}

function setNombre($nombre){
$this->nombre=$nombre;
}

function getNombre(){
return $this->nombre;
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


function setTelefono($telefono){
$this->telefono=$telefono;
}

function getTelefono(){
return $this->telefono;
}



function setMensaje($mensaje){
$this->mensaje=$mensaje;
}

function getMensaje(){
return $this->mensaje;
}
}
?> 



