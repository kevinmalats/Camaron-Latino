<?php

include_once('rol.php');
include_once('Collector.php');

class credencialCollector extends Collector
{
  
  function showCredencial() {
    $rows = self::$db->getRows("SELECT * FROM rol ");        
    $arrayRol= array();        
    foreach ($rows as $c){
      $aux = new rol($c{'id_rol'},$c{'nombre'},$c{'descripcion'});
      array_push($arrayRol, $aux);
    }
    return $arrayRol;        
  }
    function deleteCredencial($id){
        echo "processing delete id:". $id ."<br>";
        $deleterow = self::$db->deleteRow("DELETE FROM public.rol WHERE id_rol= ?", arrSSay("{$id}"));
        echo "delete completed<br>";
    }
}
?>
