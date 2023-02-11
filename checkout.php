<?php
include("includes/db.php");
include("functions/functions.php");
include("header.php");
?>


    <!--Content starts-->
   
        <div id="right_content" class="checkout">
          <?php cart(); ?>
            <div id="headline">
                <div id="headline_content">
                  <?php
                      if(!isset($_SESSION['customer_email'])){
                        echo "<b>Welcome Guest !</b> <b style='color:yellow;'>Shopping Cart</b>";
                      }
                      else {
                        echo "<b>Welcome: " ."<span style='color:pink;'>". $_SESSION['customer_email']."</span></b>"."<b style='color:yellow;'>Your Shopping Cart</b>";
                      }
                   ?>
                    <span>-  Total Items: <?php items(); ?> - Total Price: $ <?php total_price(); ?>
                    <a class="cart_img"  href="cart.php" style="float:right;margin-left: 5px;"><img src="images/Cart-Icon.png" width="30px" height="30px"></a></span>



                </div>
            </div>
            <!--Headline ends her-->

            <div class="payment-opt login_page">
                <?php
                  if(!isset($_SESSION['customer_email']))
                  {
                      include("customer/customer_login.php");
                  }
                  else{
                    include ("payment_options.php");
                  }

                 ?>
            </div>


        </div>





    </div>
    <!--Content ends-->


    <!-- Footer of site -->

    <footer>

<div class="footer_wrap">
  <div class="footer_inner_wrap">
    <div class="footer_sections first_sec">
      <div class="heading_footer">
        <h2>Contact Us</h2>             
      </div>
      <div class="footer_content">
        <div class="footer_logo_text">
          <p>EMAIL FOR MORE INFO</p>
          <a href="https://mail.google.com/mail/u/0/#inbox">mamaceramics@gmail.com</a>
        </div>
      </div>
    </div>  


    <div class="footer_sections scnd_sec">
      <div class="heading_footer">
        <h2>Shop Address</h2>             
      </div>
      <div class="footer_logo_text">
        <p>
          <b>Mama Ceramic</b><br>
          Morbi Road , Rajkot<br>
          Open Now : 9:00am - 5:00 pm<br>
        </p>
      </div>
    </div>  
    <div class="footer_sections thrd_sec">
      <div class="heading_footer">
        <h2>Social Links</h2>             
      </div>
      <div class="footer_content">
        <ul class="footer_social_links">
          <li>
            <a href="https://www.facebook.com/" target="_blank"><img src="images/social_icons/fb.png" alt="Facebook"></a>
          </li>
          <li>
            <a href="https://www.instagram.com/" target="_blank"><img src="images/social_icons/insta.png" alt="Instagram"></a>
          </li>
          <li>
            <a href="https://www.youtube.com/" target="_blank"><img src="images/social_icons/youtube.png" alt="Youtube"></a>
          </li>
          <li>
            <a href="https://twitter.com/" target="_blank"><img src="images/social_icons/twitter.png" alt="Twitter"></a>
          </li>
          <li>
            <a href="https://www.snapchat.com/" target="_blank"><img src="images/social_icons/snapchat.png" alt="Snapchat"></a>
          </li>
        </ul>
      </div>
    </div>          
  </div>

  <div class="go_top">
    <a id="go_to_top" href="javascript:void();"><img src="images/social_icons/top.png" alt="Go to Top"></a>
  </div>
  <div class="copyright_link">
    <span>&copy; 2021-22 Mama Ceramic</span>
  </div>
</div>
</footer>

<!-- Footer of site Ends Here-->
    
    <!-- Footer of site Ends Here-->
  </div>
  <!--Main Container ends -->
</body>
</html>
