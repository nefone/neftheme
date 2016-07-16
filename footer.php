<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package neftheme
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="row site-footer" role="contentinfo">
		<div class="col-xs-12 site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'neftheme' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'neftheme' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'neftheme' ), 'neftheme', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</div> <!-- end container-fluid -->
</body>
</html>
