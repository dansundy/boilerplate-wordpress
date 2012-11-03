<?php
/**
 * The template for displaying the footer.
 */
?>

	</div><!-- #main .site-main -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<?php	if ( ! is_404() ) 
			get_sidebar( 'footer' );
		?>
		<div class="site-info">
			<a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'WPBoiler' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'WPBoiler' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'WPBoiler' ), 'WPBoiler', '<a href="http://dsundy.com/" rel="designer">D. Sundy</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon .site-footer -->
</div><!-- #page .hfeed .site -->

<?php wp_footer(); ?>

</body>
</html>