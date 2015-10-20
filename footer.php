<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main div element.
 *
 * @package Odin
 * @since 2.2.0
 */
?>
<footer id="footer-xango" class="col-md-12">
	<div class="container">
		<div class="col-md-4 footer-logo">
			<?php if ( $image = kirki_get_option( 'footer_image' ) ) : ?>
				<img src="<?php echo esc_url( $image );?>" alt="<?php get_bloginfo( 'name' );?>">
			<?php else : ?>
				<?php $image = get_header_image();?>
				<img src="<?php echo esc_url( $image );?>" alt="<?php get_bloginfo( 'name' );?>">
			<?php endif;?>
		</div><!-- .col-md-4 footer-logo -->
		<div class="col-md-6 footer-text">
			<?php if ( $text = kirki_get_option( 'footer_text' ) ) : ?>
				<?php echo apply_filters( 'the_content', $text );?>
			<?php endif; ?>
		</div><!-- .col-md-6 footer-text -->
		<div class="col-md-2 pull-right footer-links">
			<a href="http://br.wordpress.org">
				<img src="<?php echo get_template_directory_uri();?>/assets/images/wp-org.png" alt="<?php _e( 'Made with love on WordPress.org', 'odin');?>" title="<?php _e( 'Made with love using WordPress.org', 'odin');?>" />
			</a>
			<a href="http://br.wordpress.org">
				<img src="<?php echo get_template_directory_uri();?>/assets/images/brasa-footer.png" alt="<?php _e( 'By Brasa.art.br', 'odin');?>" title="<?php _e( 'By Brasa.art.br', 'odin');?>" />
			</a>
		</div><!-- .col-md-2 pull-right footer-links -->
	</div><!-- .container -->
</footer><!-- #footer-xango.col-md-12 -->
	<?php wp_footer(); ?>
</body>
</html>
