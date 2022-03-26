<!-- Footer -->
<!-- Footer -->
<footer>

  <div >
    <div class="container">
      <div class="row footer-first">
        <div class="col-12 col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
          <a href="http://netwave.ua/" target="_blank"><img src="<?php echo get_field('footer_logo', 'options'); ?>" alt=""></a>
        </div>
        <div class="col-12 col-md-6 col-lg-7 text-center text-md-right">

            <ul class="nav navbar-footer justify-content-end">
                <li class="nav-item">
                    <a class="nav-link" href="#solution">ТЕМА</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#components">РІШЕННЯ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#speakers">СПІКЕРИ</a>
                </li>
            </ul>
            </ul>

        </div>
      </div>
    </div>
  </div>

  <!-- Footer Links -->
  <div class="container">
      <div class="footer-second">
    <div class="row">
      <div class="col-12 col-md-6 col-lg-6 col-xl-6 mx-auto mb-6">
        <?php echo get_field('footer_text', 'options'); ?>
      </div>
      <div class="col-12 col-md-6 col-lg-6 col-xl-6 mx-auto mb-6">
        <!-- Social buttons -->


        <?php if( have_rows('social_footer', 'option') ): ?>
        <div class="text-center text-md-right">
          <ul class="list-unstyled list-inline">  
            <?php while( have_rows('social_footer', 'option') ):
                the_row(); ?>

                        <a href="<?php the_sub_field('social_footer_link', 'option'); ?>" target="_blank" class="btn-floating">
        <span class="fa-stack fa-2x">
          <i class="fa fa-circle fa-stack-2x"></i>
          <i class="fa <?php the_sub_field('social_footer_icon', 'option'); ?> fa-stack-1x fa-inverse"></i>
        </span>
                        </a>
          


            <?php endwhile; ?>
          </ul>
        </div>    
        <?php endif; ?>
</div>
      </div>
    </div>
  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center footer-third">
    <?php echo get_field('footer-copyright', 'options'); ?>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->

<!-- <a class="popup-with-zoom-anim" href="#small-dialog">Open with fade-zoom animation</a>
<div id="small-dialog" class="zoom-anim-dialog mfp-hide">
	<h1>Dialog example</h1>
	<p>This is dummy copy. It is not meant to be read. It has been placed here solely to demonstrate the look and feel of finished, typeset text. Only for show. He who searches for meaning here will be sorely disappointed.</p>
</div> -->

<?php wp_footer();?>

	</body>
</html>