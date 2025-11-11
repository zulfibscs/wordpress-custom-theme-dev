<?php
// Template Name: Blog Post Page
get_header();
?>
<div class="container">
    <div class="blog-post">
        <!-- Featured Image -->
         <?php 
    $imagepath = wp_get_attachment_image_src( get_post_thumbnail_id(), 'medium' );

     ?>
    <img src="<?php echo esc_url( $imagepath[0] ); ?>" alt="<?php the_title(); ?>" srcset="">

        <!-- Post Title -->
        <h1 class="post-title"><?php the_title();?></h1>

        <!-- Post Meta -->
        <div class="post-meta">
            <span><?php the_author(); ?></span> |
            <span><?php echo get_the_date(); ?></span> |
            <span> <?php comments_number('No Comments', '1 Comment', '% Comments'); ?></span>
        </div>

        <!-- Post Content -->
        <div class="post-content">
            <?php
            if ( have_posts() ) :
                while ( have_posts() ) : the_post();
                    the_content();
                endwhile;
            else :
                echo '<p>No content found.</p>';
            endif;
            ?>
        <!-- Post Tags -->
        <div class="post-tags">
            <strong>Tags:</strong> <?php 
            if ( has_tag() ) {
                echo 'Tags: ';
                the_tags('', ', ', '');
            }
            ?>
        </div>

        <!-- Comments Section -->
        <div class="post-comments">
            <h3>Comments</h3>
            <p><strong>Jane:</strong> Great article! Very helpful.</p>
            <p><strong>Mark:</strong> Thanks for sharing this layout.</p>
        </div>
    </div>
</div>
<?php get_footer(); ?>