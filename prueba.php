<?php
class rol
{
    private $idrol;
    private $nombre;
    private $descripcion;

     function __construct() {
     }
    
     function setCredencial($Credencial){
       $this->Credencial = $Credencial;
     } 
     function getCredencial(){
       return $this->Credencial;
     }
     function setClave($clave){
       $this->clave = $clave;
     } 
     function getClave(){
       return $this->clave;
     } 
}
$usuario = "carlos";
$clave = "1234";
$Palabrerio = new credencial($usuario,$clave); 
echo "hola"."<br>";
echo "el usuario es: ". $Palabrerio->getUsuario()."";
?> 
