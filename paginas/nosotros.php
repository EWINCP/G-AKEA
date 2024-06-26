
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
  <title>Nosotros</title>
  <!--Iconos/ Font-awesone -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  <!--Animaciones-->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <!-- CDN de Bootstrap / La conexion entre mi proyecto y los servidores de Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>

<body class="body_bootstrap">
  <!--Menu Navegable-->

  <header>
    <nav>
      <div>
        <h1><a class="logo" href="index.php">
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
        <li><a href="receta.php">Lentes de Receta</a></li>
        <li><a class="active" href="nosotros.php">Sobre nosotros</a></li>
        <li><a href="contacto.php">Contacto</a></li>
        <li> <a href="../cerrar_sesion.php">Cerrar Sesión</a> </li>
        </ul>
    </nav>
  </header>


  <div id="carouselDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
    <ol class="carousel-indicators">
      <li data-bs-target="#carouselDark" data-bs-slide-to="0" class="active"></li>
      <li data-bs-target="#carouselDark" data-bs-slide-to="1"></li>
      <li data-bs-target="#carouselDark" data-bs-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="../imagenes/nosotros.jpg" class="d-block w-100" alt="Familia en tienda de anteojos">
        <div class="carousel-caption d-none d-sm-block">
          <h5 class="titulo_slide">Tecnología Avanzada</h5>
          <p class="parrafo_slide">Estamos equipados con los instrumentos de medición más precisos del mercado y las
            lentes de mejor calidad avanzada.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="../imagenes/nosotros-dos.jpg" class="d-block w-100" alt="Tienda de anteojos">
        <div class="carousel-caption d-none d-sm-block">
          <h5 class="titulo_slide">Protección UV</h5>
          <p class="parrafo_slide">Todos nuestros productos poseen una capa que filtra la luz azul emitida por los
            dispositivos digitales.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="../imagenes/nosotros-3.jpg" class="d-block w-100" alt="Lentes en exposicion">
        <div class="carousel-caption d-none d-sm-block">
          <h5 class="titulo_slide">Productos Exclusivos</h5>
          <p class="parrafo_slide">Pensamos en cada detalle del diseño, estamos siempre a la vanguardia.</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselDark" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselDark" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </a>
  </div>

  <div class="container nosotros">
    <div class="row">
      <div class="col-sm presentacion">
        <h1 class="titulo_bootstrap">Sobre Nosotros</h1>
        <p class="parrafo_bootstrap"><span>GOOGLES</span> en una empresa con más de 25 años en el rubro. La descripción
          de la empresa cumple con todos los elementos que prometemos: historia, equipo, valores y panorámica de la
          industria oftalmológica. <br><br>
          Nuestra misión es ofrecer el mejor servicio y producto a nuestros clientes, con precios accesibles y con la
          mejor calidad. Conservando siempre nuestras tradiciones, con el objetivo de mejorar la calidad de vida de
          nuestros clientes. </p>
      </div>
      <div class="col-sm">
        <img src="../imagenes/depositphotos_35229351-stock-photo-happy-woman-buying-glasses-at.jpg" alt="Mujer joven utilizando lentes de aumento de color azul"
          class="img_bootstrap" data-aos="fade-left">
      </div>
    </div>
  </div>


  <!--Footer-->
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
      <input type="text" class="footer__input" placeholder="Escriba su mail">
      <button class="button__fotter">Suscribirme</button>
    </div>
    <p class="copy">© 2022 Goggles. Todos los derechos reservados | Design By nec gaming </p>

    <div class="container__bt-wp" data-aos="zoom-out-left">
      <a href="#"><img src="../imagenes/whatsapp.png" alt="icono de whatsapp" class="icon__wp"></a>
    </div>

  </footer>

  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

  <!-- CDN para que nos funcionen los componentes de Bootstrap-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>


</body>

</php>