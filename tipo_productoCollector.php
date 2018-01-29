<?php
include_once('tipo_producto.php');
include_once('Collector.php');

class tipoproductoCollector extends Collector
{

function showtipoProductos(){
$rows = self::$db->getRows("SELECT * FROM tipo_producto");
$arraytipoproducto= array();
foreach($rows as $c){
$aux = new tipoProducto($c{'idTipoProducto'}, $c{'nombre'}, $c{'descripcion'});
array_push($arraytipoproducto, $aux);
}
return $arraytipoproducto;
}


  function showtipoProducto($id) {
      $rows = self::$db->getRows("SELECT * FROM public.tipoProducto WHERE id_credencial= ?", array("{$id}"));        
      $aux = new tipoProducto();
      foreach ($rows as $c){ 
       $aux->setIdTipoProducto($c{'idTipoProducto'});
       $aux->setNombreo($c{'$nombre'});
       $aux->setDescripcion($c{'$descripcion'});
    }
      return $aux;        
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
?>

