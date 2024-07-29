<?php require_once 'iniciar_sesion2.php'; ?>
<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Movie-Den: La madriguera de las peliculas y series</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="shortcut icon" type="image/x-icon" href="img/icon/logomequeño3.png">
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/animate.min.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/fontawesome-all.min.css">
        <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
        <link rel="stylesheet" href="css/bootstrap-datepicker.min.css">
        <link rel="stylesheet" href="css/swiper-bundle.min.css">
        <link rel="stylesheet" href="css/jquery-ui.min.css">
        <link rel="stylesheet" href="css/nice-select.css">
        <link rel="stylesheet" href="css/jarallax.css">
        <link rel="stylesheet" href="css/flaticon.css">
        <link rel="stylesheet" href="css/slick.css">
        <link rel="stylesheet" href="css/default.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
        <link rel="stylesheet" href="css/minimenu.css">
    </head>
    <body>
        
        <!-- preloader  -->
        
        <div id="preloader">
            <div id="ctn-preloader" class="ctn-preloader">
                <div class="animation-preloader">
                    <div class="spinner"></div>
                </div>
                <div class="loader">
                    <div class="row">
                        <div class="col-3 loader-section section-left">
                            <div class="bg"></div>
                        </div>
                        <div class="col-3 loader-section section-left">
                            <div class="bg"></div>
                        </div>
                        <div class="col-3 loader-section section-right">
                            <div class="bg"></div>
                        </div>
                        <div class="col-3 loader-section section-right">
                            <div class="bg"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- preloader end -->

		<!-- Scroll-top -->
        <button class="scroll-top scroll-to-target" data-target="html">
            <i class="fas fa-angle-up"></i>
        </button>
        <!-- Scroll-top-end-->

        <!-- header-area -->
        <header>
            <div class="header-top-wrap">
                <div class="container custom-container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-3 col-lg-4 d-none d-lg-block">
                            <div class="logo">
                                <a href="index.php"><img src="img/logo/MDlogo1.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-5 col-md-6">
                            <div class="header-top-offer">
                                <p>LO MEJOR DE LO MEJOR<span> las mejores peliculas y series </span> compra ya</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="header-top-action">
                                <ul>
                                    <li class="header-shop-cart"><a href="#">Cambiar Region</a>
                                        <ul class="minicart">
                                            
                                            <li>
                                                <div class="checkout-link">
                                                    <a href="catalogoNORTE.php">Norte</a>
                                                    <a href="catalogoSUR.php">Sur</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="wish-list"><a href="whislist.php"><i class="flaticon-heart-shape-outline"></i></a></li>
                                    <li class="header-shop-cart"><a href="carrito.php"><i class="flaticon-shopping-bag"></i><span>0</span></a>
                                    
                                    </li>
                                    <?php if (isset($correo_s)): ?>
                                    <form action="cerrar.php" method="post">
                                    <button type="submit" name="cerrar_sesion">Cerrar sesión</button>
                                    </form>
                                    <?php else: ?>
                                    <li class="header-profile"><a href="inicios de sesion/user.php"><i class="flaticon-user"></i></a></li>
                                    <!-- Button to trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Ingresar a mi cuenta
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Iniciar sesión</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="iniciar_sesion2.php" method="post" id="registroForm2">
          <div class="form-group">
            <label for="correo">Correo:</label>
            <input type="email" id="correo" name="correo" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" class="form-control" required>
          </div>
          <button type="submit" class="btn btn-lg btn-primary btn-block">Ingresar</button>
        </form>
      </div>
    </div>
  </div>
