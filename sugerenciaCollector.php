<?php
include_once('sugerencia.php');
include_once('Collector.php');

class sugerenciaCollector extends Collector
{

    function showSugerencia(){
    $rows = self::$db->getRows("SELECT * FROM sugerencia");
    $arraysugerencia= array();
    foreach($rows as $c){
    $aux = new sugerencia($c{'id_sugerencia'}, $c{'fecha'}, $c{'mensaje'}, $c{'id_usuario'});
    array_push($arraysugerencia, $aux);
    }
    return $arraysugerencia;
    }


    function showSugerencias(){
    $rows = self::$db->getRows("SELECT * FROM sugerencia");
    $arraysugerencia= array();
    foreach($rows as $c){
    $aux = new sugerencia($c{'id_sugerencia'}, $c{'fecha'}, $c{'mensaje'}, $c{'id_usuario'});

    }
    return $aux;
    }

    function deleteSugerencia($id){
            echo "processing delete id:". $id ."<br>";
            $deleterow = self::$db->deleteRow("DELETE FROM public.credencial WHERE id_credencial= ?", array("{$id}"));
            echo "delete completed<br>";
        }
    
     function consultarSugerencia($id_usuario, $mensaje) {
        $rows = self::$db->getRows("SELECT * FROM public.credencial WHERE usuario=? AND clave=?  ", array("{$id_usuario}","{$mensaje}"));        
        $Sugerencia = new sugerencia();
        foreach ($rows as $c){ 
            $ObjSugerencia->setIdCredencial($c{'id_sugerencia'});
            $ObjSugerencia->setIdsugerencia($c{'id_usuario'});
            $ObjSugerencia->setMensaje($c{'mensaje'});
        }
        return $ObjSugerencia;        
        }
    
    
        function comprobarSugerencia($id_usuario) {
        $rows = self::$db->getRows("SELECT * FROM public.sugerencia WHERE usuario=? ", array("{$id_usuario}"));        
        $ObjSugerencia = new sugerencia();
        $ObjSugerencia->setIdsugerencia($rows[0]{'id_sugerencia'});
        $ObjSugerencia->setUsuario($rows[0]{'id_usuario'});
        $ObjSugerencia->setMensaje($rows[0]{'mensaje'});
        return $ObjSugerencia;        
        }
    
    
         function crearSugerencia($fecha,$mensaje,$id_usuario){
            $insertarrow = self::$db->insertRow("INSERT INTO public.sugerencia (fecha,mensaje,id_usuario) VALUES (?,?,?)", array ("{$fecha}","{$mensaje}","{$id_usuario}"));
        }
}

$objeto = new sugerenciaCollector();
$fecha = "20018-01-29";
$mensaje = "hola";
$id_usuario = "1";
$crea = $objeto->crearSugerencia($fecha,$mensaje,$id_usuario);

 //$objSugerencia = new sugerencia();
   // $objSugerencia =  $objSugerencia->comprobarSugerencia('rada');
    //echo "id: ". $sugerencia->getIdsugerencia()."<br>";
    //echo "id: ". $sugerencia->getIdUsuario()."<br>";
    //echo "id: ". $sugerencia->getMensaje()."<br>";
    //print_r($sugerencia);
?>

