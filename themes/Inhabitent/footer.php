
<?php
/**
 * The template for displaying the footer.
 *
 * @package inhabitent_Theme
 */
?>
			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="overall-block">

					<div class="block">
						<div class="contact-info">
							<h3>Contact Info</h3>
							<p>
								<i class="fa fa-envelope" aria-hidden="true"></i>
								<a href="emailto:info@inhabitent.com">info@inhabitent.com</a>
							</p>
							<p>
								<i class="fa fa-phone"></i>
								<a href="tel:5553434567891">778-456-7891</a>
							</p>
							<p>
								<i class="fa fa-facebook-square"></i>
								<i class="fa fa-twitter-square"></i>
								<i class="fa fa-google-plus-square"></i>
							</p>
						</div>
					</div><!-- .block -->

					<div class="block">
						<div class="business-hours">
							<h3>Business Hours</h3>
							<p>
								<span class="days">Monday-Friday:</span> 9am to 5pm
							</p>
							<p>
								<span class="days">Saturday:</span> 10am to 2pm
							</p>
							<p>
								<span class="days">Sunday:</span> Closed
							</p>
						</div>
					</div><!-- .block -->

					<div class="block">
						<div class="footer-logo">
							<a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/inhabitent-logo-text.svg" alt="Inhabitent Logo" /></a>
						</div>
					</div><!-- .block -->
				</div><!-- .overall-block -->

				<div class="site-info">
					<div class="container">
						copyright &copy; <span class="year">2016</span> inhabitent
					</div>
				</div><!-- .site-info -->

			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
