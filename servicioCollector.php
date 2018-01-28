<?php

include_once('servicio.php');
include_once('Collector.php');

class servicioCollector extends Collector
{
  
   function showServicios() {
    $rows = self::$db->getRows("SELECT * FROM servicio ");        
    $arrayServicio= array();
    
    foreach ($rows as $c){
      $aux = new servicio();
        $aux->setIdServicio($c{'id_servicio'});
       $aux->setIdUsuario($c{'id_usuario'});
       $aux->setIdTipoServicio($c{'id_tipo_servicio'});
       array_push($arrayServicio, $aux);
    }
    return $arrayServicio;        
  }
     function showServicio($id) {
      $rows = self::$db->getRows("SELECT * FROM public.servicio WHERE id_servicio= ?", array("{$id}"));        
      $aux = new servicio();
      foreach ($rows as $c){ 
       $aux->setIdServicio($c{'id_servicio'});
       $aux->setIdUsuario($c{'id_usuario'});
       $aux->setIdTipoServicio($c{'id_tipo_servicio'});
    }
      return $aux;        
   } 
    function deleteServicio($id){
        echo "processing delete id:". $id ."<br>";
        $deleterow = self::$db->deleteRow("DELETE FROM public.servicio WHERE id_servicio= ?", arrSSay("{$id}"));
        echo "delete completed<br>";
    }
    function crearServicio($usua,$tser){
        $insertarrow = self::$db->insertRow("INSERT INTO public.servicio (id_usuario,id_tipo_servicio) VALUES (?,?)", array ("{$usua}","{$tser}"));
    }
      function comprobarServicio($idusu) {
    $rows = self::$db->getRows("SELECT * FROM public.servicio WHERE usuario=? ", array("{$idusu}"));        
    $ObjCredencial = new registro();
    $ObjCredencial->setIdServicio($rows[0]{'id_servicio'});
    $ObjCredencial->setIdUsuario($rows[0]{'id_usuario'});
    $ObjCredencial->setIdTipoServicio($rows[0]{'id_tipo_servicio'});
    return $ObjCredencial;        
    }
}


//$objeto = new productoCollector();
$objeto = new servicioCollector();
$des = "1";
$id = "1";
//$crea = $objeto->crearServicio($des,$id);


$r = $objeto->showServicio(1);
echo "el id es:" . $r->getIdServicio() . "<br>";
echo "el id del usuario es : " . $r->getIdUsuario() . "<br>";
echo "el tipo es: " . $r->getIdTipoServicio(). "<br>";
echo "todos"."<br>";
foreach($objeto->showServicios() as $r2){
    echo "el id es:" . $r2->getIdServicio() . "<br>";
    echo "el id del usuario es : " . $r2->getIdUsuario() . "<br>";
    echo "el tipo es: " . $r2->getIdTipoServicio(). "<br>";
}

?>
