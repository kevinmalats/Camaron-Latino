<?php

include_once('usuario.php');
include_once('Collector.php');

class usuarioCollector extends Collector
{
  
  function showUsuario() {
    $rows = self::$db->getRows("SELECT * FROM usuario ");        
    $arrayUsuario= array();        
    foreach ($rows as $c){
      $aux = new rol($c{'id_usuario'},$c{'nombre'},$c{'identificacion'},$c{'correo'},$c{'telefono'},$c{'direccion'},$c{'id_rol'},$c{'id_credencial'});
      array_push($arrayUsuario, $aux);
    }
    return $arrayUsuario;        
  }
    function deleteUsuario($id){
        echo "processing delete id:". $id ."<br>";
        $deleterow = self::$db->deleteRow("DELETE FROM public.usuario WHERE id_usuario= ?", arrSSay("{$id}"));
        echo "delete completed<br>";
    }
    function crearusuario($nom,$ide,$cor,$tel,$dir,$idc,$idr){
        $insertarrow = self::$db->insertRow("INSERT INTO public.usuario (nombre,identificacion,correo,telefono,direccion,idcredencial,idrol) VALUES (?,?,?,?,?,?,?)", array ("{$nom}","{$ide}","{$cor}","{$tel}","{$dir}","{$idc}","{$idr}"));
        echo "crear completed<br>";
    }
}
$usua = new usuario();
$usua->setNombre("daniel");
$usua->setIdentificacion("0919398214");
$usua->setCorreo("deflor@espol.edu.ec");
$usua->setTelefono("0985011726");
$usua->setDireccion("sur de guayaquil");
$usua->setIdRol(1);
$usua->setIdcredencial(1);
$object = new usuarioCollector();
$objeto->crearusuario(usua->getNombre(),usua->getIdentificacion(),usua->getCorreo(),usua->getTelefono(),usua->getDireccion(),usua->getIdRol(),usua->getIdcredencial());
print_r($objeto);
?>
