<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TheAsianVegan
 */

?>


<?php wp_footer(); ?>


<!-- Footer Section -->

<footer>
	<div class="container">
		<div class="col-md-4 col-md-offset-4">
			<p>&copy; <?php echo date('Y');?> The Asian Vegan</p>
		</div><!-- end col -->
	</div><!-- container -->
</footer>



<!-- Latest compiled and minified JavaScript -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="<?php bloginfo( 'stylesheet_directory' ); ?>/asset/js/jquery-2.1.1.min.js"></script>
<script src="<?php bloginfo( 'stylesheet_directory' ); ?>/asset/js/bootstrap.min.js"></script>
<script src="<?php bloginfo( 'stylesheet_directory' ); ?>/asset/js/main.js"></script>

</body>
</html>
