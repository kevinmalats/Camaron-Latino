<?php
session_start();
$_SESSION['nombre'] = $_POST['usu'];
$_SESSION['contraseña'] = $_POST['con'];

if($_SESSION['nombre']=="valor" && $_SESSION['contraseña']=="1234"){
    echo "session creada exitosamente<br>";
    echo "<a href='index.php'> administracion </a>";
}else{
    echo "error<br>";
    session_destroy();
    echo "<a href='login.html'> volver </a>";
}
?>