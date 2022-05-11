<div class="container">
  <footer class="row row-cols-5 py-5 my-5 border-top">
    <div class="col">
      <h3>This is a company</h3>
      <p>Hello this is the best company ever and we are really good at what we do</p>
      <p class="text-muted">&copy; 2021</p>
    </div>
    <div class="col">

    </div>

    <div class="col">
      <h5>Resor</h5>
      <ul class="nav flex-column">
      <?php
            wp_nav_menu(
                array(
                    'menu'=>'footer_menu_one',
                    'container'=>'',
                    'theme_location'=> 'footer_menu_one',
                    'items_wrap'=>'<a class="nav-link p-0 text-muted">%3$s</a>',
                )
            )
        ?>
      </ul>
    </div>

    <div class="col">
      <h5>Services</h5>
      <ul class="nav flex-column">
      <?php
            wp_nav_menu(
                array(
                    'menu'=>'footer_menu_two',
                    'container'=>'',
                    'theme_location'=> 'footer_menu_two',
                    'items_wrap'=>'<a class="nav-link p-0 text-muted">%3$s</a>',
                )
            )
        ?>
      </ul>
    </div>

    <div class="col">
      <h5></h5>
      <ul class="nav flex-column">
      <?php
            wp_nav_menu(
                array(
                    'menu'=>'footer_menu_three',
                    'container'=>'',
                    'theme_location'=> 'footer_menu_three',
                    'items_wrap'=>'<a class="nav-link p-0 text-muted">%3$s</a>',
                )
            )
        ?>
      </ul>
    </div>
  </footer>
</div>
<?php wp_footer(); ?>
</body>
</html>