<?php get_header( 'front-page' ); ?>

<?php rewind_posts(); ?>
<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <?php PG_Helper_v2::rememberShownPost(); ?>
        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <?php the_content(); ?>
        </div>
    <?php endwhile; ?>
<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.', 'opto_energy' ); ?></p>
<?php endif; ?>

<?php get_footer( 'front-page' ); ?>