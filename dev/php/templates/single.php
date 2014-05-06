<?php get_header(); ?>

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <main class="Content">
    <div class="Content-articles">
      <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
        <?php if(!is_front_page()) {?>
        <h3 class="u-textShout"><?php the_title(); ?></h3>
        <?php }?>
        <div><?php the_content(); ?></div>
        <?php wp_link_pages(array('before' => '<p>Pages: ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
        <?php the_tags( '<p>Tags: ', ', ', '</p>'); ?>
      </article>
      <div>
        <?php endwhile; else: ?>
          <p><?php _('Sorry, no posts matched your criteria.'); ?></p>
        <?php endif; ?>
        <?php comments_template(); ?>
      </div>
    </div>
    <?php get_sidebar(); ?>
  </main>
		
<?php get_footer(); ?>
