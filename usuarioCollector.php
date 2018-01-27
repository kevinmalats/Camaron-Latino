<?php

include_once('usuario.php');
include_once('Collector.php');

class usuarioCollector extends Collector
{
  
  function showUsuario() {
    $rows = self::$db->getRows("SELECT * FROM usuario ");        
    $arrayUsuario= array();        
    foreach ($rows as $c){
      $aux = new rol($c{'id_usuario'},$c{'nombre'},$c{'identificacion'},$c{'correo'},$c{'telefono'},$c{'direccion'},$c{'id_rol'},$c{'id_credencial'});
      array_push($arrayUsuario, $aux);
    }
    return $arrayUsuario;        
  }
    function deleteUsuario($id){
        echo "processing delete id:". $id ."<br>";
        $deleterow = self::$db->deleteRow("DELETE FROM public.usuario WHERE id_usuario= ?", arrSSay("{$id}"));
        echo "delete completed<br>";
    }
}
?>
