<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Slider.css" />
    <title>Heart Sing</title>

        <!--Colocar un icono en la parte superior de la pagina
    Nota: La imagen debe ser .icon-->

    <link rel="icon" href="..\Imagenes\logo-manos.icon.jpg">
</head>
<body>
   
<!------------------------------------------------------------------------------------------------------->
<div class="container">
        <div class="header">
            <ul>
                <li> <a href="#">Contenido</a>
                    <ul>
                        <li><a href="Tema_1.php">Tema 1: Fundamentos en inclusion </a></li>
                        <li><a href="Tema_2.php">Tema 2: Introduccion a la lengua de señas</a></li>
                        <li><a href="Tema_3.php">Tema 3: Vocabulario Señas Basicas</a></li>
                        <li><a href="Tema_4.php">Tema 4: Lexico del lenguage de señas</a></li>
                    </ul>
                </li>
                <li><a href="../Menu/index.html">Inicio</a>
                <!--
                    <ul>
                        <li><a href="#">Sobre nuestro refugio</a></li>
                        <li><a href="#">Adopta un animal</a></li>
                    </ul>
                -->
                </li>
                <!--
                <li><a href="#">Contacta</a>
                    <ul>
                        <li><a href="#">Concerta una visita</a></li>
                        <li><a href="#">Visita nuestro refugio</a></li>
                    </ul>
                </li>
                -->
            </ul>
        </div>
        <!--Conexion base de datos ------------------------------------------------------------>

        <div class="central">
            <ul class="slider" id="#slider">
                
              <!--Video-->
              <li id="slider__1"><video  width=800  height=500 controls autoplay loop >
                <source src="Multimedia/Tema_1.mp4" type="video/mp4">
                </video></li>

                <!--Video-->

        <?php
include("conexion.php");

$query = "SELECT * FROM tabla_imagen JOIN temario ON temario.id_tem=tabla_imagen.contenido WHERE tabla_imagen.contenido='1'";
$resultado = $conexion->query($query);



while($row = $resultado->fetch_assoc()){
    ?>

    <!-------------------->
      
     
       <li id="<?php echo $row['id']; ?>"><img   src="data:image/jpg;base64,<?php echo base64_encode($row['Imagen']); ?>"></li>
  
       

            <?php
            
    }
    ?> 

<li id="slider__2"><a href="https://www.cerebriti.com/juegos-de-idiomas/los-colores-en-lengua-de-senas/" target="_BLANK"><img src="../../../imagenes/playv2.jpg" ></a></li>


   </ul>

        
<ul class="botones">
   
<!--Video-->
<li><a href="#slider__1">Inclusion</a></li>
<!--Video-->

<?php
include("conexion.php");

$query = "SELECT * FROM tabla_imagen JOIN temario ON temario.id_tem=tabla_imagen.contenido WHERE tabla_imagen.contenido='1'";
$resultado = $conexion->query($query);
while($row = $resultado->fetch_assoc()){
    ?>

    <!-------------------->
      



    
          <li><a href='#<?php echo $row['id']; ?>'><?php echo $row['nombre']; ?></a></li>

          <?php
        
    }
    ?>     

<li><a href="#slider__2">Diviertete!!</a></li>

      </ul>
       

         
        </div>
    </div>

<!--------------------------------------------------------------------------------------------->

</body>
</html>