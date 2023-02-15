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
				  <?php the_custom_logo();?>
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
                  <a href=""><img src="./asset/icons/facebook.png" alt=""></a>
                  <a href=""><img src="./asset/icons/youtube.png" alt=""></a>
                  <a href=""><img src="./asset/icons/instagram.png" alt=""></a>
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
            <h4>CONTACT DETAILS
            <p><a href="">Fell free to contact us by phone, email or by our contact form </a></p>

            </h4>
          </span>

          <span>

            <p><img src="./asset/icons/location.png" alt="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 9748 Blossom Hill Rd undefined Lansing, Idaho 68545 United States</p>
            <p><img src="./asset/icons/bx_bxs-phone-call.png" alt="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tel (business hours) : 269 1500<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            Tel (hotline) Monday - Saturday: 52-56-61-38 (08:00 am – 20:00 pm)<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            Tel (hotline) Sunday: 52-56-61-38 (08:00 am – 14:00 pm)</p>
            <p><img src="./asset/icons/mail.png" alt="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cherly.lawson@example.com</p>

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
          <img src="./asset/icons/image 3.png" alt="">
        </span>
      </div>


    </div>
  </footer>
</div><!-- #page -->

<?php wp_footer();?>

</body>
</html>
