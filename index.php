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

    <!-- Description / Entre 70 a 320 caracteres-->
    <meta name="description" content="En GOOGLES encontraras los mejores lentes del mercado. Contamos con productos de calidad premium y super accesibles. Todos nuestros lentes cuentan con la ultima tecnologia de protección contra rayos uv. Diseños unicos y adaptables para todos">
    <!-- Palabras claves-->
    <meta name="keywords" content="lentes, lentes de sol, lentes de receta, anteojos, proteccion uv, lentes antireflex">
    <!-- Open Graph / Define como se muestra la info de tu sitio al campartilo-->
    <meta property="og:title" content=" GOOGLES | Lentes de sol y de receta">
    <title>Tienda Online</title>
    <!--Css-->
    <link rel="stylesheet" href="css/style.css">
    <!--Iconos/ Font-awesone -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!--Animaciones-->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

<?php include("header.php");?><!-- fin header -->

    <div class="container-slider">
        <div class="slider" id="slider">
            <div class="slider__section">
                <img src="imagenes/banner4.webp" alt="Mujer con lentes de sol redondos y cristales oscuros" class="slider__img">
                <div class="slider__content">
                    <h2 class="slider__title">Women’s eyewear</h2>
                    <p class="slider__txt">Cool summer sale 50% off</p>
                    <a href="paginas/productos.php" class="btn-shop">SHOP NOW</a>
                </div>
            </div>
            <div class="slider__section">
                <img src="imagenes/banner5.webp" alt="Hombre con lentes de aumento y cristales transparentes" class="slider__img">
                <div class="slider__content">
                    <h2 class="slider__title">Men’s eyewear</h2>
                    <p class="slider__txt">Cool summer sale 50% off</p>
                    <a href="paginas/productos.php" class="btn-shop">SHOP NOW</a>
                </div>
            </div>
            <div class="slider__section">
                <img src="imagenes/banner.webp" alt="Mujer con lentes redondos de aumento y cristales transparentes" class="slider__img">
                <div class="slider__content">
                    <h2 class="slider__title">Women’s eyewear</h2>
                    <p class="slider__txt">Cool summer sale 50% off</p>
                    <a href="paginas/productos.php" class="btn-shop">SHOP NOW</a>
                </div>
            </div>
            <div class="slider__section">
                <img src="imagenes/happy-1836445_960_720.webp" alt="Hombre feliz con lentes de sol y cristales oscuros" class="slider__img">
                <div class="slider__content">
                    <h2 class="slider__title">Men’s eyewear</h2>
                    <p class="slider__txt">Cool summer sale 50% off</p>
                    <a href="paginas/productos.php" class="btn-shop">SHOP NOW</a>
                </div>
            </div>
        </div>
        <div class="slider__btn slider__btn--right" id="btn-right">&#62;</div>
        <div class="slider__btn slider__btn--left" id="btn-left">&#60;</div>
    </div>




    <!--Productos-->

    <main class="main">
        <div class="container">
            <h2 class="main-title">Lentes de Sol</h2>
            <section class="container-products" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
                <div class="product">
                    <img src="imagenes/s1.webp" alt="Lentes de sol para mujer de color negro" class="product__img">
                    <div class="product__description">
                        <h3 class="product__title">Farenheit (Grey)</h3>
                        <span class="product__price">$575.00</span>
                    </div>
                    <i class="product__icon fas fa-cart-plus"></i>

                </div>

                <div class="product">
                    <img src="imagenes/s2.webp" alt="Lentes de sol unisex de color marrón" class="product__img">
                    <div class="product__description">
                        <h3 class="product__title">Opium (Grey)</h3>
                        <span class="product__price">$575.00</span>
                    </div>
                    <i class="product__icon fas fa-cart-plus"></i>
                </div>

                <div class="product">
                    <img src="imagenes/s3.webp" alt="Lentes de sol unisex estilo aviator oscuros" class="product__img">
                    <div class="product__description">
                        <h3 class="product__title">Kenneth Cole</h3>
                        <span class="product__price">$575.00</span>
                    </div>
                    <i class="product__icon fas fa-cart-plus"></i>
                </div>

                <div class="product">
                    <img src="imagenes/s4.webp" alt="Lentes de sol para mujer color marron" class="product__img">
                    <div class="product__description">
                        <h3 class="product__title">Farenheit Oval</h3>
                        <span class="product__price">$325.00</span>
                    </div>
                    <i class="product__icon fas fa-cart-plus"></i>
                </div>

                <div class="product">
                    <img src="imagenes/s5.webp" alt="Lentes de sol para mujer color marron" class="product__img">
                    <div class="product__description">
                        <h3 class="product__title">Farenheit Oval</h3>
                        <span class="product__price">$325.00</span>
                    </div>
                    <i class="product__icon fas fa-cart-plus"></i>
                </div>

                <div class="product">
                    <img src="imagenes/s6.webp" alt="Lentes de sol para hombre estilo aviator oscuros" class="product__img">
                    <div class="product__description">
                        <h3 class="product__title">Farenheit Oval</h3>
                        <span class="product__price">$325.00</span>
                    </div>
                    <i class="product__icon fas fa-cart-plus"></i>
                </div>

            </section>

            <div class="kc-elm kc-css">
                <a class="kc_button" href="paginas/productos.php">
          VER MÁS <i class="fa-solid fa-arrow-right"></i></a>
            </div>

            <div class="container-editor">
                <div class="editor__item" data-aos="fade-right">
                    <img src="imagenes/img-estilo1.webp" alt="Mujer modelo con lentes estilo aviator de color negro" class="editor__img">
                    <a href="paginas/productos.php" class="editor__circle">EXPRESA TU ESTILO AHORA</a>
                </div>
                <div class="editor__item" data-aos="fade-left">
                    <img src="imagenes/img-estilo2.webp" alt="Hombre modelo con lentes estilo aviator de color negro" class="editor__img">
                    <a href="paginas/productos.php" class="editor__circle">EXPRESA TU ESTILO AHORA</a>
                </div>
            </div>

            <h2 class="main-title">Lentes de Receta</h2>
            <section class="container-products" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
                <div class="product">
                    <img src="imagenes/m2.webp" alt="Lentes de aumento, cristales transparentes y marco de color azul" class="product__img">
                    <div class="product__description">
                        <h3 class="product__title">Farenheit (Grey)</h3>
                        <span class="product__price">$575.00</span>
                    </div>
                    <i class="product__icon fas fa-cart-plus"></i>
                </div>

                <div class="product">
                    <img src="imagenes/D_NQ_NP_815666-MLA46470176898_062021-W.webp" alt="Lentes de mujer de aumento, cristales transparentes y estilo cat eyes" class="product__img">
                    <div class="product__description">
                        <h3 class="product__title">Opium (Grey)</h3>
                        <span class="product__price">$575.00</span>
                    </div>
                    <i class="product__icon fas fa-cart-plus"></i>
                </div>

                <div class="product">
                    <img src="imagenes/s10.webp" alt="Lentes de aumento, cristales transparentes y marco de color verde" class="product__img">
                    <div class="product__description">
                        <h3 class="product__title">Kenneth Cole</h3>
                        <span class="product__price">$575.00</span>
                    </div>
                    <i class="product__icon fas fa-cart-plus"></i>
                </div>

                <div class="product">
                    <img src="imagenes/Lentes_de_lectura_BplusD_BD222599_02.webp" alt="Lentes de aumento, cristales transparentes y marco de color verde" class="product__img">
                    <div class="product__description">
                        <h3 class="product__title">Kenneth Cole</h3>
                        <span class="product__price">$575.00</span>
                    </div>
                    <i class="product__icon fas fa-cart-plus"></i>
                </div>


                <div class="product">
                    <img src="imagenes/RE5201.webp" alt="Lentes de aumento para hombre, cristales transparentes y marco de color azul" class="product__img">
                    <div class="product__description">
                        <h3 class="product__title">Farenheit Oval</h3>
                        <span class="product__price">$325.00</span>
                    </div>
                    <i class="product__icon fas fa-cart-plus"></i>
                </div>

                <div class="product">
                    <img src="imagenes/VM-898.webp" alt="Lentes de aumento para mujer, cristales transparentes y de color rosa" class="product__img">
                    <div class="product__description">
                        <h3 class="product__title">Farenheit Oval</h3>
                        <span class="product__price">$325.00</span>
                    </div>
                    <i class="product__icon fas fa-cart-plus"></i>
                </div>
            </section>

            <div class="kc-elm kc-css">
                <a class="kc_button" href="paginas/receta.php">
          VER MÁS <i class="fa-solid fa-arrow-right"></i></a>
            </div>
    </main>


    <div class="slider-marcas">
        <div class="slide-track">
            <div class="slide">
                <img src="imagenes/1.png" height="100" width="250" alt="logo de la marca prada" />
            </div>
            <div class="slide">
                <img src="imagenes/2.png" height="100" width="250" alt="logo de la marca ray-ban" />
            </div>
            <div class="slide">
                <img src="imagenes/3.png" height="100" width="250" alt="logo de la marca lacoste" />
            </div>
            <div class="slide">
                <img src="imagenes/4.png" height="100" width="250" alt="logo de la marca tiffany y co" />
            </div>
            <div class="slide">
                <img src="imagenes/5.png" height="100" width="250" alt="logo de la marca Carolina Herrera" />
            </div>
            <div class="slide">
                <img src="imagenes/6.png" height="100" width="250" alt="logo de la marca mistral" />
            </div>
            <div class="slide">
                <img src="imagenes/7.png" height="100" width="250" alt="logo de la marca Christian Dior" />
            </div>
            <div class="slide">
                <img src="imagenes/1.png" height="100" width="250" alt="logo de la marca prada" />
            </div>
            <div class="slide">
                <img src="imagenes/2.png" height="100" width="250" alt="logo de la marca ray-ban" />
            </div>
            <div class="slide">
                <img src="imagenes/3.png" height="100" width="250" alt="logo de la marca lacoste" />
            </div>
            <div class="slide">
                <img src="imagenes/4.png" height="100" width="250" alt="logo de la marca tiffany y co" />
            </div>
            <div class="slide">
                <img src="imagenes/5.png" height="100" width="250" alt="logo de la marca Carolina Herrera" />
            </div>
            <div class="slide">
                <img src="imagenes/6.png" height="100" width="250" alt="logo de la marca mistral" />
            </div>
            <div class="slide">
                <img src="imagenes/7.png" height="100" width="250" alt="logo de la marca Christian Dior" />
            </div>
        </div>
    </div>

    <section class="bg__image"></section>

    <section class="container-tips" data-aos="flip-up">
        <div class="tip">
            <i class="far fa-hand-paper"></i>
            <h2 class="tip__title">Satisfacción Garantizada</h2>
            <p class="tip__txt">Los cambios de productos o las devoluciones por compra de un producto, podrán efectuarse en cualquier sucursal de la red Googles, en días y horarios de atención al público. Además, contamos con un año de garantia.</p>
            <a href="paginas/productos.php" class="btn-shop">SHOP NOW</a>
        </div>
        <div class="tip">
            <i class="fa-solid fa-users"></i>
            <h2 class="tip__title">Sobre Nosotros</h2>
            <p class="tip__txt">Estamos equipados con los instrumentos de medición más precisos del mercado y las lentes de mejor calidad avanzada. Descubre una experiencia diferente basada en el profesionalismo y en los productos de calidad.
            </p>
            <a href="paginas/productos.php" class="btn-shop">SHOP NOW</a>
        </div>
        <div class="tip">
            <i class="fas fa-cog"></i>
            <h2 class="tip__title">Protección UV</h2>
            <p class="tip__txt">Todos nuestros productos poseen una capa que filtra la luz azul emitida por los dispositivos digitales, protegiendo la vista de sus efectos nocivos. Usalos para evitar sufrir cansancio visual, enrojecimiento y sequedad en los ojos. </p>
            <a href="paginas/productos.php" class="btn-shop">SHOP NOW</a>
        </div>
    </section>
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
        </div>
        <div class="footer__section">
            <h2 class="footer__title">Suscríbete a las ofertas</h2>
            <p class="footer__txt">Al suscribirse a nuestra lista de correo, siempre recibirá nuestras últimas noticias y actualizaciones
            </p>
            <input type="email" class="footer__input" placeholder="Escriba su mail">
            <button class="button__fotter">Suscribirme</button>
        </div>
        <p class="copy">© 2022 Goggles. Todos los derechos reservados | Design By Edwin Corona</p>

        <div class="container__bt-wp" data-aos="zoom-out-left">
            <a href="#"><img src="imagenes/whatsapp.png" alt="icono de whatsapp" class="icon__wp"></a>
        </div>

    </footer>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <script src="slider.js"></script>

</body>

</php>