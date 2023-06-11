<?php
/**
 * The template for displaying the footer of the child-theme.
 *
 * @package OceanWP WordPress child-theme
 */

?>

</main><!-- #main -->

<?php do_action( 'ocean_after_main' ); ?>
</div><!--wrap-->
<?php
	// Elementor `footer` location.
	if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'footer' ) ) {
		?>

		<?php do_action( 'ocean_footer' ); ?>

	<?php } ?>
    <?php do_action( 'ocean_after_footer' ); ?>


<?php do_action( 'ocean_after_wrap' ); ?>

	</div>
<?php do_action( 'ocean_after_outer_wrap' ); ?>
<?php wp_footer(); ?>
</body>

</html>
