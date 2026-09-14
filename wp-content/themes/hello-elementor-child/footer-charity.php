<?php
/**
 * Footer for the foundation website.
 *
 * @package HelloElementorChild
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<footer class="gk-site-footer">
	<div class="gk-container">
		<div class="gk-footer__grid">
			<div>
				<a class="gk-footer__brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<img src="<?php echo esc_url( gk_child_image_url( 'foundation-logo.webp' ) ); ?>" alt="" width="76" height="76" loading="lazy">
					<strong>Guru Nanak Gitaa Kailash Memorial Foundation</strong>
				</a>
				<p class="gk-footer__intro">Bridging innovation and execution with empathy across child welfare, accessible healthcare, education, and community relief.</p>
			</div>

			<div>
				<h2 class="gk-footer__heading">Explore</h2>
				<nav class="gk-footer__links" aria-label="<?php esc_attr_e( 'Footer navigation', 'hello-elementor-child' ); ?>">
					<a href="<?php echo esc_url( gk_child_page_url( 'about' ) ); ?>">About us</a>
					<a href="<?php echo esc_url( gk_child_page_url( 'our-work' ) ); ?>">Our work</a>
					<a href="<?php echo esc_url( gk_child_page_url( 'impact' ) ); ?>">2030 goals</a>
					<a href="<?php echo esc_url( gk_child_page_url( 'gallery' ) ); ?>">Gallery</a>
					<a href="<?php echo esc_url( gk_child_page_url( 'donate' ) ); ?>">Donate</a>
				</nav>
			</div>

			<div>
				<h2 class="gk-footer__heading">Visit us</h2>
				<address class="gk-footer__address">H.No. 239, Omaxe, Phase-1<br>New Chandigarh – 140603<br>India</address>
			</div>
		</div>

		<div class="gk-footer__bottom">
			<span>&copy; <?php echo esc_html( wp_date( 'Y' ) ); ?> Guru Nanak Gitaa Kailash Memorial Foundation.</span>
			<span>Service · Dignity · Opportunity</span>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
