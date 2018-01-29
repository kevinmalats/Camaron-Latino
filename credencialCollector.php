<?php

include_once('credencial.php');
include_once('Collector.php');

class credencialCollector extends Collector
{
  
  function showCredenciales() {
    $rows = self::$db->getRows("SELECT * FROM public.credencial ");        
        $arrayCredencial= array();      
    foreach ($rows as $c){
  
      $aux = new credencial();
      $aux->setIdCredencial($c{'id_credencial'});
      $aux->setUsuario($c{'usuario'});
      $aux->setClave($c{'clave'});
      array_push($arrayCredencial, $aux);
    }
    return $arrayCredencial;        
  }
    function showCredencial($id) {
      $rows = self::$db->getRows("SELECT * FROM public.credencial WHERE id_credencial= ?", array("{$id}"));        
      $aux = new credencial();
      foreach ($rows as $c){ 
       $aux->setIdCredencial($c{'id_credencial'});
       $aux->setUsuario($c{'usuario'});
       $aux->setClave($c{'clave'});
    }
      return $aux;        
   } 
    function deleteCredencial($id){
        echo "processing delete id:". $id ."<br>";
        $deleterow = self::$db->deleteRow("DELETE FROM public.credencial WHERE id_credencial= ?", array("{$id}"));
        echo "delete completed<br>";
    }
    function consultarCredencial($usuario, $clave) {
    $rows = self::$db->getRows("SELECT * FROM public.credencial WHERE usuario=? AND clave=?  ", array("{$usuario}","{$clave}"));        
    $ObjCredencial = new credencial();
    foreach ($rows as $c){ 
        $ObjCredencial->setIdCredencial($c{'id_credencial'});
        $ObjCredencial->setUsuario($c{'usuario'});
        $ObjCredencial->setClave($c{'clave'});
    }
    return $ObjCredencial;        
    }
    function comprobarCredencial($usuario) {
    $rows = self::$db->getRows("SELECT * FROM public.credencial WHERE usuario=? ", array("{$usuario}"));        
    $ObjCredencial = new credencial();
    $ObjCredencial->setIdCredencial($rows[0]{'id_credencial'});
    $ObjCredencial->setUsuario($rows[0]{'usuario'});
    $ObjCredencial->setClave($rows[0]{'clave'});
    return $ObjCredencial;        
    }
    function crearcredencial($usu,$cla){
        $insertarrow = self::$db->insertRow("INSERT INTO public.credencial (usuario,clave) VALUES (?,?)", array ("{$usu}","{$cla}"));
    }
}
    //$objColector = new credencialCollector();
    
    //$credencial = $objColector->showCredencial(4);
    //echo "1: ". $credencial->getIdCredencial()."<br>";
    //echo "2: ". $credencial->getUsuario()."<br>";
    //echo "3: ". $credencial->getClave()."<br>";
    //print_r($credencial);

    //foreach($objColector->showCredenciales() as $rol){
    //echo "1: ". $rol->getIdCredencial()."<br>";
    //echo "2: ". $rol->getUsuario()."<br>";
    //echo "3: ". $rol->getClave()."<br>";
    //}
?>
