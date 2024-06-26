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
  <!-- Description / Entre 70 a 320 caracteres-->
  <meta name="description"
  content="En GOOGLES encontraras los mejores lentes de receta del mercado. Te podrás atender con nuestro equipo de excelentes profesionales para estudiar tu graduación, y todo de forma gratuita.">
  <!-- Palabras claves-->
  <meta name="keywords" content="lentes, lentes de sol, lentes de receta, anteojos, proteccion uv, lentes antireflex">
  <!-- Open Graph / Define como se muestra la info de tu sitio al campartilo-->
  <meta property="og:title" content=" GOOGLES | Lentes de receta">
  <title>Lentes de Receta</title>
  <!--Iconos/ Font-awesone -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  <!--Animaciones-->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body>

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
        <li><a href class="active"="receta.php">Lentes de Receta</a></li>
        <li><a href="nosotros.php">Sobre nosotros</a></li>
        <li><a href="contacto.php">Contacto</a></li>
        <li> <a href="../cerrar_sesion.php">Cerrar Sesión</a> </li>
        </ul>
    </nav>

  </header>


  <!--Productos-->
  <div class="container-img__productos">
    <h1 class="container_txt-productos" data-aos="zoom-in-up">Lentes de Receta</h1>
    <img src="../imagenes/banner-lentes-receta.webp" alt="lentes de aumento" class="img-banner_producto">
  </div>
  <main class="main">
    <div class="container">
      <h2 class="main-title">Productos</h2>
      <section class="container-products">
        <div class="product">
          <img src="../imagenes/m2.webp" alt="Lentes de sol color negro" class="product__img">
          <div class="product__description">
            <h3 class="product__title">Farenheit (Grey)</h3>
            <span class="product__price">$575.00</span>
          </div>
          <i class="product__icon fas fa-cart-plus"></i>
        </div>

        <div class="product">
          <img src="../imagenes/D_NQ_NP_815666-MLA46470176898_062021-W.webp" alt="Lentes de sol color marrón"
            class="product__img">
          <div class="product__description">
            <h3 class="product__title">Opium (Grey)</h3>
            <span class="product__price">$575.00</span>
          </div>
          <i class="product__icon fas fa-cart-plus"></i>
        </div>

        <div class="product">
          <img src="../imagenes/s10.webp" alt="Lentes de sol para mujer" class="product__img">
          <div class="product__description">
            <h3 class="product__title">Kenneth Cole</h3>
            <span class="product__price">$575.00</span>
          </div>
          <i class="product__icon fas fa-cart-plus"></i>
        </div>

        <div class="product">
          <img src="../imagenes/Lentes_de_lectura_BplusD_BD222599_02.webp" alt="Lentes de sol para mujer color marron"
            class="product__img">
          <div class="product__description">
            <h3 class="product__title">Farenheit Oval</h3>
            <span class="product__price">$325.00</span>
          </div>
          <i class="product__icon fas fa-cart-plus"></i>
        </div>

        <div class="product">
          <img src="../imagenes/RE5201.webp" alt="Lentes de sol para mujer color marron" class="product__img">
          <div class="product__description">
            <h3 class="product__title">Farenheit Oval</h3>
            <span class="product__price">$325.00</span>
          </div>
          <i class="product__icon fas fa-cart-plus"></i>
        </div>

        <div class="product">
          <img src="../imagenes/VM-898.webp" alt="Lentes de sol para mujer color marron" class="product__img">
          <div class="product__description">
            <h3 class="product__title">Farenheit Oval</h3>
            <span class="product__price">$325.00</span>
          </div>
          <i class="product__icon fas fa-cart-plus"></i>
        </div>

        <div class="product">
          <img src="../imagenes/anteojos-aviadores-clear-con-marco-negro1-eeac8a020442ec29cc16369217552918-640-0.webp"
            alt="Lentes de sol para mujer color marron" class="product__img">
          <div class="product__description">
            <h3 class="product__title">Farenheit Oval</h3>
            <span class="product__price">$325.00</span>
          </div>
          <i class="product__icon fas fa-cart-plus"></i>
        </div>

        <div class="product">
          <img src="../imagenes/Lentes-B-D-Dot-Reader-Carey_02.webp" alt="Lentes de sol para mujer color marron"
            class="product__img">
          <div class="product__description">
            <h3 class="product__title">Farenheit Oval</h3>
            <span class="product__price">$325.00</span>
          </div>
          <i class="product__icon fas fa-cart-plus"></i>
        </div>

        <div class="product">
          <img src="../imagenes/anteojos-desgaste_1203-2605.webp" alt="Lentes de sol para mujer color marron"
            class="product__img">
          <div class="product__description">
            <h3 class="product__title">Farenheit Oval</h3>
            <span class="product__price">$325.00</span>
          </div>
          <i class="product__icon fas fa-cart-plus"></i>
        </div>

        <div class="product">
          <img src="../imagenes/Lentes-B-plus-D-Blue-Ban-Reader-Azul_01.webp"
            alt="Lentes de sol para mujer color marron" class="product__img">
          <div class="product__description">
            <h3 class="product__title">Farenheit Oval</h3>
            <span class="product__price">$325.00</span>
          </div>
          <i class="product__icon fas fa-cart-plus"></i>
        </div>

        <div class="product">
          <img src="../imagenes/Lentes-B-plus-D-Loop-Reader-Rojo_02.webp" alt="Lentes de sol para mujer color marron"
            class="product__img">
          <div class="product__description">
            <h3 class="product__title">Farenheit Oval</h3>
            <span class="product__price">$325.00</span>
          </div>
          <i class="product__icon fas fa-cart-plus"></i>
        </div>

        <div class="product">
          <img src="../imagenes/Lentes_de_lectura_BplusD_BD222578_02.webp" alt="Lentes de sol para mujer color marron"
            class="product__img">
          <div class="product__description">
            <h3 class="product__title">Farenheit Oval</h3>
            <span class="product__price">$325.00</span>
          </div>
          <i class="product__icon fas fa-cart-plus"></i>
        </div>

      </section>

      <div class="kc-elm kc-css">
        <a class="kc_button" href="#">
          VER MÁS <i class="fa-solid fa-arrow-right"></i></a>
      </div>
    </div>
  </main>



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