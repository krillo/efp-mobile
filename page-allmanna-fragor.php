<?php get_header(); ?>
<div class="main-wrapper">
	<?php while ( have_posts() ) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="entry-content">
				<?php the_content(); ?>
			</div><!-- .entry-content -->
		</article><!-- #post -->
	<?php endwhile; ?>
	<div class="main-bottom-menu">
		<?php get_template_part('mobile-menu'); ?>
	</div>
</div>
	<?php get_footer(); ?>