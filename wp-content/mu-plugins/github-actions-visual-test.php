<?php
/**
 * Plugin Name: GitHub Actions Visual Test
 * Description: Provides a simple visual page for confirming file deployments.
 * Version: 1.1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Render the visual deployment marker.
 */
function wordpress_flow_render_visual_test() {
	$status = 'GITHUB ACTION DEPLOYED';
	$detail = 'Success! This version reached WordPress through the GitHub Actions deployment.';

	ob_start();
	?>
	<style>
		.wordpress-flow-test {
			box-sizing: border-box;
			max-width: 920px;
			margin: 72px auto;
			padding: 56px;
			border: 1px solid #bbf7d0;
			border-radius: 24px;
			background: linear-gradient(145deg, #f0fdf4 0%, #ffffff 70%);
			box-shadow: 0 24px 70px rgba(20, 83, 45, 0.12);
			color: #292524;
			font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
		}

		.wordpress-flow-test * {
			box-sizing: border-box;
		}

		.wordpress-flow-test__badge {
			display: inline-block;
			padding: 8px 14px;
			border-radius: 999px;
			background: #16a34a;
			color: #ffffff;
			font-size: 13px;
			font-weight: 800;
			letter-spacing: 0.12em;
		}

		.wordpress-flow-test h1 {
			margin: 24px 0 14px;
			font-size: clamp(38px, 7vw, 68px);
			line-height: 1.02;
			letter-spacing: -0.045em;
		}

		.wordpress-flow-test__lead {
			max-width: 680px;
			margin: 0;
			color: #57534e;
			font-size: 20px;
			line-height: 1.65;
		}

		.wordpress-flow-test__grid {
			display: grid;
			grid-template-columns: repeat(auto-fit, minmax(190px, 1fr));
			gap: 16px;
			margin-top: 38px;
		}

		.wordpress-flow-test__card {
			padding: 20px;
			border: 1px solid #e7e5e4;
			border-radius: 16px;
			background: rgba(255, 255, 255, 0.78);
		}

		.wordpress-flow-test__label {
			display: block;
			margin-bottom: 7px;
			color: #78716c;
			font-size: 12px;
			font-weight: 700;
			letter-spacing: 0.1em;
			text-transform: uppercase;
		}

		.wordpress-flow-test__value {
			font-size: 18px;
			font-weight: 750;
		}

		@media (max-width: 640px) {
			.wordpress-flow-test {
				margin: 24px 16px;
				padding: 32px 24px;
			}
		}
	</style>

	<main class="wordpress-flow-test">
		<span class="wordpress-flow-test__badge"><?php echo esc_html( $status ); ?></span>
		<h1>GitHub Actions Visual Test</h1>
		<p class="wordpress-flow-test__lead"><?php echo esc_html( $detail ); ?></p>

		<div class="wordpress-flow-test__grid">
			<div class="wordpress-flow-test__card">
				<span class="wordpress-flow-test__label">Current stage</span>
				<span class="wordpress-flow-test__value">Workflow v2</span>
			</div>
			<div class="wordpress-flow-test__card">
				<span class="wordpress-flow-test__label">Target workflow</span>
				<span class="wordpress-flow-test__value">GitHub Actions</span>
			</div>
			<div class="wordpress-flow-test__card">
				<span class="wordpress-flow-test__label">Created</span>
				<span class="wordpress-flow-test__value">13 September 2026</span>
			</div>
		</div>
	</main>
	<?php
	return ob_get_clean();
}
add_shortcode( 'github_actions_visual_test', 'wordpress_flow_render_visual_test' );
