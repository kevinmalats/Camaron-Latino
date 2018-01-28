<?php
	session_start();
    require_once("credencialCollector.php");
    $usuario = $_POST["usu"];
    $clave =$_POST["cla"];
    $objColector= new credencialCollector();
    $credencial=$objColector->consultarCredencial("$usuario","$clave");
    if($credencial->getUsuario() and $credencial->getClave()){
        $_SESSION["id"]=$credencial->getIdCredencial();
        $_SESSION["usu"]=$credencial->getUsuario();
        $_SESSION["perfil"]="admin";
        header("location:index.php");
    }else{
         /*$mensaje="login incorrecto";-->
         header("location:../pages/login.php?mensaje=$mensaje");*/
        header("location:404.php"); 
    }
?>