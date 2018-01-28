<?php

include_once('registro.php');
include_once('Collector.php');

class registroCollector extends Collector
{
  
  function showRegistros() {
    $rows = self::$db->getRows("SELECT * FROM registro ");        
    $arrayRegistro= array();
    
    foreach ($rows as $c){
      $aux = new registro();
        $aux->setIdRegistro($c{'id_registro'});
       $aux->setDescripcion($c{'descripcion'});
       $aux->setIdCredencial($c{'id_credencial'});
       array_push($arrayRegistro, $aux);
    }
    return $arrayRegistro;        
  }
    function showRegistro($id) {
      $rows = self::$db->getRows("SELECT * FROM public.registro WHERE id_registro= ?", array("{$id}"));        
      $aux = new registro();
      foreach ($rows as $c){ 
       $aux->setIdRegistro($c{'id_registro'});
       $aux->setDescripcion($c{'descripcion'});
       $aux->setIdCredencial($c{'id_credencial'});
        }
    return $aux;        

    } 
    
    function deleteRegistro($id){
        echo "processing delete id:". $id ."<br>";
        $deleterow = self::$db->deleteRow("DELETE FROM public.registro WHERE id_registro= ?", array("{$id}"));
        echo "delete completed<br>";
    }
    function crearRegistro($des,$idcre){
        $insertarrow = self::$db->insertRow("INSERT INTO public.registro (descripcion,id_credencial) VALUES (?,?)", array ("{$des}","{$idcre}"));
    }
      function comprobarRegistro($idusu) {
    $rows = self::$db->getRows("SELECT * FROM public.registro WHERE usuario=? ", array("{$idusu}"));        
    $ObjCredencial = new registro();
    $ObjCredencial->setIdRegistro($rows[0]{'id_registro'});
    $ObjCredencial->setDescripcion($rows[0]{'descripcion'});
    $ObjCredencial->setIdCredencial($rows[0]{'id_credencial'});
    return $ObjCredencial;        
    }
}
$objeto = new registroCollector();
$des = "esto es un registro exitoso =) ";
$id = "1";
$r = $objeto->showRegistro(1);
echo "el id es:" . $r->getIdRegistro() . "<br>";
echo "descripcion es : " . $r->getDescripcion() . "<br>";
echo "la credencial es: " . $r->getIdCredencial(). "<br>";
echo "todos"."<br>";
foreach($objeto->showRegistros() as $r2){
    echo "el id es:" . $r2->getIdRegistro() . "<br>";
    echo "descripcion es : " . $r2->getDescripcion() . "<br>";
    echo "la credencial es: " . $r2->getIdCredencial(). "<br>";
}
?>
