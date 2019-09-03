<?php
/**
 * The template for displaying all pages
 * @package WordPress
 * @subpackage noor
 * @since 1.0
 * @version 0.1
 */

get_header(); ?>


<div class="container">
	<div id="primary" class="noor-content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main>
	</div>
</div>


<?php get_footer();