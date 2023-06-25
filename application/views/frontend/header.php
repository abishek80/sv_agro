<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SV Agro</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="<?php echo base_url(); ?>themes/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Flex:wght@100;200;300;400;500;600;700;800;900;1000&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?php echo base_url(); ?>themes/lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>themes/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>themes/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo base_url(); ?>themes/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?php echo base_url(); ?>themes/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="bg-primary navbar navbar-expand-lg navbar-light fixed-top position-fixed shadow py-lg-0 px-4 px-lg-5 d-flex position-relative">
        <a href="<?php echo base_url(); ?>" class="navbar-brand d-block d-lg-none">
            <h1 class="text-primary family-playfair">SV Agro</h1>
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between py-4 py-lg-0" id="navbarCollapse">
            <a href="<?php echo base_url(); ?>" class="navbar-brand bg-primary py-2 px-4 mx-3 d-none d-lg-block">
                <h1 class="text-white family-playfair">SV Agro</h1>
            </a>
            <div class="navbar-nav ms-auto py-0">
                <a href="<?php echo base_url(); ?>" class="nav-item nav-link">Home</a>
                <a href="<?php echo base_url(); ?>aboutus" class="nav-item nav-link">About</a>
                <a href="<?php echo base_url(); ?>product" class="nav-linkx nav-link">Products</a>
                <a href="<?php echo base_url(); ?>gallery" class="nav-linkx nav-link">Gallery</a>
                <a href="<?php echo base_url(); ?>contactus" class="nav-item nav-link">Contact</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->