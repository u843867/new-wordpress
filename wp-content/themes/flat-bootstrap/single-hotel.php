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
get_header();
?>

<?php get_template_part('content', 'header'); ?>

<div class="container">
    <div id="main-grid" class="row">

        <div id="primary" class="content-area col-md-8">
            <main id="main" class="site-main" role="main">

                <?php while (have_posts()) : the_post(); ?>



                <!--                <p><?php echo( get_field("hotel_street_address")); ?></p>-->


                    <div class="panel-body">
                        <div class="panel panel-default">

                            <div class="panel-body">
                                <address> 
                                    <ul>
                                        <li><i class="fa fa-map-marker" aria-hidden="true"></i> </li>
                                        <li> <?php echo( get_field("hotel_street_address") . ", "); ?></li>
                                        <li><?php echo( get_field("town/city") . ", "); ?></li>
                                        <li><?php echo( get_field("state/county/region") . ", "); ?></li>
                                        <li><?php echo( get_field("post/zip_code") . ", "); ?></li>
                                        <li><?php echo( get_field("country") . "."); ?></li>
                                    </ul>
                                </address>
                            </div>

                        </div>

                    </div>
                    <div class="panel-body">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Summary</h3>
                            </div>
                            <div class="panel-body">
                                <?php echo( get_field("summary")); ?>
                            </div>
                        </div>

                    </div>

             

                    <?php
                    $photo_1 = ( get_field("photo_1"));
                    $photo_2 = ( get_field("photo_2"));
                    $photo_3 = ( get_field("photo_3"));
                    $photo_4 = ( get_field("photo_4"));
                    $photo_5 = ( get_field("photo_5"));
                    $photo_6 = ( get_field("photo_6"));


                    //determine how many photos have been added for the hotel
                    if ($photo_6) {
                        $no_photos = 6;
                    } elseif ($photo_5) {
                        $no_photos = 5;
                    } elseif ($photo_4) {
                        $no_photos = 4;
                    } elseif ($photo_3) {
                        $no_photos = 3;
                    } elseif ($photo_2) {
                        $no_photos = 2;
                    } elseif ($photo_1) {
                        $no_photos = 1;
                    } else
                        $no_photos = 0;

                    ?>


                    <div id="carousel-example-generic" class="carousel slide" data-interval="false" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">

                            <?php
                            for ($i = 1; $i <= $no_photos; $i++) {
                                if ($i == 1) {
                                    $photo_url = $photo_1;
                                } elseif ($i == 2) {
                                    $photo_url = $photo_2;
                                } elseif ($i == 3) {
                                    $photo_url = $photo_3;
                                } elseif ($i == 4) {
                                    $photo_url = $photo_4;
                                } elseif ($i == 5) {
                                    $photo_url = $photo_5;
                                } elseif ($i == 6) {
                                    $photo_url = $photo_6;
                                }
                                ?>

                                <div class="item <?php if ($i==1) { echo ' active'; }?> ">
                                    <img src="<?php echo $photo_url ?>" alt="...">
                                    <div class="carousel-caption">
                                        Blah Blah
                                    </div>
                                </div>

                            <?php } ?>




                            Outer Blah Blah
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>               



                    <?php get_template_part('content', 'single'); ?>



                    <?php
                    // If comments are open or we have at least one comment, load up the comment template
                    if (comments_open() || '0' != get_comments_number())
                        comments_template();
                    ?>

                <?php endwhile; // end of the loop.   ?>

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