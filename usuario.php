<?php
class usuario
{
    private $idusuario;
    private $nombre;
    private $identificacion;
    private $correo;
    private $telefono;
    private $direccion;
    private $idrol;
    private $idcredencial;

     function __construct() {
     }
    
     function setIdUsuario($idusuario){
       $this->idusuario = $idusuario;
     } 
     function getIdUsuario(){
       return $this->idusuario;
     }
     function setNombre($nombre){
       $this->nombre = $nombre;
     } 
     function getNombre(){
       return $this->nombre;
     }
     function setIdentificacion($identificacion){
       $this->identificacion = $identificacion;
     } 
     function getCorreo(){
       return $this->identificacion;
     }
     function setCorreo($correo){
       $this->correo = $correo;
     } 
     function getIdUsuario(){
       return $this->correo;
     }
     function setTelefono($telefono){
       $this->telefono = $telefono;
     } 
     function getTelefono(){
       return $this->telefono;
     }
     function setDireccion($direccion){
       $this->direccion = $direccion;
     } 
     function getDireccion(){
       return $this->direccion;
     }
     function setIdRol($idrol){
       $this->idrol = $idrol;
     } 
     function getIdRol(){
       return $this->idrol;
     }
     function setIdcredencial($idcredencial){
       $this->idcredencial = $idcredencial;
     } 
     function getIdcredencial(){
       return $this->idcredencial;
     }
}
?> 
