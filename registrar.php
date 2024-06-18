<?php
include('conexion.php');

$nombre_completo = $_POST['nombre_completo'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$password = $_POST['password'];
$password = hash('sha512', $password);


$query = "INSERT INTO usuarios (nombre_completo, correo, usuario, password) VALUES ('$nombre_completo','$correo','$usuario','$password')";

$verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo ='$correo' ");

if (mysqli_num_rows($verificar_correo) > 0){
    echo '
    <script>
alert ("Este correo ya esta registrado, intenta con otro diferente");
window.location = "iniciar-sesion.php";    
</script>
    ';
    exit();
}



$ejecutar = mysqli_query($conexion, $query);

if($ejecutar){
    echo '
    <script>
    alert("Usuario almacenado exitosamente");
    window.location= "iniciar-sesion.php";
    </script>
    ';
    exit();
}else{
    echo '
    <script>
    alert("Inténtalo de nuevo, Usuario no almacenado");
    window.location= "iniciar-sesion.php";
    </script>
    ';
    exit();
}

mysqli_close($conexion);

?>