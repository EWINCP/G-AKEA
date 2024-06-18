<?php
session_start();
if (!isset($_SESSION['usuario'])){
    echo '
    <script>
alert ("Por favor debes inciar sesion");
window.location = "iniciar-sesion.php";
    </script>
    ';
    session_destroy();
    die();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Actualizar mis datos</title>
    <link rel="stylesheet" href="css/style.css">
  
	<link rel="stylesheet" href="css/style_misdatos.css">
</head>
<body>

<?php include("header.php");?>

<div class="contenedor">

  <div class="contenedor_iniciar"  align = "center">

  <form action="actualizar_datos.php" method="POST" class="formulario_iniciar">
    <h2>Actualizar Datos </h2> </br>
    <div class="form-group">
        <label for="nombre_completo">Nombre Completo:</label> 
		<input type="text" id="nombre_completo" name="nombre_completo" value="<?php echo htmlspecialchars($_SESSION['nombre_completo']);?>" disabled>
		</div>
    <div class="form-group">
        <label for="correo">Correo Electrónico:</label>
        <input type="text" id="correo" name="correo" value="<?php echo htmlspecialchars($_SESSION['correo']);?>" disabled>
    </div>
    <div class="form-group">
        <label for="usuario">Usuario:</label>
        <input type="text" id="usuario" name="usuario" value="<?php echo htmlspecialchars($_SESSION['usuario']);?>" disabled>
    </div>
    <button type="submit">Actualizar Datos</button>
</form>
   </div>
	</div>

</body>

</html>