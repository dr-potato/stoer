<?php
/*
Template Name: Page w/ sidebar on right
*/
?>

<?php get_header(); ?>

	<main class="Content">
		<div class="u-gridContainer">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
				<h2><?php the_title(); ?></h2>
				<div>
					<?php the_content(); ?>
				</div>
			</article>
		<?php endwhile; endif; ?>
		</div>
    <?php get_sidebar(); ?>
	</main>

<?php get_footer(); ?>
