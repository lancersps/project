<?php
/**
 * Template Name: Шаблон главной страницы
 *
**/
?>
<?php get_header();?>
<div class="block1">
    <div class="container">
        <div class="block1_bg1" data-rellax-percentage="0.5" style="transform: translate3d(0px, -18px, 0px) translate3d(0px, -11px, 0px);">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/b1.png" width="100%">
        </div>
        <div class="block1_bg2" data-rellax-percentage="0.5" style="transform: translate3d(0px, -18px, 0px) translate3d(0px, -11px, 0px);">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/b2.png" width="100%">
      </div>        
      <div class="row">
        <input id="burger" type="checkbox" />
        <label for="burger">
            <span></span>
            <span></span>
            <span></span>
        </label>

        <?php
        wp_nav_menu( array(
            'theme_location'    => 'menu', 
            'container'       => 'nav',
        ));
        ?>

        <div class="block1_content">
            <img class="photo" src="<?php echo get_stylesheet_directory_uri(); ?>/img/Viktor.png">
            <?php
            $b1_text = get_field( "b1_text", 24 );
            if( $b1_text ) {
                ?><span><?php echo $b1_text;?></span><?php
            }
            ?>             
            <p><img src='
                <?php
                $logo_heder = get_field( "logo_heder", 13 );
                if( $logo_heder ) {
                    ?><?php echo $logo_heder;?><?php
                }
                ?>
                '>
            </p>
            <?php 
            $b1_h3_1 = get_field( "b1_h3_1", 24 );
            if( $b1_h3_1 ) {
                ?><h3><?php echo $b1_h3_1;?></h3><?php
            }
            ?>            
            <?php
            $b1_h1 = get_field( "b1_h1", 24 );
            if( $b1_h1 ) {
                ?><h2><?php echo $b1_h1;?></h2><?php
            }
            ?> 
            <?php 
            $b1_h3_2 = get_field( "b1_h3_2", 24 );
            if( $b1_h3_2 ) {
                ?><h3><?php echo $b1_h3_2;?></h3><?php
            }
            ?>
            <?php 
            $b1_p = get_field( "b1_p", 24 );
            if( $b1_p ) {
                ?><p><?php echo $b1_p;?></p><?php
            }
            ?>            
            <a href="#" class="button" data-toggle="modal" data-target="#contactForm">
                <?php
                $button_text = get_field( "button_text", 13 );
                if( $button_text ) {
                    ?><?php echo $button_text;?><?php
                }
                ?>
            </a>
        </div>
    </div>
</div>
</div>

<div class="block2">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <?php 
                $b2_h1 = get_field( "b2_h1", 24 );
                if( $b2_h1 ) {
                    ?><h3><?php echo $b2_h1;?></h3><?php
                }
                ?>                  
            </div>   
        </div>
    </div>
</div>


<?php if( have_rows('b2_ul') ): ?>
    <div class="block3">
        <div class="container">
            <div class="row">
                <?php while ( have_rows('b2_ul') ) : the_row();?>
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        <span><?php the_sub_field('b2_ul_nul');?></span>
                        <h4><?php the_sub_field('b2_ul_h1');?></h4>
                        <p><?php the_sub_field('b2_ul_text');?></p>
                    </div>


                <?php endwhile;?>
                <a href='
                <?php 
                $b2_a_href = get_field( "b2_a_href", 24 );
                if( $b2_a_href ) {
                    ?><?php echo $b2_a_href;?><?php
                }
                ?>
                '>
                <?php 
                $b2_a_text = get_field( "b2_a_text", 24 );
                if( $b2_a_text ) {
                    ?><?php echo $b2_a_text;?><?php
                }
                ?>
            </a>                        
        </div>
    </div>
</div>
<?php else : endif; ?> 


<div class="block4"> 
    <div class="container">     
        <div class="row">
            <?php 
            $b3_h1 = get_field( "b3_h1", 24 );
            if( $b3_h1 ) {
                ?><h3><?php echo $b3_h1;?></h3><?php
            }
            ?>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <?php 
                $b3_text_left = get_field( "b3_text_left", 24 );
                if( $b3_text_left ) {
                    ?><p><?php echo $b3_text_left;?></p><?php
                }
                ?>                
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <?php 
                $b3_text_right = get_field( "b3_text_right", 24 );
                if( $b3_text_right ) {
                    ?><p><?php echo $b3_text_right;?></p><?php
                }
                ?>
            </div>           
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <a href="#" class="button_invert" data-toggle="modal" data-target="#contactForm">
                    <?php
                    $button_text = get_field( "button_text", 13 );
                    if( $button_text ) {
                        ?><?php echo $button_text;?><?php
                    }
                    ?>
                </a>                
            </div>
        </div>
    </div>
</div>


<div class="block5">
    <?php 
    $b4_h1 = get_field( "b4_h1", 24 );
    if( $b4_h1 ) {
        ?><h3><?php echo $b4_h1;?></h3><?php
    }
    ?>
    <?php
    $b4_sp = get_field('b4_sp');
    if( $b4_sp ): ?>
        <div class="container">
            <div class="row">
                <?php foreach( $b4_sp as $post): // variable must be called $post (IMPORTANT) ?>
                    <?php setup_postdata($post); ?>
                    <?php $postid = get_the_ID(); ?>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <img src="<?php echo get_the_post_thumbnail_url( $postid, 'thumbnail' );?>">
                        <h5><?php the_title(); ?></h5>
                        <?php the_content(); ?>
                        <a href="#" data-toggle="modal" data-target="#<?php the_field('spicer_href'); ?>">Подробней о спикере</a>
                    </div>        
                <?php endforeach; ?>
            </div>
        </div>
        <?php wp_reset_postdata();?>
    <?php endif;?>
