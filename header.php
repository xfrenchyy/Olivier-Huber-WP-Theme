<?php  // START STEP 2.4
    // Add this to all your php files for added security
    if (!defined('ABSPATH'))
        exit; 
        // Exit if accessed directly. 
        // Ex: Not being called up directly by index.php or some other theme PHP file
    ?>
    
    <!-- START STEP 2.4 ADD HEADER.PHP CODE -->
    <!DOCTYPE html>
    <html    <?php language_attributes(); ?>>

    <head>
        <!-- START STEP 2.16 ADD CHARACTER SET -->
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<!-- END STEP 2.16 ADD CHARACTER SET -->

        <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- START 2.12 WP_HEAD GET DYNAMIC HEADER CONTENT -->

    <?php wp_head(); ?>

    <!-- END 2.12 WP_HEAD GET DYNAMIC HEADER CONTENT -->
    </head>

<!-- START STEP 2.17 CUSTOMIZE BODY CLASS & OPEN -->

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- END STEP 2.17 CUSTOMIZE BODY CLASS & OPEN -->
    <header>
<!-- START STEP 2.25 ADD CUSTOM LOGO -->
  <?php 
    // Enables Wordpress custom logo
    // See: https://developer.wordpress.org/reference%2Ffunctions%2Fadd_theme_support%2F/#custom-logo
    
        if ( function_exists( 'the_custom_logo' ) ) {
        the_custom_logo();
        }
    ?>
    <!-- END STEP 2.25 ADD CUSTOM LOGO -->
    <!-- START STEP 2.13 ADD SEARCH FORM -->

    <?php get_search_form(); ?>

    <!-- END STEP 2.13 ADD SEARCH FORM --> 

        <nav>
                <!-- START STEP 2.11 ADD THE MENU TO THE PAGE -->
    <?php 
        wp_nav_menu(array(
            'menu_class'	  	=> 'primary-menu',  // adds: class="primary-menu"
            'theme_location' 	=> 'header-menu',   // is controlled as the "header menu" in the backend
            'menu_id'	    	=> 'menu',          // adds: id="menu"
            'container'         => 'div',           // menu is inside a div
        ));
    ?>
    <!-- END STEP 2.11 ADD THE MENU TO THE PAGE -->
        </nav>    

    </header>
    <!-- END STEP 2.4 ADD HEADER.PHP CODE -->
    <?php  // END OF STEP 2.4 ?>

    