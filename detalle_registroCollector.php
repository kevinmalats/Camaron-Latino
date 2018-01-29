<?php

include_once('detalle_registro.php');
include_once('Collector.php');

class detalleRegistroCollector extends Collector
{
  
  function showDetalleRegistros() {
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
function showDetalleRegistro($id) {
      $rows = self::$db->getRows("SELECT * FROM public.detalle_registro WHERE id_detalle_registro= ?", array("{$id}"));        
      $aux = new detalleRegistro();
      foreach ($rows as $c){ 
       $aux->setFecha($c{'fecha'});
       $aux->setDescripcion($c{'descripcion'});
       $aux->setIdDetalleRegistro($c{'id_registro'});
        }
    return $aux;        
    } 

    function crearDetalleRegistro($fecha,$descri,$idreg){
        $insertarrow = self::$db->insertRow("INSERT INTO public.detalle_registro (fecha,descripcion,id_registro) VALUES (?,?,?)", array ("{$fecha}","{$descri}","{$idreg}"));
    }
}

$objeto = new detalleRegistroCollector();
$fecha = "2008-01-29";
$des = "bien";
$id = "1";
$crea = $objeto->crearDetalleRegistro($fecha,$des,$id);


                                    
?>