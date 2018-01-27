<?php

include_once('rol.php');
include_once('Collector.php');

class rolCollector extends Collector
{
  
  function showRol() {
    $rows = self::$db->getRows("SELECT * FROM rol ");        
    $arrayRol= array();        
    foreach ($rows as $c){
      $aux = new rol($c{'id_rol'},$c{'nombre'},$c{'descripcion'});
      array_push($arrayRol, $aux);
    }
    return $arrayRol;        
  }
    function deleteRol($id){
        echo "processing delete id:". $id ."<br>";
        $deleterow = self::$db->deleteRow("DELETE FROM public.rol WHERE id_rol= ?", arrSSay("{$id}"));
        echo "delete completed<br>";
    }
}
?>
