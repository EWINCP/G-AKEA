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

<!DOCTYPE php>
<php lang="en">

<head>
  

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--Css-->
  <link rel="stylesheet" href="../css/style.css">
  <title>Contacto</title>
  <!--Iconos/ Font-awesone -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  <!--Animaciones-->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body class="body__contact">
  <!--Menu Navegable-->
  <header>
    <nav>
      <div><a class="logo" href="index.php">
    <img src="../imagenes/g-akea.png" alt="G-AKEA" style="display: block; margin-left: auto; margin-right: auto; width: 80px;">

</a>
      </div>
      <input type="checkbox" id="click">
      <label for="click" class="menu-btn">
        <i class="fas fa-bars"></i>
      </label>
      <ul>
        <li><a href="../index.php">Inicio</a></li>
        <li><a href="productos.php">Lentes de Sol</a></li>
        <li><a href="cambios.php">Lentes de Receta</a></li>
        <li><a href="nosotros.php">Sobre nosotros</a></li>
        <li><a href class="active"="contacto.php">Contacto</a></li>
        <li> <a href="../cerrar_sesion.php">Cerrar Sesión</a> </li>
        </ul>
    </nav>

  </header>



  <!--Formulario contacto-->
  <footer class="main-footer">
    <div class="footer__section">
      <h2 class="footer__title">Localidad</h2>
      <p class="footer__txt">México,Coacalco</p>
      <h2 class="footer__title_contacto">Contacto</h2>
      <p class="footer__txt">Teléfono: +52 5579436135</p>
      <p class="footer__txt">Email: necgaming@gmail.com</p>
    </div>
    <div class="footer__section">
      <h2 class="footer__title">Accesos Rápidos</h2>
      <a href="index.php" class="footer__link">Inicio</a>
      <a href="paginas/productos.php" class="footer__link">Lentes de Sol</a>
      <a href="paginas/receta.php" class="footer__link">Lentes de Receta</a>
      <a href="paginas/nosotros.php" class="footer__link">Sobre Nosotros</a>
      <a href="paginas/contacto.php" class="footer__link">Contacto</a>
      <li> <a href="../cerrar_sesion.php">Cerrar Sesión</a> </li>

    </div>
    <div class="footer__section">
      <h2 class="footer__title">Suscríbete a las ofertas</h2>
      <p class="footer__txt">Al suscribirse a nuestra lista de correo, siempre recibirá nuestras últimas noticias y
        actualizaciones</p>
      <input type="email" class="footer__input" placeholder="Escriba su mail">
      <button class="button__fotter">Suscribirme</button>
    </div>
    <p class="copy">© 2022 Goggles. Todos los derechos reservados | Design By nec gaming</p>

    <div class="container__bt-wp" data-aos="zoom-out-left">
      <a href="#"><img src="../imagenes/whatsapp.png" alt="icono de whatsapp" class="icon__wp"></a>
    </div>

  </footer>

  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

</body>

</php>