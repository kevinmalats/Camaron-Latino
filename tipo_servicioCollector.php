<?php
include_once('tipo_servicio.php');
include_once('Collector.php');

class tipoServicioCollector extends Collector
{

function showTiposervicios(){
$rows = self::$db->getRows("SELECT * FROM tipo_servicio");
$arraytiposervicio= array();
foreach($rows as $c){
$aux = new tipoServicio($c{'id_tipo_servicio'}, $c{'nombre'}, $c{'descripcion'});
array_push($arraytiposervicio, $aux);
}
return $arraytiposervicio;
}

function showTiposervicio($id) {
      $rows = self::$db->getRows("SELECT * FROM public.tipo_servicio WHERE id_tipo_servicio= ?", array("{$id}"));        
      $aux = new tipoServicio();
      foreach ($rows as $c){ 
       $aux->setIdTipoServicio($c{'idTipoServicio'});
       $aux->setNombre($c{'nombre'});
       $aux->setDescripcion($c{'descripcion'});
    }
      return $aux;        
   }    
    function deleteTipoServicio($id){
        echo "processing delete id:". $id ."<br>";
        $deleterow = self::$db->deleteRow("DELETE FROM public.tipo_servicio WHERE id_tipo_servicio= ?", arrSSay("{$id}"));
        echo "delete completed<br>";
    }
    function creartipoServicio($nombre,$descripcion){
        $insertarrow = self::$db->insertRow("INSERT INTO public.tipo_servicio (nombre,descripcion) VALUES (?,?)", array ("{$nombre}","{$descripcion}"));
    }
}
$objeto = new tipoServicioCollector();
$nombre = "construccion";
$descripcion = "hola";
$crea = $objeto->creartipoServicio($nombre,$descripcion);

?>

