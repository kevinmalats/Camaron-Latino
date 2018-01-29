<?php
include_once('tipo_producto.php');
include_once('Collector.php');

class tipoproductoCollector extends Collector
{

function showtipoProductos(){
$rows = self::$db->getRows("SELECT * FROM tipo_producto");
$arraytipoproducto= array();
foreach($rows as $c){
$aux = new tipoProducto($c{'idTipoProducto'}, $c{'nombre'}, $c{'descripcion'});
array_push($arraytipoproducto, $aux);
}
return $arraytipoproducto;
}


  function showtipoProducto($id) {
      $rows = self::$db->getRows("SELECT * FROM public.tipoProducto WHERE id_credencial= ?", array("{$id}"));        
      $aux = new tipoProducto();
      foreach ($rows as $c){ 
       $aux->setIdTipoProducto($c{'idTipoProducto'});
       $aux->setNombreo($c{'$nombre'});
       $aux->setDescripcion($c{'$descripcion'});
    }
      return $aux;        
   } 


function deletetipoproducto($id){
echo "processing delete id:".$id ."<br>";
$deleterow=self::$db->deleteRow(DELETE FROM public.tipoProducto WHERE idTipoProducto= ?", arrSSay("{$id}"))
echo "delete completed<br>";
}


 function consultarProducto($nombre, $descripcion) {
    $rows = self::$db->getRows("SELECT * FROM public.tipoProducto WHERE nombre=? AND descripcion=?  ", array("{$nombre}","{$descripcion}"));        
    $ObjProducto = new tipoProducto();
    foreach ($rows as $c){ 
        $ObjTipoProducto->setIdTipoProducto($c{'idTipoProducto'});
         $ObjTipoProducto->setNombre($c{'nombre'});
         $ObjTipoProducto->setDescripcion($c{'descripcion'});
    }
    return $ObjProducto;        
    }
    
    
    function comprobarCredencial($nombre) {
    $rows = self::$db->getRows("SELECT * FROM public.credencial WHERE usuario=? ", array("{$nombre}"));        
    $ObjTipoProducto = new tipoProducto();
     $ObjTipoProducto->setIdTipoProducto(($rows[0]{'idTipoProducto'});
     $ObjTipoProducto->setNombre($rows[0]{'nombre'});
     $ObjTipoProducto->setDescripcion($rows[0]{'descripcion'});
    return  $ObjTipoProducto;        
    }
    
     function crearcredencial($nombre,$descripcion){
        $insertarrow = self::$db->insertRow("INSERT INTO public.tipoProducto (nombre,descripcion) VALUES (?,?)", array ("{$nombre}","{$descripcion}"));
    }
}
    $objTipoproducto = new tipoproductoCollector();
    
    $Tipoproducto = $objTipoproducto->comprobarTipoproducto('frada');
    echo "id: ". $Tipoproducto->getIdTiPoproducto()."<br>";
    echo "id: ". $Tipoproducto->getNombre()."<br>";
    echo "id: ". $Tipoproducto->getDescripcion()."<br>";
    print_r($Tipoproducto);


}
?>

