<?php
// Corrección de sintaxis y validación básica
$destino = "edwincorona44@gmail.com";
$nombre = $_POST["nombre"]?? '';
$mail = $_POST["email"]?? '';
$telefono = $_POST["tel"]?? '';
$asunto = $_POST["mensaje"]?? '';

// Validación básica (simplificada)
if(empty(trim($nombre)) || empty(trim($mail)) || empty(trim($asunto))) {
    // Redirigir o mostrar error si falta información crítica
    header("Location: paginas/error.html"); // Asegúrate de tener esta página
    exit();
}

// Verificar formato de email
if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
    header("Location: paginas/error.html"); // Asegúrate de tener esta página
    exit();
}

// Codificación UTF-8
$contenido = "Nombre: ". $nombre. "\nMail:  ". $mail. "\nTelefono: ". $telefono. "\nMensaje: ". $asunto;

// Encabezados de correo
$headers = "MIME-Version: 1.0\r\n";
$headers.= "Content-type: text/plain; charset=utf-8\r\n";
$headers.= "From: Contacto Web <noreply@tuwebsite.com>\r\n"; // Cambia por tu dominionpm install express mysql body-parser cors
$headers.= "Reply-To: $mail\r\n";

// Enviar correo
if(mail($destino, $asunto, $contenido, $headers)) {
    header("Location: paginas/gracias.html");
} else {
    echo "Error al enviar el correo.";
}
?>
