<?php get_header() ?>

<!-- Hero -->
<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light" style="background-image: url(http://localhost/Travel-Website/wordpress/wp-content/uploads/2022/05/holly-mandarich-UVyOfX3v0Ls-unsplash.jpg);">
  <div class="col-md-5 p-lg-5 mx-auto my-5">
    <h1 class="display-4 fw-normal">Här börjar din använtyr</h1>
    <p class="lead fw-normal">Resa över hela världen</p>
    <a class="btn btn-outline-secondary" href="#">Sök</a>
  </div>
</div>
<!-- Custom Cards -->
<div class="container px-4 py-5" id="custom-cards">
  <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
    <!-- Card 1 -->
    <div class="col">
      <div class="card card-cover h-100 overflow-hidden text-black bg-light rounded-5 shadow-lg" style="background-image: url('unsplash-photo-1.jpg');">
        <div class="d-flex flex-column h-100 p-5 pb-3 text-black text-shadow-1">
          <ul class="nav flex-column">
            <?php
            wp_nav_menu(
              array(
                'menu' => 'cards_menu_one',
                'container' => '',
                'theme_location' => 'cards_menu_one',
                'items_wrap' => '<h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold menu-cards">%3$s</h2>',
              )
            )
            ?>
          </ul>
        </div>
      </div>
    </div>
    <!-- Card 2 -->
    <div class="col">
      <div class="card card-cover h-100 overflow-hidden text-black bg-light rounded-5 shadow-lg" style="background-image: url('unsplash-photo-1.jpg');">
        <div class="d-flex flex-column h-100 p-5 pb-3 text-black text-shadow-1">
          <ul class="nav flex-column">
            <?php
            wp_nav_menu(
              array(
                'menu' => 'cards_menu_two',
                'container' => '',
                'theme_location' => 'cards_menu_two',
                'items_wrap' => '<h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold menu-cards">%3$s</h2>',
              )
            )
            ?>
          </ul>
        </div>
      </div>
    </div>
    <!-- Card 3 -->
    <div class="col">
      <div class="card card-cover h-100 overflow-hidden text-black bg-light rounded-5 shadow-lg" style="background-image: url('unsplash-photo-1.jpg');">
        <div class="d-flex flex-column h-100 p-5 pb-3 text-black text-shadow-1">
          <ul class="nav flex-column">
            <?php
            wp_nav_menu(
              array(
                'menu' => 'cards_menu_three',
                'container' => '',
                'theme_location' => 'cards_menu_three',
                'items_wrap' => '<h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold menu-cards">%3$s</h2>',
              )
            )
            ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container pb-4">
  <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
    <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
  </form>
</div>
<!-- Cards -->
<div class="container pb-4">
<h1>Check out trips</h1>
  <div class="row">
    <?php get_template_part('template-parts/index', 'travelCard'); ?>
  </div>
</div>
<div class="container pb-4">
<h1>Check out trips</h1>
  <div class="row">
    <?php get_template_part('template-parts/index', 'campCard'); ?>
  </div>
</div>
<!-- Hero -->
<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light pb-4">
  <div class="col-md-5 p-lg-5 mx-auto my-5">
    <h1 class="display-4 fw-normal">Här börjar din använtyr</h1>
    <p class="lead fw-normal">Resa över hela världen</p>
    <a class="btn btn-outline-secondary" href="#">Sök</a>
  </div>
</div>
<div class="product-device shadow-sm d-none d-md-block"></div>
<div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
</div>
<!-- Send letter -->
<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light pb-4">
  <div class="col-md-5 p-lg-5 mx-auto my-5">
    <h3 class="display-9 fw-normal">Här börjar din använtyr</h3>
    <p class="lead fw-normal">Resa över hela världen</p>
    <div class="container">
      <div class="row">
        <div class="col-lg">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
              Default
            </label>
          </div>
        </div>
        <div class="col-lg">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
              Default
            </label>
          </div>
        </div>
        <div class="col-lg">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
              Default
            </label>
          </div>
        </div>
      </div>
      <div class="container pb-4">
        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
          <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
          <button type="button" class="btn btn-primary">Send</button>
        </form>
      </div>
    </div>
    <div class="product-device shadow-sm d-none d-md-block"></div>
    <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
  </div>
  <!-- Circles -->
  <div class="container">
    <div class="text-center pb-4">
      <h2>idk</h2>
    </div>
    <div class="row">
      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
          <title>Placeholder</title>
          <rect width="100%" height="100%" fill="#777" /><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text>
        </svg>

        <h2>Heading</h2>
        <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
        <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
      </div>
      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
          <title>Placeholder</title>
          <rect width="100%" height="100%" fill="#777" /><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text>
        </svg>

        <h2>Heading</h2>
        <p>Another exciting bit of representative placeholder content. This time, we've moved on to the second column.</p>
        <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
      </div>
      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
          <title>Placeholder</title>
          <rect width="100%" height="100%" fill="#777" /><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text>
        </svg>

        <h2>Heading</h2>
        <p>And lastly this, the third column of representative placeholder content.</p>
        <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
      </div>
    </div>
  </div>
  <?php get_footer() ?>