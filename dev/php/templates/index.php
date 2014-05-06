<?php get_header(); ?>

  <main class="Content">
    <div class="Content-articles">
    <h3 class="u-textShout">Actueel</h3>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <article class="Article">
        <?php if(!is_front_page()) {?>
        <h5 class="Article-heading"><a href="<?php the_permalink() ?>" rel="bookmark" title="Lees <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
        <?php }?>
        <time class="Article-tagline"><?php the_time( get_option( 'date_format' ) ); ?></time>
        <p class="Article-content"><?php the_content('Read the rest of this entry &raquo;'); ?></p>
      </article>
    <?php endwhile; endif; ?>

    <nav class="Pagination">
      <div><?php next_posts_link('&laquo; Ouder') ?></div>
      <div><?php previous_posts_link('Nieuwer &raquo;') ?></div>
    </nav>
    
    </div>
    <?php get_sidebar(); ?>
  </main>

<?php get_footer(); ?>
