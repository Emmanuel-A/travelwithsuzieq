<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package TravelWithSuzieQ
 */

get_header();
?>

	<main id="primary" class="site-main">

		<div class="container">
			<h1><?php the_title(); ?></h1>

			<?php while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', get_post_type() );

				the_post_navigation(
					array(
						'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'travelwithsuzieq' ) . '</span> <span class="nav-title">%title</span>',
						'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'travelwithsuzieq' ) . '</span> <span class="nav-title">%title</span>',
					)
				);

			endwhile; ?>
		</div>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
