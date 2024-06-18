<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    echo '
    <script>
    alert("Por favor debes iniciar sesión");
    window.location = "iniciar-sesion.php";
    </script>
    ';
    session_destroy();
    die();
}

$correoUsuario = $_SESSION['usuario'];

$resend = Resend::client('re_P6CgiNoF_4vWJQrNvSFL6EvaW1majJfks');



try {
    $result = $resend->emails->send([
        'from' => 'Acme <onboarding@resend.dev>',
        'to' => ['correousuario'],
        'subject' => 'Bienvenido a G-AKEA',

        'html' =>'<img src="imagenes/g-akea.png" alt="Product Image"></br>
    <strong>Felicidades por registrarte</strong></br>
    <p>Para más información, visita nuestra página web y de igual forma te estaremos enviando sugerencias por este medio</p>
    ',
]);
} catch (\Exception $e) {
    exit('Error: ' . $e->getMessage());
}

echo $result->toJson();