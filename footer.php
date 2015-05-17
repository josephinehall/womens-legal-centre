<?php
/**
 * The template for displaying the footer.
 *
 * @package Sela
 */
?>

	</div><!-- #content -->

	<?php get_sidebar( 'footer' ); ?>

	<footer id="colophon" class="site-footer">
		<?php if ( has_nav_menu ( 'social' ) ) : ?>
			<?php wp_nav_menu( array( 'theme_location' => 'social', 'depth' => 1, 'link_before' => '<span class="screen-reader-text">', 'link_after' => '</span>', 'container_class' => 'social-links', ) ); ?>
		<?php endif; ?>

		<div class="site-info"  role="contentinfo">
			&copy; Copyright 2011 Women's Legal Centre (ACT and Region) Incorporated
			<span class="sep"> | </span>
			<a href="/privacy">Privacy policy</a>
			<p>The Women’s Legal Centre is funded by the Social Inclusion Division, Commonwealth Attorney General’s Department.</p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
