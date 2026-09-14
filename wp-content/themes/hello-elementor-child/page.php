<?php
/**
 * Default page template.
 *
 * @package HelloElementorChild
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header( 'charity' );
?>
<main class="gk-inner-main" id="main-content">
	<div class="gk-container">
		<?php while ( have_posts() ) : the_post(); ?>
			<article <?php post_class( 'gk-entry' ); ?>>
				<h1 class="gk-entry__title"><?php the_title(); ?></h1>
				<div class="gk-entry__content"><?php the_content(); ?></div>
			</article>
		<?php endwhile; ?>
	</div>
</main>
<?php
get_footer( 'charity' );
