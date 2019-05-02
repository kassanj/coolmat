<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package coolmat
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<div class="hero">
			<div class="hero-inner container">
				<h1 class="hero-text">
					<span class="hero-sitename"><?php bloginfo('name') ?></span>
						fried seaweed roll
				</h1>
				<p class="hero-description">
					<span class="magenta"><?php bloginfo('name') ?></span>
					is a restaurant that creates future flavor nostalgia of street food.
				</p>
			</div>
		</div>

		<div class="intro" id="intro">
			<div class="intro-inner">
				<h2 class="intro-title">
					Introducing <?php bloginfo('name') ?>
				</h2>
				<p class="intro-description">
					street food that was born in tough times.<br>
					street food that everybody loves.<br>
					<span class="yellow"><?php bloginfo('name') ?></span>
					is on a mission to provide future<br>
					flavor nostalgia of street food for men,<br>
					women, children, grandpas and grandmas.<br>
					we only use the best ingredients.
				</p>
			</div>
		</div>

		<div class="food-title" id="food">
			Menu
		</div>

		<div class="food-grid">
			<?php
			if ( have_posts() ) :
				if ( is_home() && ! is_front_page() ) :
					?>
					<header>
						<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
					</header>
					<?php
				endif;
				/* Start the Loop */
				while ( have_posts() ) :
					the_post();
					get_template_part( 'template-parts/content', get_post_type() );
				endwhile;
				the_posts_navigation();
			else :
				get_template_part( 'template-parts/content', 'none' );
			endif;
			?>
		</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
