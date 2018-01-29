<?php

include_once('rol.php');
include_once('Collector.php');

class rolCollector extends Collector
{
  
  function showRoles() {
    $rows = self::$db->getRows("SELECT * FROM rol ");        
    $arrayRol= array();        
    foreach ($rows as $c){
       $aux = new rol();
       $aux->setIdRol($c{'id_rol'});
       $aux->setNombre($c{'nombre'});
       $aux->setDescripcion($c{'descripcion'});
       array_push($arrayRol, $aux);
    }
    return $arrayRol;        
  }
    function showRol($id) {
      $rows = self::$db->getRows("SELECT * FROM public.rol WHERE id_rol= ?", array("{$id}"));        
      $aux = new rol();
      foreach ($rows as $c){ 
       $aux->setIdRol($c{'id_rol'});
       $aux->setNombre($c{'nombre'});
       $aux->setDescripcion($c{'descripcion'});
    }
      return $aux;        
   } 
    function deleteRol($id){
        echo "processing delete id:". $id ."<br>";
        $deleterow = self::$db->deleteRow("DELETE FROM public.rol WHERE id_rol= ?", array("{$id}"));
        echo "delete completed<br>";
    }
    function crearrol($nom,$des){
        $insertarrow = self::$db->insertRow("INSERT INTO public.rol (nombre,descripcion) VALUES (?,?)", array ("{$nom}","{$des}"));
        echo "crear completed<br>";
    }
}
//$objeto = new rolCollector();
//foreach($objeto->showroles() as $rol){
  //  echo "el id es: " . $rol->getIdRol() . "<br>";
//    echo "nombre  : " . $rol->getNombre() . "<br>";
  //  echo "descrip : " . $rol->getDescripcion() . "<br>";
//}
//$r = $objeto->showRol("1");
  //  echo "el id es: " . $r->getIdRol() . "<br>";
//    echo "nombre  : " . $r->getNombre() . "<br>";
  //  echo "descrip : " . $r->getDescripcion() . "<br>";
?>
