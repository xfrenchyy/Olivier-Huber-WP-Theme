<?php  // START STEP 2.3
    // Add this to all your php files for added security

    if (!defined('ABSPATH'))
        exit; 
        // Exit if accessed directly. 
        // Ex: Not being called up directly by index.php or some other theme PHP file
    ?><!--  START WORDPRESS GET_HEADER CONTENT IN INDEX.PHP -->
    <?php get_header(); ?>
    <?php // this function loads the header.php file ?>


    <!--  END WORDPRESS GET_HEADER CONTENT IN INDEX.PHP -->
    <!-- STEP 2.3 ENDS HERE -->

      <!-- START STEP 2.8 ADD H1 AND WORDPRESS LOOP -->
  <h1><?php the_title(); // AUTOMATICALLY ADDS THE PAGE TITLE ?></h1>
  
  <!-- opening flex-container will go here -->
  <!-- START STEP 2.20 ADD FLEX CONTAINER -->



<div class="flex-container">
  <main id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <?php // NOTE IDs AND CLASSES ARE AUTOMATICALLY ADDED HERE ?>


  <!-- START WORDPRESS LOOP -->

      <?php 
          if ( have_posts() ) : 
          while ( have_posts() ) : the_post();
              the_content();
          endwhile;
      else :
          _e( 'Sorry, no posts matched your criteria.', 'billy-poppins' );
          // MAKE SURE TO CHANGE BILLY-POPPINS HERE
      endif;
      ?>

      <?php wp_link_pages(); ?>

  <!-- END WORDPRESS LOOP -->    
  </main>
<!-- END STEP 2.20 ADD FLEX CONTAINER -->

    <!-- START STEP 2.22 ADD SIDEBAR -->

    <?php get_sidebar(); ?>

    <!-- END STEP 2.22 ADD SIDEBAR -->

</div>
   <!-- END STEP 2.8 ADD H1 AND WORDPRESS LOOP -->
  <!-- closing flex-container will go here -->

         <!-- START STEP 2.6 ENABLE FOOTER -->


         <?php get_footer(); ?>
        <?php // this functions loads the footer.php file ?>   


    <!-- END STEP 2.6 ENABLE FOOTER -->