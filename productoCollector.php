<?php

include_once('producto.php');
include_once('Collector.php');

class productoCollector extends Collector
{
  
  function showProductos() {
    $rows = self::$db->getRows("SELECT * FROM producto ");        
    $arrayProducto= array();
    
    foreach ($rows as $c){
      $aux = new producto();
        $aux->setIdProducto($c{'id_producto'});
       $aux->setIdUsuario($c{'id_usuario'});
       $aux->setIdTipoProducto($c{'id_tipo_producto'});
       array_push($arrayProducto, $aux);
    }
    return $arrayProducto;        
  }
    function showProducto($id) {
      $rows = self::$db->getRows("SELECT * FROM public.producto WHERE id_producto= ?", array("{$id}"));        
      $aux = new producto();
      foreach ($rows as $c){ 
       $aux->setIdProducto($c{'id_producto'});
       $aux->setIdUsuario($c{'id_usuario'});
       $aux->setIdTipoProducto($c{'id_tipo_producto'});
        }
    return $aux;        

    } 
    
    function deleteProducto($id){
        echo "processing delete id:". $id ."<br>";
        $deleterow = self::$db->deleteRow("DELETE FROM public.producto WHERE id_producto= ?", array("{$id}"));
        echo "delete completed<br>";
    }
    function crearProducto($usu,$idtpro){
        $insertarrow = self::$db->insertRow("INSERT INTO public.producto (id_usuario,id_tipo_producto) VALUES (?,?)", array ("{$usu}","{$idtpro}"));
    }
      function comprobarProducto($idusu) {
    $rows = self::$db->getRows("SELECT * FROM public.producto WHERE usuario=? ", array("{$idusu}"));        
    $ObjCredencial = new producto();
    $ObjCredencial->setIdProducto($rows[0]{'id_producto'});
    $ObjCredencial->setIdUsuario($rows[0]{'id_usuario'});
    $ObjCredencial->setIdTipoProducto($rows[0]{'id_tipo_producto'});
    return $ObjCredencial;        
    }
}
$objeto = new productoCollector();
$des = "1";
$id = "1";
#$crea = $objeto->crearProducto($des,$id);

$r = $objeto->showProducto(1);
echo "el id es:" . $r->getIdProducto() . "<br>";
echo "el id del usuario es : " . $r->getIdUsuario() . "<br>";
echo "el tipo es: " . $r->getIdTipoProducto(). "<br>";
echo "todos"."<br>";
foreach($objeto->showProductos() as $r2){
    echo "el id es:" . $r2->getIdProducto() . "<br>";
    echo "el id del usuario es : " . $r2->getIdUsuario() . "<br>";
    echo "el tipo es: " . $r2->getIdTipoProducto(). "<br>";
}
?>
