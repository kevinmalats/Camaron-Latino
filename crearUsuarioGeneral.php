<?php
    session_start();
    require_once("credencialCollector.php");
    require_once("usuarioCollector.php");
    $nombre = $_POST["nom"];
    $cedula = $_POST["ced"];
    $telefo = $_POST["tel"];
    $correo = $_POST["cor"];
    $direcc = $_POST["dir"];
    $usuari = $_POST["usu"];
    $contra = $_POST["con"];
    $idrol = "2";
    $idcre = "";

    $objColector= new credencialCollector();
    $credencial=$objColector->comprobarCredencial("$usuari");
    
    if($credencial->getUsuario()){
        $mensaje="usuario existente";
        header("location:registre.php?mensaje=$mensaje");
       
    }else{
         header("location:login.php");
    }
    /*$DemoCollectorObj = new DemoCollector();
    $ObjDemo = $DemoCollectorObj->createDemo($valor);

    echo "Se ha guardado correctamente </br>";*/

?>