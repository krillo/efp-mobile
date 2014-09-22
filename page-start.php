<?php get_header(); ?>
<style>
	#footer-menu{
		position: initial;
	}
	#footer-menu a{
		width: 15%;
		padding: 15px 5px 0;
	}
	#container{
	  padding-bottom: 0px;
	}
	#zip{
		margin-bottom: 10px;
		width: 250px;
		text-align: center;
	}
</style>
<?php while ( have_posts() ) : the_post(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="entry-content">
			<span id="start-page-head-text"><b>Abonnera på fönsterputs</b><br/>- snabbt och enkelt!</span>
		</div><!-- .entry-content -->
	</article><!-- #post -->
<?php endwhile; ?>

<form action="<?php bloginfo('url') ?>/abonnemang/bestallning/" id="orderForm" name="orderForm" method="post" >
	<div id="zip-area">
		<input name="zip" id="zip" placeholder="Skriv ditt postnummer här" type="tel" pattern="\d*" /><br/>
		<input type="submit" class="fortsatt-submit" value="FORTSÄTT" id="zip-button">
	</div>
</form>
<div class="column_grid_8">
	<ul id="slidebx">
	<?php $slideshow = simple_fields_get_post_group_values($post->ID, "Bildspel", true, 2); ?>
	<?php $i=0; ?>
	<?php foreach($slideshow as $slide) : ?>
		<?php 
			$i++; 
			if($i == 1 || $i == 5)
			{
		?>
				<a href="http://eriksfonsterputs.se/">
				<li>
					<?php echo wp_get_attachment_image($slide["Bild"], "full"); ?>
					<!--<div class="caption"><p><?php echo $slide["Bildtext"]; ?></p></div>-->
				</li>
				</a>
		<?php
			}
			elseif($i == 2 || $i == 4)
			{
		?>
				<a href="<?php bloginfo('url')?>/abonnemang/bestallning/">
				<li>
					<?php echo wp_get_attachment_image($slide["Bild"], "full"); ?>
					<!--<div class="caption"><p><?php echo $slide["Bildtext"]; ?></p></div>-->
				</li>
				</a>
		<?php
			}
			elseif($i == 3)
			{
		?>
				<a href="https://www.facebook.com/eriksfonsterputs?fref=ts">
				<li>
					<?php echo wp_get_attachment_image($slide["Bild"], "full"); ?>
					<!--<div class="caption"><p><?php echo $slide["Bildtext"]; ?></p></div>-->
				</li>
				</a>
		<?php
			}
		?>
	<?php endforeach; ?>
	</ul>
</div>
<a href="http://eriksfonsterputs.se/?am_force_theme_layout=desktop">Till hemsida</a>
<?php get_template_part('mobile-menu'); ?>
<?php get_footer(); ?>
