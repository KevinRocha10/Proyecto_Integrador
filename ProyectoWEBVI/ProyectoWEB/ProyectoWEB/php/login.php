<?php


$usuario=$_POST['usuario'];
$contrasena=$_POST['contrasena'];
session_start();
$_SESSION['usuario'] = $usuario;

$conexion = mysqli_connect("localhost", "root", "Felipe1007", "login_register_db");

$consulta="SELECT*FROM usuarios where usuario='$usuario' and contrasena='$contrasena'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

/*if(!isset($_SESSION['usuario'])){
    echo'

    <script>
    alert("Primero debes iniciar sesión");
    window.location = "index.html";
    </script>
    ';
    session_destroy();
    die();
    
}*/

if($filas){
    //$_SESSION['usuario'] = $usuario;
    while($consulta2 = mysqli_fetch_array($resultado)){

    
    $tipo_user = $consulta2['tipo_usuario'];
    //header("location:loginsi.php");
    
    }
    if($tipo_user == 2){
        header("location: ../Proyecto-sexto/Contenido_Invitado/Menu/index.html");
        
    }else{
        //header("location: ../Menu/index.html");
        header("location: ../Proyecto-sexto/Contenido_Admin/Menu/index.html");
        
    }
    
}else{
    
    echo'
<script>
alert("El usuario y/o contraseña son incorrectos");
window.location = "../index.html";
</script>
';

    
}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>