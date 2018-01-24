<?php

include_once('detalle_servicio.php');
include_once('Collector.php');

class detalleServicioCollector extends Collector
{
  
  function showDetalleServicio() {
    $rows = self::$db->getRows("SELECT * FROM detalle_servicio ");        
    $arrayDetalleServicio= array();        
    foreach ($rows as $c){
      $aux = new DetalleServicio($c{'id_detalle_servicio'},$c{'id_servicio'},$c{'nombre'},$c{'fecha'},$c{'descripcion'});
      array_push($arrayDetalleServicio, $aux);
    }
    return $arrayDetalleServicio;        
  }
    function deleteDetalleServicio($id){
        echo "processing delete id:". $id ."<br>";
        $deleterow = self::$db->deleteRow("DELETE FROM public.detalle_servicio WHERE id_detalle_servicio= ?", arrSSay("{$id}"));
        echo "delete completed<br>";
    }
}
?>