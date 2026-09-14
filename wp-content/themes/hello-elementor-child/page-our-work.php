<?php
/**
 * Programs page.
 *
 * @package HelloElementorChild
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header( 'charity' );
?>
<main id="main-content" data-gk-page="our-work">
	<section class="gk-page-hero">
		<div class="gk-container gk-page-hero__grid">
			<div class="gk-page-hero__content gk-reveal">
				<p class="gk-page-kicker">Our work</p>
				<h1>Practical programs for stronger communities.</h1>
				<p class="gk-page-hero__lead">We focus on the foundations of a secure future: a safe childhood, accessible healthcare, relevant education, and support during crisis.</p>
			</div>
			<div class="gk-page-hero__media gk-page-hero__media--soft gk-reveal">
				<img src="<?php echo esc_url( gk_child_image_url( 'education-skills.webp' ) ); ?>" alt="Students learning digital and practical skills in a classroom" width="1024" height="768" fetchpriority="high">
				<span class="gk-page-hero__media-label">Opportunity changes everything.</span>
			</div>
		</div>
	</section>

	<nav class="gk-program-jump" aria-label="Program sections">
		<div class="gk-container gk-program-jump__inner">
			<span>Explore programs</span>
			<a href="#child-welfare">Child welfare</a>
			<a href="#healthcare">Healthcare</a>
			<a href="#education">Education</a>
			<a href="#relief">Relief</a>
		</div>
	</nav>

	<section class="gk-program-detail" id="child-welfare">
		<div class="gk-container gk-program-detail__grid">
			<div class="gk-program-detail__image gk-reveal">
				<img src="<?php echo esc_url( gk_child_image_url( 'child-welfare.webp' ) ); ?>" alt="Children holding hands during a group activity" width="768" height="576" loading="lazy">
				<span class="gk-program-detail__number">01</span>
			</div>
			<div class="gk-program-detail__content gk-reveal">
				<p class="gk-eyebrow gk-eyebrow--dark">Child welfare</p>
				<h2>Safety today. Independence tomorrow.</h2>
				<p>Children’s Care and Empowerment Homes are planned to support orphaned and abandoned children through stable accommodation and a consistent circle of care.</p>
				<ul class="gk-check-list">
					<li>Safe housing and regular monitoring</li>
					<li>Education support and healthcare access</li>
					<li>Life skills and pathways to employment</li>
					<li>Preparation for an independent, dignified adulthood</li>
				</ul>
				<a class="gk-text-link" href="<?php echo esc_url( gk_child_page_url( 'impact' ) ); ?>">View our 2030 goal <span aria-hidden="true">→</span></a>
			</div>
		</div>
	</section>

	<section class="gk-program-detail gk-program-detail--cream" id="healthcare">
		<div class="gk-container gk-program-detail__grid gk-program-detail__grid--reverse">
			<div class="gk-program-detail__image gk-reveal">
				<img src="<?php echo esc_url( gk_child_image_url( 'healthcare-camp.webp' ) ); ?>" alt="A foundation preventive health camp serving a local community" width="768" height="576" loading="lazy">
				<span class="gk-program-detail__number">02</span>
			</div>
			<div class="gk-program-detail__content gk-reveal">
				<p class="gk-eyebrow gk-eyebrow--dark">Accessible healthcare</p>
				<h2>Earlier care, closer to home.</h2>
				<p>Community clinics, mobile units, screenings, and institutional partnerships help people receive preventive care and reach specialists before a condition becomes harder to treat.</p>
				<ul class="gk-check-list">
					<li>Maternal and child health support</li>
					<li>Preventive screenings and mental healthcare</li>
					<li>Financial assistance for critical treatment</li>
					<li>Documented referrals and clinical follow-up</li>
				</ul>
				<a class="gk-text-link" href="<?php echo esc_url( gk_child_page_url( 'gallery' ) ); ?>">See the work in action <span aria-hidden="true">→</span></a>
			</div>
		</div>
	</section>

	<section class="gk-program-detail" id="education">
		<div class="gk-container gk-program-detail__grid">
			<div class="gk-program-detail__image gk-reveal">
				<img src="<?php echo esc_url( gk_child_image_url( 'education-skills.webp' ) ); ?>" alt="Students working with computers and practical learning tools" width="1024" height="768" loading="lazy">
				<span class="gk-program-detail__number">03</span>
			</div>
			<div class="gk-program-detail__content gk-reveal">
				<p class="gk-eyebrow gk-eyebrow--dark">Education &amp; skills</p>
				<h2>Learning that opens real doors.</h2>
				<p>We help young learners gain the academic support, tools, and practical skills needed to participate confidently in a changing world.</p>
				<ul class="gk-check-list">
					<li>Digital learning and STEM training</li>
					<li>Scholarship assistance for young learners</li>
					<li>School improvement partnerships</li>
					<li>Future-ready academic and career skills</li>
				</ul>
				<a class="gk-text-link" href="<?php echo esc_url( gk_child_page_url( 'impact' ) ); ?>">View our 2030 goal <span aria-hidden="true">→</span></a>
			</div>
		</div>
	</section>

	<section class="gk-program-detail gk-program-detail--dark" id="relief">
		<div class="gk-container gk-program-detail__grid gk-program-detail__grid--reverse">
			<div class="gk-program-detail__image gk-reveal">
				<img src="<?php echo esc_url( gk_child_image_url( 'flood-relief.webp' ) ); ?>" alt="Food, water, medicine, and supplies prepared for flood-affected families" width="1024" height="852" loading="lazy">
				<span class="gk-program-detail__number">04</span>
			</div>
			<div class="gk-program-detail__content gk-reveal">
				<p class="gk-eyebrow">Humanitarian relief</p>
				<h2>Fast support when families face crisis.</h2>
				<p>During floods affecting Punjab and Himachal Pradesh, the Foundation coordinated with local bodies and volunteers to deliver essential supplies and recovery support in high-impact locations.</p>
				<ul class="gk-check-list">
					<li>Dry food, clean water, clothing, and hygiene supplies</li>
					<li>Priority assistance for children, women, and older people</li>
					<li>Support for medical needs and community recovery</li>
					<li>Follow-up with selected families after immediate relief</li>
				</ul>
			</div>
		</div>
	</section>

	<?php get_template_part( 'template-parts/page', 'cta' ); ?>
</main>
<?php
get_footer( 'charity' );
