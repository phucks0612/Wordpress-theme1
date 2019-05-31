<?php get_header();?>
<div class="container">

    <?php get_template_part('templates/content','header'); ?>

    <?php 
        if (have_posts()) {
            the_post();
            ?>
            <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
                <div class="col-md-6 px-0">
                    <h1 class="display-4 font-italic"> <?php esc_html_e($post->post_title) ?> </h1>
                    <p class="lead my-3"> <?php echo the_excerpt($post) ?> </p>
                    <p class="lead mb-0"><a href="<?php the_permalink() ?>" class="text-white font-weight-bold"> <?= __('Continue reading....')?></a></p>
                </div>
            </div>
            <?php
        }
    ?>


    <div class="row mb-2">
        <?php
            if (have_posts()) {
                the_post();
                ?>
                <div class="col-md-6">
                    <div class="card flex-md-row mb-4 box-shadow h-md-250">
                        <div class="card-body d-flex flex-column align-items-start">
                            <h3 class="mb-0">
                                <a class="text-dark" href="<?php the_permalink() ?>"> <?php esc_html_e($post->post_title) ?> </a>
                            </h3>
                            <div class="mb-1 text-muted"> <?php esc_html_e(date('M y', strtotime($post->post_date))) ?> </div>
                            <p class="card-text mb-auto"> <?php echo the_excerpt($post) ?> </p>
                            <a href="<?php the_permalink() ?>"> <?= __('Continue reading') ?> </a>
                        </div>
                        <img class="card-img-right flex-auto d-none d-md-block" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22200%22%20height%3D%22250%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20200%20250%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_16b01802fa1%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A13pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_16b01802fa1%22%3E%3Crect%20width%3D%22200%22%20height%3D%22250%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2256.203125%22%20y%3D%22130.7%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Card image cap">
                    </div>
                </div>
                <?php
            }
        ?>
        <?php
            if (have_posts()) {
                the_post();
                ?>
                <div class="col-md-6">
                    <div class="card flex-md-row mb-4 box-shadow h-md-250">
                        <div class="card-body d-flex flex-column align-items-start">
                            <h3 class="mb-0">
                                <a class="text-dark" href="<?php the_permalink() ?>"> <?php esc_html_e($post->post_title) ?> </a>
                            </h3>
                            <div class="mb-1 text-muted"> <?php esc_html_e(date('M y', strtotime($post->post_date))) ?> </div>
                            <p class="card-text mb-auto"> <?php echo the_excerpt($post) ?> </p>
                            <a href="<?php the_permalink() ?>"> <?= __('Continue reading') ?> </a>
                        </div>
                        <img class="card-img-right flex-auto d-none d-md-block" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22200%22%20height%3D%22250%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20200%20250%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_16b01802fa1%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A13pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_16b01802fa1%22%3E%3Crect%20width%3D%22200%22%20height%3D%22250%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2256.203125%22%20y%3D%22130.7%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Card image cap">
                    </div>
                </div>
                <?php
            }
        ?>
    </div>


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

<?php get_footer();?>