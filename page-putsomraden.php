<?php get_header(); ?>
<style>
	#footer-menu{
		position: initial;
		margin: 0px;
	}

	#container{
		padding: 0px;
	}
	.putsar-text span a {
		display: inline-block;
		height: 17px;
		padding: 6px 10px 0;
		background: url('img/bg/input-submit-mobile-small.png') no-repeat;
		border-radius: 4px;
		color: #fff;
		font-size: 11px;
		text-decoration: none;
	}
</style>
<script type="text/javascript">
	$( document ).ready(function() {
		var winWid = $(window).width();
		var height = (winWid * 0.73).toFixed(0) + 'px';
		//alert(winWid);
		//alert(height);
		$('.putsar-image').css('height',height);
	});
</script>
<div class="putsar-image-and-text" style="margin-bottom: 30px;">
	<div class="putsar-image">
		<div class="putsar-text">
			<span>
				Eriks Fönsterputs grundades 1997.<br />
				Idag är vi Sveriges största leverantör av utvändig fönsterputs i abonnemangsform och etablerade i ett 50-tal kommuner.<br/>
				Våra kunder är i första hand villaägare.<br/>
				Vi underlättar tillvaron för tusentals hushåll.<br/>
			</span>
			<span>
				<a href="<?php bloginfo('url') ?>/putsomraden/omradeslista/">
					<button class="putsomraden-button">FORTSATT</button>
				</a>
			</span>
		</div>
	</div>
</div>
<?php get_template_part('mobile-menu'); ?>
<?php get_footer(); ?>
