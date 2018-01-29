<?php

include_once('usuario.php');
include_once('Collector.php');

class usuarioCollector extends Collector
{
    function showUsuarios() {
        $rows = self::$db->getRows("SELECT * FROM public.usuario ");        
             
        foreach ($rows as $c){
          $arrayUsuario= array();   
          $aux = new usuario();
          $aux->setIdUsuario($c{'id_usuario'});
          $aux->setNombre($c{'nombre'});
          $aux->setIdentificacion($c{'identificacion'});
          $aux->setCorreo($c{'correo'});
          $aux->setTelefono($c{'telefono'});
          $aux->setDireccion($c{'direccion'});
          $aux->setIdRol($c{'id_rol'});
          $aux->setIdcredencial($c{'id_credencial'});
        array_push($arrayUsuario, $aux);
        }
        return $arrayUsuario;        
    }
    function comprobarUsuarioxIdCredencial($idusu) {
    $rows = self::$db->getRows("SELECT * FROM public.usuario WHERE id_credencial=? ", array ("{$idusu}"));        
    $ObjUsuario = new usuario();
    $ObjUsuario->setIdUsuario($rows[0]{'id_usuario'});
    $ObjUsuario->setNombre($rows[0]{'nombre'});
    $ObjUsuario->setIdentificacion($rows[0]{'identificacion'});
    $ObjUsuario->setCorreo($rows[0]{'correo'});
    $ObjUsuario->setTelefono($rows[0]{'telefono'});
    $ObjUsuario->setDireccion($rows[0]{'direccion'});
    $ObjUsuario->setIdRol($rows[0]{'id_rol'});
    $ObjUsuario->setIdcredencial($rows[0]{'id_credencial'});
    return $ObjUsuario;        
    }
    function comprobarUsuarioxCedula($ced) {
    $rows = self::$db->getRows("SELECT * FROM public.usuario WHERE identificacion=? ", array ("{$ced}"));        
    $ObjUsuario = new usuario();
    $ObjUsuario->setIdUsuario($rows[0]{'id_usuario'});
    $ObjUsuario->setNombre($rows[0]{'nombre'});
    $ObjUsuario->setIdentificacion($rows[0]{'identificacion'});
    $ObjUsuario->setCorreo($rows[0]{'correo'});
    $ObjUsuario->setTelefono($rows[0]{'telefono'});
    $ObjUsuario->setDireccion($rows[0]{'direccion'});
    $ObjUsuario->setIdRol($rows[0]{'id_rol'});
    $ObjUsuario->setIdcredencial($rows[0]{'id_credencial'});
    return $ObjUsuario;        
    }
    function comprobarUsuarioxCorreo($cor) {
    $rows = self::$db->getRows("SELECT * FROM public.usuario WHERE correo=? ", array ("{$cor}"));        
    $ObjUsuario = new usuario();
    $ObjUsuario->setIdUsuario($rows[0]{'id_usuario'});
    $ObjUsuario->setNombre($rows[0]{'nombre'});
    $ObjUsuario->setIdentificacion($rows[0]{'identificacion'});
    $ObjUsuario->setCorreo($rows[0]{'correo'});
    $ObjUsuario->setTelefono($rows[0]{'telefono'});
    $ObjUsuario->setDireccion($rows[0]{'direccion'});
    $ObjUsuario->setIdRol($rows[0]{'id_rol'});
    $ObjUsuario->setIdcredencial($rows[0]{'id_credencial'});
    return $ObjUsuario;        
    }
    function comprobarUsuarioxTelefono($tel) {
    $rows = self::$db->getRows("SELECT * FROM public.usuario WHERE telefono=? ", array ("{$tel}"));        
    $ObjUsuario = new usuario();
    $ObjUsuario->setIdUsuario($rows[0]{'id_usuario'});
    $ObjUsuario->setNombre($rows[0]{'nombre'});
    $ObjUsuario->setIdentificacion($rows[0]{'identificacion'});
    $ObjUsuario->setCorreo($rows[0]{'correo'});
    $ObjUsuario->setTelefono($rows[0]{'telefono'});
    $ObjUsuario->setDireccion($rows[0]{'direccion'});
    $ObjUsuario->setIdRol($rows[0]{'id_rol'});
    $ObjUsuario->setIdcredencial($rows[0]{'id_credencial'});
    return $ObjUsuario;        
    }
    function deleteUsuario($id){
        echo "processing delete id:". $id ."<br>";
        $deleterow = self::$db->deleteRow("DELETE FROM public.usuario WHERE id_usuario= ?", arrSSay("{$id}"));
        echo "delete completed<br>";
    }
    function crearusuario($nom,$ide,$cor,$tel,$dir,$idc,$idr){
        $insertarrow = self::$db->insertRow("INSERT INTO public.usuario (nombre,identificacion,correo,telefono,direccion,id_credencial,id_rol) VALUES (?,?,?,?,?,?,?)", array ("{$nom}","{$ide}","{$cor}","{$tel}","{$dir}","{$idc}","{$idr}"));
        echo "crear completed<br>";
    }
}
    $objColector2= new usuarioCollector();
    $usuario = $objColector2->comprobarUsuarioxIdCredencial(3);
    echo $usuario->getNombre() . "   &&  " .$usuario->getIdRol() . "   &&   " . $usuario->getTelefono();
?>
