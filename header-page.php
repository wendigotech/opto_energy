<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="b0nc1s">
        <!-- Bootstrap core CSS -->
        <!-- Custom styles for this template -->         
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <?php wp_head(); ?>
    </head>
    <body class="text-muted <?php echo implode(' ', get_body_class()); ?>">
        <?php if( function_exists( 'wp_body_open' ) ) wp_body_open(); ?>
        <header>
            <section class="hero-block  position-relative poster text-light" id="hero">
                <nav class="bg-secondary navbar navbar-dark navbar-expand-lg pb-3 pb-lg-1 pt-3 pt-lg-4"> 
                    <div class="container flex-wrap"> <a class="me-auto ms-lg-auto navbar-brand text-lg-center text-xl-center text-xxl-center" href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/Logo-OE-silver-a.svg" class="w-50"> </a> 
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggler2" aria-controls="navbarToggler2" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> 
                        </button>
                        <div class="collapse justify-content-center navbar-collapse  w-100" id="navbarToggler2">
                            <ul class="align-items-start d-flex h5 navbar-nav"> 
                                <li class="nav-item"> <a class="nav-link p-lg-4" href="#story"><?php _e( 'Story', 'opto_energy' ); ?></a> 
                                </li>
                                <li class="nav-item"> <a class="nav-link p-lg-4" href="#showroom"><?php _e( 'Showroom', 'opto_energy' ); ?></a> 
                                </li>
                                <li class="nav-item"> <a class="nav-link p-lg-4" href="#"><?php _e( 'Sortiment', 'opto_energy' ); ?></a> 
                                </li>
                                <li class="nav-item"> <a class="nav-link p-lg-4" href="#"><?php _e( 'Registrieren', 'opto_energy' ); ?></a> 
                                </li>                                 
                                <li class="nav-item">
                                    <a class="nav-link p-lg-4" href="#"><?php _e( 'Kontakt', 'opto_energy' ); ?></a> 
                                </li>                                 
                            </ul>
                        </div>
                    </div>                     
                </nav>                 
            </section>
        </header>
        <main>