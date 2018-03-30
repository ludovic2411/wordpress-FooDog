<div class="content">

<?php get_header();

  if(have_posts()) :

  while(have_posts()) : the_post();

  the_content();

  endwhile;

  edit_post_link('Modifier cette page', '<p>', '</p>');

?>

<h2>Oooopppsss...</h2> <p>Désolé, mais vous cherchez quelque chose qui ne se trouve pas ici .</p> <?php include ("404.php"); ?>

<?php

  endif;

?>

</div>

<div class= "post" id="post-<?php the_ID(); ?>">

  <div class= "post_content">

  </div>

  <?php get_sidebar(); ?>

  <?php get_footer(); ?>

</div>

<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>

  </body>
</html>
