<?php
/**
 * About page.
 *
 * @package HelloElementorChild
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header( 'charity' );
?>
<main id="main-content" data-gk-page="about">
	<section class="gk-page-hero gk-page-hero--dark">
		<div class="gk-container gk-page-hero__grid">
			<div class="gk-page-hero__content gk-reveal">
				<p class="gk-page-kicker">About the Foundation</p>
				<h1>A legacy of faith. A future built through service.</h1>
				<p class="gk-page-hero__lead">We exist to protect dignity, expand opportunity, and turn compassion into practical action for communities across North India.</p>
			</div>
			<div class="gk-page-hero__media gk-reveal">
				<img src="<?php echo esc_url( gk_child_image_url( 'medical-outreach.webp' ) ); ?>" alt="Foundation doctors speaking with community members at a health camp" width="1024" height="852" fetchpriority="high">
				<span class="gk-page-hero__media-label">People first, always.</span>
			</div>
		</div>
	</section>

	<section class="gk-page-section">
		<div class="gk-container gk-about-intro">
			<div class="gk-reveal">
				<p class="gk-eyebrow gk-eyebrow--dark">Why we began</p>
				<h2 class="gk-section-title">Continuing a life of care and human dignity.</h2>
			</div>
			<div class="gk-prose gk-reveal">
				<p>Guru Nanak Gitaa Kailash Memorial Foundation draws inspiration from Guru Nanak Dev Ji’s values and from the life of Gitaa Kailash, who believed deeply in educational opportunity and the dignity of every person.</p>
				<p>The Foundation was formed to carry that legacy into structured, measurable programs. We bring together trustees, healthcare professionals, educators, development experts, volunteers, and local partners to respond where needs are urgent and systems face constraints.</p>
				<p>Our purpose is simple: listen carefully, act responsibly, and stay involved long enough for support to become lasting progress.</p>
			</div>
		</div>
	</section>

	<section class="gk-page-section gk-page-section--cream">
		<div class="gk-container">
			<div class="gk-page-heading gk-reveal">
				<p class="gk-eyebrow gk-eyebrow--dark">What guides us</p>
				<h2 class="gk-section-title">Values that shape every decision.</h2>
			</div>
			<div class="gk-value-grid">
				<article class="gk-value-card gk-reveal"><span>01</span><h3>Seva</h3><p>Service offered with humility and without discrimination.</p></article>
				<article class="gk-value-card gk-reveal"><span>02</span><h3>Dignity</h3><p>People remain active participants in every path we help create.</p></article>
				<article class="gk-value-card gk-reveal"><span>03</span><h3>Stewardship</h3><p>Resources are handled with care, oversight, and clear intent.</p></article>
				<article class="gk-value-card gk-reveal"><span>04</span><h3>Follow-through</h3><p>Our responsibility continues beyond the first intervention.</p></article>
			</div>
		</div>
	</section>

	<section class="gk-page-section">
		<div class="gk-container gk-governance">
			<div class="gk-governance__image gk-reveal">
				<img src="<?php echo esc_url( gk_child_image_url( 'community-3.webp' ) ); ?>" alt="Foundation representatives and medical professionals at a community program" width="768" height="936" loading="lazy">
			</div>
			<div class="gk-governance__content gk-reveal">
				<p class="gk-eyebrow gk-eyebrow--dark">Responsible by design</p>
				<h2 class="gk-section-title">Trust is built into how we work.</h2>
				<p>Registered as a non-profit charitable trust under applicable Indian law, the Foundation operates with a defined governance structure, audited financial records, and oversight from trustees and domain experts.</p>
				<ul class="gk-check-list">
					<li>Programs shaped with qualified healthcare and education partners</li>
					<li>Clear goals and ongoing follow-up for every initiative</li>
					<li>Community coordination that helps resources reach priority needs</li>
					<li>Long-term planning across Punjab, Haryana, and Himachal Pradesh</li>
				</ul>
			</div>
		</div>
	</section>

	<?php get_template_part( 'template-parts/page', 'cta' ); ?>
</main>
<?php
get_footer( 'charity' );
