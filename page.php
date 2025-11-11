<?php
/**
 * Template Name: Default Inner Page
 */
get_header();
?>

<!-- 🌟 Page Header / Breadcrumb Section -->
<section class="page-header">
  <div class="container">
    <h1 class="page-title"><?php the_title(); ?></h1>
    <nav class="breadcrumb">
      <a href="<?php echo home_url(); ?>">Home</a>
      <span> &raquo; </span>
      <span><?php the_title(); ?></span>
    </nav>
  </div>
</section>

<!-- 📄 Page Content Section -->
<section class="page-content">
  <div class="container">
    <?php
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            the_content();
            the_post_thumbnail(array(500,500)); // Display featured image with specified size
           
        endwhile;
    else :
        echo '<p>No content found.</p>';
    endif;
    ?>
    <?php 
    $imagepath = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );

     ?>
    <img src="<?php echo esc_url( $imagepath[0] ); ?>" alt="<?php the_title(); ?>" srcset="">

  </div>
</section>

<?php get_footer(); ?>
