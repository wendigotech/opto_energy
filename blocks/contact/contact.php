<section <?php if(empty($_GET['context']) || $_GET['context'] !== 'edit') echo get_block_wrapper_attributes( array('class' => "bg-secondary pb-5 pt-5 text-center", 'id' => "contact", ) ); else echo 'data-wp-block-props="true"'; ?>>
    <div class="container pb-5 pt-5">
        <h3 class="fw-bold h2 mb-4 text-white"><?php echo PG_Blocks_v3::getAttribute( $args, 'contact_heading' ) ?></h3>
        <a href="<?php echo (!empty($_GET['context']) && $_GET['context'] === 'edit') ? 'javascript:void()' : PG_Blocks_v3::getLinkUrl( $args, 'contact_email_link' ) ?>" class="btn btn-outline-success pb-2 pe-4 ps-4 pt-2"><?php echo PG_Blocks_v3::getAttribute( $args, 'contact_email_label' ) ?></a>
    </div>
    <div class="container mx-auto px-5 pt-10 pb-10 text-light">
        <h2 class="font-bold fw-bold h3 mb-5 text-center text-lg text-white"><?php echo PG_Blocks_v3::getAttribute( $args, 'form_title' ) ?></h2>
            <form <?php if(!empty($_GET['context']) && $_GET['context'] === 'edit') echo 'data-wp-inner-blocks'; ?>>
            <?php if(empty($_GET['context']) || $_GET['context'] !== 'edit') echo PG_Blocks_v3::getInnerContent( $args ); ?>
        </form>
    </div>
</section>