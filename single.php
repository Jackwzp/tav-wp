<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package TheAsianVegan
 */

get_header(); ?>

<div class="container single-post">
	<div class="row" id="primary">
		<main class="col-sm-8" id="content">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>

			<?php the_post_navigation(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->

		<!-- SIDEBAR
		================================================== -->
	    <aside class="col-sm-4">
			<?php get_sidebar(); ?>
	    </aside>

	</div><!-- #primary -->
</div>


<?php get_footer(); ?>