<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <script src="https://kit.fontawesome.com/779dc48fa9.js" crossorigin="anonymous"></script>
    <title><?php bloginfo('name'); ?></title>
  </head>
  <body>
    <!--header start-->
    <header>
        <div class="row header-container full-width-container">
        <div class="site-title column-7 column-sm-7 column-md-6">
            <h1><?php bloginfo('name'); ?></h1>
        </div>
        <div class="row menu-container column-4 column-md-4 column-sm-2">
            <nuv>
                <?php wp_nav_menu(); ?>
                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
            </nuv>
        </div>
        <div class="row sns column-1 column-sm-3 column-md-2">
            <i class="fab fa-instagram"></i>
            <i class="fab fa-twitter"></i>
        </div>
        </div>
    </header>
<?php wp_head(); ?>