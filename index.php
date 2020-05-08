<?php get_header(); ?>

<main class="mycontainer mycontainer2">
  <?php
if ( have_posts() ) {
  while ( have_posts() ){
    the_post();
    ?>
    <article>
      <h2>
        <?php the_title(); ?>
      </h2>
      <p>
        <?php the_content(); ?>
      </p>
    </article>
    <?php
  }
}
?>
</main>




<?php get_footer(); ?>