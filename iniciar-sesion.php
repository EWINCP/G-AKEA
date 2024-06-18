


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="css/stylesesion.css">
</head>
<main> 
<div class="contenedor">

    <div class="contenedor_trasera">
 <div class="contenedor_inicio">
<h3> ¿Ya tienes una cuenta?</h3>
<p>Iniciar sesion para entrar a la página</p> 
<button id="btn_iniciar">Iniciar Sesión</button>
</div>
<div class="contenedor_registro">
<h3> Aun no tienes una cuenta?</h3>
<p>Regístrate para que puedas iniciar sesión</p> 
<button id="btn_registrar">Regístrarse</button>
</div>
</div>

<div class="contenedor_iniciar">
    <form action="iniciar.php" method="POST" class="formulario_iniciar">
        <h2>Iniciar Sesión </h2>
        <input type="text" placeholder="Correo Electronico" name="correo">
        <input type="password" placeholder="Contraseña" name="password">
            <button>Entrar</button>
    </form>

    <form action="registrar.php" method="POST" class="formulario_registrar">
        <h2>Registrarse</h2>
        <input type="text" placeholder="Nombre Completo" name="nombre_completo">
        <input type="text" placeholder="Correo Electronico" name="correo">
        <input type="text" placeholder="usuario" name= "usuario">
        <input type="password" placeholder="Contraseña" name = "password">
            <button>Registrarse</button>

    </form>

</div>

</div>

<script src="js/script.js"></script>
</main>

    </body>

</html>