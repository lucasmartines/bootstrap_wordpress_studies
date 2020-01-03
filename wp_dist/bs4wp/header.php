<!doctype html>
<html <?php language_attributes() ?> >
  <head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo('charset') ?>">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
     
    <?php wp_head() ?>
    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/style.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">

  </head>
  <body>
    <div class="container">

      <header class="row py-5 align-items-center">
        <div class="col-md-8 col-sm-12 ">
            <h1>Hello, world!</h1>
            <p class="lead">
              O meu primeiro super site no wordpress com bootstrap e nodejs
            </p>
        </div>
        <div class="col-md-4 col-sm-12">
          <form action="">
            <div class="input-group">
              <input type="text" placeholder="o que procura" class="form-control">
              <div class="input-group-append">
                <button class="btn btn-my-color-5">Buscar</button>
              </div>
            </div>
          </form>
        </div>
      </header><!-- ./header -->

      <nav class="row mb-4">
        <div class="col">
          <nav class="navbar navbar-expand-lg navbar-dark bg-my-color-3 rounded" role="navigation">
            <div class="container">
              <!-- Brand and toggle get grouped for better mobile display -->
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>
            
                  <?php
                  wp_nav_menu( array(
                      'theme_location'    => 'principal',
                      'depth'             => 2,
                      'container'         => 'div',
                      'container_class'   => 'collapse navbar-collapse',
                      'container_id'      => 'bs-example-navbar-collapse-1',
                      'menu_class'        => 'nav navbar-nav',
                      'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                      'walker'            => new WP_Bootstrap_Navwalker(),
                  ) );
                  ?>
              </div>
          </nav>
          
        </div>
      </nav><!-- ./nav -->