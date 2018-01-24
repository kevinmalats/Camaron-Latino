<?php

include_once('detalle_producto.php');
include_once('Collector.php');

class detalleProductoCollector extends Collector
{
  
  function showDetalleProducto() {
    $rows = self::$db->getRows("SELECT * FROM detalle_producto ");        
    $arrayDetalleProducto= array();        
    foreach ($rows as $c){
      $aux = new DetalleProducto($c{'id_detalle_producto'},$c{'id_producto'},$c{'nombre'},$c{'fecha'},$c{'descripcion'});
      array_push($arrayDetalleProducto, $aux);
    }
    return $arrayDetalleProducto;        
  }
    function deleteDetalleProducto($id){
        echo "processing delete id:". $id ."<br>";
        $deleterow = self::$db->deleteRow("DELETE FROM public.detalle_producto WHERE id_detalle_producto= ?", arrSSay("{$id}"));
        echo "delete completed<br>";
    }
}
?>