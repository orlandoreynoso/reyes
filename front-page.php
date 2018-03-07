<?php
/*
Template Name: coverPage Audiovisual
 */
?>
<?php get_header(); ?>
<?php  global $post; ?>
	<div class="mr_<?php echo $post->post_name;  ?> ">
		<?php if ( have_posts() ) : ?>

		<?php while ( have_posts() ) : the_post(); ?>
<?php the_post_thumbnail('full'); ?>

		<?php endwhile; ?>

		<div class="navigation"><?php if(function_exists('pagenavi')) { pagenavi(); } ?></div>

		<?php else : ?>

		<p><?php _e('Ups!, no hay entradas.'); ?></p>

		<?php endif; ?>


	</div>

<?php /*
<div class="c-slider" id="pre-slider">
	<div class="bxslider">
		<?php

			$args = array(
			'post_type' => 'slidefront',
			'orderby' => 'date',
			'order' => 'DESC',
			'posts_per_page' => -1
			);

		?>
		<?php $the_query = new WP_Query($args);  ?>
		<?php while ($the_query -> have_posts()): $the_query -> the_post() ?>
		<div><?php the_post_thumbnail('slider'); ?></div>
		<?php endwhile; wp_reset_postdata(); ?>
	</div>
</div>
*/ ?>


<?php get_footer(); ?>
