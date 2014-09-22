<?php get_header("3-links");?>
<h1>Villkor</h1>
<?php get_template_part('price-terms-rut-links'); ?>
<?php while ( have_posts() ) : the_post(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="entry-content">
			<?php the_content(); ?>
		</div><!-- .entry-content -->
	</article><!-- #post -->
<?php endwhile; ?>
<nav id="footer-menu" role="price-terms-rut-navigation">
	<a href="javascript:window.close();" id="price" style="width: 35%;">Tillbaka</a>
</nav>
<?php get_footer(); ?>
