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
                        <div class="panel panel-default panel-body">

                            <?php $town_city = get_field("town/city"); ?>

                            <address> 
                                <ul>
                                    <li><i class="fa fa-map-marker" aria-hidden="true"></i> </li>
                                    <li> <?php echo( get_field("hotel_street_address") . ", "); ?></li>
                                    <li><?php echo( $town_city . ", "); ?></li>
                                    <li><?php echo( get_field("state/county/region") . ", "); ?></li>
                                    <li><?php echo( get_field("post/zip_code") . ", "); ?></li>
                                    <li><?php echo( get_field("country") . "."); ?></li>
                                </ul>
                            </address>
                            <?php
                            if (get_field("telephone_hotel"))
                                ;
                            $hotel_phone = ( get_field("telephone_hotel") );
                            {
                                ?> 
                                <br>

                                <p class="phone"><i class="fa fa-phone" aria-hidden="true"></i> <a href="<?php $hotel_phone ?>"><?php echo( $hotel_phone ) ?></a></p>
    <?php } ?>





                        </div>




                    </div>

                    <!--                store all facilities in temporary variables for use on the page-->

                    <!--Create an array for the Features -->

                    <?php
                    $features_content = [];

                    if (get_field("wifi")) {
                        array_push($features_content, "free wifi");
                    }
                    if (get_field("pool")) {
                        array_push($features_content, "pool");
                    }
                    if (get_field("gym")) {
                        array_push($features_content, "gym");
                    }

                    if (get_field("parking") && empty(get_field("cost_of_parking"))) {
                        array_push($features_content, "parking (free)");
                    } elseif (get_field("parking") && (!empty(get_field("cost_of_parking")))) {
                        array_push($features_content, "parking (not free)");
                    }



//                  store info about the booking
                    $originalBookingDate = get_field('booking_date');
                    $hotel_booked_at = get_field('hotel_booked_at');
//                    $booking_date = date("d-m-Y", strtotime($originalDate));
////                    $booking_date = get_field('booking_date');
                    $booking_date = date("Y M d", strtotime($originalDate));

                    

//                    $date_of_departure = get_field('date_of_departure');
                    $package_or_hotelOnly = get_field('package_or_hotel-only');
                    $price_of_booking = get_field('Price of Booking');
                    $package_contents = get_field('package_contents');
                    $flight_origin = get_field('flight_origin');
                    $flight_destination = get_field('flight_destination');
                    ?>



                    <div class="panel-body">
                        <div class="panel panel-default">
                            <div class="panel-body">


                                <?php foreach ($features_content as $feature) { ?>
                                    <span class="label label-primary"> <?php echo $feature ?> </span>
    <?php } ?>

        <!--                                <span class="label label-primary">Pool</span> 
        <span class="label label-primary">onsite parking</span> <span class="label label-primary">Gym</span>-->

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
                    $tmp_photo1 = ( get_field("photo_1") );
                    $photo_1 = $tmp_photo1['sizes']['carousel-hotel']; //This is the medium image

                    $tmp_photo2 = ( get_field("photo_2") );
                    $photo_2 = $tmp_photo2['sizes']['carousel-hotel']; //This is the medium image

                    $tmp_photo3 = ( get_field("photo_3") );
                    $photo_3 = $tmp_photo3['sizes']['carousel-hotel']; //This is the medium image

                    $tmp_photo4 = ( get_field("photo_4") );
                    $photo_4 = $tmp_photo4['sizes']['carousel-hotel']; //This is the medium image

                    $tmp_photo5 = ( get_field("photo_5") );
                    $photo_5 = $tmp_photo5['sizes']['carousel-hotel']; //This is the medium image

                    $tmp_photo6 = ( get_field("photo_6") );
                    $photo_6 = $tmp_photo6['sizes']['carousel-hotel']; //This is the medium image
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
                    } else {
                        $no_photos = 0;
                    }
                    ?>

    <?php if ($no_photos > 0) { ?>

                        <div id="carousel-example-generic" class="carousel slide" data-interval="false" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <?php for ($i = 0; $i <= ($no_photos - 1); $i++) { ?>
                                    <li data-target="#carousel-example-generic" data-slide-to=<?php echo "$i" ?> class=<?php
                                        if ($i == 0) {
                                            echo"active";
                                        }
                                        ?>></li>
                                    <!--                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                                                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>-->
        <?php } ?>    
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

                                    <div class="item <?php
                                         if ($i == 1) {
                                             echo 'active';
                                         }
                                         ?> ">
                                        <img src="<?php echo $photo_url ?>" alt="...">
                                        <!--                                        <div class="carousel-caption">
                                                                                    Blah Blah
                                                                                </div>-->


                                    </div>
        <?php } ?>
                                <!--                                Outer Blah Blah-->
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


    <?php } ?>
                    </div> 
                    <br><br>

                    <!--Create an array for: room detail, bar, restaurant, pool, gym, toptips-->

                    <?php
                    $accordian_content = [];

                    if (get_field("room_detailed")) {
                        $temp_value = [get_field("room_detailed")];
                        $accordian_content['Hotel Room'] = $temp_value;
                    }

                    if (get_field("hotel_bar")) {
                        $temp_value = [get_field("hotel_bar")];
                        $accordian_content = ['Hotel Bar' => $temp_value];
                    }

                    if (get_field("restaurant")) {
                        $temp_value = [get_field("restaurant")];
                        $accordian_content['Restaurant'] = $temp_value;
                    }

                    if (get_field("pool")) {
                        $temp_value = [get_field("pool")];
                        $accordian_content['Pool'] = $temp_value;
                    }
                    if (get_field("gym")) {
                        $temp_value = [get_field("gym")];
                        $accordian_content['Gym'] = $temp_value;
                    }





                    if (count($accordian_content) > 0) {
                        ?>

                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">


                            <?php
                            $accordian_key = $accordian_content;

                            reset($accordian_content);

                            foreach ($accordian_content as list($a)) {

                                $counter++;

                                if ($counter == 1) {
                                    $temp_counter = 'One';
                                } elseif ($counter == 2) {
                                    $temp_counter = 'Two';
                                } elseif ($counter == 3) {
                                    $temp_counter = 'Three';
                                } elseif ($counter == 4) {
                                    $temp_counter = 'Four';
                                } elseif ($counter == 5) {
                                    $temp_counter = 'Five';
                                }
                                ?>

                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="heading<?php echo($temp_counter) ?>">
                                        <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo($temp_counter) ?>" aria-expanded="true" aria-controls="collapseOne">
                                                <?php
                                                echo key($accordian_key);
                                                next($accordian_key);
                                                ?>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapse<?php echo($temp_counter) ?>" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                        <div class="panel-body">
            <?php echo $a; ?>
                                        </div>
                                    </div>
                                </div>

                        <?php } ?>

                        </div> 
    <?php } ?> 

                    <hr>

                    <!--//this booking information-->

                    
                    <div class="panel-body">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                <h3 class="panel-title">Top tips when staying at <?php echo ' ' . '<p class="top_tips">'. $posts[0]->post_title . "- " . get_field("town/city") . '</p>' ?></h3>
                            </div>
                             
                                
                                <div class="panel-body">
                                    <p>hello bozo</p>
                                </div>
                            </div>

                        </div>

                    
                     
                   
                    


                    <?php get_template_part('content', 'single'); ?>



                    <?php
                    // If comments are open or we have at least one comment, load up the comment template
                    if (comments_open() || '0' != get_comments_number())
                        comments_template();
                    ?>


<?php endwhile; // end of the loop.       ?>

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