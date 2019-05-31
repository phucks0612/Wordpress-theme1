<aside class="col-md-4 blog-sidebar">
    <div class="p-3 mb-3 bg-light rounded">
        <h4 class="font-italic"> <?= __('About') ?></h4>
        <p class="mb-0">
            <em>
                <?= __('Thanh.io') ?>
            </em>
        </p>
    </div>

    <div class="p-3">
        <h4 class="font-italic"> <?= __('Archives') ?> </h4>
        <ul>
            <?php wp_get_archives('type=monthly'); ?>
        </ul>
    </div>

    <div class="p-3">
        <h4 class="font-italic"><?= __('Elsewhere') ?> </h4>
        <ol class="list-unstyled">
        <li><a href="https://github.com/phucks0612"> <?= __('GitHub') ?> </a></li>
        <li><a href="https://twitter.com/?lang=en"> <?= __('Twitter') ?> </a></li>
        <li><a href="https://www.facebook.com/"> <?= __('Facebook') ?> </a></li>
        </ol>
    </div>
</aside> <!-- /.blog-sidebar -->