</div>


<?php if( have_rows('b5_ul') ): ?>
    <div class="block6">
        <div class="container">
            <?php 
            $b5_h1 = get_field( "b5_h1", 24 );
            if( $b5_h1 ) {
                ?><h3><?php echo $b5_h1;?></h3><?php
            }
            ?>
            <?php while ( have_rows('b5_ul') ) : the_row();?>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                        <h6><?php the_sub_field('b5_ul_title');?></h6>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-1 col-lg-1">
                        <i class="fa fa-angle-right fa-5x" aria-hidden="true"></i>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                        <p><?php the_sub_field('b5_ul_text');?></p>
                    </div>
                </div>
            <?php endwhile;?>
        </div>
    </div>
    <?php else : endif; ?>             


    <?php if( have_rows('b6_ul') ): ?>
        <div class="block7">
            <?php 
            $b6_h1 = get_field( "b6_h1", 24 );
            if( $b6_h1 ) {
                ?><h3><?php echo $b6_h1;?></h3><?php
            }
            ?>
            <div class="container">
                <div class="panel-group" id="accordion">
                    <?php 
                    $i = 1; 
                    ?>
                    <?php while ( have_rows('b6_ul') ) : the_row();?>
                        <?php 
                        if ($i == 1) :
                            $aria_expanded = 'true';
                        else :
                            $aria_expanded = 'false';
                        endif;
                        ?>        
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="heading-text">
                                    <div class="row">
                                        <div class="col-xs-10 col-sm-10 col-md-11 col-lg-11">
                                            <span><?php the_sub_field('b6_ul_subtitle');?></span>
                                            <h4 class="panel-title"><?php the_sub_field('b6_ul_title');?></h4>
                                        </div>
                                        <div class="col-xs-2 col-sm-2 col-md-1 col-lg-1">
                                            <a data-toggle="collapse" href="#collapse<?php echo $i; ?>" aria-expanded="true" class=""><i class="fa fa-angle-down fa-4x" aria-hidden="true"></i></a>
                                        </div>
                                    </div>                    
                                </div>                    
                            </div>
                            <div id="collapse<?php echo $i; ?>" class="panel-collapse collapse" aria-expanded="<?php echo $aria_expanded;?>" style="">
                                <div class="panel-body">
                                    <div class="row">
                                        <p><?php the_sub_field('b6_ul_text');?></p>
                                    </div>
                                </div>
                            </div>                                                                                                 
                        </div>
                        <?php $i++; ?>
                    <?php endwhile;?>
                </div>
            </div>
        </div>
        <?php else : endif; ?> 

        <?php if( have_rows('b7_ul') ): ?>
            <div class="block8">
                <?php 
                $b7_h1 = get_field( "b7_h1", 24 );
                if( $b7_h1 ) {
                    ?><h3><?php echo $b7_h1;?></h3><?php
                }
                ?>
                <div class="container">
                    <?php while ( have_rows('b7_ul') ) : the_row();?>
                        <div class="row">
                            <div class="col-xs-12 col-sm-5 col-md-4 col-lg-4">
                                <h5><?php the_sub_field('b7_ul_title');?></h5>
                            </div>
                            <div class="col-xs-12 col-sm-7 col-md-8 col-lg-8">
                                <p><?php the_sub_field('b7_ul_text');?></p>
                            </div>
                        </div>
                    <?php endwhile;?>
                </div>
            </div>
            <?php else : endif; ?> 


            <div class="block9">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <h5><?php the_field('b8_l_h1');?></h5>
                        <?php the_field('b8_l_text');?>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="price">
                            <h5><?php the_field('b8_r_h1');?></h5>
                            <?php the_field('b8_r_text');?>
                            <div class="price-item">
                                <h5><?php the_field('b8_r_price');?></h5>
                            </div>
                            <a href="#" class="button" data-toggle="modal" data-target="#contactForm">
                                <?php
                                $button_text = get_field( "button_text", 13 );
                                if( $button_text ) {
                                    ?><?php echo $button_text;?><?php
                                }
                                ?>
                            </a> 
                        </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="block10">
            </div>

        <div class="block_bg2" data-rellax-percentage="0.5" style="transform: translate3d(0px, -18px, 0px) translate3d(0px, -11px, 0px);">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/l1.png" width="100%">
        </div>
        <div class="block_bg3" data-rellax-percentage="0.5" style="transform: translate3d(0px, -18px, 0px) translate3d(0px, -11px, 0px);">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/r1.png" width="100%">
        </div>
        <div class="block_bg4" data-rellax-percentage="0.5" style="transform: translate3d(0px, -18px, 0px) translate3d(0px, -11px, 0px);">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/a3.png">
        </div>
        <div class="block_bg5" data-rellax-percentage="0.5" style="transform: translate3d(0px, -18px, 0px) translate3d(0px, -11px, 0px);">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/l2.png" width="100%">
        </div>
        <div class="block_bg6" data-rellax-percentage="0.5" style="transform: translate3d(0px, -18px, 0px) translate3d(0px, -11px, 0px);">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/a4.png" >
        </div>
        <div class="block_bg7" data-rellax-percentage="0.5" style="transform: translate3d(0px, -18px, 0px) translate3d(0px, -11px, 0px);">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/r2.png" width="100%">
        </div>
        <div class="block_bg8" data-rellax-percentage="0.5" style="transform: translate3d(0px, -18px, 0px) translate3d(0px, -11px, 0px);">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/a5.png">
        </div>

<?php get_footer();?>


