<?php
/**
 * Shared call to action for internal pages.
 *
 * @package HelloElementorChild
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<section class="gk-page-cta">
	<div class="gk-container gk-page-cta__inner gk-reveal">
		<div>
			<p class="gk-eyebrow">Stand with a community</p>
			<h2>Help turn care into a path forward.</h2>
		</div>
		<a class="gk-button gk-button--light" href="<?php echo esc_url( gk_child_page_url( 'donate' ) ); ?>">Support the work <span class="gk-arrow" aria-hidden="true">↗</span></a>
	</div>
</section>
