<?php
    /* Template Name: Resort Landing Page */

    get_header();
?>

    <main id="primary" class="site-main">
        <div class="hero"
        <?php if(has_post_thumbnail()): ?>
            style="background-image: linear-gradient(to bottom, rgb(255 244 225) 0%, rgb(234 234 234 / 37%) 100%), url('<?php the_post_thumbnail_url();?>');"
        <?php endif;?>>
            <div class="container-fluid">
                <div class="col-md-12">
                    <h2 class="title"><?php the_title(); ?></h2>
                    <span class="sub_title"><?php the_content(); ?></span>
                </div>
            </div>
        </div>

       

       


	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
?>