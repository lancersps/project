<!-- Footer -->
<footer>
<div class="container">

  <?php
  if( get_field('addres', 9) ) {
  ?>
    <div class="row">
      <?php
          while( the_repeater_field('addres', 9) ) {
      ?>
        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
            <p> <?php echo $address_text = get_sub_field('address_text');?></p>
        </div>
      <?php
          }
      ?>
    </div>  
  <?php
  }
  ?>
  
  <div class="copyright">
      <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
              <p><br><span><?php echo $copyright = get_field( "copyright", 9 );?></span></p>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 text-right">
                  <p>
                    <?php echo $follow_us_text = get_field( "follow_us_text", 9 );?> 
                    <?php
                    if( get_field('follow_us_link', 9) ) {
                        while( the_repeater_field('follow_us_link', 9) ) {
                    ?>
                          <a href="<?php echo $follow_us_link_href = get_sub_field('follow_us_link_href');?>"><i class="fa <?php echo $follow_us_link_icon = get_sub_field('follow_us_link_icon');?>" aria-hidden="true"></i></a>
                    <?php
                        }
                    }
                    ?>                  
                  </p>
          </div>        
      </div>
  </div>  

</div>
    <!-- /.row -->
</footer>

</div>
<!-- /.container -->

<!-- Bootstrap Core JavaScript -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script type="text/javascript">
  jQuery(document).on('ready', function() {
    jQuery(".center").slick({
      dots: false,
      infinite: true,
      centerMode: true,
      slidesToShow: 3,
      slidesToScroll: 2
    });
  });
</script>

<?php wp_footer();?>

	</body>
</html>