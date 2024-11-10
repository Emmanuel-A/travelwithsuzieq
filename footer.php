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

	<div class="container-fluid email-newsletter-wrapper">
		<div class="row heading-wrapper">
			<div class="col-md-12 text-center">
				<h4 class="heading">Let's Stay in Touch!</h4>
			</div>
		</div>
		<div class="row d-flex">
			<div class="col-md-4 email-newsletter-image-wrapper">
				<img src="http://localhost:10018/wp-content/uploads/2024/07/DC6EFAB4-017D-4C87-8FF3-64B8834B13B3-scaled.jpeg" class="email-newsletter-image">
			</div>
			<div class="col-md-8 email-newsletter-form-wrapper">
				<form class="email-newsletter-form">
					<h5 class="heading">Subscribe to our newsletter</h5>
					<div class="form-group">
						<label for="exampleInputEmail1">Email *</label>
						<input type="email" class="form-control inputEmail" id="inputEmail1" aria-describedby="emailHelp" required>
					</div>
					<div class="form-check">
						<input type="checkbox" class="email-newsletter-subscribe inputSubscribe" id="inputSubscribe" name="inputSubscribe">
						<label for="inputSubscribe">Yes, subscribe me to your newsletter.</label>
					</div>
					<button type="submit" class="submit-btn">Submit</button>
				</form>
			</div>
		</div>
	</div>

	<footer class="site-footer">
		<div class="container-fluid">
			<span class="back-to-top">
				<svg data-bbox="20 20 160 160" viewBox="0 0 200 200" height="200" width="200" xmlns="http://www.w3.org/2000/svg" data-type="shape">
					<g>
						<path d="M20 100.212c0 42.116 32.593 76.614 73.862 79.788V74.603L58.095 110.37l-8.889-8.889 41.905-41.905L100 50.688l8.889 8.889 41.905 41.905-8.889 8.889-35.556-35.556v104.974C147.619 176.614 180 142.116 180 100c0-44.021-35.767-80-80-80s-80 35.979-80 80.212z"></path>
					</g>
				</svg>
			</span>
			<div class="row">
				<div class="col-md-12">
					<p class="site-footer-heading">Hi There!</p>
				</div>
				<div class="col-md-6">
					<p class="site-footer-description">We may earn a small commission at no cost to you when you click affiliate links and make a purchase. As an Amazon Associate, we earn from qualifying purchases. </p>
					<span class="site-footer-description"><a href="/privacy-policy">Click here</a> for our full affiliate disclosure.</span>
				</div>
				<div class="col-md-3">
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'footer-1',
								'menu_id'        => 'footer-one',
							)
						);
					?>
				</div>
				<div class="col-md-3">	
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'footer-2',
								'menu_id'        => 'footer-two',
							)
						);
					?>
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
