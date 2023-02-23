<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Hotel_booking_freebie
 */
$post_id = get_the_ID();
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<!--Bread crumb div-->
  <section class="bread-crumb">
    <div class="site-wrapper">
      <ul class="breadcrumb">
        <li><a href="<?= get_home_url()?>">Home</a></li>
        <li><a href="#">Flash Offers</a></li>
        <li><a href="<?= the_permalink(); ?>"><?php the_title();?></a></li>
      </ul>
    </div>
  </section>

  <!--Grand Hilton Hotel-->
  <section class="hotel-wrapper">
    <div class="site-wrapper">
      <div class="hotel-name">
        <div>
          <!--Star image-->
          <span class="stars">
            <img src="<?php echo get_template_directory_uri() ?>/asset/images/Stars.png" alt="">
          </span>
          <!--GRAND HILTON HOTEL-->
          <div class="hilton-section">
            <h3><?php echo the_title(); ?></h3>
            <span>
              <p>Flash Offer</p>
            </span>
          </div>
          <span class="half-board">
            <p><?php echo the_field('hotel_subtitle', $post_id); ?>
            </p>
          </span>
        </div>
        <div class="user-rating">
          <span class="user">
            <p>User Ratings</p>
            <span class="rate">
              <p>
                <svg
                  width="31"
                  height="12"
                  viewBox="0 0 31 12"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M8.064 9.054H6.65V11H4.886V9.054H0.546V7.71L5.208 1.032H6.65V7.64H8.064V9.054ZM4.886 7.64V3.846L2.254 7.64H4.886ZM11.1245 9.04V11H9.16453V9.04H11.1245ZM16.6402 4.63C17.2655 4.63 17.8162 4.76533 18.2922 5.036C18.7682 5.29733 19.1369 5.67067 19.3982 6.156C19.6595 6.632 19.7902 7.18267 19.7902 7.808C19.7902 8.46133 19.6409 9.04 19.3422 9.544C19.0435 10.0387 18.6142 10.426 18.0542 10.706C17.4942 10.9767 16.8455 11.112 16.1082 11.112C15.4829 11.112 14.8669 11.0093 14.2602 10.804C13.6535 10.5893 13.1542 10.3047 12.7622 9.95L13.3642 8.634C14.2695 9.32467 15.1935 9.67 16.1362 9.67C16.7615 9.67 17.2375 9.516 17.5642 9.208C17.9002 8.89067 18.0682 8.44267 18.0682 7.864C18.0682 7.31333 17.8955 6.87467 17.5502 6.548C17.2142 6.212 16.7615 6.044 16.1922 6.044C15.8002 6.044 15.4315 6.11867 15.0862 6.268C14.7409 6.408 14.4375 6.618 14.1762 6.898H13.0842V1.032H19.3282V2.432H14.8482V5.148C15.3522 4.80267 15.9495 4.63 16.6402 4.63ZM19.9527 11.826L23.5787 0.458H25.0767L21.4227 11.826H19.9527ZM28.0988 6.45C28.5454 6.45 28.9388 6.54667 29.2788 6.74C29.6188 6.92667 29.8821 7.19333 30.0688 7.54C30.2554 7.88 30.3488 8.27333 30.3488 8.72C30.3488 9.18667 30.2421 9.6 30.0288 9.96C29.8154 10.3133 29.5088 10.59 29.1088 10.79C28.7088 10.9833 28.2454 11.08 27.7188 11.08C27.2721 11.08 26.8321 11.0067 26.3988 10.86C25.9654 10.7067 25.6088 10.5033 25.3288 10.25L25.7588 9.31C26.4054 9.80333 27.0654 10.05 27.7388 10.05C28.1854 10.05 28.5254 9.94 28.7588 9.72C28.9988 9.49333 29.1188 9.17333 29.1188 8.76C29.1188 8.36667 28.9954 8.05333 28.7488 7.82C28.5088 7.58 28.1854 7.46 27.7788 7.46C27.4988 7.46 27.2354 7.51333 26.9888 7.62C26.7421 7.72 26.5254 7.87 26.3388 8.07H25.5588V3.88H30.0188V4.88H26.8188V6.82C27.1788 6.57333 27.6054 6.45 28.0988 6.45Z"
                    fill="white"
                    />
                </svg>
              </p>
            </span>
          </span>
        </div>
      </div>
      <!---->
      <div class="slider" id="slider">
      <!---->
        <div class="beach">
          <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
        </div>
        <!---->
        <div class="column-wrapper">
          <div class="view-options">
            <div class="card-wrapper">
              <div class="price-room">
                <div class="price">
                  <p>price starts as</p>
                  <strong> $ <?php echo get_field('prices', $post_id); ?> </strong> <br />
                  <p>per room / night</p>
                </div>
                <div class="room">
                  <span>
                    <p>
                    <img src="<?php echo get_template_directory_uri() ?>/asset/icons/user.png" alt="">&nbsp;&nbsp;&nbsp; <?php echo get_field('number_of_guests', $post_id); ?>x
                      Guests
                    </p>
                    <p>
                    <img src="<?php echo get_template_directory_uri() ?>/asset/icons/home.png" alt="">&nbsp;
                      &nbsp;
                      &nbsp;
                      <?php echo the_field('number_of_rooms', $post_id); ?>x Room

                    </p>
                  </span>
                </div>
              </div>

              <div class="booking">
                <h4>Quick Booking</h4>
                <span>
                  <p>
                    <img src="<?php echo get_template_directory_uri() ?>/asset/icons/phone-call.png" alt="">
                    &nbsp;&nbsp;
                    <?php echo the_field('contact', $post_id); ?>
                  </p>
                </span>
              </div>

              <span class="view-other-options">
                <p><a href="">View other Options</a></p>
              </span>
            </div>
          </div>
          <div class="mapouter">
            <div class="gmap_canvas map">
            <?php echo the_field('hilton_map', $post_id); ?>
              <iframe
                width="600"
                height="213"
                id="gmap_canvas"
                src="https://maps.google.com/maps?q=2880%20Broadway,%20New%20York&t=&z=13&ie=UTF8&iwloc=&output=embed"
                frameborder="0"
                scrolling="no"
                marginheight="0"
                marginwidth="0"
              ></iframe
              ><a href="https://123movies-to.org"></a><br ><style>
              .mapouter {
                position: relative;
                text-align: right;
                height: 213px;
                width: 100%;
              }</style
              ><a href="https://www.embedgooglemap.net"
              >google maps for my website</a
              ><style>
              .gmap_canvas {
                overflow: hidden;
                background: none !important;
                height: 208px;
                width: 100%;
              }
              </style>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--PACKAGE SECTION-->
  <section class="package-section">
    <div class="site-wrapper">

      <div class="package-container">

        <div class="package-menu" id="package-menu">
          <p><a href="">Package Summary</a></p>
          <p><a href="">Hotel Information</a></p>
          <p><a href="">Rooms</a></p>
          <p><a href="">Facilities & Activities</a></p>
          <p><a href="">Dining & Entertainment</a></p>
          <p><a href="">Reviews</a></l>
          <p><a href="">Questions & Answers</a></p>

        </div>

        <div class="package-summery">

          <h3>PACKAGE SUMMERY</h3>
          <div class="package-offer" id="package-offer">
            <div class="package-card1">

              <span class="highlight-header">

                <h5>Package Highlights</h5>
              </span>
              <div class="card-highlight-wrapper">
                <div class="card-highlight">

                  <?php $package_details = get_field('package_summery', $post_id);

                    $package_highlights = $package_details['package_highlights'];
                  ?>
                  <?php $offer_details = get_field('offer_details', $post_id);

                    $special_offer = $offer_details['special_offer'];

                    // $start_date = $offer_details['start_date'];

                    // $end_date = $offer_details['end_date'];
                  ?>
                  <?php $package_details_2 = get_field('package_summery', $post_id);

                    $package_highlights_2 = $package_details_2['package_highlights_2'];
                  ?>
                  <div class="card1">
                    <?php foreach($package_highlights as $package_highlights) { ?>

                      <p><img src="<?php echo get_template_directory_uri() ?>/asset/icons/Group.png" alt="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $package_highlights->name; ?></p>
                    <?php } ?>
                  </div>
                  <div class="card2">
                  <?php foreach($package_highlights_2 as $package_highlights_2) { ?>
                    <p><img src="<?php echo get_template_directory_uri() ?>/asset/icons/Group.png" alt="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $package_highlights_2->name; ?></p>
                  <?php } ?>
                  </div>
                </div>
              </div>
            </div>

            <div class="package-card2">

              <span class="details-header">

                <h5>Offer Details</h5>
              </span>
              <div class="card-details-wrapper">
                <div class="card-Details">

                  <div class="card1">
                    <span >
                    <img src="<?php echo get_template_directory_uri() ?>/asset/icons/Group.png" alt="">
                    </span>
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    <span class="design">

                      <?php foreach($special_offer as $special_offer) { ?>
                        <p><?php echo $special_offer->name; ?>
                        </p>

                      <?php } ?>

                    </span>

                  </div>
                  <div class="card2">
                    <p><img src="<?php echo get_template_directory_uri() ?>/asset/icons/Vector.png" alt="">&nbsp;&nbsp;10th March
                    - 30th April 2020</p>
                  </div>

                </div>

              </div>
            </div>

          </div>

          <!---->
          <div class="package-card-details" id="package-card-details">
            <span class="card-head">

              <h5>Package Summery Details</h5>
            </span>
            <div class="package-details-wrapper">
              <div class="summary-details">
                <div class="first-three">

                <?php $summary_details = get_field('package_summary_details', $post_id);

                 $purchase_inclusions = $summary_details['inclusions'];

                 $complimentary_land_activities = $summary_details['complimentary_land_activities'];

                 $complimentary_water_activities = $summary_details['complimentary_water_activities'];

                 $meal_plan_available = $summary_details['meal_available'];

                 $entertainment = $summary_details['entertainment_plans'];

                 $check_in = $summary_details['check_in'];

                //  $check_out = $summary_details['check_out'];
                ?>
                <div class="activity1">
                  <h6>Purchase Inclusions</h6>
                  <div class="first">
                    <?php foreach($purchase_inclusions as $purchase_inclusions) { ?>

                      <p><img src="<?php echo get_template_directory_uri() ?>/asset/icons/Group.png" alt="">&nbsp;&nbsp; <?php echo $purchase_inclusions->name; ?></p>
                    <?php } ?>
                  </div>

                </div>
                  <div class="activity2">
                    <h6>Complimentary Land Based Activities</h6>
                    <div class="first">
                    <?php foreach($complimentary_land_activities as $complimentary_land_activities) { ?>
                      <p><img src="<?php echo get_template_directory_uri() ?>/asset/icons/Group.png" alt="">&nbsp;&nbsp; <?php echo $complimentary_land_activities->name; ?></p>
                      <?php } ?>
                    </div>

                  </div>
                  <div class="activity3">
                    <h6>Complimentary Water Based Activities</h6>
                    <div class="first">
                    <?php foreach($complimentary_water_activities as $complimentary_water_activities) { ?>
                      <p><img src="<?php echo get_template_directory_uri() ?>/asset/icons/Group.png" alt="">&nbsp;&nbsp; <?php echo $complimentary_water_activities->name; ?></p>
                      <?php } ?>
                    </div>

                  </div>
                </div>

                <div class="last-three">
                  <div class="activity4">
                    <h6>Meal Plan Available</h6>
                    <div class="first">
                    <?php foreach($meal_plan_available as $meal_plan_available) { ?>

                      <p><img src="<?php echo get_template_directory_uri() ?>/asset/icons/Group.png" alt="">&nbsp;&nbsp; <?php echo $meal_plan_available->name; ?></p>
                      <?php } ?>
                    </div>
                  </div>
                  <div class="activity5">
                    <h6>Entertainment</h6>
                    <div class="first">
                    <?php foreach($entertainment as $entertainment) { ?>

                      <p><img src="<?php echo get_template_directory_uri() ?>/asset/icons/Group.png" alt="">&nbsp;&nbsp; <?php echo $entertainment->name; ?></p>
                    <?php } ?>
                    </div>
                  </div>
                  <div class="activity6">
                    <h6>Check In & Check Out</h6>
                    <div class="first">
                      <p><img src="<?php echo get_template_directory_uri() ?>/asset/icons/Group.png" alt="">&nbsp;&nbsp; Check In Time 14:00</p>
                      <p><img src="<?php echo get_template_directory_uri() ?>/asset/icons/Group.png" alt="">&nbsp;&nbsp; Check Out Time 11:00</p>
                    </div>
                  </div>

                </div>
              </div>

            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!--OTHER PACKAGE SECTION-->
  <section class="other-packages-section">
    <div class="site-wrapper">
      <div class="other-package-wrapper">
        <div class="other-package-header">
          <h2>OTHER PACKAGES</h2>
        </div>

        <!---->
        <div class="trip-advisor-wrapper" id="trip-advisor-wrapper">

          <div class="wrapp1">
            <div class="wrapp-image">
              <img src="<?php echo get_field('hotel_blue_haven_image', $post_id); ?>" alt="">
              <span>
                <p>Flash Offer</p>
              </span>
            </div>
            <div class="advisor-style">
              <div class="style-wrapper">
                <span>
                  <img src="<?php echo get_template_directory_uri() ?>/asset/images/Stars.png" alt="">

                  <h4>Hotel Blue Haven</h4>

                  <p>Aute quis duis excepteur excepteur ipsum cat eiusmod consectetur enim laborum magna llit. Ipsum est fugiat velit ea llamco do esse ut in veniam sun in onsequat. Aute quis duis epteur excepteur ipsum occaecat eiusmod nsectetur enim laborum magna mollit. Ipsum est fugiat velit ea ullamco do</p>

                  <span class="person-room">
                    <p><img src="<?php echo get_template_directory_uri() ?>/asset/icons/map-pin.png" alt="">&nbsp;&nbsp; 1749 Wheeler Ridge  Delaware</p>
                    <p><img src="<?php echo get_template_directory_uri() ?>/asset/icons/user.png" alt="">&nbsp;&nbsp;&nbsp;<?php echo get_field('hotel_blue_haven_guest', $post_id); ?> x Guests</p>
                    <p><img src="<?php echo get_template_directory_uri() ?>/asset/icons/home.png" alt="">&nbsp;&nbsp;&nbsp;<?php echo get_field('hotel_blue_haven_rooms', $post_id); ?> x Room</p>
                  </span>


                  <div class="book-now">
                    <span>
                      <p class="slashed">$ 10,500</p>
                      <h3>$ <?php echo get_field('hotel_blue_haven_price', $post_id); ?></h3>

                    </span>
                    <button>Book  Now</button>


                  </div>
                </span>
              </div>
            </div>
          </div>
              <!---->
              <div class="wrapp2">
                <div class="wrapp2-image">
                  <img src="<?php echo get_field('lux*_belle_mare_hotel_image', $post_id); ?>" alt="">
                  <span>
                    <p>Flash Offer</p>
                  </span>
                </div>
                <div class="advisor-style2">
                  <div class="style-wrapper">
                    <span>



                      <h4>LUX* Belle Mare</h4>

                      <span class="person-room">
                        <p><img src="<?php echo get_template_directory_uri() ?>/asset/icons/map-pin.png" alt="">&nbsp;&nbsp; 1749 Wheeler Ridge  Delaware</p>
                        <p><img src="<?php echo get_template_directory_uri() ?>/asset/icons/user.png" alt="">&nbsp;&nbsp;&nbsp;<?php echo get_field('lux*_belle_mare_hotel_guest', $post_id); ?> x Guests</p>
                        <p><img src="<?php echo get_template_directory_uri() ?>/asset/icons/home.png" alt="">&nbsp;&nbsp;&nbsp;<?php echo get_field('lux*_belle_mare_hotel_rooms', $post_id); ?> x Room</p>
                      </span>


                      <div class="book-now">
                        <span>
                          <p class="slashed">$ 8,500</p>
                          <h3>$ <?php echo get_field('lux*_belle_mare_hotel_price', $post_id); ?></h3>

                        </span>
                        <button>Book  Now</button>
                      </div>
                    </span>


                  </div>
                </div>

              </div>

              <!---->
              <div class="wrapp3">
                <div class="wrapp3-image">
                  <img src="<?php echo get_field('white_palace_hotel_image', $post_id); ?>" alt="">
                  <span>
                    <p>Flash Offer</p>
                  </span>
                </div>
                <div class="advisor-style3">
                  <div class="style-wrapper">
                    <span>



                      <h4>White Palace</h4>

                      <span class="person-room">
                        <p><img src="<?php echo get_template_directory_uri() ?>/asset/icons/map-pin.png" alt="">&nbsp;&nbsp; 1749 Wheeler Ridge  Delaware</p>
                        <p><img src="<?php echo get_template_directory_uri() ?>/asset/icons/user.png" alt="">&nbsp;&nbsp;&nbsp;<?php echo get_field('white_palace_hotel_guest', $post_id); ?> x Guests</p>
                        <p><img src="<?php echo get_template_directory_uri() ?>/asset/icons/home.png" alt="">&nbsp;&nbsp;&nbsp;<?php echo get_field('white_palace_hotel_rooms', $post_id); ?> x Room</p>
                      </span>


                      <div class="book-now">
                        <span>
                          <p class="slashed">$ 10,500</p>
                          <h3>$ <?php echo get_field('white_palace_hotel_price', $post_id); ?></h3>

                        </span>
                        <button>Book  Now</button>
                      </div>
                    </span>


                  </div>
                </div>

              </div>

              <!---->
              <div class="wrapp4">
                <div class="wrapp4-image">
                  <img src="<?php echo get_field('luxury_place_hotel_image', $post_id); ?>" alt="">
                  <span>
                    <p>Flash Offer</p>
                  </span>
                </div>
                <div class="advisor-style4">
                  <div class="style-wrapper">
                    <span>



                      <h4>Luxury Place</h4>

                      <span class="person-room">
                        <p><img src="<?php echo get_template_directory_uri() ?>/asset/icons/map-pin.png" alt="">&nbsp;&nbsp; 1749 Wheeler Ridge  Delaware</p>
                        <p><img src="<?php echo get_template_directory_uri() ?>/asset/icons/user.png" alt="">&nbsp;&nbsp;&nbsp;<?php echo get_field('luxury_place_hotel_guest', $post_id); ?> x Guests</p>
                        <p><img src="<?php echo get_template_directory_uri() ?>/asset/icons/home.png" alt="">&nbsp;&nbsp;&nbsp;<?php echo get_field('luxury_place_hotel_rooms', $post_id); ?>  x Room</p>
                      </span>


                      <div class="book-now">
                        <span>
                          <p class="slashed">$ 4,500</p>
                          <h3>$ <?php echo get_field('luxury_place_hotel_price', $post_id); ?> </h3>

                        </span>
                        <button>Book  Now</button>
                      </div>
                    </span>


                  </div>
                </div>

              </div>

              <!---->
              <div class="wrapp5">
                <div class="wrapp5-image">
                <img src="<?php echo get_field('hotel_five_star_hotel_image', $post_id); ?>" alt="">
                  <span>
                    <p>Flash Offer</p>
                  </span>
                </div>
                <div class="advisor-style5">
                  <div class="style-wrapper">
                    <span>



                      <h4>Hotel Five Star</h4>

                      <span class="person-room">
                        <p><img src="<?php echo get_template_directory_uri() ?>/asset/icons/map-pin.png" alt="">&nbsp;&nbsp; 1749 Wheeler Ridge  Delaware</p>
                        <p><img src="<?php echo get_template_directory_uri() ?>/asset/icons/user.png" alt="">&nbsp;&nbsp;&nbsp;<?php echo get_field('hotel_five_star_hotel_guest', $post_id); ?> x Guests</p>
                        <p><img src="<?php echo get_template_directory_uri() ?>/asset/icons/home.png" alt="">&nbsp;&nbsp;&nbsp;<?php echo get_field('hotel_five_star_hotel_rooms', $post_id); ?> x Room</p>
                      </span>


                      <div class="book-now">
                        <span>
                          <p class="slashed">$ 6,500</p>
                          <h3>$ <?php echo get_field('hotel_five_star_hotel_price', $post_id); ?></h3>

                        </span>
                        <button>Book  Now</button>
                      </div>
                    </span>


                  </div>
                </div>

              </div>

            </div>

          </div>
        </div>
      </div>
    </div>
  </section>


</article><!-- #post-<?php the_ID(); ?> -->
