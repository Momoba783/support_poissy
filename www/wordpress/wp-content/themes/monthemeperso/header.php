<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/style.css">   
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/css/bootstrap.css">
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 haut-gauche">
        <?php dynamic_sidebar('haut-gauche'); ?>
        </div>

        <div class="col-md-6 haut-droite">
        <?php dynamic_sidebar('haut-droite'); ?>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <?php wp_nav_menu(array('container_class' => 'menu-header', 'theme_location' => 'primary')); ?>
</div>
</nav>
<div class="row">
    <div class="col-md-12 entete">
    <?php dynamic_sidebar('entete'); ?>
</div>
<div class="container">
    <section>



    
