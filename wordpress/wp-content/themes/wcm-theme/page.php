<?php get_header() ?>
<!-- This if statement checks if there are posts. If yes then it starts a while loop which shows the posts -->
<div class="container">
<?php
if (have_posts()) {
  while (have_posts()) {
    the_post();
    ?>
    <h2><?php the_title(); ?></h2>
    <?php
    the_content();
  }
  // This else posts a message if there are no posts available
} else {
?><p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p><?php } ?>
</div>
<?php get_footer() ?>