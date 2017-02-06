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
                        

<!--                         Table 
                        <table class="table">
                            <tr class="review-score" >
                                <td>Overall</td>

                                <td><?php echo round($average_review,2); ?> /10</td>
                            </tr>
                            <tr>
                                <td>Cleanliness</td>

                                <td><?php echo $cleanliness ?> /10</td>
                            </tr>
                            <tr>
                                <td>Location</td>
                                <td><?php echo $location_rating ?> /10</td>
                            </tr>
                            <tr>
                                <td>Rooms</td>
                                <td><?php echo $rooms ?> /10</td>
                            </tr>
                            <tr>
                                <td>Beds</td>
                                <td><?php echo $beds ?> /10</td>
                            </tr>
                            <tr>
                                <td>Quality</td>
                                <td><?php echo $overall_quality ?> /10</td>
                            </tr>
                            <tr>
                                <td>Staff</td>
                                <td><?php echo $staff ?> /10</td>
                            </tr>
                            <tr>
                                <td>Value</td>
                                <td><?php echo $value ?> /10</td>
                            </tr>

                        </table>-->
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
