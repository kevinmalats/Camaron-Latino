<?php

include_once('usuario.php');
include_once('Collector.php');

class credencialCollector extends Collector
{
  
  function showCredencial() {
    $rows = self::$db->getRows("SELECT * FROM usuario ");        
    $arrayUsuario= array();        
    foreach ($rows as $c){
      $aux = new rol($c{'id_usuario'},$c{'nombre'},$c{'identificacion'},$c{'correo'},$c{'telefono'},$c{'direccion'},$c{'id_rol'},$c{'id_credencial'});
      array_push($arrayUsuario, $aux);
    }
    return $arrayRol;        
  }
    function deleteCredencial($id){
        echo "processing delete id:". $id ."<br>";
        $deleterow = self::$db->deleteRow("DELETE FROM public.usuario WHERE id_usuario= ?", arrSSay("{$id}"));
        echo "delete completed<br>";
    }
}
?>
