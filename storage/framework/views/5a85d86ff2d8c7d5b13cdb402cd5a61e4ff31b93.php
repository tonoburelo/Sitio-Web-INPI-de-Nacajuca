<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>INPI - <?php echo $__env->yieldContent('title'); ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="<?php echo e(asset('assets/img/favico.png')); ?>" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?php echo e(asset('assets/lib/animate/animate.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/lib/owlcarousel/assets/owl.carousel.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/lib/lightbox/css/lightbox.min.css')); ?>" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?php echo e(asset('assets/css/style.css')); ?>" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border position-relative text-primary" style="width: 6rem; height: 6rem;" role="status">
        </div>
        <i class="fa fa-laptop-code fa-2x text-primary position-absolute top-50 start-50 translate-middle"></i>
    </div>
    <!-- Spinner End -->

    <!-- Brand & Contact Start -->
    <div class="container-fluid py-4 px-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="row align-items-center top-bar">
            <div class="col-lg-4 col-md-12 text-center text-lg-start">
                <a href="" class="navbar-brand m-0 p-0">
                    <!--<h1 class="fw-bold text-danger m-0"><i class="fa fa-laptop-code me-3"></i>INPI</h1>-->
                    <img src="<?php echo e(asset('assets/img/logo_inpi2.png')); ?>" alt="Logo">
                </a>
            </div>
            <div class="col-lg-8 col-md-7 d-none d-lg-block">
                <div class="row">
                    <div class="col-4">
                        <div class="d-flex align-items-center justify-content-end">
                            <div class="flex-shrink-0 btn-lg-square border rounded-circle">
                                <i class="far fa-clock text-danger"></i>
                            </div>
                            <div class="ps-3">
                                <p class="mb-2">Horario de atención</p>
                                <h6 class="mb-0">Lun - Vie; 8:00 - 16:00</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="d-flex align-items-center justify-content-end">
                            <div class="flex-shrink-0 btn-lg-square border rounded-circle">
                                <i class="fa fa-phone text-danger"></i>
                            </div>
                            <div class="ps-3">
                                <p class="mb-2">Llamanos</p>
                                <h6 class="mb-0">
                                    914 337 81 63
                                    <br>
                                    914 104 03 26
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="d-flex align-items-center justify-content-end">
                            <div class="flex-shrink-0 btn-lg-square border rounded-circle">
                                <i class="far fa-envelope text-danger"></i>
                            </div>
                            <div class="ps-3">
                                <p class="mb-2">Correo electronico</p>
                                <h6 class="mb-0">jbermudez@inpi.gob.mx</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Brand & Contact End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top py-lg-0 px-lg-5 wow fadeIn"
        data-wow-delay="0.1s" style="background-color: #a11f41">
        <a href="#" class="navbar-brand ms-3 d-lg-none">MENU</a>
        <button type="button" class="navbar-toggler me-3" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav me-auto p-3 p-lg-0">
                <a href="<?php echo e(url('/')); ?>" class="nav-item nav-link">Inicio</a>
                <a href="<?php echo e(url('/modulos')); ?>" class="nav-item nav-link">Acerca de nosotros</a>
                <a href="<?php echo e(url('/modulos/radio')); ?>" class="nav-item nav-link">Radiodifusora</a>
                <a href="<?php echo e(url('/modulos/eventos')); ?>" class="nav-item nav-link">Eventos</a>
                <a href="<?php echo e(url('/modulos/dir')); ?>" class="nav-item nav-link">Directorios</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Servicios</a>
                    <div class="dropdown-menu border-0 rounded-0 rounded-bottom m-0">
                        <a href="<?php echo e(url('/modulos/derechos')); ?>" class="dropdown-item">Derechos de la mujer</a>
                        <a href="<?php echo e(url('/modulos/fomento')); ?>" class="dropdown-item">Fomento económico</a>
                        <a href="<?php echo e(url('/modulos/cultura')); ?>" class="dropdown-item">Proyectos culturales</a>
                        <a href="<?php echo e(url('/modulos/medicina')); ?>" class="dropdown-item">Medicina tradicional</a>
                        <a href="<?php echo e(url('/modulos/defensoria')); ?>" class="dropdown-item">Defensoria jurídica</a>
                        <a href="<?php echo e(url('/modulos/probipi')); ?>" class="dropdown-item">PROBIPI</a>
                    </div>
                </div>
                <a href="<?php echo e(url('servidor/create')); ?>" class="nav-item nav-link">Contactanos</a>
            </div>
            <a href="<?php echo e(url('servidor')); ?>" class="btn btn-sm btn-light rounded-pill py-2 px-4 d-none d-lg-block">Iniciar sesión</a>
        </div>
    </nav>
    <!-- Navbar End -->

    <!--INICIA TODO EL CONTENIDO ADICIONAL-->
    <?php echo $__env->yieldContent('content'); ?>
    <!--TERMINA TODO EL CONTENIDO ADICIONAL-->

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-body footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Address</h5>
                    <p class="mb-2">
                        <i class="fa fa-map-marker-alt me-3"></i>
                        Carretera Nacajuca <br>Tecoluta,
                        Km 1.5, Col. Ignacio Ramírez,
                        C. P. 86220,
                        Nacajuca, Tabasco.
                    </p>
                    <p class="mb-2">
                        <i class="fa fa-phone-alt me-3"></i>
                        (914) 337 81 63
                        <br>    
                        (914) 104 03 26
                    </p>
                    <p class="mb-2">
                        <i class="fa fa-envelope me-3"></i>
                        Juan Lucio Bermúdez Cruz
                        jbermudez@inpi.gob.mx
                    </p>
                    <div class="d-flex pt-2">
                        <a target="_blank" class="btn btn-square btn-outline-secondary rounded-circle me-1" href="https://twitter.com/INPImx?s=20&t=xrKGb3H2Frbm4HgogGcVlw">
                            <i class="fab fa-twitter"></i></a>
                        <a target="_blank" class="btn btn-square btn-outline-secondary rounded-circle me-1" href="https://www.facebook.com/INPImx">
                            <i class="fab fa-facebook-f"></i></a>
                        <a target="_blank" class="btn btn-square btn-outline-secondary rounded-circle me-1" href="https://www.youtube.com/c/INPIMX">
                            <i class="fab fa-youtube"></i></a>
                        <a target="_blank" class="btn btn-square btn-outline-secondary rounded-circle me-0" href="https://www.instagram.com/inpimx/?hl=en">
                            <i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Quick Links</h5>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Our Services</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">Support</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Gallery</h5>
                    <div class="row g-2">
                        <div class="col-4">
                            <img class="img-fluid rounded" src="<?php echo e(asset('assets/img/project-1.jpg')); ?>" alt="Image">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid rounded" src="<?php echo e(asset('assets/img/project-2.jpg')); ?>" alt="Image">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid rounded" src="<?php echo e(asset('assets/img/project-3.jpg')); ?>" alt="Image">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid rounded" src="<?php echo e(asset('assets/img/project-4.jpg')); ?>" alt="Image">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid rounded" src="<?php echo e(asset('assets/img/project-5.jpg')); ?>" alt="Image">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid rounded" src="<?php echo e(asset('assets/img/project-6.jpg')); ?>" alt="Image">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Newsletter</h5>
                    <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control bg-transparent border-secondary w-100 py-3 ps-4 pe-5" type="text"
                            placeholder="Your email">
                        <button type="button"
                            class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a href="#">Your Site Name</a>, All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                        <br>Distributed By: <a class="border-bottom" href="https://themewagon.com"
                            target="_blank">ThemeWagon</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo e(asset('assets/lib/wow/wow.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/lib/easing/easing.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/lib/waypoints/waypoints.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/lib/counterup/counterup.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/lib/owlcarousel/owl.carousel.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/lib/lightbox/js/lightbox.min.js')); ?>"></script>

    <!-- Template Javascript -->
    <script src="<?php echo e(asset('assets/js/main.js')); ?>"></script>
</body>

</html><?php /**PATH C:\xampp\htdocs\INPI-WEB\resources\views/layouts/base.blade.php ENDPATH**/ ?>