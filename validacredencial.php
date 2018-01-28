<?php
	session_start();
    require_once("credencialCollector.php");
    require_once("usuarioCollector.php");
    $usuario = $_POST["usu"];
    $clave =$_POST["cla"];
    $objColector= new credencialCollector();
    $credencial=$objColector->consultarCredencial("$usuario","$clave");
    if($credencial->getUsuario() and $credencial->getClave()){
        $_SESSION["id"]=$credencial->getIdCredencial();
        $_SESSION["usu"]=$credencial->getUsuario();
        $objColector2= new usuarioCollector();
        $usuario = $objColector2->comprobarUsuarioxIdCredencial($credencial->getIdCredencial());
        if($usuario->getIdRol()==1){
            $_SESSION["perfil"]="admin";
            header("location:index.php");
        }else{
            $_SESSION["perfil"]="usuario";
            header("location:index.php");
        }
       
    }else{
         /*$mensaje="login incorrecto";-->
         header("location:../pages/login.php?mensaje=$mensaje");*/
        $mensaje="login incorrecto";
        header("location:404.php?mensaje=$mensaje"); 
    }
?>