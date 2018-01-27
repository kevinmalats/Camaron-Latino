<?php
include_once('tipo_servicio.php');
include_once('Collector.php');

class tipoServicioCollector extends Collector
{

function showtiposervicio(){
$rows = self::$db->getRows("SELECT * FROM tipo_servicio");
$arraytiposervicio= array();
foreach($rows as $c){
$aux = new tiposervicio($c{'id_tipo_servicio'}, $c{'nombre'}, $c{'descripcion'});
array_push($arraytiposervicio, $aux);
}
return $arraytiposervicio;
}
function deletetiposervicio($id){
echo "processing delete id:".$id ."<br>";
$deleterow=self::$db->deleteRow(DELETE FROM public.tipo_servicio WHERE id_tipo_servicio= ?", arrSSay("{$id}"))
echo "delete completed<br>";
}
}
?>

