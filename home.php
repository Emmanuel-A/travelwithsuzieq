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
                        <div class="destinations-row">
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
                        <a href="<?php the_field('view_all_button_link'); ?>" class="view-all-btn flex flex-row items-center justify-between">
                            <span class="view-all-button-text"><?php the_field('view_all_button_text'); ?></span>
                            <span class="view-all-button-icon">
                                <svg data-bbox="20 20 160 160" viewBox="0 0 200 200" height="200" width="200" xmlns="http://www.w3.org/2000/svg" data-type="shape">
                                    <g>
                                        <path d="M20 100.212c0 42.116 32.593 76.614 73.862 79.788V74.603L58.095 110.37l-8.889-8.889 41.905-41.905L100 50.688l8.889 8.889 41.905 41.905-8.889 8.889-35.556-35.556v104.974C147.619 176.614 180 142.116 180 100c0-44.021-35.767-80-80-80s-80 35.979-80 80.212z"></path>
                                    </g>
                                </svg>
                            </span>
                        </a>
                        <?php } else { ?>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
?>