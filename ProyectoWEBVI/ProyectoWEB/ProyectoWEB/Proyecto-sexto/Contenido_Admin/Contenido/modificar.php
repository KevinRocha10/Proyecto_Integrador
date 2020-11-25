<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
       <!-- Compiled and minified CSS -->
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  

    <!--Colocar un icono en la parte superior de la pagina
    Nota: La imagen debe ser .icon-->

    <link rel="icon" href="..\Imagenes\logo-manos.icon.jpg">

    <title>Heart Sing</title>
</head>
<body>
    

<nav>
    <div class="nav-wrapper">

      <a href="#" class="brand-logo"> <i class="large material-icons">insert_chart</i></a>
     
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="../Menu/index.html">Inicio</a></li>
        <li><a href="../Navegacion/contactenos.html">Contactenos</a></li>
        <li><a href="mostrar.php"> <i class="large material-icons">arrow_back</i></a></li>
      </ul>
    </div>
  </nav>
        
  <div class="container">
  <?php

include("conexion.php");

$id = $_REQUEST['id'];


$query = "SELECT * FROM tabla_imagen WHERE id = '$id'";
$resultado = $conexion->query($query);
$row = $resultado->fetch_assoc();
    ?>
    <center> <br> <br> <br>
  
   <!--Dos campos 1. boton y otro para subir l aimagen-->
   <form action="proceso_modificar.php?id=<?php echo $row['id'] ?> " method="POST" enctype="multipart/form-data"> <br>
    <input type = "text" required name="nombre" placeholder="Nombre del contenido..." value="<?php echo $row['nombre']; ?> "> <br>
    <!--Mostrar imagen a modificar-->
    <input type="file" required name="Imagen"> <br><br><br> 
    <img  height="50px" src="data:image/jpg;base64,<?php echo base64_encode($row['Imagen']); ?>"><br>

    <input type = "text" required name="Temario" placeholder="Selecciona tema 1-2-3-4" value=""> <br><br><br><br>

  
<button class="btn waves-effect waves-light" type="submit">...
<a href="mostrar.php">
<i class="material-icons right">backup</i>
</a>
</button>
  
   </form>
   </center> 


</body>
</html>