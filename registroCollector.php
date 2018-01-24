<?php

include_once('registro.php');
include_once('Collector.php');

class registroCollector extends Collector
{
  
  function showRegistro() {
    $rows = self::$db->getRows("SELECT * FROM registro ");        
    $arrayRegistro= array();        
    foreach ($rows as $c){
      $aux = new registro($c{'id_registro'},$c{'id_credencial'},$c{'descripcion'});
      array_push($arrayRegistro, $aux);
    }
    return $arrayRegistro;        
  }
    function deleteRegistro($id){
        echo "processing delete id:". $id ."<br>";
        $deleterow = self::$db->deleteRow("DELETE FROM public.registro WHERE id_registro= ?", arrSSay("{$id}"));
        echo "delete completed<br>";
    }
}
?>
