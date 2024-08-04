<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TravelWithSuzieQ
 */

?>

	<footer class="site-footer">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<p class="site-footer-heading">Hi There!</p>
				</div>
				<div class="col-md-6">
					<p class="site-footer-description">We may earn a small commission at no cost to you when you click affiliate links and make a purchase. As an Amazon Associate, we earn from qualifying purchases. </p>
					<span class="site-footer-description"><a href="">Click here</a> for our full affiliate disclosure.</span>
				</div>
				<div class="col-md-3">
					<ul class="site-footer-nav-wrapper">
						<li class="site-footer-nav-link"><a href="">Home</a></li>
						<li class="site-footer-nav-link"><a href="">Destinations</a></li>
						<li class="site-footer-nav-link"><a href="">Resorts</a></li>
						<li class="site-footer-nav-link"><a href="">Travel & Lifestyle</a></li>
						<li class="site-footer-nav-link"><a href="">About</a></li>
					</ul>
				</div>
				<div class="col-md-3">
					<ul class="site-footer-nav-wrapper">
						<li class="site-footer-nav-link"><a href="">Contact</a></li>
						<li class="site-footer-nav-link"><a href="">FAQ</a></li>
						<li class="site-footer-nav-link"><a href="">Terms & Conditions</a></li>
						<li class="site-footer-nav-link"><a href="">Privacy Policy</a></li>
						<li class="site-footer-nav-link"><a href="">Instagram</a></li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 site-info-wrapper">
					<p class="site-footer-copyright">© <?php echo date("Y"); ?> by <?php echo get_bloginfo(); ?>.</p>
				</div>
			</div>
		</div>
	</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>
