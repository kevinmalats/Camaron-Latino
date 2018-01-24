<?php
include_once('Demo.php');
include_once('Collector.php');

class credencialtiposervicio extends Collector
{

function showtiposervicio(){
$rows = self::$db->getRows("SELECT * FROM tiposervicio");
$arraytiposervicio= array();
foreach($rows as $c){
$aux = new tiposervicio($c{'id_tiposervicio'}, $c{'nombre'}, $c{'descripcion'});
array_push($arraytiposervicio, $aux);
}
return $arraytiposervicio;
}
function deletetiposervicio($id){
echo "processing delete id:".$id ."<br>";
$deleterow=self::$db->deleteRow(DELETE FROM public.tiposervicio WHERE id_tiposervicio= ?", arrSSay("{$id}"))
echo "delete completed<br>";
}
}
?>

