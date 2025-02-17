<li class="m-gallery__item download">
<?php edit_post_link(); ?>
    <?php if (get_field('download_url')) { ?>
        <a href="<?php the_field('download_url'); ?>" class="c-gallery__link" target="__blank">
        <?php the_post_thumbnail(); ?>
        <div class="c-gallery__tooltip">
            <h3><?php the_title(); ?></h3>
            <?php the_content(); ?>
        </div>
    </a>
    <?php } ?>
    
    
</li> 