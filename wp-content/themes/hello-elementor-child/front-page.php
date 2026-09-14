<?php
/**
 * Foundation homepage.
 *
 * @package HelloElementorChild
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header( 'charity' );
?>
<main id="main-content" data-gk-site="foundation-redesign-v1">
	<section class="gk-hero" aria-labelledby="gk-hero-title">
		<div class="gk-container gk-hero__grid">
			<div class="gk-hero__content gk-reveal">
				<p class="gk-eyebrow">Seva · Dignity · Lasting change</p>
				<h1 class="gk-display" id="gk-hero-title">Where care becomes a <em>path forward.</em></h1>
				<p class="gk-hero__lead">We bring practical support, trusted partnerships, and human compassion to communities across North India—so every child, student, and family can move forward with dignity.</p>
				<div class="gk-actions">
					<a class="gk-button gk-button--primary" href="<?php echo esc_url( gk_child_page_url( 'our-work' ) ); ?>">Explore our work <span class="gk-arrow" aria-hidden="true">↗</span></a>
					<a class="gk-button gk-button--ghost" href="<?php echo esc_url( gk_child_page_url( 'donate' ) ); ?>">Support a cause</a>
				</div>
			</div>

			<div class="gk-hero__visual gk-reveal" aria-label="Foundation healthcare and child welfare initiatives">
				<div class="gk-hero__main-image">
					<img src="<?php echo esc_url( gk_child_image_url( 'healthcare-camp.webp' ) ); ?>" alt="Community members receiving care at a foundation health camp" width="768" height="576" fetchpriority="high">
				</div>
				<div class="gk-hero__small-image">
					<img src="<?php echo esc_url( gk_child_image_url( 'child-welfare.webp' ) ); ?>" alt="Children holding hands outdoors" width="768" height="576">
				</div>
				<div class="gk-hero__badge" aria-label="Working toward 2030">
					<div><strong>2030</strong><span>Our shared horizon</span></div>
				</div>
			</div>
		</div>
	</section>

	<div class="gk-trust-strip" aria-label="Foundation 2030 goals">
		<div class="gk-container gk-trust-strip__inner">
			<div class="gk-trust-strip__intro">Ambitious goals.<br>Accountable action.</div>
			<div class="gk-trust-stat"><div><strong>1,200</strong><span>Children supported annually</span></div></div>
			<div class="gk-trust-stat"><div><strong>25,000+</strong><span>Students reached</span></div></div>
			<div class="gk-trust-stat"><div><strong>1M</strong><span>People in healthcare outreach</span></div></div>
		</div>
	</div>

	<section class="gk-section" id="about" aria-labelledby="gk-about-title">
		<div class="gk-container gk-story">
			<div class="gk-story__visual gk-reveal">
				<img src="<?php echo esc_url( gk_child_image_url( 'community-1.webp' ) ); ?>" alt="A moment from a foundation community initiative" width="768" height="936" loading="lazy">
			</div>
			<div class="gk-story__content gk-reveal">
				<p class="gk-eyebrow gk-eyebrow--dark">Our story</p>
				<h2 class="gk-section-title" id="gk-about-title">A legacy of service, designed for today.</h2>
				<p>Inspired by Guru Nanak Dev Ji’s values and the life of Gitaa Kailash, the Foundation carries forward a belief that every person deserves opportunity, care, and human dignity.</p>
				<p>As a registered non-profit charitable trust, we connect qualified experts, community partners, and focused resources to areas where public systems face scale and administrative constraints.</p>
				<div class="gk-belief">
					<span class="gk-belief__icon" aria-hidden="true">✦</span>
					<div><strong>Empathy with execution</strong><span>We pair care with clear goals, responsible governance, and practical follow-through.</span></div>
				</div>
			</div>
		</div>
	</section>

	<section class="gk-section gk-section--cream" id="work" aria-labelledby="gk-work-title">
		<div class="gk-container">
			<div class="gk-section-heading gk-reveal">
				<div>
					<p class="gk-eyebrow gk-eyebrow--dark">How we serve</p>
					<h2 class="gk-section-title" id="gk-work-title">Three commitments. One shared future.</h2>
				</div>
				<p class="gk-section-copy">Our programs are built around the needs that shape a person’s future: a safe childhood, accessible care, and an education that opens doors.</p>
			</div>

			<div class="gk-programs">
				<article class="gk-program-card gk-reveal">
					<div class="gk-program-card__image">
						<span class="gk-program-card__number">01</span>
						<img src="<?php echo esc_url( gk_child_image_url( 'child-welfare.webp' ) ); ?>" alt="Children taking part in a group activity" width="768" height="576" loading="lazy">
					</div>
					<div class="gk-program-card__body">
						<h3>Child welfare</h3>
						<p>Safe accommodation, regular education, healthcare, skill development, and preparation for an independent, dignified adulthood.</p>
						<a class="gk-program-card__link" href="<?php echo esc_url( gk_child_page_url( 'our-work' ) ); ?>#child-welfare">Explore the program <span aria-hidden="true">→</span></a>
					</div>
				</article>

				<article class="gk-program-card gk-reveal">
					<div class="gk-program-card__image">
						<span class="gk-program-card__number">02</span>
						<img src="<?php echo esc_url( gk_child_image_url( 'healthcare-camp.webp' ) ); ?>" alt="A busy preventive healthcare camp serving local families" width="768" height="576" loading="lazy">
					</div>
					<div class="gk-program-card__body">
						<h3>Accessible healthcare</h3>
						<p>Preventive screenings, primary care, maternal and child health, mental health support, and pathways to specialist treatment.</p>
						<a class="gk-program-card__link" href="<?php echo esc_url( gk_child_page_url( 'our-work' ) ); ?>#healthcare">Explore the program <span aria-hidden="true">→</span></a>
					</div>
				</article>

				<article class="gk-program-card gk-reveal">
					<div class="gk-program-card__image">
						<span class="gk-program-card__number">03</span>
						<img src="<?php echo esc_url( gk_child_image_url( 'education-skills.webp' ) ); ?>" alt="Students learning digital and practical skills in a classroom" width="1024" height="768" loading="lazy">
					</div>
					<div class="gk-program-card__body">
						<h3>Education &amp; skills</h3>
						<p>Digital learning, STEM training, scholarships, school partnerships, and structured academic support for future-ready students.</p>
						<a class="gk-program-card__link" href="<?php echo esc_url( gk_child_page_url( 'our-work' ) ); ?>#education">Explore the program <span aria-hidden="true">→</span></a>
					</div>
				</article>
			</div>
		</div>
	</section>

	<section class="gk-goals" id="impact" aria-labelledby="gk-goals-title">
		<div class="gk-container">
			<div class="gk-goals__top gk-reveal">
				<div>
					<p class="gk-eyebrow">Our 2030 goals</p>
					<h2 class="gk-section-title" id="gk-goals-title">Progress measured in lives empowered.</h2>
				</div>
				<p class="gk-goals__copy">We have set clear long-term targets to guide expansion, strengthen partnerships, and keep every initiative accountable to the people it serves.</p>
			</div>
			<div class="gk-goal-grid gk-reveal">
				<div class="gk-goal"><strong>1,200</strong><span>Children supported each year through care and empowerment homes</span></div>
				<div class="gk-goal"><strong>1 million</strong><span>People reached through preventive and primary healthcare</span></div>
				<div class="gk-goal"><strong>25,000+</strong><span>Students directly benefiting from education and skills programs</span></div>
			</div>
		</div>
	</section>

	<section class="gk-section" id="stories" aria-labelledby="gk-stories-title">
		<div class="gk-container">
			<div class="gk-section-heading gk-reveal">
				<div>
					<p class="gk-eyebrow gk-eyebrow--dark">From the field</p>
					<h2 class="gk-section-title" id="gk-stories-title">Care that reaches people where they are.</h2>
				</div>
				<p class="gk-section-copy">Community-led action allows us to respond quickly, work alongside trusted local institutions, and stay connected after the first intervention.</p>
			</div>

			<div class="gk-field-grid">
				<article class="gk-field-card gk-reveal">
					<img src="<?php echo esc_url( gk_child_image_url( 'cancer-screening.webp' ) ); ?>" alt="Scenes from a prostate cancer screening and awareness camp" width="1024" height="852" loading="lazy">
					<div class="gk-field-card__content">
						<span class="gk-field-card__tag">Preventive health</span>
						<h3>Earlier detection, better pathways</h3>
						<p>Prostate cancer screening helps at-risk men access PSA testing, clinical evaluation, and specialist referrals when needed.</p>
					</div>
				</article>

				<article class="gk-field-card gk-reveal">
					<img src="<?php echo esc_url( gk_child_image_url( 'flood-relief.webp' ) ); ?>" alt="Foundation volunteers arranging food, water, and supplies for flood relief" width="1024" height="852" loading="lazy">
					<div class="gk-field-card__content">
						<span class="gk-field-card__tag">Emergency response</span>
						<h3>Relief when every hour matters</h3>
						<p>Flood-affected families in Punjab and Himachal Pradesh received food, water, clothing, hygiene supplies, and recovery support.</p>
					</div>
				</article>

				<article class="gk-field-card gk-reveal">
					<img src="<?php echo esc_url( gk_child_image_url( 'medical-outreach.webp' ) ); ?>" alt="Doctors consulting with community members during a medical outreach program" width="1024" height="852" loading="lazy">
					<div class="gk-field-card__content">
						<span class="gk-field-card__tag">Community care</span>
						<h3>Screening with follow-through</h3>
						<p>Outreach screenings connect underserved communities with diagnosis, treatment support, and ongoing clinical follow-up.</p>
					</div>
				</article>
			</div>
		</div>
	</section>

	<section class="gk-quote" aria-label="Foundation guiding principle">
		<div class="gk-container gk-reveal">
			<span class="gk-quote__mark" aria-hidden="true">“</span>
			<blockquote>Service is most powerful when it protects dignity and creates the freedom to move forward.</blockquote>
			<p>Our guiding principle</p>
		</div>
	</section>

	<section class="gk-section gk-section--cream" id="gallery" aria-labelledby="gk-gallery-title">
		<div class="gk-container">
			<div class="gk-section-heading gk-reveal">
				<div>
					<p class="gk-eyebrow gk-eyebrow--dark">Community in action</p>
					<h2 class="gk-section-title" id="gk-gallery-title">Every effort begins with showing up.</h2>
				</div>
				<p class="gk-section-copy">The work is personal: one conversation, one health check, one classroom, and one family at a time.</p>
			</div>

			<div class="gk-gallery gk-reveal">
				<figure class="gk-gallery__item">
					<img src="<?php echo esc_url( gk_child_image_url( 'community-2.webp' ) ); ?>" alt="Foundation representatives and community partners at an event" width="768" height="936" loading="lazy">
					<figcaption class="gk-gallery__caption">Partnership in the community</figcaption>
				</figure>
				<figure class="gk-gallery__item">
					<img src="<?php echo esc_url( gk_child_image_url( 'community-3.webp' ) ); ?>" alt="Community participants at a foundation initiative" width="768" height="936" loading="lazy">
					<figcaption class="gk-gallery__caption">People at the heart of every program</figcaption>
				</figure>
				<figure class="gk-gallery__item">
					<img src="<?php echo esc_url( gk_child_image_url( 'medical-outreach.webp' ) ); ?>" alt="A medical consultation in progress" width="1024" height="852" loading="lazy">
					<figcaption class="gk-gallery__caption">Care delivered with attention</figcaption>
				</figure>
				<figure class="gk-gallery__item">
					<img src="<?php echo esc_url( gk_child_image_url( 'flood-relief.webp' ) ); ?>" alt="Relief supplies ready for flood-affected families" width="1024" height="852" loading="lazy">
					<figcaption class="gk-gallery__caption">Standing together during crisis</figcaption>
				</figure>
			</div>
		</div>
	</section>

	<section class="gk-donate" id="donate" aria-labelledby="gk-donate-title">
		<div class="gk-container gk-donate__panel">
			<div class="gk-reveal">
				<p class="gk-eyebrow">Be part of the work</p>
				<h2 class="gk-section-title" id="gk-donate-title">Your support can turn care into lasting change.</h2>
				<p class="gk-donate__copy">Every contribution helps strengthen public health, education, child welfare, and humanitarian relief in the communities we serve.</p>
				<div class="gk-bank-details" aria-label="Donation bank details">
					<div class="gk-bank-detail"><span>Account number</span><strong>44664771051</strong></div>
					<div class="gk-bank-detail"><span>IFSC code</span><strong>SBIN0000628</strong></div>
					<div class="gk-bank-detail"><span>Bank</span><strong>State Bank of India</strong></div>
					<div class="gk-bank-detail"><span>UPI ID</span><strong>gurunanakgitaakailash@sbi</strong></div>
				</div>
			</div>
			<div class="gk-donate__qr gk-reveal">
				<img src="<?php echo esc_url( gk_child_image_url( 'donation-qr.webp' ) ); ?>" alt="Scan and Pay donation QR code for Guru Nanak Gitaa Kailash Memorial Foundation" width="734" height="1024" loading="lazy">
			</div>
		</div>
	</section>
</main>
<?php
get_footer( 'charity' );
