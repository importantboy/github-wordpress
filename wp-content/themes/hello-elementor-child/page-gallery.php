<?php
/**
 * Gallery page.
 *
 * @package HelloElementorChild
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header( 'charity' );
?>
<main id="main-content" data-gk-page="gallery">
	<section class="gk-page-hero gk-page-hero--gallery">
		<div class="gk-container gk-gallery-hero">
			<div class="gk-gallery-hero__content gk-reveal">
				<p class="gk-page-kicker">Gallery</p>
				<h1>Service is a story told through people.</h1>
				<p class="gk-page-hero__lead">A growing record of health outreach, emergency relief, learning, partnership, and moments shared with the communities we serve.</p>
			</div>
			<div class="gk-gallery-hero__collage gk-reveal">
				<img src="<?php echo esc_url( gk_child_image_url( 'healthcare-camp.webp' ) ); ?>" alt="A busy foundation healthcare camp" width="768" height="576" fetchpriority="high">
				<img src="<?php echo esc_url( gk_child_image_url( 'child-welfare.webp' ) ); ?>" alt="Children joining hands outdoors" width="768" height="576">
			</div>
		</div>
	</section>

	<section class="gk-page-section gk-page-section--cream">
		<div class="gk-container">
			<div class="gk-gallery-page-grid">
				<figure class="gk-gallery-page-item gk-gallery-page-item--wide gk-reveal"><img src="<?php echo esc_url( gk_child_image_url( 'medical-outreach.webp' ) ); ?>" alt="Doctors consulting with community members during medical outreach" width="1024" height="852" loading="lazy"><figcaption>Community medical outreach</figcaption></figure>
				<figure class="gk-gallery-page-item gk-reveal"><img src="<?php echo esc_url( gk_child_image_url( 'cancer-screening.webp' ) ); ?>" alt="A prostate cancer screening and awareness camp" width="1024" height="852" loading="lazy"><figcaption>Preventive health and early detection</figcaption></figure>
				<figure class="gk-gallery-page-item gk-reveal"><img src="<?php echo esc_url( gk_child_image_url( 'community-3.webp' ) ); ?>" alt="Foundation representatives at a community health program" width="768" height="936" loading="lazy"><figcaption>Working with trusted local partners</figcaption></figure>
				<figure class="gk-gallery-page-item gk-gallery-page-item--tall gk-reveal"><img src="<?php echo esc_url( gk_child_image_url( 'community-2.webp' ) ); ?>" alt="Newspaper report about flood relief provided by the Foundation" width="768" height="936" loading="lazy"><figcaption>Relief work documented in local media</figcaption></figure>
				<figure class="gk-gallery-page-item gk-gallery-page-item--wide gk-reveal"><img src="<?php echo esc_url( gk_child_image_url( 'flood-relief.webp' ) ); ?>" alt="Relief supplies prepared for families affected by flooding" width="1024" height="852" loading="lazy"><figcaption>Essential supplies for flood-affected families</figcaption></figure>
				<figure class="gk-gallery-page-item gk-reveal"><img src="<?php echo esc_url( gk_child_image_url( 'education-skills.webp' ) ); ?>" alt="Students developing digital and practical skills" width="1024" height="768" loading="lazy"><figcaption>Digital learning and future-ready skills</figcaption></figure>
				<figure class="gk-gallery-page-item gk-reveal"><img src="<?php echo esc_url( gk_child_image_url( 'community-1.webp' ) ); ?>" alt="Newspaper coverage of a Foundation relief initiative" width="768" height="936" loading="lazy"><figcaption>Community action recognised in the press</figcaption></figure>
			</div>
		</div>
	</section>

	<?php get_template_part( 'template-parts/page', 'cta' ); ?>
</main>
<?php
get_footer( 'charity' );
