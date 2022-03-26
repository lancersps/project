<!-- Modal Contact Form -->
<div class="modal fade modal_form" id="contactForm" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i></button>

                <div class="contact_info">
                    <div class="contact_title">
                        <?php
                        $modal_h6 = get_field( "modal_h6", 110 );
                        if( $modal_h6 ) {
                            ?><h6><?php echo $modal_h6;?></h6><?php
                        }
                        ?>
                        <?php
                        $modal_h3_1 = get_field( "modal_h3_1", 110 );
                        if( $modal_h3_1 ) {
                            ?><h3><?php echo $modal_h3_1;?></h3><?php
                        }
                        ?>
                        <?php
                        $modal_h2 = get_field( "modal_h2", 110 );
                        if( $modal_h2 ) {
                            ?><h2><?php echo $modal_h2;?></h2><?php
                        }
                        ?>
                        <?php
                        $modal_h3_2 = get_field( "modal_h3_2", 110 );
                        if( $modal_h3_2 ) {
                            ?><h3><?php echo $modal_h3_2;?></h3><?php
                        }
                        ?>
                    </div>
                    <?php
                    $modal_price_h6 = get_field( "modal_price_h6", 110 );
                    if( $modal_price_h6 ) {
                        ?><h6><?php echo $modal_price_h6;?></h6><?php
                    }
                    ?>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                            <div class="right1">
                                <?php
                                $modal_price_1 = get_field( "modal_price_1", 110 );
                                if( $modal_price_1 ) {
                                    ?><h4><?php echo $modal_price_1;?></h4><?php
                                }
                                ?>
                                <?php
                                $modal_date_1 = get_field( "modal_date_1", 110 );
                                if( $modal_date_1 ) {
                                    ?><h6><?php echo $modal_date_1;?></h6><?php
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                            <div class="right1">
                                <?php
                                $modal_price_2 = get_field( "modal_price_2", 110 );
                                if( $modal_price_2 ) {
                                    ?><h4><?php echo $modal_price_2;?></h4><?php
                                }
                                ?>
                                <?php
                                $modal_date_2 = get_field( "modal_date_2", 110 );
                                if( $modal_date_2 ) {
                                    ?><h6><?php echo $modal_date_2;?></h6><?php
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                            <?php
                            $modal_price_3 = get_field( "modal_price_3", 110 );
                            if( $modal_price_3 ) {
                                ?><h4><?php echo $modal_price_3;?></h4><?php
                            }
                            ?>
                            <?php
                            $modal_date_3 = get_field( "modal_date_3", 110 );
                            if( $modal_date_3 ) {
                                ?><h6><?php echo $modal_date_3;?></h6><?php
                            }
                            ?>
                        </div>                            
                    </div>
                </div>
                <?php echo do_shortcode( '[contact-form-7 id="4" title="Принять участие"]' ); ?>  
            </div>
        </div>
        <div class="block_bg11" data-rellax-percentage="0.5" style="transform: translate3d(0px, -18px, 0px) translate3d(0px, -11px, 0px);">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/cf1.png" width="100%">
        </div>
        <div class="block_bg12" data-rellax-percentage="0.5" style="transform: translate3d(0px, -18px, 0px) translate3d(0px, -11px, 0px);">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/cf2.png" width="100%">
        </div>        

    </div>
</div>

<!-- Modal Spicker -->
<?php 
    $spicker = new WP_Query(array(
    'post_type' => 'spicker',
    'posts_per_page' => -1, 
    'order' => 'ASC',
    )); ?>
    <?php if ( $spicker->have_posts() ) : ?>
        <?php while ( $spicker->have_posts() ) : $spicker->the_post(); ?>
            <?php $postid = get_the_ID(); ?>
            <!-- Modal Contact Form -->
            <div class="modal fade modal_spicker" id="<?php the_field('spicer_href'); ?>" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i></button>
                            <div class="spicker_info">
                                <div class="spicker_title">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                                            <img src="<?php echo get_the_post_thumbnail_url( $postid, 'thumbnail' );?>">
                                        </div>
                                        <div class="col-xs-12 col-sm-8 col-md-9 col-lg-9">
                                            <h4><?php the_title();?></h4>
                                            <p><?php the_excerpt();?></p>
                                        </div>                                    
                                    </div>
                                </div>
                                <div class="spicker_content">
                                    <p><?php the_content();?></p>
                                </div>
                                <div class="spicker_org">
                                    <?php 
                                    $spicer_h1 = get_field( "spicer_h1");
                                    if( $spicer_h1 ) {
                                        ?><h4><?php echo $spicer_h1;?></h4><?php
                                    }
                                    ?>
                                        <?php if( have_rows('spicer_org') ): ?>
                                            <div class="row">
                                                <?php while ( have_rows('spicer_org') ) : the_row();?>
                                                    <?php $postid = get_the_ID(); ?>
                                                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
                                                        <a href="<?php the_sub_field('spicer_org_href');?>" class="a_org">
                                                            <img src="<?php the_sub_field('spicer_org_img');?>" alt="<?php the_sub_field('spicer_org_text');?>" title="<?php the_sub_field('spicer_org_text');?>">
                                                        </a>
                                                    </div>
                                                <?php endwhile;?>
                                            </div>                                
                                        <?php else : endif; ?>
                                </div>                                  
                                <div class="spicker_cit">
                                    <div class="citata">
                                        <?php 
                                        $spicer_cit = get_field( "spicer_cit");
                                        if( $spicer_cit ) {
                                            ?><p><?php echo $spicer_cit;?></p><?php
                                        }
                                        ?>                                            
                                    </div>
                                    <a href="#" class="button" data-toggle="modal" data-target="#contactForm" data-dismiss="modal" onclick="myFunction()">
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
            </div>             
        <?php endwhile;?>
<?php else: ?>
    <!-- <p>Если НЕТ</p> -->
<?php endif; ?>



            <!-- Footer -->
            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                            <a href="<?php echo home_url();?>">
                                <img src='
                                    <?php
                                    $logo = get_field( "logo", 13 );
                                    if( $logo ) {
                                        ?><?php echo $logo;?><?php
                                    }
                                    ?>
                                '>
                            </a>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <?php
                                $footer_phone = get_field( "footer_phone", 13 );
                                if( $footer_phone ) {
                                    ?><h5 class="text-center"><?php echo $footer_phone;?></h5><?php
                                }
                            ?>                                
                            <?php
                                $footer_addres = get_field( "footer_addres", 13 );
                                if( $footer_addres ) {
                                    ?><h6 class="text-center"><?php echo $footer_addres;?></h6><?php
                                }
                            ?>                                
                        </div>
                        <?php if( have_rows('social', 13) ): ?>
                            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 text-right">
                                <?php while ( have_rows('social', 13) ) : the_row();?>           
                                    <a href="<?php the_sub_field('social_href');?>"><i class="<?php the_sub_field('social_code');?>" aria-hidden="true"></i></a>
                                <?php endwhile;?>
                            </div>
                        <?php else : endif; ?>                                                        
                </div>
            </footer>
        </div>
	</body>
</html>