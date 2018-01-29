<?php

include_once('detalle_producto.php');
include_once('Collector.php');

class detalleProductoCollector extends Collector
{
  
  function showdetalleProductos() {
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
    function showDetalleProducto($id) {
      $rows = self::$db->getRows("SELECT * FROM public.detalle_producto WHERE id_detalle_producto= ?", array("{$id}"));        
      $aux = new detalleProducto();
      foreach ($rows as $c){ 
       $aux->setNombre($c{'nombre'});
       $aux->setFecha($c{'fecha'});
       $aux->setDescripcion($c{'descripcion'});
       $aux->setIdProducto($c{'id_producto'});
        }
    return $aux;        

    } 
    
    function crearDetalleProducto($nom,$fec,$des,$idpro){
        $insertarrow = self::$db->insertRow("INSERT INTO public.detalle_producto (nombre,fecha,descripcion,id_producto) VALUES (?,?,?,?)", array ("{$nom}","{$fec}","{$des}","{$idpro}"));
    }
    
}
$objeto = new detalleProductoCollector();
$nombre = "carlos";
$fecha = "2018-01-29";
$desc = "hola";
$id_pro= "1";
$crea = $objeto->crearDetalleProducto($nombre,$fecha,$desc,$id_pro);
?>