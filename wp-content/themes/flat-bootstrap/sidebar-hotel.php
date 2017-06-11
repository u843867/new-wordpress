<?php
/**
 * Theme: Flat Bootstrap
 * 
 * The main sidebar positioned on the right by default. This theme does have an
 * alternate page template to put this sidebar on the left. By default, if no widgets
 * have been added, display some as samples. However, there is a filter to allow child
 * themes to override the samples or remove them altogether.
 *
 * @package flat-bootstrap
 */
?>
	<div id="secondary" class="widget-area col-md-4" role="complementary">
            <aside class="widget widget_address rm">
                
                
                
                <?php 
                    $location = get_field('location');

                    if( !empty($location) ):
                    ?>
                    <div class="acf-map">
                            <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
                    </div>
                    
                <?php endif; ?>
                
                
                
            </aside>
            
            
            
            <?php 
                $cleanliness = get_field('cleanliness')*10;
                $location_rating = get_field('location_rating')*10;
                $rooms = get_field('rooms')*10;
                $beds = get_field('beds')*10;
                $overall_quality = get_field('overall_quality')*10;
                $staff = get_field('staff')*10;
                $value = get_field('value_for_money')*10;  
                
                $average_review = ($cleanliness + $location_rating + $rooms + $beds + $overall_quality + $staff + $value) / 7; 
            
                $price_of_booking = get_field('Price of Booking');
                
                $originalArrivalDate = get_field('date_of_arrival');
                $date_of_arrival = date("d M Y", strtotime($originalArrivalDate));

                $originalDepartDate = get_field('date_of_departure');
                $date_of_departure = date("d M Y", strtotime($originalDepartDate));
                
                $hotel_booked_at = get_field('hotel_booked_at');
                
                $package_or_hotelOnly = get_field('package_or_hotel-only');
                    
                $package_contents = get_field('package_contents');
                $flight_origin = get_field('flight_origin');
                $flight_destination = get_field('flight_destination');

                       
                
                
            ?>
            
            
            <aside>
                

                <div class="widget rm">
                    <!-- Default panel contents -->
                    <h2 class="widget-title">Quick Review</h2>
                    
                    <div class="panel-body">
                        
                        <h3 class="panel-title">Cleanliness</h3>
                        <div class="progress">
                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="<?php echo $cleanliness ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $cleanliness ?>%">
                            <span class="sr-only"><?php echo $cleanliness ?>% Complete</span>  
                            </div>
                        </div>
                        
                        <h3 class="panel-title">Location</h3>
                        <div class="progress">
                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="<?php echo $location_rating ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $location_rating ?>%">
                            <span class="sr-only"><?php echo $location_rating ?>% Complete</span>  
                            </div>
                        </div>
                        
                        <h3 class="panel-title">Rooms</h3>
                        <div class="progress">
                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="<?php echo $rooms ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $rooms ?>%">
                            <span class="sr-only"><?php echo $rooms ?>% Complete</span>  
                            </div>
                        </div>
                        
                        <h3 class="panel-title">Beds</h3>
                        <div class="progress">
                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="<?php echo $beds ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $beds ?>%">
                            <span class="sr-only"><?php echo $beds ?>% Complete</span>  
                            </div>
                        </div>
                        
                        <h3 class="panel-title">Quality</h3>
                        <div class="progress">
                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="<?php echo $overall_quality ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $overall_quality ?>%">
                            <span class="sr-only"><?php echo $overall_quality ?>% Complete</span>  
                            </div>
                        </div>
                        
                        <h3 class="panel-title">Staff</h3>
                        <div class="progress">
                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="<?php echo $staff ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $staff ?>%">
                            <span class="sr-only"><?php echo $staff ?>% Complete</span>  
                            </div>
                        </div>
                        
                        <h3 class="panel-title">Value</h3>
                        <div class="progress">
                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="<?php echo $value ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $value ?>%">
                            <span class="sr-only"><?php echo $value ?>% Complete</span>  
                            </div>
                        </div>
                        
                    </div>


                </div>
            </aside>
            
            <aside class="widget widget_address rm">
                
                <div>
                    <h2 class="widget-title">Top tips</h2>
                    <h4><?php echo $posts[0] -> post_title . "- " . get_field("town/city") ?></h4>
                    
                </div> 
                
            </aside>
            
            
            <aside class="widget widget_address rm" id="book">
                
                <div class="row">
                        <div class="col-md-12 ">

                              <h2 class="widget-title">hotel review details...</h2>


                                        
                                            <ul class="booking_details">
                                                <li><i class="fa fa-calendar" aria-hidden="true"></i><?php echo("<p class='prompt'>Checked In:</p>" . "&nbsp" . "<p class='pvalue'> $date_of_arrival </p>" ); ?> </li>
                                                <li><i class="fa fa-calendar" aria-hidden="true"></i><?php echo("<p class='prompt'>Checked Out:</p>" . "&nbsp" . "<p class='pvalue'> $date_of_departure </p>" ); ?> </li>

                                                <li><i class="fa fa-shopping-cart" aria-hidden="true"></i><?php echo("<p class='prompt'>Booked at:</p>" . "&nbsp" . "<p class='pvalue'>" . "<img class='booked_image' src='$hotel_booked_at' />" ); ?> </li>

                                        <?php if ($price_of_booking) { ?>        
                                                <li><i class="fa fa-money" aria-hidden="true"></i><?php echo("<p class='prompt'>Booking Cost:</p>" . "&nbsp" . "<p class='pvalue'> $price_of_booking </p>" ); ?> </li>
                                        <?php } ?>
                                        
                                        <?php if ($package_or_hotelOnly) { ?>        
                                                <li><i class="fa fa-square" aria-hidden="true"></i><?php echo( "<p class='prompt'>Booking Type:</p>" . "&nbsp" . "<p class='pvalue'> $package_or_hotelOnly </p>" ) ?>
                                                <?php if ($package_or_hotelOnly == 'package') { 
                                                echo('('.$package_contents[0].', '.$package_contents[1].')'); } ?>
                                                </li>
                                                <li><i class="fa fa-plane" aria-hidden="true"></i><?php echo("<p class='prompt'>Flight:</p>" . "&nbsp" . "<p class='pvalue'> $flight_origin  - $flight_destination  </p>" ); ?> </li>
              
                                            </ul>
                                            <?php } ?> 
                                    


                        </div>

                    </div>
                
               
                
                
                
            </aside>
            
            
            
		<?php do_action( 'before_sidebar' ); ?>
		<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>

			<aside id="search" class="widget widget_search">
				<br />
				<?php get_search_form(); ?>
			</aside>

			<aside id="pages" class="widget widget_pages">
				<h2 class="widget-title"><?php _e( 'Site Content', 'flat-bootstrap' ); ?></h2>
				<ul>
					<?php wp_list_pages( array( 'title_li' => '' ) ); ?>
				</ul>
			</aside>

			<aside id="tag_cloud" class="widget widget_tag_cloud">
				<h2 class="widget-title"><?php _e( 'Categories', 'flat-bootstrap' ); ?></h2>
					<?php wp_tag_cloud( array( 'separator' => ' ', 'taxonomy' => 'category' ) ); ?>
			</aside>

		<?php endif; // end sidebar widget area ?>
	</div><!-- #secondary -->
