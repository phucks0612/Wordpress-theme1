<?php get_header(); ?>

<div class="container">
    <?php get_template_part('templates/content','header'); ?>
    <div class="blog-post">
        <h2 class="blog-post-title"> <?php the_title() ?> </h2>
        <p class="blog-post-meta"> 
            <?php esc_html_e(date('F j, Y', strtotime(get_the_date()))); esc_html_e(__(' by')); ?> 
            <a href="#"> <?php echo $post->post_author; ?> </a>
        </p>
        <hr>
        <p>
            <?php
                echo apply_filters('the_content', $post->post_content); 
            ?>
        </p>
    </div><!-- /.blog-post -->
    <?php
        the_post_navigation( array(
                'prev_text'                  => __( 'prev chapter: %title' ),
                'next_text'                  => __( 'next chapter: %title' ),
            ) 
        );
    ?>
</div>
<?php get_footer(); ?> 