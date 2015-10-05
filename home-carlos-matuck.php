<?php
/**
 * Template Name: Home (modelo Carlos Matuck)
 *
 * The template for displaying pages with sidebar.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header(	'matuck' );
?>
	<?php if ( apply_filters( 'xango_carlos_matuck_show_about_home', false ) ) : ?>
		<div class="col-md-8 col-md-offset-2 about-bar carlos-matuck">
			<div class="about-bar-container">
				<?php if ( ! empty ( apply_filters( 'xango_carlos_matuck_about_home_title', null ) ) ) : ?>
					<?php $txt = apply_filters( 'xango_carlos_matuck_about_home_title', null );?>
					<h2 class="about-title"><?php echo apply_filters( 'the_title', $txt );?></h2><!-- .about-title -->
				<?php endif;?>
				<?php if ( ! empty ( apply_filters( 'xango_carlos_matuck_about_home_content', null ) ) ) : ?>
					<?php $txt = apply_filters( 'xango_carlos_matuck_about_home_content', null );?>
					<div class="col-md-12 about-content">
						<?php echo apply_filters( 'the_content', $txt );?>
					</div><!-- .col-md-12 about-content -->
				<?php endif;?>
				<div class="col-md-12 text-center about-link-container">
					<?php if ( ! empty ( apply_filters( 'xango_carlos_matuck_about_home_link', null ) ) ) : ?>
						<?php $link = apply_filters( 'xango_carlos_matuck_about_home_link', null );?>
						<?php $txt = ( ! empty ( apply_filters( 'xango_carlos_matuck_about_home_link_text', null ) ) ? apply_filters( 'xango_carlos_matuck_about_home_link_text', null )  : __( 'Read More', 'odin' ) ); ?>
						<a href="<?php echo esc_url( $link );?>" class="btn btn-primary about-more">
							<?php echo apply_filters( 'the_title', $txt );?>
						</a>
					<?php endif;?>
				</div><!-- .col-md-12 text-center -->
			</div><!-- .about-bar-container -->
		</div><!-- .col-md-12 about-bar -->
		<div class="clear"></div><!-- .clear -->
	<?php endif;?>
	<?php do_action( 'xango_carlos_matuck_after_about_home');?>

<?php
get_sidebar();
get_footer();
