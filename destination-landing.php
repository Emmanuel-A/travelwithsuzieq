<?php
    /* Template Name: Destination Landing Page */

    get_header();
?>

    <main id="primary" class="site-main">
        <div class="hero">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
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
                    </div>
                </div>
            </div>
        </div>

        <div class="resorts_list">
            <div class="container-fluid">

                <?php if( have_rows('resort') ): ?>
                    <?php while( have_rows('resort') ) : the_row(); ?>
                        <div class="row">
                            <div class="col-md-12 resort">
                                <div class="image">
                                    <?php 
                                        $image = get_sub_field('image'); 
                                    ?>
                                    <img class="resort-image" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                </div>
                                <div class="resort_details">
                                    <h3 class="title"><?php the_sub_field('title'); ?></h3>
                                    <p class="description"><?php the_sub_field('description'); ?></p>
                                    <a href="<?php the_sub_field('link'); ?>" class="destination-link explore-btn-wrapper flex flex-row items-center justify-between">
                                        <span class="explore-btn">Explore</span>
                                        <span class="explore-icon">
                                            <svg data-bbox="20 20 160 160" viewBox="0 0 200 200" height="200" width="200" xmlns="http://www.w3.org/2000/svg" data-type="shape">
                                                <g>
                                                    <path d="M20 100.212c0 42.116 32.593 76.614 73.862 79.788V74.603L58.095 110.37l-8.889-8.889 41.905-41.905L100 50.688l8.889 8.889 41.905 41.905-8.889 8.889-35.556-35.556v104.974C147.619 176.614 180 142.116 180 100c0-44.021-35.767-80-80-80s-80 35.979-80 80.212z"></path>
                                                </g>
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
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