<li <?php if(empty($_GET['context']) || $_GET['context'] !== 'edit') echo get_block_wrapper_attributes( array('class' => "mb-3", ) ); else echo 'data-wp-block-props="true"'; ?>> 
    <?php if ( PG_Blocks_v3::getLinkUrl( $args, 'footer_link', false ) ) : ?>
        <a href="<?php echo (!empty($_GET['context']) && $_GET['context'] === 'edit') ? 'javascript:void()' : PG_Blocks_v3::getLinkUrl( $args, 'footer_link' ) ?>" class="link-light"><?php _e( 'Unsere Geschichte', 'opto_energy' ); ?></a>
    <?php endif; ?> 
</li>