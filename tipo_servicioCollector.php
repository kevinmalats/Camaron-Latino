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
      $rows = self::$db->getRows("SELECT * FROM public.tipoServicio WHERE id_credencial= ?", array("{$id}"));        
      $aux = new tipoServicio();
      foreach ($rows as $c){ 
       $aux->setIdTipoServicio($c{'idTipoServicio'});
       $aux->setNombre($c{'nombre'});
       $aux->setDescripcion($c{'descripcion'});
    }
      return $aux;        
   } 
   



function deletetiposervicio($id){
echo "processing delete id:".$id ."<br>";
$deleterow=self::$db->deleteRow(DELETE FROM public.tipo_servicio WHERE idTipoServicio= ?", arrSSay("{$id}"))
echo "delete completed<br>";
}

function consultarCredencial($nombre, $descripcion) {
    $rows = self::$db->getRows("SELECT * FROM public.tipoServicio WHERE nombre=? AND descripcion=?  ", array("{$nombre}","{$descripcion}"));        
    $ObjtipoServicio = new tipoServicio();
    foreach ($rows as $c){ 
          $ObjtipoServicio->setIdTipoServicio($c{'idTipoServicio'});
        $ObjtipoServicio->setUsuario($c{'nombre'});
          $ObjtipoServicio->setClave($c{'descripcion'});
    }
    return   $ObjtipoServicio;        
    }
    
    
    
     function comprobartipoServicio($nombre) {
    $rows = self::$db->getRows("SELECT * FROM public.credencial WHERE nombre=? ", array("{$nombre}"));        
    $ObjtipoServicio = new tipoServicio();
    $ObjtipoServicio->setIdCredencial($rows[0]{'idTipoServicio'});
    $ObjtipoServicio->setNombre($rows[0]{'nombre'});
    $ObjtipoServicio->setDescripcion($rows[0]{'descripcion'});
    return $$ObjtipoServicio;        
    }
    
    function creartipoServicio($nombre,$descripcion){
        $insertarrow = self::$db->insertRow("INSERT INTO public.tipoServicio (nombre,descripcion) VALUES (?,?)", array ("{$nombre}","{$descripcion}"));
    }
}
    $objtipoServicio = new tipoServicio();
    
    $tipoServicio = $objtipoServicio->comprobartipoServicio('frada');
    echo "id: ". $tipoServicio->getIdTipoServicio()."<br>";
    echo "id: ". $tipoServicio->getNombre()."<br>";
    echo "id: ". $tipoServicio->getDescripcion()."<br>";
    print_r($tipoServicio);

?>

