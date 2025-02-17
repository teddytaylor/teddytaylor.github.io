<?php get_header(); ?>

<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
    <h1><?php the_title(); ?></h1>
    <?php the_content(); ?>
    <?php endwhile; ?>
<?php endif; ?>

<ul class="m-gallery">
    <li class="m-gallery__item"><img src="https://www.theodore3.com/wp-content/uploads/2023/03/rooting.jpg"></li>
    <li class="m-gallery__item"><img src="https://www.theodore3.com/wp-content/uploads/2024/06/DSC1388.jpg"></li>
    <li class="m-gallery__item large"><img src="https://www.theodore3.com/wp-content/uploads/2016/08/katamari.jpg"></li>
    <li class="m-gallery__item"><img src="https://www.theodore3.com/wp-content/uploads/2021/04/mikey.jpg"></li>
    <li class="m-gallery__item"><img src="https://www.theodore3.com/wp-content/uploads/2023/08/slj1.jpg"></li>
    <li class="m-gallery__item"><img src="https://www.theodore3.com/wp-content/uploads/2021/04/cloud1.png"></li>
    <li class="m-gallery__item"><img src="https://www.theodore3.com/wp-content/uploads/2023/08/bears1.jpg"></li>
    <li class="m-gallery__item"><img src="https://www.theodore3.com/wp-content/uploads/2021/04/portrait1.jpg"></li>
    <li class="m-gallery__item"><img src="https://www.theodore3.com/wp-content/uploads/2020/09/monthly1.jpg"></li>
    <li class="m-gallery__item"><img src="https://www.theodore3.com/wp-content/uploads/2023/08/visarts1.jpg"></li>
    <li class="m-gallery__item large"><img src="https://www.theodore3.com/wp-content/uploads/2023/08/outsider1-1.jpg"></li>
    <li class="m-gallery__item"><img src="https://www.theodore3.com/wp-content/uploads/2016/09/j-dilla.jpg"></li>
    <li class="m-gallery__item"><img src="https://www.theodore3.com/wp-content/uploads/2023/08/DSC_3515.jpg"></li>
    <li class="m-gallery__item"><img src="https://www.theodore3.com/wp-content/uploads/2023/08/DSCF7768.jpg"></li>   
    <li class="m-gallery__item large"><img src="https://www.theodore3.com/wp-content/uploads/2022/11/garvey.jpg"></li>
    <li class="m-gallery__item"><img src="https://www.theodore3.com/wp-content/uploads/2022/01/off-the-wall.jpg"></li>
    <li class="m-gallery__item"><img src="https://www.theodore3.com/wp-content/uploads/2023/03/rooting.jpg"></li>
    <li class="m-gallery__item"><img src="https://www.theodore3.com/wp-content/uploads/2024/06/DSC1388.jpg"></li>
    <li class="m-gallery__item"><img src="https://www.theodore3.com/wp-content/uploads/2016/08/katamari.jpg"></li>
    <li class="m-gallery__item"><img src="https://www.theodore3.com/wp-content/uploads/2021/04/mikey.jpg"></li>
    <li class="m-gallery__item"><img src="https://www.theodore3.com/wp-content/uploads/2023/08/slj1.jpg"></li>
    <li class="m-gallery__item"><img src="https://www.theodore3.com/wp-content/uploads/2021/04/cloud1.png"></li>
    <li class="m-gallery__item"><img src="https://www.theodore3.com/wp-content/uploads/2023/08/bears1.jpg"></li>
    <li class="m-gallery__item"><img src="https://www.theodore3.com/wp-content/uploads/2021/04/portrait1.jpg"></li>
    <li class="m-gallery__item"><img src="https://www.theodore3.com/wp-content/uploads/2020/09/monthly1.jpg"></li>
    <li class="m-gallery__item"><img src="https://www.theodore3.com/wp-content/uploads/2023/08/visarts1.jpg"></li>
    <li class="m-gallery__item"><img src="https://www.theodore3.com/wp-content/uploads/2023/08/outsider1-1.jpg"></li>
    <li class="m-gallery__item"><img src="https://www.theodore3.com/wp-content/uploads/2016/09/j-dilla.jpg"></li>
    <li class="m-gallery__item"><img src="https://www.theodore3.com/wp-content/uploads/2023/08/DSC_3515.jpg"></li>
    <li class="m-gallery__item"><img src="https://www.theodore3.com/wp-content/uploads/2023/08/DSCF7768.jpg"></li>   
    <li class="m-gallery__item"><img src="https://www.theodore3.com/wp-content/uploads/2022/11/garvey.jpg"></li>
    <li class="m-gallery__item"><img src="https://www.theodore3.com/wp-content/uploads/2022/01/off-the-wall.jpg"></li>
</ul>-->

<?php get_footer(); ?>