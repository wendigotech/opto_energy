<footer <?php if(empty($_GET['context']) || $_GET['context'] !== 'edit') echo get_block_wrapper_attributes( array('class' => "bg-primary pt-5 text-white", ) ); else echo 'data-wp-block-props="true"'; ?>> 
    <div class="container pb-4 pt-4"> 
        <div class="row"> 
            <div class="me-auto py-3"> <a class="align-items-end d-inline-flex h2 link-info mb-4 text-decoration-none text-uppercase" href="<?php echo (!empty($_GET['context']) && $_GET['context'] === 'edit') ? 'javascript:void()' : PG_Blocks_v3::getLinkUrl( $args, 'logo_link' ) ?>">  <?php if ( !PG_Blocks_v3::getImageSVG( $args, 'logo_image', false) && PG_Blocks_v3::getImageUrl( $args, 'logo_image', 'full' ) ) : ?><img src="<?php echo PG_Blocks_v3::getImageUrl( $args, 'logo_image', 'full' ) ?>" class="<?php echo (PG_Blocks_v3::getImageField( $args, 'logo_image', 'id', true) ? ('wp-image-' . PG_Blocks_v3::getImageField( $args, 'logo_image', 'id', true)) : '') ?> img-fluid rounded-3 w-50" alt="<?php echo PG_Blocks_v3::getImageField( $args, 'logo_image', 'alt', true); ?>"/><?php endif; ?><?php if ( PG_Blocks_v3::getImageSVG( $args, 'logo_image', false) ) : ?><?php echo PG_Blocks_v3::mergeInlineSVGAttributes( PG_Blocks_v3::getImageSVG( $args, 'logo_image' ), array( 'class' => 'img-fluid rounded-3 w-50' ) ) ?><?php endif; ?>  </a> 
                <p class="mb-3"><?php echo PG_Blocks_v3::getAttribute( $args, 'description' ) ?></p> 
            </div>             
            <div class="py-3 text-start"> 
                <h4 class="fw-bold h5 mb-4 text-info text-uppercase"><?php echo PG_Blocks_v3::getAttribute( $args, 'about_us_heading' ) ?></h4> 
                    <ul class="d-flex justify-content-evenly list-unstyled" <?php if(!empty($_GET['context']) && $_GET['context'] === 'edit') echo 'data-wp-inner-blocks'; ?>>
                    <?php if(empty($_GET['context']) || $_GET['context'] !== 'edit') echo PG_Blocks_v3::getInnerContent( $args ); ?>
                </ul>                 
            </div>                                       
        </div>         
        <div class="pb-3 pt-3 text-center"> 
            <hr class="mt-0"/> 
            <p class="mb-0"><?php _e( 'Copyright &copy;', 'opto_energy' ); ?> <span><?php echo date( 'Y' ); ?></span> <span><?php bloginfo( 'name' ); ?></span><?php _e( '. Alle Rechte vorbehalten.', 'opto_energy' ); ?></p> 
        </div>                  
    </div>     
</footer>