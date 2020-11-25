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
         <!--
  Sizes:
  tiny: 1rem
  small: 2rem
  medium: 4rem
  large: 6rem
  -->

      <a href="#" class="brand-logo"> <i class="large material-icons">insert_chart</i></a>
     
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="../Menu/index.html">Inicio</a></li>
        <li><a href="../Navegacion/contactenos.html">Contactenos</a></li>
        <li><a href="Tema_1.php"> <i class="large material-icons">arrow_back</i></a></li>
      </ul>
    </div>
  </nav>
        
  <div class="container">

  <form action="add-tarea-form">


  <input type="text" name="titulo" placeholder="Filtrar Contenido...">
 
<a href="registrar.php" class="waves-effect waves-light btn-large"><i class="material-icons right">cloud</i>Nuevo Archivo..</a>
        

  </form>

  

 
      <table class="centered">
        <thead>
          <tr>
              <th>Id</th>
              <th>Contenido</th>
              <th>Imagen</th>
               <th>Tema_Referenciado</th>
              <th>Opciones</th>
          </tr>
        </thead>

        <tbody>



        <?php

include("conexion.php");

$query = "SELECT * FROM (tabla_imagen) JOIN temario ON temario.id_tem=tabla_imagen.contenido WHERE tabla_imagen.contenido=temario.id_tem";
$resultado = $conexion->query($query);
while($row = $resultado->fetch_assoc()){
    ?>

        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['nombre']; ?></td>
            <!--height arreglamos tamaño imagen -->
            <td><img  height="90px" src="data:image/jpg;base64,<?php echo base64_encode($row['Imagen']); ?>"></td>
           
            <td><?php echo $row['tema']; ?></td>

            <td>

                <a href="modificar.php?id=<?php echo $row['id']; ?>">  
                <i  class="material-icons">edit</i>
                </a>


                <a href="eliminar.php?id=<?php echo $row['id']; ?>">  
                <i class="material-icons">delete</i> 
                </a>
      
        </tr>
<?php
}
?>       




           
              
               



              </td>
          </tr>

         


        </tbody>
      </table>
            

  </div>


</body>
</html>