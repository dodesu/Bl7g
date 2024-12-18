<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="<?php bloginfo('charset') ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="<?php echo THEME_URI . 'assets/images/icon/favicon.ico' ?>">
  <link rel="profile" href="http://gmgp.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo('pingback_url') ?>">
  <link
    href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap"
    rel="stylesheet">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <!-- ***** Preloader Start ***** -->
  <div id="preloader">
    <div class="jumper">
      <div></div>
      <div></div>
      <div></div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- Header -->
  <header class="">
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand" href="<?php echo home_url(); ?>">
          <!-- <h2>Bl7g<em>.</em></h2> -->
          <?php the_custom_logo(); ?>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
          aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo home_url(); ?>">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= THEME_URI . '/about-us' ?>">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= THEME_URI . '/contact-us' ?>">Contact Us</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <div class="search-box">
                  <form role="search" method="get" action="<?php echo home_url('/'); ?>">
                    <button type="button" class="btn-search"><i class="fas fa-search"></i></button>
                    <input type="search" class="input-search" placeholder="Type to Search..."
                      value="<?php echo get_search_query(); ?>" name="s">
                  </form>
                </div>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>