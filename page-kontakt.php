<?php get_header(); ?>
<div class="buttons-wrapper">
	<div class="call-button">
		<a href="tel:0771424242"><img src="<?php bloginfo('template_directory') ?>/img/call1.png" alt="Call Me" /><p>Ring oss!</p></a>
	</div>
	<div class="kontakt-buttons-separator"></div>
	<div class="mail-button">
		<a href="mailto:kundtjanst@eriksfonsterputs.se"><img src="<?php bloginfo('template_directory') ?>/img/email1.png" alt="Email Me" /><p>Maila oss!</p></a>
	</div>
</div>
<div class="map">
	<iframe width="100%" height="300px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" 
	src="https://maps.google.se/maps?q=Eriks+F%C3%B6nsterputs+i+Sverige+AB,+Verkstadsgatan,+H%C3%B6gan%C3%A4s&amp;hl=sv&amp;ie=UTF8&amp;
	sll=56.034988,12.72588&amp;sspn=0.155941,0.445976&amp;oq=eriks+f&amp;hq=Eriks+F%C3%B6nsterputs+i+Sverige+AB,&amp;hnear=Verkstadsgatan,
	+Norra+H%C3%B6gan%C3%A4s,+H%C3%B6gan%C3%A4s,+Sk%C3%A5ne+l%C3%A4n&amp;t=m&amp;ll=56.213114,12.56022&amp;spn=0.006295,0.01027&amp;output=embed">
	</iframe>
</div>
<?php get_template_part('mobile-menu'); ?>
<?php get_footer(); ?>
