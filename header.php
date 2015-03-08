<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset ="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1"> <!--make sure this is included for responsive design -->
        <title><?php bloginfo('name'); ?></title>
        <?php wp_head(); ?>
    </head>
    
    <body>
    
        <header class = "container">
            <p id="quote">"I had formed most of my ingenious acquaintances into a club of mental improvement, which we called the Junto" - Benjamin Franklin</p>
        
            <a href="<?php bloginfo( 'url' ); ?> ">
                <img class = "img-responsive" id="headerimage" src="<?php echo( get_header_image() ); ?>" alt="<?php echo( get_bloginfo( 'title' ) ); ?>" />
            </a>
            <p id="date">
                Easton Area High School  |  <?php echo current_time( 'l, F j, Y' ); ?>
            </p>
        </header>
            
        <nav class="navbar navbar-default navigation navbar-center" role="navigation">
              <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#collapsed">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                </div>
                            <?php
                        wp_nav_menu( array(
                            'theme_location'    => 'navigation',
                            'depth'             => 2,
                            'container'         => 'div',
                            'container_class'   => 'navigation collapse navbar-collapse',
                            'container_id'      => 'collapsed',
                            'menu_class'        => 'nav navbar-nav',
                            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                            'walker'            => new wp_bootstrap_navwalker())
                        );
                    ?>

                </div>
            </nav>
            
   