</div>
                                    <?php endif; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="main-header menu-area black-bg">
                <div class="container custom-container">
                    <div class="row">
                        <div class="col-12">
                            <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                            <div class="menu-wrap">
                                <nav class="menu-nav show">
                                    <div class="logo d-block d-lg-none">
                                        <a href="index.php" class="main-logo"><img src="img/logo/w_logo.png" alt="Logo"></a>
                                        <a href="index.php" class="sticky-logo"><img src="img/logo/logo.png" alt="Logo"></a>
                                    </div>
                                    <div class="header-action d-none d-md-block">
                                        <ul>
                                            <li class="shipping-offer">Las mejores peliculas <br><span>Movie-Den</span></li><br>
                                            <li class="header-search"><a href="#" data-toggle="modal" data-target="#search-modal"><i class="flaticon-search-interface-symbol"></i></a></li>
                                            <li class="sidebar-toggle-btn"><a href="#" class="navSidebar-button"><img src="img/icon/MDlogo2.png" alt=""></a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <!-- Mobile Menu  -->
                            <div class="mobile-menu">
                                <div class="close-btn"><i class="flaticon-targeting-cross"></i></div>
                                <nav class="menu-box">
                                    <div class="nav-logo"><a href="index.html"><img src="img/logo/logo.png" alt="" title=""></a>
                                    </div>
                                    <div class="menu-outer">
                                        <ul class="navigation">
                                            <li class="active menu-item-has-children"><a href="#">Home</a>
                                                <ul class="submenu">
                                                    <li class="active"><a href="index.html">Home One</a></li>
                                                    <li><a href="index-2.html">Home Two</a></li>
                                                    <li><a href="index-3.html">Home Three</a></li>
                                                    <li><a href="index-4.html">Home Four</a></li>
                                                    <li><a href="index-5.html">Home Five</a></li>
                                                    <li><a href="index-6.html">Home Six</a></li>
                                                    <li><a href="index-7.html">Home Seven</a></li>
                                                    <li><a href="index-8.html">Home Eight</a></li>
                                                    <li><a href="index-9.html">Home Nine</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children"><a href="#">Shop</a>
                                                <ul class="submenu">
                                                    <li><a href="shop.html">Shop Page</a></li>
                                                    <li><a href="#">Shop Sidebar</a></li>
                                                    <li><a href="shop-details.html">Shop Details</a></li>
                                                    <li><a href="cart.html">Cart Page</a></li>
                                                    <li><a href="cart.html">Checkout</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="about-us.html">Sobre nosotros</a></li>
                                            <li class="menu-item-has-children"><a href="#">blog</a>
                                                <ul class="submenu">
                                                    <li><a href="blog.html">Our Blog</a></li>
                                                    <li><a href="blog-details.html">Blog Details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="contact.html">Contactanos</a></li>
                                        </ul>
                                    </div>
                                    <div class="social-links">
                                        <ul class="clearfix">
                                            <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                            <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                                            <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                            <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                            <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <div class="menu-backdrop"></div>
                            <!-- End Mobile Menu -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal Search -->
            <div class="modal fade" id="search-modal" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <form>
                            <input type="text" placeholder="Search here...">
                            <button><i class="flaticon-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Modal Search-end -->

            <!-- off-canvas-start -->
            <div class="sidebar-off-canvas info-group">
                <div class="off-canvas-overlay"></div>
                <div class="off-canvas-widget scroll">
                    <div class="sidebar-widget-container">
                        <div class="off-canvas-heading">
                            <a href="#" class="close-side-widget">
                                <span class="flaticon-targeting-cross"></span>
                            </a>
                        </div>
                        <div class="sidebar-textwidget">
                            <div class="sidebar-info-contents">
                                <div class="content-inner">
                                    <div class="logo mb-30">
                                        <a href="index.html"><img src="img/logo/MDlogo1.png" alt=""></a>
                                    </div>
                                    <div class="content-box">
                                        <p>Empresa Dedicada a la venta de Peliculas</p>
                                    </div>
                                    <div class="contact-info">
                                        <h4 class="title">CONTACTANOS</h4>
                                        <ul>
                                            <li><span class="flaticon-phone-call"></span><a href="tel:123456789">4411142805</a></li>
                                            <li><span class="flaticon-email"></span><a href="#">movieden@info.com</a></li>
                                            <li><span class="flaticon-place"></span>UTEQ, Pie de la Cuesta</li>
                                        </ul>
                                    </div>
                                    
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </header>
        
        <main>

            <!-- slider-area -->
            <section class="slider-area position-relative">
                <div class="container-fluid p-0 fix">
                    <div class="main-slider-active">
                        <div class="single-slider">
                            <div class="row no-gutters">
                                <div class="col-md-6">
                                    <div class="slider-main-img" data-background="img/slider/lomasvisto.jpg"></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="slider-bg" data-background="img/slider/lomasvisto.jpg">
                                        <div class="slider-content">
                                            <h3 class="sub-title animated" data-animation-in="fadeInUp" data-delay-in=".2">Lo Mas Visto!</h3>
                                            <h2 class="title animated" data-animation-in="fadeInUp" data-delay-in=".4">VER YA</h2>
                                            <p class="animated" data-animation-in="fadeInUp" data-delay-in=".6">A Buen Precio</p>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-slider">
                            <div class="row no-gutters">
                                <div class="col-md-6">
                                    <div class="slider-main-img" data-background="img/slider/dune2.jpg"></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="slider-bg" data-background="img/slider/dune2.jpg">
                                        <div class="slider-content">
                                            <h3 class="sub-title animated" data-animation-in="fadeInUp" data-delay-in=".2">La mas vista!</h3>
                                            <h2 class="title animated" data-animation-in="fadeInUp" data-delay-in=".4">Dune:Part Two</h2>
                                            <p class="animated" data-animation-in="fadeInUp" data-delay-in=".6">comprala</p>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-slider">
                            <div class="row no-gutters">
                                <div class="col-md-6">
                                    <div class="slider-main-img" data-background="img/slider/spidey1.jpeg"></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="slider-bg" data-background="img/slider/spidey2.jpeg">
                                        <div class="slider-content">
                                            <h3 class="sub-title animated" data-animation-in="fadeInUp" data-delay-in=".2">Lo mejor en Animacion</h3>
                                            <h2 class="title animated" data-animation-in="fadeInUp" data-delay-in=".4">SpiderMan:Across the spiderverse</h2>
                                            <p class="animated" data-animation-in="fadeInUp" data-delay-in=".6">Combinacion de 2D y 3D</p>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-slider">
                            <div class="row no-gutters">
                                <div class="col-md-6">
                                    <div class="slider-main-img" data-background="img/slider/noseaceptandev.jpg"></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="slider-bg" data-background="img/slider/noseaceptandev.jpg">
                                        <div class="slider-content">
                                            <h3 class="sub-title animated" data-animation-in="fadeInUp" data-delay-in=".2">Pelicula Nacional Mas Taquillera</h3>
                                            <h2 class="title animated" data-animation-in="fadeInUp" data-delay-in=".4">No Se Aceptan Devoluciones</h2>
                                            <p class="animated" data-animation-in="fadeInUp" data-delay-in=".6">$601.1 millones!</p>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider-bottom-nav">
                        <div class="main-slider-nav">
                            
                        </div>
                    </div>
                </div>
                </div>
            </section>
            
            <!-- promo-services -->
            <section class="promo-services pt-50 pb-25">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-3 col-md-6 col-sm-8">
                            <div class="promo-services-item mb-40">
                                <div class="icon"><img src="img/icon/promo_icon01.png" alt=""></div>
                                <div class="content">
                                    <h6>Sin entrega a domicilio</h6>
                                    <p>todas las compras son en linea</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-8">
                            <div class="promo-services-item mb-40">
                                <div class="icon"><img src="img/icon/promo_icon02.png" alt=""></div>
                                <div class="content">
                                    <h6>Devoluciones</h6>
                                    <p>Devoluciones en cualquier inconveniente</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-8">
                            <div class="promo-services-item mb-40">
                                <div class="icon"><img src="img/icon/promo_icon03.png" alt=""></div>
                                <div class="content">
                                    <h6>Garantia</h6>
                                    <p>Garantia al comprar</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-8">
                            <div class="promo-services-item mb-40">
                                <div class="icon"><img src="img/icon/promo_icon04.png" alt=""></div>
                                <div class="content">
                                    <h6>Soporte a el cliente</h6>
                                    <p>Soporte las 24hrs</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- promo-services-end -->

            <!-- features-product-area -->
            <section class="features-products gray-bg pt-95 pb-100">
                <div class="container custom-container">
                    <div class="row justify-content-center">
                        <div class="col-xl-4 col-lg-6">
                            <div class="section-title text-center mb-25">
                                <h3 class="title">CATALOGO</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <ul class="nav nav-tabs features-product-nav" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="accion-tab" data-toggle="tab" href="#accion" role="tab" aria-controls="accion" aria-selected="true">Accion</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="terror-tab" data-toggle="tab" href="#terror" role="tab" aria-controls="terror" aria-selected="false">Terror</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="romance-tab" data-toggle="tab" href="#romance" role="tab" aria-controls="romance" aria-selected="false">Romance</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="fantasia-tab" data-toggle="tab" href="#fantasia" role="tab" aria-controls="fantasia" aria-selected="false">Fantasia</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="cienciaf-tab" data-toggle="tab" href="#cienciaf" role="tab" aria-controls="cienciaf" aria-selected="false">Ciencia-Ficcion</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane show active" id="accion" role="tabpanel" aria-labelledby="accion-tab">
                            <div class="row features-product-active">
                                <div class="col">
                                    <div class="features-product-item mb-30">
                                        <div class="features-product-thumb">
                                            <div class="discount-tag">-20%</div>
                                            <a href="shop-details.php">
                                                <img src= <?php $id = 0; include 'imagen_peli.php'; ?> alt="">
                                            </a>
                                            <div class="product-overlay-action">
                                                <ul>
                                                    <li><a href="cart.php"><i class="far fa-heart"></i></a></li>
                                                    <li><a href="shop-details.php"><i class="far fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="features-product-content">
                                            <div class="rating">
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <h5><a href="shop-details.php">Información de pelicula</a></h5>
                                            <p class="price">$67.00</p>
                                            <div class="features-product-bottom">
                                                <ul>
                                                    
                                                    <li class="limited-time"><a href="#">Oferta!</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="features-product-cart"><a href="cart.html">añadir a carrito</a></div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="features-product-item mb-30">
                                        <div class="features-product-thumb">
                                            <a href="shop-details.html">
                                                <img src="img/product/daño.jpg" alt="">
                                            </a>
                                            <div class="product-overlay-action">
                                                <ul>
                                                    <li><a href="cart.html"><i class="far fa-heart"></i></a></li>
                                                    <li><a href="shop-details.html"><i class="far fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="features-product-content">
                                            <div class="rating">
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <h5><a href="shop-details.php">Información de pelicula</a></h5>
                                            <p class="price">$85.00</p>
                                            <div class="features-product-bottom">
                                                <ul>
                                                    
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="features-product-cart"><a href="cart.html">añadir a carrito</a></div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="features-product-item mb-30">
                                        <div class="features-product-thumb">
                                            <a href="shop-details.html">
                                                <img src="img/product/hasta.jpg" alt="">
                                            </a>
                                            <div class="product-overlay-action">
                                                <ul>
                                                    <li><a href="cart.html"><i class="far fa-heart"></i></a></li>
                                                    <li><a href="shop-details.html"><i class="far fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="features-product-content">
                                            <div class="rating">
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <h5><a href="shop-details.php">Información de pelicula</a></h5>
                                            <p class="price">$68.00</p>
                                            <div class="features-product-bottom">
                                                <ul>
                                                    
                                                    <li class="limited-time"><a href="#">Oferta!</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="features-product-cart"><a href="cart.html">añadir a carrito</a></div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="features-product-item mb-30">
                                        <div class="features-product-thumb">
                                            <a href="shop-details.php">
                                                <img src="img/product/scarface.jpg" alt="">
                                            </a>
                                            <div class="product-overlay-action">
                                                <ul>
                                                    <li><a href="cart.html"><i class="far fa-heart"></i></a></li>
                                                    <li><a href="shop-details.html"><i class="far fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="features-product-content">
                                            <div class="rating">
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <h5><a href="shop-details.php">Información de pelicula</a></h5>
                                            <p class="price">$120.00</p>
                                            <div class="features-product-bottom">
                                                <ul>
                                                    
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="features-product-cart"><a href="cart.html">añadir a carrito</a></div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="features-product-item mb-30">
                                        <div class="features-product-thumb">
                                            <div class="discount-tag">-20%</div>
                                            <a href="shop-details.php">
                                                <img src="img/product/busqueda.jpg" alt="">
                                            </a>
                                            <div class="product-overlay-action">
                                                <ul>
                                                    <li><a href="cart.html"><i class="far fa-heart"></i></a></li>
                                                    <li><a href="shop-details.html"><i class="far fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="features-product-content">
                                            <div class="rating">
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <h5><a href="shop-details.php">Información de pelicula</a></h5>
                                            <p class="price">$18.00</p>
                                            <div class="features-product-bottom">
                                                
                                            </div>
                                        </div>
                                        <div class="features-product-cart"><a href="cart.html">añadir a carrito</a></div>
                                    </div>
                                </div>
                                
                                
                            </div>
                        </div>
                        <div class="tab-pane" id="terror" role="tabpanel" aria-labelledby="terror-tab">
                            <div class="row features-product-active">
                                <div class="col">
                                    <div class="features-product-item mb-30">
                                        <div class="features-product-thumb">
                                            <div class="discount-tag">-20%</div>
                                            <a href="shop-details.html">
                                                <img src="img/product/it.jpg" alt="">
                                            </a>
                                            <div class="product-overlay-action">
                                                <ul>
                                                    <li><a href="cart.html"><i class="far fa-heart"></i></a></li>
                                                    <li><a href="shop-details.html"><i class="far fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="features-product-content">
                                            <div class="rating">
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <h5><a href="shop-details.php"><?php $imagen ?></a></h5>
                                            <p class="price">$67.00</p>
                                            <div class="features-product-bottom">
                                                <ul>
                                                    
                                                    <li class="limited-time"><a href="#">Oferta!</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="features-product-cart"><a href="cart.html">añadir a carrito</a></div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="features-product-item mb-30">
                                        <div class="features-product-thumb">
                                            <a href="shop-details.php">
                                                <img src="img/product/hallo.jpg" alt="">
                                            </a>
                                            <div class="product-overlay-action">
                                                <ul>
                                                    <li><a href="cart.html"><i class="far fa-heart"></i></a></li>
                                                    <li><a href="shop-details.html"><i class="far fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="features-product-content">
                                            <div class="rating">
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <h5><a href="shop-details.html"></a>Información de pelicula</h5>
                                            <p class="price">$85.00</p>
                                            <div class="features-product-bottom">
                                                <ul>
                                                    
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="features-product-cart"><a href="cart.html">añadir a carrito</a></div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="features-product-item mb-30">
                                        <div class="features-product-thumb">
                                            <a href="shop-details.html">
                                                <img src="img/product/activi.jpg" alt="">
                                            </a>
                                            <div class="product-overlay-action">
                                                <ul>
                                                    <li><a href="cart.html"><i class="far fa-heart"></i></a></li>
                                                    <li><a href="shop-details.html"><i class="far fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="features-product-content">
                                            <div class="rating">
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <h5><a href="shop-details.html">Actividad Paranormal</a></h5>
                                            <p class="price">$68.00</p>
                                            <div class="features-product-bottom">
                                                <ul>
                                                    
                                                    <li class="limited-time"><a href="#">Oferta!</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="features-product-cart"><a href="cart.html">añadir a carrito</a></div>
                                    </div>
                                    
                                </div>
                                <div class="col">
                                    <div class="features-product-item mb-30">
                                        <div class="features-product-thumb">
                                            <a href="shop-details.html">
                                                <img src="img/product/cosa.jpg" alt="">
                                            </a>
                                            <div class="product-overlay-action">
                                                <ul>
                                                    <li><a href="cart.html"><i class="far fa-heart"></i></a></li>
                                                    <li><a href="shop-details.html"><i class="far fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="features-product-content">
                                            <div class="rating">
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <h5><a href="shop-details.html">La Cosa</a></h5>
                                            <p class="price">$120.00</p>
                                            <div class="features-product-bottom">
                                                <ul>
                                                    
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="features-product-cart"><a href="cart.html">añadir a carrito</a></div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="features-product-item mb-30">
                                        <div class="features-product-thumb">
                                            <a href="shop-details.html">
                                                <img src="img/product/rec.jpg" alt="">
                                            </a>
                                            <div class="product-overlay-action">
                                                <ul>
                                                    <li><a href="cart.html"><i class="far fa-heart"></i></a></li>
                                                    <li><a href="shop-details.html"><i class="far fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="features-product-content">
                                            <div class="rating">
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <h5><a href="shop-details.html">REC</a></h5>
                                            <p class="price">$120.00</p>
                                            <div class="features-product-bottom">
                                                <ul>
                                                    
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="features-product-cart"><a href="cart.html">añadir a carrito</a></div>
                                    </div>
                                </div>
                                
                                
                            </div>
                        </div>
                        <div class="tab-pane" id="romance" role="tabpanel" aria-labelledby="shoes-tab">
                            <div class="row features-product-active">
                                <div class="col">
                                    <div class="features-product-item mb-30">
                                        <div class="features-product-thumb">
                                            <div class="discount-tag">-20%</div>
                                            <a href="shop-details.html">
                                                <img src="img/product/vidasp.jpg" alt="">
                                            </a>
                                            <div class="product-overlay-action">
                                                <ul>
                                                    <li><a href="cart.html"><i class="far fa-heart"></i></a></li>
                                                    <li><a href="shop-details.html"><i class="far fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="features-product-content">
                                            <div class="rating">
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <h5><a href="shop-details.html">Vidas Pasadas</a></h5>
                                            <p class="price">$90.00</p>
                                            <div class="features-product-bottom">
                                                
                                            </div>
                                        </div>
                                        <div class="features-product-cart"><a href="cart.html">añadir al carrito</a></div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="features-product-item mb-30">
                                        <div class="features-product-thumb">
                                            <a href="shop-details.html">
                                                <img src="img/product/yoantes.jpg" alt="">
                                            </a>
                                            <div class="product-overlay-action">
                                                <ul>
                                                    <li><a href="cart.html"><i class="far fa-heart"></i></a></li>
                                                    <li><a href="shop-details.html"><i class="far fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="features-product-content">
                                            <div class="rating">
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <h5><a href="shop-details.html">Yo Antes De Ti</a></h5>
                                            <p class="price">$45.00</p>
                                            <div class="features-product-bottom">
                                                
                                            </div>
                                        </div>
                                        <div class="features-product-cart"><a href="cart.html">añadir a carrito</a></div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="features-product-item mb-30">
                                        <div class="features-product-thumb">
                                            <a href="shop-details.html">
                                                <img src="img/product/tunom.jpg" alt="">
                                            </a>
                                            <div class="product-overlay-action">
                                                <ul>
                                                    <li><a href="cart.html"><i class="far fa-heart"></i></a></li>
                                                    <li><a href="shop-details.html"><i class="far fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="features-product-content">
                                            <div class="rating">
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <h5><a href="shop-details.html">Tu Nombre</a></h5>
                                            <p class="price">$50.00</p>
                                            <div class="features-product-bottom">
                                                <ul>
                                                    
                                                    <li class="limited-time"><a href="#">Oferta!</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="features-product-cart"><a href="cart.html">añadir a carrito</a></div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="features-product-item mb-30">
                                        <div class="features-product-thumb">
                                            <a href="shop-details.html">
                                                <img src="img/product/ghosted.jpg" alt="">
                                            </a>
                                            <div class="product-overlay-action">
                                                <ul>
                                                    <li><a href="cart.html"><i class="far fa-heart"></i></a></li>
                                                    <li><a href="shop-details.html"><i class="far fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="features-product-content">
                                            <div class="rating">
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <h5><a href="shop-details.html">Ghosted</a></h5>
                                            <p class="price">$99.00</p>
                                            <div class="features-product-bottom">
                                                
                                            </div>
                                        </div>
                                        <div class="features-product-cart"><a href="cart.html">añadir a carrito</a></div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="features-product-item mb-30">
                                        <div class="features-product-thumb">
                                            <div class="discount-tag">-20%</div>
                                            <a href="shop-details.html">
                                                <img src="img/product/wall.jpg" alt="">
                                            </a>
                                            <div class="product-overlay-action">
                                                <ul>
                                                    <li><a href="cart.html"><i class="far fa-heart"></i></a></li>
                                                    <li><a href="shop-details.html"><i class="far fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="features-product-content">
                                            <div class="rating">
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <h5><a href="shop-details.html">Wall-E</a></h5>
                                            <p class="price">$70.00</p>
                                            <div class="features-product-bottom">
                                                <ul>
                                                    
                                                    <li class="limited-time"><a href="#">Oferta!</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="features-product-cart"><a href="cart.html">añadir a carrito</a></div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="tab-pane" id="fantasia" role="tabpanel" aria-labelledby="fantasia-tab">
                            <div class="row features-product-active">
                                <div class="col">
                                    <div class="features-product-item mb-30">
                                        <div class="features-product-thumb">
                                            <div class="discount-tag">-20%</div>
                                            <a href="shop-details.html">
                                                <img src="img/product/intensa.jpg" alt="">
                                            </a>
                                            <div class="product-overlay-action">
                                                <ul>
                                                    <li><a href="cart.html"><i class="far fa-heart"></i></a></li>
                                                    <li><a href="shop-details.html"><i class="far fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="features-product-content">
                                            <div class="rating">
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <h5><a href="shop-details.html">Intensa-Mente</a></h5>
                                            <p class="price">$67.00</p>
                                            <div class="features-product-bottom">
                                                <ul>
                                                    <li class="color-option">
                                                        <span class="gray"></span>
                                                        <span class="cyan"></span>
                                                        <span class="orange"></span>
                                                    </li>
                                                    <li class="limited-time"><a href="#">Limited-Time Offer!</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="features-product-cart"><a href="cart.html">añadir a carrito</a></div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="features-product-item mb-30">
                                        <div class="features-product-thumb">
                                            <a href="shop-details.html">
                                                <img src="img/product/noseacep.jpg" alt="">
                                            </a>
                                            <div class="product-overlay-action">
                                                <ul>
                                                    <li><a href="cart.html"><i class="far fa-heart"></i></a></li>
                                                    <li><a href="shop-details.html"><i class="far fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="features-product-content">
                                            <div class="rating">
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <h5><a href="shop-details.html">No Se Aceptan Devoluciones</a></h5>
                                            <p class="price">$45.00</p>
                                            <div class="features-product-bottom">
                                                <ul>
                                                    <li class="color-option">
                                                        <span class="gray"></span>
                                                        <span class="cyan"></span>
                                                        <span class="orange"></span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="features-product-cart"><a href="cart.html">añadir a carrito</a></div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="features-product-item mb-30">
                                        <div class="features-product-thumb">
                                            <a href="shop-details.html">
                                                <img src="img/product/spider.jpg" alt="">
                                            </a>
                                            <div class="product-overlay-action">
                                                <ul>
                                                    <li><a href="cart.html"><i class="far fa-heart"></i></a></li>
                                                    <li><a href="shop-details.html"><i class="far fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="features-product-content">
                                            <div class="rating">
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <h5><a href="shop-details.html">Spider Man Across The SpiderVerse</a></h5>
                                            <p class="price">$29.00</p>
                                            <div class="features-product-bottom">
                                                <ul>
                                                    <li class="color-option">
                                                        <span class="gray"></span>
                                                        <span class="cyan"></span>
                                                        <span class="orange"></span>
                                                    </li>
                                                    <li class="limited-time"><a href="#">Limited-Time Offer!</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="features-product-cart"><a href="cart.html">añadir a carrito</a></div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="features-product-item mb-30">
                                        <div class="features-product-thumb">
                                            <a href="shop-details.html">
                                                <img src="img/product/god.jpg" alt="">
                                            </a>
                                            <div class="product-overlay-action">
                                                <ul>
                                                    <li><a href="cart.html"><i class="far fa-heart"></i></a></li>
                                                    <li><a href="shop-details.html"><i class="far fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="features-product-content">
                                            <div class="rating">
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <h5><a href="shop-details.html">Godzila y Kong:El Nuevo Imperio</a></h5>
                                            <p class="price">$59.00</p>
                                            <div class="features-product-bottom">
                                                <ul>
                                                    <li class="color-option">
                                                        <span class="gray"></span>
                                                        <span class="cyan"></span>
                                                        <span class="orange"></span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="features-product-cart"><a href="cart.html">añadir a carrito</a></div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="features-product-item mb-30">
                                        <div class="features-product-thumb">
                                            <div class="discount-tag">-20%</div>
                                            <a href="shop-details.html">
                                                <img src="img/product/larazon.jpg" alt="">
                                            </a>
                                            <div class="product-overlay-action">
                                                <ul>
                                                    <li><a href="cart.html"><i class="far fa-heart"></i></a></li>
                                                    <li><a href="shop-details.html"><i class="far fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="features-product-content">
                                            <div class="rating">
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <h5><a href="shop-details.html">La Razon De Estar Contigo</a></h5>
                                            <p class="price">$89.00</p>
                                            <div class="features-product-bottom">
                                                <ul>
                                                    <li class="color-option">
                                                        <span class="gray"></span>
                                                        <span class="cyan"></span>
                                                        <span class="orange"></span>
                                                    </li>
                                                    <li class="limited-time"><a href="#">Limited-Time Offer!</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="features-product-cart"><a href="cart.html">añadir a carrito</a></div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="tab-pane" id="cienciaf" role="tabpanel" aria-labelledby="cienciaf-tab">
                            <div class="row features-product-active">
                                <div class="col">
                                    <div class="features-product-item mb-30">
                                        <div class="features-product-thumb">
                                            <div class="discount-tag">-20%</div>
                                            <a href="shop-details.html">
                                                <img src="img/product/mad.jpg" alt="">
                                            </a>
                                            <div class="product-overlay-action">
                                                <ul>
                                                    <li><a href="cart.html"><i class="far fa-heart"></i></a></li>
                                                    <li><a href="shop-details.html"><i class="far fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="features-product-content">
                                            <div class="rating">
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <h5><a href="shop-details.html">MadMax Furia en el camino</a></h5>
                                            <p class="price">$67.00</p>
                                            <div class="features-product-bottom">
                                                <ul>
                                                    <li class="color-option">
                                                        <span class="gray"></span>
                                                        <span class="cyan"></span>
                                                        <span class="orange"></span>
                                                    </li>
                                                    <li class="limited-time"><a href="#">Limited-Time Offer!</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="features-product-cart"><a href="cart.html">añadir a carrito</a></div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="features-product-item mb-30">
                                        <div class="features-product-thumb">
                                            <a href="shop-details.html">
                                                <img src="img/product/ready.jpg" alt="">
                                            </a>
                                            <div class="product-overlay-action">
                                                <ul>
                                                    <li><a href="cart.html"><i class="far fa-heart"></i></a></li>
                                                    <li><a href="shop-details.html"><i class="far fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="features-product-content">
                                            <div class="rating">
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <h5><a href="shop-details.html">Ready Player One</a></h5>
                                            <p class="price">$45.00</p>
                                            <div class="features-product-bottom">
                                                <ul>
                                                    <li class="color-option">
                                                        <span class="gray"></span>
                                                        <span class="cyan"></span>
                                                        <span class="orange"></span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="features-product-cart"><a href="cart.html">añadir a carrito</a></div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="features-product-item mb-30">
                                        <div class="features-product-thumb">
                                            <a href="shop-details.html">
                                                <img src="img/product/dune.jpg" alt="">
                                            </a>
                                            <div class="product-overlay-action">
                                                <ul>
                                                    <li><a href="cart.html"><i class="far fa-heart"></i></a></li>
                                                    <li><a href="shop-details.html"><i class="far fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="features-product-content">
                                            <div class="rating">
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <h5><a href="shop-details.html">Dune part two</a></h5>
                                            <p class="price">$29.00</p>
                                            <div class="features-product-bottom">
                                                <ul>
                                                    <li class="color-option">
                                                        <span class="gray"></span>
                                                        <span class="cyan"></span>
                                                        <span class="orange"></span>
                                                    </li>
                                                    <li class="limited-time"><a href="#">Limited-Time Offer!</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="features-product-cart"><a href="cart.html">añadir a carrito</a></div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="features-product-item mb-30">
                                        <div class="features-product-thumb">
                                            <a href="shop-details.html">
                                                <img src="img/product/maze.jpg" alt="">
                                            </a>
                                            <div class="product-overlay-action">
                                                <ul>
                                                    <li><a href="cart.html"><i class="far fa-heart"></i></a></li>
                                                    <li><a href="shop-details.html"><i class="far fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="features-product-content">
                                            <div class="rating">
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <h5><a href="shop-details.html">Maze Runner correr o morir</a></h5>
                                            <p class="price">$59.00</p>
                                            <div class="features-product-bottom">
                                                <ul>
                                                    <li class="color-option">
                                                        <span class="gray"></span>
                                                        <span class="cyan"></span>
                                                        <span class="orange"></span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="features-product-cart"><a href="cart.html">añadir a carrito</a></div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- features-product-area-end -->

            <!-- discount-area -->
            <section class="discount-area discount-bg jarallax parallax-img" data-background="img/bg/strimin.png">
                <div class="container">
                    <div class="row justify-content-center justify-content-lg-start">
                        <div class="col-lg-6 col-md-10">
                            <div class="discount-content text-center">
                                <div class="icon mb-15"><img src="img/icon/MDlogo3White.png" alt=""></div>
                                <span>Nuestro Stock Es Limitado</span>
                                <h2>Peliculas a nivel federal, indie, mundial</h2>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- discount-area-end -->

        <!-- footer-area -->
        <footer class="dark-bg pt-55 pb-80">
            <div class="container">
                <div class="footer-top-wrap">
                    <div class="row">
                        <div class="col-12">
                            <div class="footer-logo">
                                <a href="index.html"><img src="img/icon/MDlogo3White.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-middle-wrap">
                    <div class="row">
                        <div class="col-12">
                            <div class="footer-link-wrap">
                                <nav class="menu-links">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="copyright-wrap">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="copyright-text">
                                <p>&copy; 2024 <a href="index.html">Movie-Den</a>. Todos los derechos reservados </p>
                            </div>
                        </div>
                        
		<!-- JS here -->
        <script src="js/vendor/jquery-3.5.0.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/isotope.pkgd.min.js"></script>
        <script src="js/imagesloaded.pkgd.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="js/bootstrap-datepicker.min.js"></script>
        <script src="js/jquery.nice-select.min.js"></script>
        <script src="js/jquery.countdown.min.js"></script>
        <script src="js/swiper-bundle.min.js"></script>
        <script src="js/jarallax.min.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/nav-tool.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
