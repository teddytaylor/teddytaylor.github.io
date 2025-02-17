<?php get_header(); ?>

	<ul class="m-gallery">
		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
				<?php get_template_part('/template-parts/gallery-thumb', get_post_format()); ?>
			<?php endwhile; ?>
		<?php endif; ?>
	</ul>

<?php get_footer(); ?>