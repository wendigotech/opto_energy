<?php get_header( 'page' ); ?>

<?php rewind_posts(); ?>
<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <?php PG_Helper_v2::rememberShownPost(); ?>
        <div id="post-<?php the_ID(); ?>" <?php post_class( 'row' ); ?>>
            <div class="col-md-4">
                <h3><?php _e( 'Column title', 'opto_energy' ); ?></h3> 
                <p><?php _e( 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.', 'opto_energy' ); ?></p> 
            </div>
        </div>
    <?php endwhile; ?>
<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.', 'opto_energy' ); ?></p>
<?php endif; ?>

<?php get_footer( 'page' ); ?>