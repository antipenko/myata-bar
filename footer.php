<?php
/**
 * Footer
 */
?>

<footer class="footer">
	<div class="row">
		<div class="columns medium-3 small-12 footer-adress">
			<h5 class="footer-cafe-name">
				<?php the_field('footer_name_cafe', 'option'); ?>
			</h5>
			<address class="footer-cafe-address">
				<p><?php the_field('footer_city_cafe', 'option'); ?></p>
				<p><?php the_field('footer_adress_cafe', 'option'); ?></p>
			</address>
			<a href="tel:<?php the_field('footer_phone_cafe', 'option');?> " class="footer-cafe-address">  <?php the_field('footer_phone_cafe','option'); ?> </a>
		</div>
		<div class="columns medium-3 small-12 footer-menu">
			<?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'menu_class' => 'inline-list','fallback_cb' => 'foundation_page_menu')); ?>
		</div><!-- END of .columns -->

		<div class="columns medium-3 small-12 footer-socials">
			<a href=" <?php the_field('url_vk', 'option') ?>" class='button footer-socials-vk' target="_blank">
				<i class="fa fa-vk" aria-hidden="true"></i>
			</a>
			<a href=" <?php the_field('url_instagram', 'option') ?>" class='button footer-socials-instagram' target="_blank">
				<i class="fa fa-instagram" aria-hidden="true"></i>
			</a>
			<a href=" <?php the_field('url_fb', 'option') ?>" class='button footer-socials-fb' target="_blank">
				<i class="fa fa-facebook" aria-hidden="true"></i>
			</a>
		</div>

		<div class="columns medium-3 small-12 text-center footer-copyright">
			<a href="<?php bloginfo('url'); ?>"><img src="<?php echo get_header_image(); ?>" alt="<?php bloginfo('name'); ?>"/></a>
			<p>© All Rights Reserved 2016.</p>
			<p id="antipenko"> Разработал <a href="https://goo.gl/V74V9V" target="_blank">Antipa</a> , на <a href="https://wordpress.org" target="_blank">Wordpress</a></p>
		</div>



	</div><!-- END of .row -->
</footer><!-- END of  Footer -->

<?php wp_footer(); ?>
</body>
</html>
