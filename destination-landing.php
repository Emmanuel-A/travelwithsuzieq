<?php
    /* Template Name: Destination Landing Page */

    get_header();
?>

    <main id="primary" class="site-main">
        <div class="hero"
        <?php if(has_post_thumbnail()): ?>
            style="background-image: linear-gradient(to bottom, rgb(255 244 225) 0%, rgb(234 234 234 / 37%) 100%), url('<?php the_post_thumbnail_url();?>');"
        <?php endif;?>>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="title"><?php the_title(); ?></h2>
                        <span class="sub_title"><?php the_content(); ?></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="resorts_list">
            <div class="container">
                <h2>Explore Resorts in <?php the_title(); ?></h2>
                
                <?php if( have_rows('resort') ): ?>
                    <?php while( have_rows('resort') ) : the_row(); ?>
                        <div class="resort">
                            <div class="image">
                                <?php 
                                    $image = get_sub_field('image'); 
                                ?>
                                <img class="resort_image" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                            </div>
                            <div class="resort_details flex flex-col justify-between gap-[20px]">
                                <div>
                                    <div class="destination_wrapper">
                                        <svg id="Layer_1" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 49.3 67.9">
                                        <!-- Generator: Adobe Illustrator 29.0.0, SVG Export Plug-In . SVG Version: 2.1.0 Build 186)  -->
                                        <defs>
                                            <style>
                                            .st0 {
                                                fill: #b3d4e2;
                                            }
                                            </style>
                                        </defs>
                                        <path class="st0" d="M44.8,13.9C40.7,6.3,33.1,1.7,24.4,1.7,11.5,1.7,1.1,12.2,1.1,25s1.3,8.9,3.8,12.7l17.8,27.1c.4.6,1,.9,1.7.9s1.3-.3,1.7-.9l17.8-27c4.8-7.2,5.2-16.2,1.1-23.8ZM24.4,33c-5.2,0-9.5-4.3-9.5-9.5s4.3-9.5,9.5-9.5,9.5,4.3,9.5,9.5c0,5.2-4.3,9.5-9.5,9.5Z"/>
                                        </svg>
                                        <p class="destination"><?php the_title(); ?></p>
                                    </div>
                                    <h3 class="title"><?php the_sub_field('title'); ?></h3>
                                    <div class="star_rating">
                                        <?php 
                                            $starRating = get_sub_field('rating'); 
                                        ?>
                                        <img src="<?php echo $starRating['url']; ?>" alt="Star Rating" />
                                        <p class="rating_number"><?php the_sub_field('rating_number'); ?></p>
                                    </div>
                                    <p class="description"><?php the_sub_field('description'); ?></p>
                                </div>

                                <a href="<?php the_sub_field('link'); ?>" class="destination_link explore-btn-wrapper flex flex-row items-center justify-between">
                                    <span class="explore_btn">Explore</span>
                                    <span class="explore_icon">
                                        <svg data-bbox="20 20 160 160" viewBox="0 0 200 200" height="200" width="200" xmlns="http://www.w3.org/2000/svg" data-type="shape">
                                            <g>
                                                <path d="M20 100.212c0 42.116 32.593 76.614 73.862 79.788V74.603L58.095 110.37l-8.889-8.889 41.905-41.905L100 50.688l8.889 8.889 41.905 41.905-8.889 8.889-35.556-35.556v104.974C147.619 176.614 180 142.116 180 100c0-44.021-35.767-80-80-80s-80 35.979-80 80.212z"></path>
                                            </g>
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
?>