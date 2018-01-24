<?php
include_once('Demo.php');
include_once('Collector.php');

class sugerenciaCollector extends Collector
{

function showsugerencia(){
$rows = self::$db->getRows("SELECT * FROM sugerencia");
$arraysugerencia= array();
foreach($rows as $c){
$aux = new sugerencia($c{'id_sugerencia'}, $c{'nombre'}, $c{'fecha'}, $c{'correo'}, $c{'telefono'}, $c{'mensaje'});
array_push($arraysugerencia, $aux);
}
return $arraysugerencia;
}
function deletesugerencia($id){
echo "processing delete id:".$id ."<br>";
$deleterow=self::$db->deleteRow(DELETE FROM public.sugerencia WHERE id_sugerencia= ?", arrSSay("{$id}"))
echo "delete completed<br>";
}
}
?>

