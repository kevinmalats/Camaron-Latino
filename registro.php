<?php
class registro
{
    private $idregistro;
    private $idcredencial;
    private $descripcion;

     function __construct() {
     }
    
     function setIdRegistro($idregistro){
       $this->idregistro = $idregistro;
     } 
     function getIdRegistro(){
       return $this->idregistro;
     }
     function setIdCredencial($idcredencial){
       $this->idcredencial = $idcredencial;
     } 
     function getIdCredencial(){
       return $this->idcredencial;
     }
     function setDescripcion($descripcion){
       $this->descripcion = $descripcion;
     } 
     function getDescripcion(){
       return $this->Sdescripcion;
     }
}
?> 
