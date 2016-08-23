<?php
/**
 * The template for displaying the front page.
 *
 * @package inhabitent_Theme
 */
get_header(); ?>

	<div id="primary" class="content-area-front">
		<main id="main" class="site-main" role="main">

		<!-- Hero Image -->

				<section class="home-hero">
					<img src="<?php echo get_template_directory_uri(); ?>/images/inhabitent-logo-full.svg" class="logo" alt="Inhabitent Logo" />
				</section><!-- .home-hero -->

				<!-- Shop Stuff -->
				<h2>Shop Stuff</h2>
					<section class="shop-stuff">
						<?php $terms = get_terms('product-type')?>
							<?php foreach ( $terms as $product_type) : ?>
							<div class="product-block">
								<img src="<?php echo get_template_directory_uri() ?>/images/logos/<?php echo $product_type->slug ?>.svg" alt="product-type" />
								<p class="description"><?php echo $product_type->description ?></p>
								<a href="<?php echo get_term_link($product_type, 'product-type') ?>/" class="button"><?php echo $product_type->slug ?> Stuff</a>

						</div>
					<?php endforeach; ?>

					</section>


		<!-- Inhabitent Journal -->

			<h2>Inhabitent Journal</h2>
			<ul class="journal-post container">
				<?php
					$args = array(
						'posts_per_page' => 3,
						'order'=> 'DESC',
						'orderby' => 'date' );
					$postslist = get_posts( $args );
					foreach ( $postslist as $post ) :
					setup_postdata( $post ) ; ?>

							<li >
								<div class="journal-picture">
									<?php the_post_thumbnail( 'large' ); ?>
								</div>

								<div class="journal-info">
									<span>
										<?php inhabitent_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?>
									</span>
									<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
									<a class="moretag" href="<?php the_permalink(); ?>">Read Entry</a>
								</div>

							</li>
					<?php endforeach;
								wp_reset_postdata(); ?>

				</ul><!-- .journal-post -->

				<!-- Latest Adventures -->

			<h2>Latest Adventures</h2>
			<div class="latest-adventures"><h1>Latest Adventures</h1>
		<div class="adventures-container">
			<div class="leftside-adventures">
				<p>Getting Back to Nature in a Canoe</p>
				<span class="static-read-more">Read More</span>
			</div>

			<div class="rightside-adventures">
				<div class="rightside-top-adventure">
				<p>A Night with Friends at the Beach</p>
				<span class="static-read-more">Read More</span>
				</div>
				<div class="bottom-left-rightside-adventure">
				<p>Taking in the View at Big Mountain</p>
				<span class="static-read-more">Read More</span>
				</div>
				<div class="bottom-right-rightside-adventure">
				<p>Star-Gazing at the Night Sky</p>
				<span class="static-read-more">Read More</span>
				</div>
			</div>
		</div>
	</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
