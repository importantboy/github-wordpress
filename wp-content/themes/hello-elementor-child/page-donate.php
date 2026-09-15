<?php
/**
 * Donation page.
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
<main id="main-content" data-gk-page="donate">
	<section class="gk-donate-hero">
		<div class="gk-container gk-donate-hero__grid">
			<div class="gk-donate-hero__content gk-reveal">
				<p class="gk-page-kicker">Make a contribution</p>
				<h1>Help care travel further.</h1>
				<p>Your support strengthens child welfare, preventive healthcare, education, and humanitarian relief in communities that need practical pathways forward.</p>
				<div class="gk-donate-note"><span aria-hidden="true">✦</span><strong>Every contribution becomes part of a focused community response.</strong></div>
			</div>
			<div class="gk-donate-card gk-reveal">
				<div class="gk-donate-card__qr"><img src="<?php echo esc_url( gk_child_image_url( 'donation-qr.webp' ) ); ?>" alt="Scan and Pay QR code for donations to Guru Nanak Gitaa Kailash Memorial Foundation" width="734" height="1024" fetchpriority="high"></div>
				<div class="gk-donate-card__content">
					<p>Scan with any UPI app</p>
					<strong>gurunanakgitaakailash@sbi</strong>
				</div>
			</div>
		</div>
	</section>

	<section class="gk-page-section">
		<div class="gk-container gk-bank-panel">
			<div class="gk-bank-panel__heading gk-reveal">
				<p class="gk-eyebrow gk-eyebrow--dark">Bank transfer</p>
				<h2 class="gk-section-title">Direct support, securely transferred.</h2>
				<p>Use the details shown here to contribute directly to the Foundation’s State Bank of India account.</p>
			</div>
			<div class="gk-bank-panel__details gk-reveal">
				<div><span>Account name</span><strong>Guru Nanak Gitaa Kailash Memorial Foundation</strong></div>
				<div><span>Account number</span><strong>44664771051</strong></div>
				<div><span>IFSC code</span><strong>SBIN0000628</strong></div>
				<div><span>Bank</span><strong>State Bank of India</strong></div>
			</div>
		</div>
	</section>

	<section class="gk-page-section gk-page-section--cream">
		<div class="gk-container">
			<div class="gk-page-heading gk-reveal">
				<p class="gk-eyebrow gk-eyebrow--dark">Your support in action</p>
				<h2 class="gk-section-title">Four ways your contribution can help.</h2>
			</div>
			<div class="gk-support-grid">
				<article class="gk-support-card gk-reveal"><span>01</span><h3>Protect a childhood</h3><p>Support safe care, education, healthcare, and skill development.</p></article>
				<article class="gk-support-card gk-reveal"><span>02</span><h3>Bring care closer</h3><p>Help screenings and primary healthcare reach underserved communities.</p></article>
				<article class="gk-support-card gk-reveal"><span>03</span><h3>Open a classroom</h3><p>Expand access to digital learning, STEM, scholarships, and school support.</p></article>
				<article class="gk-support-card gk-reveal"><span>04</span><h3>Respond to crisis</h3><p>Move food, water, medicine, and recovery support where it is needed.</p></article>
			</div>
		</div>
	</section>

	<section class="gk-donation-trust">
		<div class="gk-container gk-donation-trust__inner gk-reveal">
			<div><p class="gk-eyebrow">Give with confidence</p><h2>Stewardship is part of the promise.</h2></div>
			<p>The Foundation operates as a registered non-profit charitable trust with a defined governance structure, audited financial records, and oversight from trustees and domain experts.</p>
		</div>
	</section>
</main>
<?php
get_footer( 'charity' );
