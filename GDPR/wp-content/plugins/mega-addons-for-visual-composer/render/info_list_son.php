<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

class WPBakeryShortCode_info_list_son extends WPBakeryShortCode {

	protected function content( $atts, $content = null ) {

		extract( shortcode_atts( array(
			'theme'			=>		'left',
			'style'			=>		'image',
			'image_id'		=>		'',
			'icon'			=>		'',
			'size'			=>		'30px',
			'width'			=>		'80px',
			'height'		=>		'80px',
			'imgstyle'		=>		'img-rounded',
			'iconclr'		=>		'#000',
			'iconbg'		=>		'#fff',
			'borderwidth'	=>		'',
			'borderstyle'	=>		'solid',
			'radius'		=>		'50%',
			'borderclr'		=>		'',
			'title'			=>		'',
			'titlesize'		=>		'18px',
			'titleclr'		=>		'#000',
			'title_weight'	=>		'default',
			'desc'			=>		'',
			'descsize'		=>		'15px',
			'connector_h'	=>		'30px',
			'descclr'		=>		'#000',
			'listwidth'		=>		'1px',
			'liststyle'		=>		'solid',
			'listclr'		=>		'#000',
		), $atts ) );
		if ($image_id != '') {
			$image_url = wp_get_attachment_url( $image_id );		
		}
		$content = wpb_js_remove_wpautop($content, true);
		ob_start(); ?>
		<div class="program">
			<?php if ($theme == 'left') { ?>			    	
			    <div class="row">
			      <div class="col-2">
			        <div class="time text-center">
			        	<span>
				    		<?php echo $title; ?>
				    	</span>
			        </div>
			      </div>
			      <div class="col-1 text-center img-list d-none d-md-block">
			        <img src="<?php echo plugin_dir_url( __FILE__ ).'../images/rectangle-4-copy-6@2x.png';?>">
			      </div>
			      <div class="col-9">
			      <div class="text-block">
			      <div class="row">		      
			      <div class="col-12 col-sm-12 col-md-8	col-lg-8 col-xl-8">
				      <div class="text_bord">
					    	<p style="font-size: <?php echo $descsize; ?>; color: <?php echo $descclr; ?>;">
					    		<?php echo $desc; ?>
					    	</p>
				      </div>
			      </div>
			      <div class="col-4 d-none d-md-block">
			        <div class="img-block text-center">
					  <div class="media-left info-list-img" style="margin-left: -<?php echo $width/2+$borderwidth; ?>px; padding-right: 20px; float: left;">
					    <?php if ($style == 'image') { ?>
				        	<img src="<?php echo $image_url; ?>" style="width: <?php echo $width; ?>; height: <?php echo $height; ?>;" class="<?php echo $imgstyle; ?>">
				        <?php } ?>
				        <?php if ($style == 'icon') { ?>
				        <div>
					        <span style="display:table; width: <?php echo $width; ?>; height: <?php echo $height; ?>; border-radius: <?php echo $radius; ?>; text-align: center;">
						    	<span style="display: table-cell !important;vertical-align: middle !important;">
						        
						        	<i class="<?php echo $icon; ?>" aria-hidden="true" style="font-size: <?php echo $size; ?>; color: <?php echo $iconclr; ?>;"></i>
					       	 	
					       	 	</span>
						  	</span>
						</div>
						<?php } ?>
					  </div>			          
			        </div>
			      </div>
			      </div>
			      </div>
			      </div>
			    </div>
			<?php } ?>

			<?php if ($theme == 'right') { ?>
			    <div class="row">
			      <div class="col-2">
			        <div class="time text-center">
			        	<span>
				    		<?php echo $title; ?>
				    	</span>
			        </div>
			      </div>
			      <div class="col-1 text-center img-list d-none d-md-block">
			        <img src="<?php echo plugin_dir_url( __FILE__ ).'../images/rectangle-4-copy-6@2x.png';?>">
			      </div>
			      <div class="col-9">
			      <div class="text-block">
				    	<p style="font-size: <?php echo $descsize; ?>; color: <?php echo $descclr; ?>;">
				    		<?php echo $desc; ?>
				    	</p>
			      </div>
			      </div>
			    </div>
			<?php } ?>	
		</div>

		<?php return ob_get_clean();
	}
}


