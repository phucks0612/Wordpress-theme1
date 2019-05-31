<?php get_header(); ?>
<div class="container">
    <?php get_template_part('templates/content','header'); ?>
    <div class="text-center">
        <a class="blog-header-logo text-dark"> <?php the_title(); ?> </a>
    </div>
    <?php echo apply_filters('the_content', $post->post_content); ?>
</div>
<?php get_footer(); ?>