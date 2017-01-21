<?php
/**
 * Theme: Flat Bootstrap
 * 
 * The Template for displaying all single hotel posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package flat-bootstrap
 */

get_header(); ?>

<?php get_template_part( 'content', 'header' ); ?>

<div class="container">
<div id="main-grid" class="row">

	<div id="primary" class="content-area col-md-8">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

                    
                    
<!--                <p><?php echo( get_field( "hotel_street_address" )); ?></p>-->
                   
                
                
                <div class="panel panel-default">
  <div class="panel-heading">Star Rating</div>
  <div class="panel-body">
    <address>
                    <p><?php echo( get_field( "hotel_street_address" )); ?></p>
                    <p><?php echo( get_field( "town/city" )); ?></p>
                    <p><?php echo( get_field( "state/county/region" )); ?></p>
                    <p><?php echo( get_field( "post/zip_code" )); ?></p>
                    <p><?php echo( get_field( "country" )); ?></p>
                    <hr>
                </address>
  </div>
  <div class="panel-heading">Star Rating</div>
  <div class="panel-body">
    <?php $star = ( get_field( "star_rating"));

                    for ( $i=$star; $i > 0; $i-- ) {
                        
                            echo ("<i class='fa fa-star' aria-hidden='true'></i>");
                        }
                    ?>
  </div>
</div>

<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Summary</h3>
  </div>
  <div class="panel-body">
    <?php echo( get_field( "summary" )); ?>
  </div>
</div>
                
                
                
                
                
                
                
                
                
                    
                    
			<?php get_template_part( 'content', 'single' ); ?>
                            
                            
                    
			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() )
					comments_template();
			?>

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

 <?php
// $queried_object = get_queried_object();
// var_dump( $queried_object );
 
// echo(get_post_type());
 
 ?>
        
        
        
<?php get_sidebar(hotel); ?>
</div><!-- .row -->
</div><!-- .container -->

<?php get_footer(); ?>