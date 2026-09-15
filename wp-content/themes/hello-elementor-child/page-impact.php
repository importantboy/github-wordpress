<?php
/**
 * Impact page.
 *
 * @package HelloElementorChild
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header( 'charity' );

if ( gk_child_uses_elementor_document( get_queried_object_id() ) ) {
	?>
	<main class="gk-elementor-document" id="main-content">
		<?php
		while ( have_posts() ) {
			the_post();
			the_content();
		}
		?>
	</main>
	<?php
	get_footer( 'charity' );
	return;
}
?>
<main id="main-content" data-gk-page="impact">
	<section class="gk-page-hero gk-page-hero--orange">
		<div class="gk-container gk-impact-hero">
			<div class="gk-reveal">
				<p class="gk-page-kicker">Our 2030 direction</p>
				<h1>Ambition made accountable.</h1>
			</div>
			<p class="gk-page-hero__lead gk-reveal">We use long-term targets to guide partnerships, direct resources, and measure whether our work is creating opportunity at meaningful scale.</p>
		</div>
	</section>

	<section class="gk-impact-metrics" aria-label="2030 impact goals">
		<div class="gk-container gk-impact-metrics__grid">
			<article class="gk-impact-metric gk-reveal"><span>Child welfare</span><strong>1,200</strong><p>children supported annually through care and empowerment homes by 2030</p></article>
			<article class="gk-impact-metric gk-reveal"><span>Healthcare</span><strong>1 million</strong><p>people reached through preventive and primary healthcare by 2030</p></article>
			<article class="gk-impact-metric gk-reveal"><span>Education</span><strong>25,000+</strong><p>students directly benefiting from education and skills programs by 2030</p></article>
		</div>
	</section>

	<section class="gk-page-section">
		<div class="gk-container gk-impact-story">
			<div class="gk-impact-story__content gk-reveal">
				<p class="gk-eyebrow gk-eyebrow--dark">What progress looks like</p>
				<h2 class="gk-section-title">Every number represents a longer journey.</h2>
				<p>Reach matters, but meaningful impact continues after a camp, class, or relief distribution ends. We look for continuity: a patient who receives specialist care, a learner who gains useful skills, or a family that finds stability after crisis.</p>
				<p>That is why our programs combine immediate support with referral systems, monitoring, community partnerships, and clear follow-up.</p>
			</div>
			<div class="gk-impact-story__image gk-reveal">
				<img src="<?php echo esc_url( gk_child_image_url( 'cancer-screening.webp' ) ); ?>" alt="Scenes from a prostate cancer screening and awareness camp" width="1024" height="852" loading="lazy">
			</div>
		</div>
	</section>

	<section class="gk-page-section gk-page-section--cream">
		<div class="gk-container">
			<div class="gk-page-heading gk-reveal">
				<p class="gk-eyebrow gk-eyebrow--dark">Our approach</p>
				<h2 class="gk-section-title">From need to lasting outcome.</h2>
			</div>
			<ol class="gk-process">
				<li class="gk-reveal"><span>01</span><h3>Listen</h3><p>Understand the local need with communities and on-ground partners.</p></li>
				<li class="gk-reveal"><span>02</span><h3>Design</h3><p>Build a focused response with qualified experts and clear goals.</p></li>
				<li class="gk-reveal"><span>03</span><h3>Deliver</h3><p>Coordinate people and resources so support reaches priority groups.</p></li>
				<li class="gk-reveal"><span>04</span><h3>Follow up</h3><p>Document outcomes and maintain referral or recovery pathways.</p></li>
			</ol>
		</div>
	</section>

	<section class="gk-proof">
		<div class="gk-container gk-proof__grid">
			<div class="gk-proof__image gk-reveal"><img src="<?php echo esc_url( gk_child_image_url( 'community-1.webp' ) ); ?>" alt="Local newspaper coverage of the Foundation's flood relief work" width="768" height="936" loading="lazy"></div>
			<div class="gk-proof__content gk-reveal">
				<p class="gk-eyebrow">Transparency &amp; trust</p>
				<h2>Responsible growth begins with clear oversight.</h2>
				<p>The Foundation operates with a transparent governance structure, audited financial records, and oversight led by trustees and domain experts. As programs expand, this structure helps keep attention on the people and outcomes each initiative is meant to serve.</p>
				<a class="gk-button gk-button--primary" href="<?php echo esc_url( gk_child_page_url( 'about' ) ); ?>">How we work <span class="gk-arrow" aria-hidden="true">↗</span></a>
			</div>
		</div>
	</section>

	<?php get_template_part( 'template-parts/page', 'cta' ); ?>
</main>
<?php
get_footer( 'charity' );
