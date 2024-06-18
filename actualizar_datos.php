<?php
session_start(); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once 'conexion.php'; 

    // Obtiene los datos enviados
    $nombre_completo = $_POST['nombre_completo'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
   

    // Realiza la actualización en la base de datos
    $sql = "UPDATE usuarios SET nombre_completo=?, correo=?, usuario=? WHERE correo=?";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("sssi", $nombre_completo, $correo, $usuario, $_SESSION['correo']);

    if ($stmt->execute()) {
        echo "Datos actualizados correctamente.";
        exit();
    } else {
        echo "Error al actualizar los datos: ". $stmt->error;
        exit();
    }

    $stmt->close();
} else {
    header("Location: index.php"); 
    exit();
}
?>
