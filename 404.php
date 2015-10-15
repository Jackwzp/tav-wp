<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package TheAsianVegan
 */

get_header(); ?>


<section class="myblog" data-type="background" data-speed="2">
	<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'theasianvegan' ); ?></h1>
</section>

<div class="container">
    <div class="row" id="primary">    
	    <main id="content" class="col-sm-8" role="main">
			<section class="error-404 not-found">
				<div class="page-content">
					<p class="lead">It looks like nothing was found at this location. You can go back <a href="/">home</a> or read some post from the <a href="/blog">blog</a>.</p>


				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->

		<!-- SIDEBAR
		================================================== -->
	    <aside class="col-sm-4">
			<?php get_sidebar(); ?>
	    </aside>


	</div><!-- #primary -->
</div>

<?php get_footer(); ?>
