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

    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
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
                  
                  <div id="bs-example-navbar-collapse-1" class="collapse navbar-collapse">
                    <ul id="menu-principal" class="nav navbar-nav">
                      <li id="menu-item-8" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8"><a title="Clientes" href="<?php bloginfo('home'); ?>/?cat=4/" style="color: #d43f3a">Clientes</a></li>
                      <li id="menu-item-9" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-9"><a title="Médicos" href="<?php bloginfo('home'); ?>/?cat=6/" style="color: green">Médicos</a></li>
                      <li id="menu-item-10" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-10"><a title="Parceiros" href="<?php bloginfo('home'); ?>/?cat=5/" style="color: #7c438a">Parceiros</a></li>
                      <li id="menu-item-11  " class="menu-item menu-item-type-custom menu-item-object-custom menu-item-11"><a title="Materiais" href="<?php bloginfo('home'); ?>/?post_type=materiais">Materiais</a></li>
                    </ul>
                  </div>
                  <!--
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
                  ?>-->
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
              <li><a href="index.php">Home</a></li>
              <li>|</li>
              <li><a href="https://www3.hermespardini.com.br/pagina/162/fale-conosco.aspx" target="_blank">Fale Conosco</li>
              <li><a href="https://www.facebook.com/hermespardini" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
              <li><a href="https://www.instagram.com/hermes.pardini/" target="_blank"><i class="fab fa-instagram"></i></a></li>
            </ul>
            </div>
            <div class="visible-lg"><?php get_search_form(); ?></div>
          </div>
        </div>
      </div>
    </div>
    
    <hr class="linha-topo-bottom">
    <!--/header-->