<?php
class servicio
{
    private $idservico;
    private $idtiposervicio;
    private $idusuario;

     function __construct() {
     }
    
     function setIdServicio($idservico){
       $this->idservico = $idservico;
     } 
     function getIdServicio(){
       return $this->idservico;
     }
     function setIdTipoServicio($idtiposervicio){
       $this->idtiposervicio = $idtiposervicio;
     } 
     function getIdTipoServicio(){
       return $this->idtiposervicio;
     }
     function setIdUsuario($idusuario){
       $this->idusuario = $idusuario;
     } 
     function getIdUsuario(){
       return $this->idusuario;
     }
}
?> 
