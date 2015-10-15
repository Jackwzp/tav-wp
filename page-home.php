<?php
/* 
	Template Name: Home Page 
*/

get_header(); ?>

<!-- Hero Section -->
<section id="hero"	data-type="background" data-speed="0">
<div class="container" >
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<br />
			<h1 class="page-title">The Asian Vegan</h1>
			<div class="row">
				<div class="col-md-4"><p class="header">Eat Better</p></div>
				<div class="col-md-4"><p class="header">Feel Better</p></div>
				<div class="col-md-4"><p class="header">Live Better</p></div>
			</div>
		</div>
	</div>
</div>
</section>


<!-- About Section -->
<section>
	<div class="container" id="about" >
		<div class="row">
			<div class="col-md-8 col-md-offset-2">		
				<?php while(have_posts()) {
					the_post();
					the_content();
				}?>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
