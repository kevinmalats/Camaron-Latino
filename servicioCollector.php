<?php

include_once('servicio.php');
include_once('Collector.php');

class servicioCollector extends Collector
{
  
  function showServicio() {
    $rows = self::$db->getRows("SELECT * FROM servicio ");        
    $arrayServicio= array();        
    foreach ($rows as $c){
      $aux = new servicio($c{'id_servicio'},$c{'id_tipo_servicio'},$c{'id_usuario'});
      array_push($arrayServicio, $aux);
    }
    return $arrayServicio;        
  }
    function deleteServicio($id){
        echo "processing delete id:". $id ."<br>";
        $deleterow = self::$db->deleteRow("DELETE FROM public.servicio WHERE id_servicio= ?", arrSSay("{$id}"));
        echo "delete completed<br>";
    }
}
?>
