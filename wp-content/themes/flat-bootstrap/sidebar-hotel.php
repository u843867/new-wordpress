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
            <aside id="search" class="widget widget_address">
                <address>
                    <p><?php echo( get_field( "hotel_street_address" )); ?></p>
                    <p><?php echo( get_field( "town/city" )); ?></p>
                    <p><?php echo( get_field( "state/county/region" )); ?></p>
                    <p><?php echo( get_field( "post/zip_code" )); ?></p>
                    <p><?php echo( get_field( "country" )); ?></p>
                    <hr>
                </address>
                
                <?php 
                    $location = get_field('location');

                    if( !empty($location) ):
                    ?>
                    <div class="acf-map">
                            <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
                    </div>
                <?php endif; ?>
                
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
