<?php
/*
Template Name: Page w/ sidebar on right
*/
?>

<?php get_header(); ?>

	<main class="Content">
		<div class="Content-articles">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
		    <?php if(!is_front_page()) {?>
        <h3 class="u-textShout"><?php the_title(); ?></h3>
        <?php }?>
				<div><?php the_content(); ?></div>
			</article>
		<?php endwhile; endif; ?>
		</div>
    <?php get_sidebar(); ?>
	</main>

<?php get_footer(); ?>
