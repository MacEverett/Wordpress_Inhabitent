
<?php
/**
 * Template Name: About page
 *
 * @package inhabitent_Theme
 */
get_header(); ?>
<div class="about-content">

	<div id="primary" class="about-area">
		<main id="main" class="site-main" role="main">

			<section class="about-header">
				<h2>About</h2>
			</section><!-- .about-header -->

			<section class="about-container">

				<div class=" about-paragraphs">
					<h2 class="about-title">Our Story</h2>
						<?php echo CFS()->get( 'our_story' ); ?>
					<h2 class="about-title">Our Team</h2>
						<?php echo CFS()->get( 'our_team' ); ?>
				</div><!-- .about-paragraphs -->

			</section><!-- .about-container -->

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .about-content -->
<?php get_footer(); ?>
