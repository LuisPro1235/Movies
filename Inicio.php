<?php require_once 'iniciar_sesion2.php'; ?>
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
                            <a href="admin.html"><li>Iniciar sesion como admin</li></a>
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
                                <a href="index.php"><img src="img/logo/MDlogo1.png" alt="Logo"></a>
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
                            <h2 class="title">Inicio de Sesión</h2>
                        </div>
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
                        <div class="row justify-content-center mt-3">
                            <div class="col-md-6 text-center">
                                <p>¿Aún no te has registrado?</p>
                                <a href="inicios de sesion/index.php"><button class="btn btn-link">Crear cuenta</button></a>
                            </div>
                            <div class="col-md-6 text-center">
                                <p>¿Olvidaste tu contraseña?</p>
                                <button class="btn btn-link">Recuperar contraseña</button>
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
                        <p>&copy; 2024 <a href="index.php">MovieDen</a>. Todos los derechos reservados.</p>
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
