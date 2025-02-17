<?php get_header(); ?>
<section class="c-content o-grid">
	<ul class="m-gallery single">

		<li class="m-gallery__item info">
			<div class="m-gallery__info">
				<h2><?php the_title(); ?></h2><?php the_content(); ?>
			</div>
		</li>


		<?php if (get_field('image_1')) { ?>
			<?php $image = wp_get_attachment_image_src(get_field('image_1'), 'full'); ?>
			<li class="m-gallery__item"><a href="<?php echo $image[0]; ?>" class="m-gallery__link"><img src="<?php echo $image[0]; ?>"></a></li>
		<?php } ?>

		<?php if (get_field('image_2')) { ?>
			<li class="m-gallery__item"><a href="<?php the_field('image_2'); ?>" class="m-gallery__link"><img src="<?php the_field('image_2'); ?>"></a></li>
		<?php } ?>

		<?php if (get_field('image_3')) { ?>
			<li class="m-gallery__item"><a href="<?php the_field('image_3'); ?>" class="m-gallery__link"><img src="<?php the_field('image_3'); ?>"></a></li>
		<?php } ?>

		<?php if (get_field('image_4')) { ?>
			<li class="m-gallery__item"><a href="<?php the_field('image_4'); ?>" class="m-gallery__link"><img src="<?php the_field('image_4'); ?>"></a></li>
		<?php } ?>

		<?php if (get_field('image_5')) { ?>
			<li class="m-gallery__item"><a href="<?php the_field('image_5'); ?>" class="m-gallery__link"><img src="<?php the_field('image_5'); ?>"></a></li>
		<?php } ?>

		<?php if (get_field('image_6')) { ?>
			<li class="m-gallery__item"><a href="<?php the_field('image_6'); ?>" class="m-gallery__link"><img src="<?php the_field('image_6'); ?>"></a></li>
		<?php } ?>

		<?php if (get_field('image_7')) { ?>
			<li class="m-gallery__item"><a href="<?php the_field('image_7'); ?>" class="m-gallery__link"><img src="<?php the_field('image_7'); ?>"></a></li>
		<?php } ?>

		<?php if (get_field('image_8')) { ?>
			<li class="m-gallery__item"><a href="<?php the_field('image_8'); ?>" class="m-gallery__link"><img src="<?php the_field('image_8'); ?>"></a></li>
		<?php } ?>

		<?php if (get_field('image_9')) { ?>
			<li class="m-gallery__item"><a href="<?php the_field('image_9'); ?>" class="m-gallery__link"><img src="<?php the_field('image_9'); ?>"></a></li>
		<?php } ?>

		<?php if (get_field('image_10')) { ?>
			<li class="m-gallery__item"><a href="<?php the_field('image_10'); ?>" class="m-gallery__link"><img src="<?php the_field('image_10'); ?>"></a></li>
		<?php } ?>

		<li class="m-gallery__sizer m-gallery__item"></li>
	</ul>
</section>


<?php get_footer(); ?>