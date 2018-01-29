<?php
include_once('tipoProducto.php');
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
      $rows = self::$db->getRows("SELECT * FROM public.tipo_producto WHERE id_tipo_producto= ?", array("{$id}"));        
      $aux = new tipoProducto();
      foreach ($rows as $c){ 
       $aux->setNombre($c{'nombre'});
       $aux->setDescripcion($c{'descripcion'});
      }
      return $aux;        
   } 
    function deleteTipoProducto($id){
        echo "processing delete id:". $id ."<br>";
        $deleterow = self::$db->deleteRow("DELETE FROM public.tipo_producto WHERE id_tipo_producto= ?", arrSSay("{$id}"));
        echo "delete completed<br>";
    }
    function creartipoProducto($nombre,$descripcion){
        $insertarrow = self::$db->insertRow("INSERT INTO public.tipo_producto (nombre,descripcion) VALUES (?,?)", array ("{$nombre}","{$descripcion}"));
    }
}

$objeto = new tipoproductoCollector();
$nombre = "1";
$descripcion = "1";
$crea = $objeto->creartipoProducto($nombre,$descripcion);

?>


