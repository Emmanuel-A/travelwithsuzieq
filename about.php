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
	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
?>