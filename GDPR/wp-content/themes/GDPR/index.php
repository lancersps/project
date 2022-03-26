<?php get_header();?>
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php the_content(); ?>
  <?php endwhile; ?>

  <?php else: ?>
    <div class="container">
      <br>
      <br>
      <br>
      <div class="alert alert-danger" role="alert">
        <strong>Інформацію на сторінку не внесено!</strong> <a href="<?php echo home_url();?>/wp-admin" class="alert-link">Ввійдіть в адміну</a> та наповніть сайт.
      </div>    
    </div>
  <?php endif; ?>

<?php get_footer();?>


