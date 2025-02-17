<li class="m-gallery__item product">
<?php edit_post_link(); ?>

    <a href="<?php the_field('product_url'); ?>" class="c-gallery__link" target="_blank">
        <?php the_post_thumbnail(); ?>
        <div class="c-gallery__tooltip">
            <h3><?php the_title(); ?></h3>
            <?php the_content(); ?>
        </div>
    </a>
</li>