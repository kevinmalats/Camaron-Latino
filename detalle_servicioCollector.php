<?php

include_once('detalle_servicio.php');
include_once('Collector.php');

class detalleServicioCollector extends Collector
{
  
  function showDetalleServicios() {
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
    
    function showDetalleServicio($id) {
      $rows = self::$db->getRows("SELECT * FROM public.detalle_servicio WHERE id_detalle_servicio= ?", array("{$id}"));        
      $aux = new detalleProducto();
      foreach ($rows as $c){ 
       $aux->setNombre($c{'nombre'});
       $aux->setFecha($c{'fecha'});
       $aux->setDescripcion($c{'descripcion'});
       $aux->setIdServicio($c{'id_servicio'});
        }
    return $aux;        

    } 
    
    function crearDetalleServicio($nom,$fec,$des,$idser){
        $insertarrow = self::$db->insertRow("INSERT INTO public.detalle_servicio (nombre,fecha,descripcion,id_servicio) VALUES (?,?,?,?)", array ("{$nom}","{$fec}","{$des}","{$idser}"));
    }
    
}
$objeto = new detalleServicioCollector();
$nombre = "construcción";
$fecha = "2018-01-29";
$desc = "tubería";
$id_ser= "1";
$crea = $objeto->crearDetalleServicio($nombre,$fecha,$desc,$id_ser);

?>