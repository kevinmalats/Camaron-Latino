<?php

include_once('credencial.php');
include_once('Collector.php');

class credencialCollector extends Collector
{
  
  function showCredencial() {
    $rows = self::$db->getRows("SELECT * FROM credencial ");        
    $arrayCredencial= array();        
    foreach ($rows as $c){
      $aux = new Credencial($c{'id_credencial'},$c{'usuario'},$c{'clave'});
      array_push($arrayCredencial, $aux);
    }
    return $arrayCredencial;        
  }
    function deleteCredencial($id){
        echo "processing delete id:". $id ."<br>";
        $deleterow = self::$db->deleteRow("DELETE FROM public.credencial WHERE id_credencial= ?", arrSSay("{$id}"));
        echo "delete completed<br>";
    }
}
?>
