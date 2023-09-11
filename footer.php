<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sumun
 */

?>
</div><!-- #page .container -->

<footer id="colophon" class="site-footer">
	<div class="site-info pa-3">
		<span>
			<?php
			/* translators: %s: CMS name, i.e. WordPress. */
			printf( esc_html__( 'GRÁVALOS S.A. ©2023' ) );
			?>
		</a>
		<span class="sep"> | </span>
			<?php
			/* translators: 1: Theme name, 2: Theme author. */
			printf( esc_html__( '%1$s por %2$s.', 'sumun' ), 'Project Box', '<a href="https://sumun.net/">Sumun</a>' );
			?>
	</div><!-- .site-info -->
</footer><!-- #colophon -->


<?php wp_footer(); ?>

</body>
</html>
