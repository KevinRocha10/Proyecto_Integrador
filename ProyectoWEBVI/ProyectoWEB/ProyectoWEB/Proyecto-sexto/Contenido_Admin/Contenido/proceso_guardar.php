<?php

    include("conexion.php");

    $nombre = $_POST['nombre'];
    $Imagen = addslashes(file_get_contents($_FILES['Imagen']['tmp_name']));
    $contenido = $_POST['Temario'];
    $query = "INSERT INTO tabla_imagen(nombre,Imagen,contenido) VALUES('$nombre','$Imagen',$contenido)";
    
    $resultado = $conexion->query($query);

    if($resultado){
        header("Location: mostrar.php");
    }else{
        echo " No se inserto";
    }
?>

