<?php

include_once('producto.php');
include_once('Collector.php');

class productoCollector extends Collector
{
  
  function showProducto() {
    $rows = self::$db->getRows("SELECT * FROM producto ");        
    $arrayProducto= array();        
    foreach ($rows as $c){
      $aux = new servicio($c{'id_producto'},$c{'id_tipo_producto'},$c{'id_usuario'});
      array_push($arrayProducto, $aux);
    }
    return $arrayProducto;        
  }
    function deleteProducto($id){
        echo "processing delete id:". $id ."<br>";
        $deleterow = self::$db->deleteRow("DELETE FROM public.producto WHERE id_producto= ?", arrSSay("{$id}"));
        echo "delete completed<br>";
    }
}
?>
