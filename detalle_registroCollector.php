<?php

include_once('detalle_registro.php');
include_once('Collector.php');

class detalleRegistroCollector extends Collector
{
  
  function showDetalleRegistro() {
    $rows = self::$db->getRows("SELECT * FROM detalle_registro ");        
    $arrayDetalleRegistro= array();        
    foreach ($rows as $c){
      $aux = new DetalleRegistro($c{'id_detalle_registro'},$c{'id_registro'},$c{'fecha'},$c{'descripcion'});
      array_push($arrayDetalleRegistro, $aux);
    }
    return $arrayDetalleRegistro;        
  }
    function deleteDetalleRegistro($id){
        echo "processing delete id:". $id ."<br>";
        $deleterow = self::$db->deleteRow("DELETE FROM public.detalle_registro WHERE id_detalle_registro= ?", arrSSay("{$id}"));
        echo "delete completed<br>";
    }
}
?>