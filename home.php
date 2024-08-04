<?php
    /* Template Name: Home Page */

    get_header();
?>

    <main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>


        <div class="container-fluid destinations">
            <div class="row">
                <div class="col-md-12">
                    <?php if( get_field('title') ): ?>
                        <h3><?php the_field('title'); ?></h3>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <?php
                // Check rows exists.
                if( have_rows('destination') ): ?>
                    <div class="container-fluid">
                        <div class="destinations-row row">
                            <?php while( have_rows('destination') ) : the_row(); ?>
                                <span class="destination">
                                    <span class="destination-wrapper">
                                        <span class="destination-title-wrapper text-center">
                                            <span class="destination-title text-center"><?php the_sub_field('destination'); ?></span>
                                        </span>
                                        <span class="destination-image-wrapper">
                                            <?php 
                                                // display a sub field value
                                                $image = get_sub_field('image'); 
                                            ?>
                                            <img class="destination-image" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                        </span>
                                        <span class="destination-shortcode-wrapper">
                                            <span class="destination-shortcode"><?php the_sub_field('shortcode'); ?></span>
                                            <img class="barcode-image" src="http://localhost:10018/wp-content/uploads/2024/07/barcode.png">
                                        </span>
                                        <a href="<?php the_sub_field('link'); ?>" class="destination-link explore-btn-wrapper">
                                            <span class="explore-btn">Explore</span>
                                            <span class="explore-icon"></span>
                                        </a>
                                    </span>
                                </span>
                            <?php endwhile; ?>
                        </div>
                    </div>
                <?php endif; ?>
                <div class="container-fluid">
                    <div class="row view-all-button-wrapper">
                        <?php $values = get_field( 'view_all_button_link' );
                        if ( $values ) { ?>
                        <a href="<?php the_field('view_all_button_link'); ?>" class="view-all-btn">
                            <?php the_field('view_all_button_text'); ?>
                        </a>
                        <?php } else { ?>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>

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


	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
?>