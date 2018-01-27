<?php
include_once('tipo_producto.php');
include_once('Collector.php');

class tipoproductoCollector extends Collector
{

function showtipoproducto(){
$rows = self::$db->getRows("SELECT * FROM tipo_producto");
$arraytipoproducto= array();
foreach($rows as $c){
$aux = new tipoproducto($c{'id_tipo_producto'}, $c{'nombre'}, $c{'descripcion'});
array_push($arraytipoproducto, $aux);
}
return $arraytipoproducto;
}
function deletetipoproducto($id){
echo "processing delete id:".$id ."<br>";
$deleterow=self::$db->deleteRow(DELETE FROM public.tipo_producto WHERE id_tipo_producto= ?", arrSSay("{$id}"))
echo "delete completed<br>";
}
}
?>

