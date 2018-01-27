<?php
class producto
{
    private $idproducto;
    private $idtipoproducto;
    private $idusuario;

     function __construct() {
     }
    
     function setIdProducto($idproducto){
       $this->idproducto = $idproducto;
     } 
     function getIdProducto(){
       return $this->idproducto;
     }
     function setIdTipoProducto($idtipoproducto){
       $this->idtipoproducto = $idtipoproducto;
     } 
     function getIdTipoProducto(){
       return $this->idtipoproducto;
     }
     function setIdUsuario($idusuario){
       $this->idusuario = $idusuario;
     } 
     function getIdUsuario(){
       return $this->idusuario;
     }
}
?> 
