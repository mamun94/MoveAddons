<?php
/**
 * Template Name: Full Width Page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @moveaddons-theme
 */

get_header();
?>

	<div class="content-area">
		<?php
			while ( have_posts() ) : the_post();
				the_content();
			endwhile; // End of the loop.
		?>
	</div><!-- #primary -->
	
<?php
get_footer();