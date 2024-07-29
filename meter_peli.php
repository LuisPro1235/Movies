<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Movie-Den : La madriguera de las películas y series</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- Other CSS files omitted for brevity -->
    <style>
        .btn-link {
            background: none;
            color: #007bff;
            border: none;
            padding: 0;
            font: inherit;
            cursor: pointer;
            text-decoration: underline;
        }
    </style>
</head>
<body>

<!-- Scroll-top -->
<button class="scroll-top scroll-to-target" data-target="html">
    <i class="fas fa-angle-up"></i>
</button>
<!-- Scroll-top-end-->

<!-- header-area -->
<header class="header-style-three">
    <div class="header-top-wrap">
        <div class="container custom-container-two">
            <div class="row align-items-center justify-content-center">
                <div class="col-sm-6">
                    <div class="header-top-link">
                        <ul>
                            <a href="#"><li>ADMIN</li></a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="sticky-header" class="main-header menu-area">
        <div class="container custom-container-two">
            <div class="row">
                <div class="col-12">
                    <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                    <div class="menu-wrap">
                        <nav class="menu-nav show">
                            <div class="logo">
                                <a href="index.html"><img src="img/logo/MDlogo1.png" alt="Logo"></a>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header-area-end -->

<!-- main-area -->
<main>
    <!-- contact-area -->
    <section class="contact-area pt-100 pb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact-wrap">
                        <div class="section-title title-style-three mb-30">
                            <h2 class="title">Agregar pelicula</h2>
                        </div>
                        <form action="ingresarPeli.php" method="post" enctype="multipart/form-data" style="margin: 20px; padding: 20px; border: 1px solid #ccc; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
                            <label for="nombre" style="display: block; margin-bottom: 10px;">Nombre:</label>
                            <input type="text" id="nombre" name="nombre" required style="width: 100%; height: 30px; margin-bottom: 20px; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
                        
                            <select id="genero" name="genero" required style="width: 100%; height: 50px; margin-bottom: 20px; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
                                <option value="accion">Accion</option>
                                <option value="terror">Terror</option>
                                <option value="romance">Romance</option>
                                <option value="ciencia-ficcion">Ciencia-Ficcion</option>
                                <option value="fantasia">Fantasia</option>
                            </select>
                        
                            <label for="año" style="display: block; margin-bottom: 10px;">Año:</label>
                            <input type="number" id="año" name="año" required style="width: 100%; height: 30px; margin-bottom: 20px; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
                        
                            <label for="pais" style="display: block; margin-bottom: 10px;">País:</label>
                            <input type="text" id="pais" name="pais" required style="width: 100%; height: 30px; margin-bottom: 20px; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
                        
                            <label for="director" style="display: block; margin-bottom: 10px;">Director:</label>
                            <input type="text" id="director" name="director" required style="width: 100%; height: 30px; margin-bottom: 20px; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
                        
                            <label for="precio" style="display: block; margin-bottom: 10px;">Precio:</label>
                            <input type="number" id="precio" name="precio" required style="width: 100%; height: 30px; margin-bottom: 20px; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
                        
                            <label for="tipo" style="display: block; margin-bottom: 10px;">Tipo:</label>
                            <select id="tipo" name="tipo" required style="width: 100%; height: 50px; margin-bottom: 20px; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
                                <option value="Video">Video</option>
                                <option value="Digital">Digital</option>
                            </select>
                        
                            <label for="imagen" style="display: block; margin-bottom: 10px;">Imagen:</label>
                            <input type="text" id="imagen" name="imagen" required style="width: 100%; height: 30px; margin-bottom: 20px; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
                        
                            <button type="submit" style="width: 100%; height: 40px; margin-top: 20px; padding: 10px; background-color: #4CAF50; color: #fff; border: none; border-radius: 5px; cursor: pointer;">Ingresar película</button>
                        </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-area-end -->

</main>
<!-- main-area-end -->

<!-- footer-area -->
<footer class="gray-bg footer-style-two footer-style-three pt-75">
    <div class="container">
        <div class="footer-top-wrap">
            <div class="row">
                <div class="col-12">
                    <div class="footer-logo">
                        <a href="index.html"><img src="img/logo/MDlogo1.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-wrap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="copyright-text">
                        <p>&copy; 2024 <a href="index.html">MovieDen</a>. Todos los derechos reservados.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer-area-end -->

<!-- JS here -->
<script src="js/vendor/jquery-3.5.0.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>
