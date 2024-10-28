<?php
    /* Template Name: About Page */

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


        <div class="container-fluid about">
            <?php if( get_field('heading') ): ?>
                <div class="row">
                    <div class="col-md-12">
                        <h2><?php the_field('heading'); ?></h2>
                    </div>
                </div>
            <?php endif; ?>

            <div class="row">
                <?php if( get_field('title') ): ?>
                    <div class="col-md-12">
                        <div class="sub-heading-wrapper bg-[#ecebe9]">
                            <h3 class="sub-heading-text"><?php the_field('title'); ?></h3>
                        </div>
                    </div>
                <?php endif; ?>

                <div class="col-md-12 d-flex about-blocks-wrapper">
                    <?php 
                    $image = get_field('image');
                    if( !empty( $image ) ): ?>
                        <div class="image">
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        </div>
                    <?php endif; ?>

                    <?php if( get_field('text') ): ?>
                        <div class="content">
                            <p><?php the_field('text'); ?></p>
                        </div>
                    <?php endif; ?>
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