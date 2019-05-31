<div class="blog-post">
    <h2 class="blog-post-title"> 
        <a class="text-dark" href="<?php the_permalink() ?>"> <?php esc_html_e($post->post_title) ?> </a>
    </h2>
    <p class="blog-post-meta"> 
        <?php esc_html_e(date('F j, Y', strtotime($post->post_date))); esc_html_e(__(' by')); ?>
        <a href="#"> <?= $post->post_author ?> </a>
    </p>
    <hr>
    <p>
        <?php
            echo apply_filters( 'the_content', $post->post_content );
        ?>
    </p>
</div><!-- /.blog-post -->