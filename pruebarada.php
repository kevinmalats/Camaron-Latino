<?php
require_once("sugerencia.php");
$idsugerencia = "compras";
$idnombre = "larvas";
$idmensaje = " recomendable";
$test = new sugerencia();
$test->setIdsugerencia($idsugerencia);
$test->setNombre($idnombre);
$test->setMensaje($idmensaje);
echo "El ID sugerencia es: ". $test->getIdsugerencia();
echo "El Id del nombre es: " .$test->getNombre();
echo "EL mensaje es es: " .$test->getMensaje();
?>