<?php
if ($_FILES['archivo']["error"] > 0)
{
    echo "Error: " . $_FILES['archivo']["error"] . "<br>";
}
else
{
     $_FILES['archivo']['tmp_name'];
     echo "Upload: " . $_FILES['archivo']['name'] . "<br>";
     echo "Type: " . $_FILES['archivo']['type'] . "<br>";
     echo "Size: " . ($_FILES['archivo']["size"] / 1024). "<br>";
     echo "Store in: " . $_FILES['archivo']['name']. "<br>";
    
    $target_path = "archivos/"; 
    $target_path = $target_path . basename( $_FILES['archivo']['name']); 
    if(move_uploaded_file($_FILES['archivo']['tmp_name'], $target_path)) 
    { 
    echo "El archivo ". $_FILES['archivo']['name'] . " ha sido subido exitosamente!"; 
    } 
    else
    { 
    echo "Hubo un error al subir tu archivo! Por favor intenta de nuevo."; 
    }
}
?>
