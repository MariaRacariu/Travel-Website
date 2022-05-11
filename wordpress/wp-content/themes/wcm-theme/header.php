<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Main</title> -->
</head>
<body>
<!-- Navbar -->
<div class="container">
  <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
    <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
      <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-award-fill" viewBox="0 0 16 16">
        <path d="m8 0 1.669.864 1.858.282.842 1.68 1.337 1.32L13.4 6l.306 1.854-1.337 1.32-.842 1.68-1.858.282L8 12l-1.669-.864-1.858-.282-.842-1.68-1.337-1.32L2.6 6l-.306-1.854 1.337-1.32.842-1.68L6.331.864 8 0z" />
        <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z" />
      </svg>
    </a>
        <?php
            wp_nav_menu(
                array(
                    'menu'=>'primary',
                    'container'=>'',
                    'theme_location'=> 'primary',
                    'item_wrap'=>'<ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">%3$s</ul>',
                )
            )
        ?>
    <!-- <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
      <li><a href="#" class="nav-link px-2 link-dark">Home</a></li>
      <li><a href="#" class="nav-link px-2 link-dark">Träningsresor</a></li>
      <li><a href="#" class="nav-link px-2 link-dark">Cuper</a></li>
      <li><a href="#" class="nav-link px-2 link-dark">Fotbollsresor</a></li>
      <li><a href="#" class="nav-link px-2 link-dark">Sportresor</a></li>
    </ul> -->

    <div class="col-md-3 text-end">
      <button type="button" class="btn btn-primary">Log in</button>
    </div>
  </header>
</div>
<?php wp_head() ?>