vc_map( array(
	"base" 			=> "info_list_son",
	"name" 			=> __( 'Info List Settings', 'infolist' ),
	"as_child" 		=> array('only' => 'info_list_father'),
	"content_element" => true,
	"category" 		=> __('Mega Addons'),
	"description" 	=> __('Info list for information', ''),
	"icon" => plugin_dir_url( __FILE__ ).'../icons/infolist.png',
	'params' => array(
		array(
			"type" 			=> 	"dropdown",
			"heading" 		=> 	__( 'Style', 'infolist' ),
			"param_name" 	=> 	"theme",
			"description" 	=> 	__( 'choose style', 'infolist' ),
			"group" 		=> 'Icon/Image',
			"value"			=> array(
				"With img"			=>	"left",
				"Without img"			=>	"right",
			)
		),
		array(
			"type" 			=> 	"dropdown",
			"heading" 		=> 	__( 'Image/Icon', 'infolist' ),
			"param_name" 	=> 	"style",
			"description" 	=> 	__( 'select', 'infolist' ),
			"group" 		=> 'Icon/Image',
			"value"			=> array(
				"Image"			=>	"image",
				"Icon"			=>	"icon",
			)
		),
		array(
            "type" 			=> 	"attach_image",
			"heading" 		=> 	__( 'Image', 'infolist' ),
			"param_name" 	=> 	"image_id",
			"description" 	=> 	__( 'Select the image', 'infolist' ),
			"dependency" => array('element' => "style", 'value' => 'image'),
			"group" 		=> 	'Icon/Image',
        ),
        array(
            "type" 			=> 	"iconpicker",
			"heading" 		=> 	__( 'Icon', 'infolist' ),
			"param_name" 	=> 	"icon",
			"description" 	=> 	__( 'Select icon', 'infolist' ),
			"dependency" => array('element' => "style", 'value' => 'icon'),
			"group" 		=> 	'Icon/Image',
        ),
        array(
            "type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Font Size', 'infolist' ),
			"param_name" 	=> 	"size",
			"description" 	=> 	__( 'icon font size in pixel eg, 30px', 'infolist' ),
			"dependency" => array('element' => "style", 'value' => 'icon'),
			"value"			=>	"30px",
			"group" 		=> 	'Icon/Image',
        ),
        array(
            "type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Width', 'infolist' ),
			"param_name" 	=> 	"width",
			"description" 	=> 	__( 'set width in pixel eg, 80px', 'infolist' ),
			"value"			=>	"80px",
			"group" 		=> 	'Icon/Image',
        ),
        array(
            "type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Height', 'infolist' ),
			"param_name" 	=> 	"height",
			"description" 	=> 	__( 'set height in pixel eg, 80px', 'infolist' ),
			"value"			=>	"80px",
			"group" 		=> 	'Icon/Image',
        ),
        array(
			"type" 			=> 	"dropdown",
			"heading" 		=> 	__( 'Image Style', 'infolist' ),
			"param_name" 	=> 	"imgstyle",
			"description" 	=> 	__( 'choose style', 'infolist' ),
			"group" 		=> 'Icon/Image',
			"dependency" => array('element' => "style", 'value' => 'image'),
			"value"			=> array(
				"Rounded"		=>	"img-rounded",
				"Thumbnail"		=>	"img-thumbnail",
				"Circle"		=>	"img-circle",
			)
		),
		array(
			"type" 			=> 	"colorpicker",
			"heading" 		=> 	__( 'Color', 'infolist' ),
			"param_name" 	=> 	"iconclr",
			"description" 	=> __('For icon', 'infolist'),
			"dependency" => array('element' => "style", 'value' => 'icon'),
			"group" 		=> 'Icon/Image',
		),
        array(
			"type" 			=> 	"colorpicker",
			"heading" 		=> 	__( 'Backgroud color', 'infolist' ),
			"param_name" 	=> 	"iconbg",
			"description" 	=> __('For icon', 'infolist'),
			"dependency" => array('element' => "style", 'value' => 'icon'),
			"group" 		=> 'Icon/Image',
		),


		// Border
		
		array(
            "type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Border width', 'infolist' ),
			"param_name" 	=> 	"borderwidth",
			"description" 	=> 	__( 'set border width eg, 5px', 'infolist' ),
			"dependency" => array('element' => "style", 'value' => 'icon'),
			"value"			=>	"5px",
			"group" 		=> 	'Icon/Image',
        ),

        array(
			"type" 			=> 	"dropdown",
			"heading" 		=> 	__( 'Border Style', 'infolist' ),
			"param_name" 	=> 	"borderstyle",
			"description" 	=> 	__( 'select border style', 'infolist' ),
			"group" 		=> 'Icon/Image',
			"dependency" => array('element' => "style", 'value' => 'icon'),
			"value"			=> array(
				"Solid"		=>		"solid",
				"Dotted"	=>		"dotted",
				"Rige"		=>		"rige",
				"Dashed"	=>		"dashed",
				"Double"	=>		"double",
				"Groove"	=>		"groove",
				"Inset"		=>		"inset",
			)
		),
		array(
            "type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Border Radius', 'infolist' ),
			"param_name" 	=> 	"radius",
			"description" 	=> 	__( 'set border radius eg, 5px or 5%', 'infolist' ),
			"dependency" => array('element' => "style", 'value' => 'icon'),
			"value"			=>	"50%",
			"group" 		=> 	'Icon/Image',
        ),
		array(
			"type" 			=> 	"colorpicker",
			"heading" 		=> 	__( 'Border color', 'infolist' ),
			"param_name" 	=> 	"borderclr",
			"description" 	=> __('border color', 'infolist'),
			"dependency" => array('element' => "style", 'value' => 'icon'),
			"group" 		=> 'Icon/Image',
		),

		// Text File

		array(
			"type" 			=> 	"textarea",
			"heading" 		=> 	__( 'Title', 'infolist' ),
			"param_name" 	=> 	"title",
			"group" 		=> 'Content',
		),
		array(
			"type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Title Font Size', 'infolist' ),
			"param_name" 	=> 	"titlesize",
			"description" 	=> 	__('set in pixel, default 18px', 'infolist'),
			"value"			=>	"18px",
			"group" 		=> 	'Content',
		),
		array(
			"type" 			=> 	"colorpicker",
			"heading" 		=> 	__( 'Title Color', 'infolist' ),
			"param_name" 	=> 	"titleclr",
			"value"			=>	"#000",
			"group" 		=> 	'Content',
		),

		array(
			"type" 			=> 	"dropdown",
			"heading" 		=> 	__( 'Font Weight', 'infolist' ),
			"param_name" 	=> 	"title_weight",
			"group" 		=> 'Content',
			"value"			=> array(
				"Default"			=>	"default",
				"Bold"				=>	"bold",
				"Italic"			=>	"italic",
			)
		),

		array(
			"type" 			=> 	"textarea",
			"heading" 		=> 	__( 'Description', 'infolist' ),
			"param_name" 	=> 	"desc",
			"group" 		=> 'Content',
		),
		array(
			"type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Description Font Size', 'infolist' ),
			"param_name" 	=> 	"descsize",
			"description" 	=> 	__('set in pixel, default 15px', 'infolist'),
			"value"			=>	"15px",
			"group" 		=> 	'Content',
		),
		array(
			"type" 			=> 	"colorpicker",
			"heading" 		=> 	__( 'Description Color', 'infolist' ),
			"param_name" 	=> 	"descclr",
			"value"			=>	"#000",
			"group" 		=> 	'Content',
		),

		// Settings
		
		array(
            "type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Connector Line Height', 'infolist' ),
			"param_name" 	=> 	"connector_h",
			"description" 	=> 	__( 'line between to info list. set in pixel default 30px', 'infolist' ),
			"value"			=>	"30px",
			"group" 		=> 	'Settings',
        ),
		array(
            "type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Connector Width', 'infolist' ),
			"param_name" 	=> 	"listwidth",
			"description" 	=> 	__( 'set connector line width for info list in pixel eg, 1px', 'infolist' ),
			"value"			=>	"1px",
			"group" 		=> 	'Settings',
        ),
		array(
			"type" 			=> 	"dropdown",
			"heading" 		=> 	__( 'Line Style', 'infolist' ),
			"param_name" 	=> 	"liststyle",
			"description" 	=> 	__( 'set border style for info list', 'infolist' ),
			"group" 		=> 'Settings',
			"value"			=> array(
				"Solid"			=>	"solid",
				"Dotted"		=>	"dotted",
				"Dashed"		=>	"dashed",
				"Inset"			=>	"inset",
			)
		),
		array(
			"type" 			=> 	"colorpicker",
			"heading" 		=> 	__( 'Line color', 'infolist' ),
			"param_name" 	=> 	"listclr",
			"description" 	=> __('set connector line color for info list', 'infolist'),
			"group" 		=> 'Settings',
		),
	),
) );
