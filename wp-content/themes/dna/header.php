<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://getbootstrap.com/docs/3.3/favicon.ico">

    <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>

    <link rel="icon" href="https://getbootstrap.com/docs/3.3/favicon.ico">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />    
  </head>
  <!-- NAVBAR
  ================================================== -->
  <body>
    <hr class="linha-topo">
    <div class="header">
      <div class="">
        <div class="row"> 
          <div class="col-md-3 logo">
            <a href="<?php bloginfo('home'); ?>"><img src="<?php echo get_theme_mod( 'm1_logo' ); ?>" class="img-responsive center-block" alt="Mova Vídeos" title="Hermes Pardini">
            </a>
          </div>
          <div class="col-md-5">
            <!--menu-->
              <nav class="navbar navbar-default">
                <div class="container-fluid">
                  <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                      <span class="sr-only">Menu</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand visible-xs" href="#" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">Menu</a>
                  </div>

                  <?php
                    wp_nav_menu( array(
                    'menu'              => 'primary',
                    'theme_location'    => 'primary',
                    'depth'             => 2,
                    'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse',
                    'container_id'      => 'bs-example-navbar-collapse-1',
                    'menu_class'        => 'nav navbar-nav',
                    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                    'walker'            => new wp_bootstrap_navwalker())
                    );
                  ?>
                </div><!-- /.container-fluid -->
              </nav>
            <!--menu-->
            <!--
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#" data-toggle="modal" data-target=".bs-example-modal-sm" ><span class="glyphicon glyphicon glyphicon-user"></span></a></li>
            </ul>-->
          </div>
          <div class="">
           <div class="col-md-4 social-media visible-lg"> 
            <ul>
              <li>Home</li>
              <li>|</li>
              <li>Fale Conosco</li>
              <li><i class="fab fa-facebook-f"></i></li>
              <li><i class="fab fa-instagram"></i></li>
            </ul>
            </div>
            <div class="visible-lg"><?php get_search_form(); ?></div>
          </div>
        </div>
      </div>
    </div>
    
    <hr class="linha-topo-bottom">
    <!--/header-->