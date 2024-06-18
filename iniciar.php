<?php
session_start();

include('conexion.php');


$correo = $_POST['correo'];
$password = $_POST['password'];
$password = hash('sha512', $password);


$validar_inicio = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo ='$correo' and password ='$password'");


if (mysqli_num_rows($validar_inicio) > 0){
    $_SESSION['usuario'] = $correo;
   header("location: index.php");
   exit();

}else{
    header('Location: iniciar-sesion.php'. $userId);
    exit();
}

mysqli_close($conexion);

?>