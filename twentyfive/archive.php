<?php get_header(); ?>
<div class="container">

    <?php get_template_part('templates/content','header'); ?>

    <main role="main" class="container">
        <div class="row">
            <div class="col-md-8 blog-main">
                <h3 class="pb-3 mb-4 font-italic border-bottom">
                    <?= __('From Thanh.io') ?>
                </h3>

                <?php
                    if (have_posts()) {
                        while (have_posts()) {
                            the_post();
                            get_template_part('templates/content','homepost');
                        }
                    }
                ?>
                
                <?php 
                    $args = array(
                        'screen_reader_text' => ' ',
                        'prev_text' => __( 'Newer', 'textdomain' ),
                        'next_text' => __( 'Older', 'textdomain' ),
                    );
                    the_posts_pagination($args);
                ?>

            </div><!-- /.blog-main -->
            
            <?php get_sidebar(); ?>

        </div> <!-- /.row -->
    </main> <!-- /.container -->

</div>
<?php get_footer(); ?>