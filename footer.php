<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Hotel_booking_freebie
 */

?>
	<!--FOOTER SECTION-->
	<footer class="site-footer footer-section" id="footer-section">
    <div class="site-wrapper">
      <!---->
      <div class="footer-holder">
        <div class="best-tour-plan2 site-branding">
        <div class="site-branding logo-search" id="logo-search">
          <img src="<?php echo get_theme_mod( 'footer_image' ); ?>" alt="Footer Logo Image">
        </div>
        <div class="all-categories">
          <span>
            <h4>ALL CATEGORIES</h4>
          </span>
          <?php
            wp_nav_menu(
              array(
                'theme_location' => 'footer-menu-1',
                'container' => '',
                'items_wrap' => '<span>%3$s</span>',

              )
            );
          ?>
        </div>
        <div class="all-categories">
            <span>
              <h4>ADDITIONAL INFORMATION

              </h4>
            </span>
            <span>
              <?php
                wp_nav_menu(
                  array(
                    'theme_location' => 'footer-menu-2',
                    'container' => '',
                    'items_wrap' => '<span>%3$s</span>',

                  )
                );
              ?>
              <span class="social-icons">
                <h4>Social Network</h4>
                <span>
                  <a href=""><img src="wp-content/themes/hotel-booking-freebie/asset/icons/facebook.png" alt=""></a>
                  <a href=""><img src="wp-content/themes/hotel-booking-freebie/asset/icons/youtube.png" alt=""></a>
                  <a href=""><img src="wp-content/themes/hotel-booking-freebie/asset/icons/instagram.png" alt=""></a>
                </span>

              </span>
            </span>
        </div>
        <div class="all-categories">
          <span>
            <h4>LEGAL INFORMATION

            </h4>
          </span>
          <span>
            <?php
              wp_nav_menu(
                array(
                  'theme_location' => 'footer-menu-3',
                  'container' => '',
                  'items_wrap' => '<span>%3$s</span>',

                )
              );
            ?>
          </span>
        </div>
      </div>
      <!---->
      <div class="contact-section">
        <div class="details">
          <span>
            <h4>CONTACT DETAILS</h4>
            <p>

              <?php
                echo get_theme_mod('footer_contact_details_form')
              ?>
            </p>

           
          </span>

          <span>
          
            <p><img src="wp-content/themes/hotel-booking-freebie/asset/icons/location.png" alt="">
            <?php
              echo get_theme_mod('footer_address_text')
            ?>
            </p>
            <p><img src="./asset/icons/bx_bxs-phone-call.png" alt="">
            <img src="wp-content/themes/hotel-booking-freebie/asset/icons/Rectangle1.png" alt="">
              <?php
                echo get_theme_mod('footer_business_hours')
              ?>
            </p>
            <p><img src="./asset/icons/mail.png" alt="">
              <?php
                echo get_theme_mod('footer_email')
              ?>
            </p>

          </span>

          </div>
          <div class="contact-form-section">
            <span>
              <h4>SEND US A MESSAGE


              </h4>
            </span>

            <span class="contact-form">
              <form class="first-form" action="" method="post">
                <input class="name-input" type="text" name="" placeholder="Your Full Name*" id="">
                <!---->
                <input class="number-input" type="number" name="number" placeholder="Phone Number*" id="">
              </form>
              <form class="second-form" action="" method="post">
                <!-- <input class="message-input" type="text" name="" placeholder="Message" id=""> -->

                <textarea class="message-input" name="" id="" cols="30" placeholder="Message" rows="10"></textarea>
              </form>
              <span class="submit-button">
                <button type="submit">Send</button>
                <p>* Required Fields</p>
              </span>


            </span>
          </div>
        </div>
      </div>
      <!---->
      <div class="last-section">
        <span>
          <?php
            wp_nav_menu(
              array(
                'theme_location' => 'footer-menu-4',
                'container' => '',
                'items_wrap' => '<span>%3$s</span>',

              )
            );
          ?>
        </span>

        <span>
          <img src="wp-content/themes/hotel-booking-freebie/asset/icons/image3.png" alt="">
        </span>
      </div>


    </div>
  </footer>
</div><!-- #page -->

<?php wp_footer();?>

</body>
</html>
