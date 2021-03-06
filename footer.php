<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package siteorigin_unwind
 */

?>
		</div><!-- .container -->
	</div><!-- #content -->

	<footer id="colophon" class="site-footer <?php if( !siteorigin_setting('footer_constrained') ) echo 'unconstrained-footer' ?>" role="contentinfo">
		<div class="container">

			<?php
			if( is_active_sidebar( 'footer-sidebar' ) ) {
				$siteorigin_unwind_sidebars = wp_get_sidebars_widgets();
				?>
				<div class="widgets widgets-<?php echo count( $siteorigin_unwind_sidebars['footer-sidebar'] ) ?>" role="complementary" aria-label="<?php _e( 'Footer Sidebar', 'siteorigin-unwind' ); ?>">
					<?php dynamic_sidebar( 'footer-sidebar' ); ?>
				</div>
				<?php
			}
			?>

		</div>

		<div class="site-info">
			<div class="container">
				<?php
				siteorigin_unwind_footer_text();

				$credit_text = apply_filters(
					'siteorigin_unwind_footer_credits',
					sprintf( esc_html__( 'Crafted with love by %s.', 'siteorigin-unwind' ), '<a href="https://siteorigin.com/" rel="designer">SiteOrigin</a>' )
				);

				if( !empty($credit_text) ) {
					?>&nbsp;<?php
					echo wp_kses_post( $credit_text );
				}
				?>
			</div><!-- .container -->
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
