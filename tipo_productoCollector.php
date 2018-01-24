<?php
include_once('Demo.php');
include_once('Collector.php');

class credencialtipoproducto extends Collector
{

function showtipoproducto(){
$rows = self::$db->getRows("SELECT * FROM tipoproducto");
$arraytipoproducto= array();
foreach($rows as $c){
$aux = new tipoproducto($c{'id_tipoproducto'}, $c{'nombre'}, $c{'descripcion'});
array_push($arraytipoproducto, $aux);
}
return $arraytipoproducto;
}
function deletetipoproducto($id){
echo "processing delete id:".$id ."<br>";
$deleterow=self::$db->deleteRow(DELETE FROM public.tipoproducto WHERE id_tipoproducto= ?", arrSSay("{$id}"))
echo "delete completed<br>";
}
}
?>

