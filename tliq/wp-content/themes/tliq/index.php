<?php get_header();?>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        
        <section class="block1">
            <div class="parallax-window" data-parallax="scroll" data-image-src="<?php echo $background_img_1 = get_field('background_img_1');?>">
                <div class="container">
                    <h1><?php echo $title_1 = get_field('title_1');?></h1>
                    <p><?php echo $text_1 = get_field('text_1');?></p>
                    <?php
                        echo do_shortcode('[contact-form-7 id="4" title="Form 1"]');
                    ?>
                </div> 
            </div>            
        </section>

        <section class="block2">
            <div class="container">

                <h2><hr><?php echo $title_2 = get_field('title_2');?></h2>
                <div class="text_block">
                    <p><?php echo $text_2 = get_field('text_2');?></p>
                </div>
            </div>           
        </section>

        <section class="block3">
            <div class="parallax-window" data-parallax="scroll" data-image-src="<?php echo $background_img_3 = get_field('background_img_3');?>">
                <div class="container">
                    <div class="text_block">
                        <h2><?php echo $title_3 = get_field('title_3');?></h2>
                        <p><?php echo $text_3 = get_field('text_3');?></p>
                        <?php
                            echo do_shortcode('[contact-form-7 id="4" title="Form 1"]');
                        ?>
                    </div>
                </div> 
            </div>            
        </section>

        <section class="block4">
            <div class="container">
                <div class="text_block">
                    <h2><?php echo $title_4 = get_field('title_4');?></h2>
                    <?php echo $text_4 = get_field('text_4');?>
                    <?php
                    if( have_rows('items') ):
                        while ( have_rows('items') ) : the_row();
                    ?>
                        <div class="items">
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                                    <img src="<?php the_sub_field('img');?>" alt="<?php the_sub_field('title');?>" width="100%">
                                    
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-9 col-lg-9">
                                    <h4><?php the_sub_field('title');?></h4>
                                    <p><?php the_sub_field('text');?></p>
                                </div>                            
                            </div>
                        </div>
                    <?php
                        endwhile;
                    else :
                    endif;
                    ?>                   
                </div>
            </div>           
        </section>

        <section class="block5">
            <div class="parallax-window" data-parallax="scroll" data-image-src="<?php echo $background_img_3 = get_field('background_img_3');?>">
                <div class="container">
                    <div class="text_block">
                        <h2><hr><?php echo $title_5 = get_field('title_5');?></h2>
                        <?php echo $text_5 = get_field('text_5');?>
                        <?php
                        if( have_rows('facts') ):
                        ?>
                            <div class="row">
                                <?php
                                $k = 0.1;
                                    while ( have_rows('facts') ) : the_row();
                                ?>
                                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                        <div class="wow fadeInDown animated animated" style="visibility: visible; animation-delay: <?php echo $k;?>s; animation-name: fadeInDown;">
                                            <h3><?php the_sub_field('quantity');?></h3>
                                            <h4><?php the_sub_field('text');?></h4>
                                        </div>                                    
                                    </div>                           
                                <?php
                                $k++;
                                    endwhile;
                                ?>
                            </div>
                        <?php
                        else :
                        endif;
                        ?>                   
                    </div>
                </div>           
            </div>           
        </section>

        <section class="block6">
            <div class="container">
                <div class="text_block">
                    <h2><?php echo $title_6 = get_field('title_6');?></h2>
                    <?php echo $text_6 = get_field('text_6');?>
                    <?php
                    if( have_rows('partners') ):
                    ?>
                        <div class="center slider">
                            <?php
                                while ( have_rows('partners') ) : the_row();
                            ?>
 
                                    <img src="<?php the_sub_field('img');?>">                                                       
                            <?php
                                endwhile;
                            ?>
                        </div>
                    <?php
                    else :
                    endif;
                    ?>
                                     
                </div>
            </div>                     
        </section>

    <?php endwhile; ?>
    <?php else: ?>
    <!-- no posts found -->
    <?php endif; ?>
 
</div>


<?php get_footer();?>


