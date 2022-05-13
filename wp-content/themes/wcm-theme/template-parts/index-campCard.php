<?php
$args = array(
    'post_type' => 'travel_camp',
    'posts_per_page' => 4,

);
?>
<?php $the_query = new WP_Query($args); ?>

<?php if ($the_query->have_posts()) : ?>

    <?php while ($the_query->have_posts()) : $the_query->the_post();?>
        
        <div class="col-sm">
            <div class="card text-center" style="width: 18rem;">
                <img class="card-img-top" src="<?php get_the_post_thumbnail_url() ?>"> <!-- Doesn't work -->
                <div class="card-body">
                    <h5 class="card-title"><?php the_title() ?></h5>
                    <p class="card-text"><?php the_excerpt();?></p>
                    <a href="<?php the_permalink() ?>" class="btn btn-primary">Läs mer</a>
                </div>
            </div>
        </div>

    <?php endwhile; ?>

    <?php wp_reset_postdata(); ?>

<?php else : ?>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>