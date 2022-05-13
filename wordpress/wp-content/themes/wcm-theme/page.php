<?php get_header() ?>
<!-- Hero -->
<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
  <div class="col-md-5 p-lg-5 mx-auto my-5">
    <h1 class="display-4 fw-normal">Här börjar din använtyr</h1>
    <p class="lead fw-normal">Resa över hela världen</p>
    <a class="btn btn-outline-secondary" href="#">Sök</a>
  </div>
  <div class="product-device shadow-sm d-none d-md-block"></div>
  <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
</div>
<div class="container">
  <h1><?php the_title() ?></h1>
  <p><?php the_content() ?></p>
</div>
<div>
  <?php comments_template() ?>
  <?php wp_list_comments(
    array(
      'style' => 'div',
      
    )  
  );?>
</div>
<?php get_footer() ?>