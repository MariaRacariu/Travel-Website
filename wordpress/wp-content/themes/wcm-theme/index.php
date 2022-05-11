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
<!-- Custom Cards -->
<div class="container px-4 py-5" id="custom-cards">
  <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
    <!-- Card 1 -->
    <div class="col">
      <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('unsplash-photo-1.jpg');">
        <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
          <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Short title, long jacket</h2>
        </div>
      </div>
    </div>
    <!-- Card 2 -->
    <div class="col">
      <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('unsplash-photo-2.jpg');">
        <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
          <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Much longer title that wraps to multiple lines</h2>
        </div>
      </div>
    </div>
    <!-- Card 3 -->
    <div class="col">
      <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('unsplash-photo-2.jpg');">
        <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
          <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Much longer title that wraps to multiple lines</h2>
        </div>
      </div>
    </div>

    <?php
    // if (have_posts()) {
    //   while (have_posts()) {
    ?>
        <!-- <div class="col">
          <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('unsplash-photo-2.jpg');">
            <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
              <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold"><?php the_title() ?></h2>
            </div>
          </div>
        </div> -->
     <?php
      //}
      // This else posts a message if there are no posts available
    // } else {
      ?><!--<p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p> --><?php
    //                                                                               } ?>
  </div>
</div>
<div class="container">
  <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
    <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
  </form>
</div>

<!-- This if statement checks if there are posts. If yes then it starts a while loop which shows the posts -->
<?php
if (have_posts()) {
  while (have_posts()) {
    the_post();
    // the_title();
    // the_content();
  }
  // This else posts a message if there are no posts available
} else {
?><p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p><?php
                                                                      }
                                                                        ?>
<?php get_footer() ?>