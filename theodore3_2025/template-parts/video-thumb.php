<li class="m-gallery__item video">
    <?php edit_post_link(); ?>
    <a href="<?php the_field('video'); ?>" class="c-gallery__link">
        <?php the_post_thumbnail('video-thumb'); ?>
        <div class="c-gallery__tooltip">
            <h3><?php the_title(); ?></h3>
            <?php the_content(); ?>
        </div>
    </a>
</li>