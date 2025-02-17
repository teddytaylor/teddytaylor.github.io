<li class="m-gallery__item image">
    <div class="m-gallery__links">
        <?php if (get_field('download_url')) { ?>
            <a href="<?php the_field('download_url'); ?>" class="m-gallery__download" target="_blank"></a>
        <?php } ?>
        <a href="<?php the_permalink(); ?>" class="m-gallery__permalink"></a>
    </div>
    <?php $image = wp_get_attachment_image_src(get_field('image_1'), 'full'); ?>
    <?php if (get_field('image_1')) { ?>
        <a href="<?php echo $image[0]; ?>" class="m-gallery__link">
            <?php

            $image1 = get_field('image_1');
            $size = 'work-thumb';

            if ($image1) {
                echo wp_get_attachment_image($image1, $size);
            }

            ?>
            <div class="m-gallery__tooltip">
                <h3><?php the_title(); ?></h3>
                <?php the_content(); ?>
            </div>
        </a><?php } ?>

    <?php if (get_field('image_2')) { ?>
        <a href="<?php the_field('image_2'); ?>" class="m-gallery__link"></a>
    <?php } ?>
    <?php if (get_field('image_3')) { ?>
        <a href="<?php the_field('image_3'); ?>" class="m-gallery__link"></a>
    <?php } ?>

    <?php if (get_field('image_4')) { ?>
        <a href="<?php the_field('image_4'); ?>" class="m-gallery__link"></a>
    <?php } ?>

    <?php if (get_field('image_5')) { ?>
        <a href="<?php the_field('image_5'); ?>" class="m-gallery__link"></a>
    <?php } ?>

    <?php if (get_field('image_6')) { ?>
        <a href="<?php the_field('image_6'); ?>" class="m-gallery__link"></a>
    <?php } ?>

    <?php if (get_field('image_7')) { ?>
        <a href="<?php the_field('image_7'); ?>" class="m-gallery__link"></a>
    <?php } ?>

    <?php if (get_field('image_8')) { ?>
        <a href="<?php the_field('image_8'); ?>" class="m-gallery__link"></a>
    <?php } ?>

    <?php if (get_field('image_9')) { ?>
        <a href="<?php the_field('image_9'); ?>" class="m-gallery__link"></a>
    <?php } ?>

    <?php if (get_field('image_10')) { ?>
        <a href="<?php the_field('image_10'); ?>" class="m-gallery__link"></a>
    <?php } ?>
</li>