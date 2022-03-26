<?php
/**
* Template Name: Contact
*
**/

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		<?php
		if ( have_posts() ) :
		?>

			<section class="site-content">
				<div class="container">
					<?php
						$contact_h1 = get_field( "contact_h1" );
						$google_key = get_field( "google_key" );
						$contact_lat = get_field( "contact_lat" );
						$contact_lon = get_field( "contact_lon" );
						$contact_map_icon = get_field( "contact_map_icon" );
						$contact_addres_title = get_field( "contact_addres_title" );
						$contact_addres_text = get_field( "contact_addres_text" );

						$contact_phone_title = get_field( "contact_phone_title" );

						$contact_email_title = get_field( "contact_email_title" );
						$contact_email_text = get_field( "contact_email_text" );												
					?>					
					<?php the_breadcrumb();?>
					<h1><?php echo $contact_h1;?></h1>
					<div class="contact">
						<div class="md-3">
							<h4><?php echo $contact_addres_title;?></h4>
							<div class="text_block">
								<h3><?php echo $contact_addres_text;?></h3>	
							</div>						
												
							<h4><?php echo $contact_phone_title;?></h4>						
							<div class="text_block">
								<?php if( have_rows('contact_phone') ): ?>
									 	<?php while ( have_rows('contact_phone') ) : the_row();?>
											<h3><a href="tel:<?php the_sub_field('contact_phone_href');?>"><?php the_sub_field('contact_phone_text');?></a></h3>
									    <?php endwhile;?>
								<?php else : ?>
								<?php endif; ?>
							</div>

							<h4><?php echo $contact_email_title;?></h4>
							<div class="text_block">				
								<h3><a href="mailto:<?php echo $contact_email_text;?>"><?php echo $contact_email_text;?></a></h3>
							</div>
						</div>
						<div class="md-9">
							<!-- <div class="map" id="map"></div> -->
							<div class="map" id="map2"></div>
						</div>
					</div>
				</div>			
			</section>


		<?php
		endif;
		?>
		</main><!-- #main -->
	</div><!-- #primary -->
	<!-- OpenStret map -->
	<!-- <script type="text/javascript">
		var contact_lat = <?php // echo json_encode($contact_lat); ?>;
		var contact_lon = <?php // echo json_encode($contact_lon); ?>;
		var contact_map_icon = <?php // echo json_encode($contact_map_icon); ?>;
		var map = L.map('map').setView([contact_lat, contact_lon], 15);

		L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);

		var LeafIcon = L.Icon.extend({
			options: {
				iconSize:     [40, 40],
				iconAnchor:   [-20, 20]
			}
		});

		var greenIcon = new LeafIcon({iconUrl: contact_map_icon});

		L.marker([contact_lat, contact_lon], {icon: greenIcon}).addTo(map);  
	</script> -->

	<!-- Google map -->
    <script>
      var map;
      function initMap() {

		var contact_lat = parseFloat(<?php echo json_encode($contact_lat); ?>);
		var contact_lon = parseFloat(<?php echo json_encode($contact_lon); ?>);
		var contact_map_icon = <?php echo json_encode($contact_map_icon); ?>;

        map = new google.maps.Map(document.getElementById('map2'), {
          center: {lat: contact_lat, lng: contact_lon},
          zoom: 16
        });

        var beachMarker = new google.maps.Marker({
          position: {lat: contact_lat, lng: contact_lon},
          map: map,
          icon: contact_map_icon
        });        
      }
    </script>

	<script src="https://maps.googleapis.com/maps/api/js?key=<?php echo $google_key;?>&callback=initMap" async defer></script>    
<?php
get_footer();
