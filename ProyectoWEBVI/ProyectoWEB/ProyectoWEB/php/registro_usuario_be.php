<?php

include 'conexion_be.php';

$nombre_completo = $_POST['nombre_completo'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
$tipo_user = 2;
//$contrasena = hash('sha512', $contrasena);

$query = "INSERT INTO usuarios(nombre_completo,email,usuario,contrasena,tipo_usuario)
VALUES('$nombre_completo','$correo','$usuario','$contrasena',$tipo_user)";

//verificacion repet correo
$verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE email='$correo' ");

if(mysqli_num_rows($verificar_correo)>0){
echo'
<script>
alert("El correo ingresado ya se encuentra registrado");
window.location = "../index.html";
</script>
';
exit();
}
//verificar repet usuario
$verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario' ");

if(mysqli_num_rows($verificar_usuario)>0){
echo'
<script>
alert("El usuario ingresado ya se encuentra registrado");
window.location = "../index.html";
</script>
';
exit();
}

//$ejecutar = mysqli_query($conexion, $query);
if($usuario==""){
    echo '
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="js/sweetAlert.js"></script>   
    '; 
//header("location: ../js/sweetAlert.js");
    

}else{
    $ejecutar = mysqli_query($conexion, $query);
if($ejecutar){
    echo '
    <script>
    alert("Usuario registrado exitosamente");
    window.location = "../index.html";
    </script>
    ';
}else{
    echo '
    <script>
    alert("Usuario no registrado");
    window.location = "../index.html";
    </script>
    ';
}
mysqli_close($conexion);
}
?>