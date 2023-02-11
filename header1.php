<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <title> Mama Ceramics </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.o">
  <meta name="description" content="" >
  <meta name="keywords" content="" >
  <meta name="author" content="" >
  <link rel="stylesheet" type="text/css" href="css/furniture.css" media="all" />
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/login.css">
  <link rel="stylesheet" type="text/css" href="css/slider.css" />

<!-- aboutuslink -->
  <link rel="stylesheet" type="text/css" href="css/aboutus.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">


<!-- ourteam link -->
  <link rel="stylesheet" type="text/css" href="css/team.css">


<!-- counterup link -->
  <link rel="stylesheet" type="text/css" href="css/countup.css">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>

<!-- testinomial link -->
  <link rel="stylesheet" type="text/css" href="css/testinomial.css">


<!-- Site Icons -->
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
  <link rel="apple-touch-icon" href="images/A Icon.jpg">


  <link href="https://fonts.googleapis.com/css?family=Josefin+Slab|Lobster" rel="stylesheet">
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="css/jquery.bxslider.css" rel="stylesheet">
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>
  <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.4.min.js"></script> 
  <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
  <script type="text/javascript" src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script type="text/javascript" src="js/jquery.eislideshow.js"></script>
  <script type="text/javascript" src="js/jquery.bxSlider.min.js"></script>
  <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
  <script async="" type="text/javascript" src="js/script.js"></script>

</head>

<body>
  <!--Main Container starts -->
  <div class="main_wrapper">

    <!--Header Starts from here-->
    <div class="header_wrapper">
      <a href="index.php"><img src="images/logo1.jpg" width="150px" height="100px" style="float:left"></a>
      <!-- <a href="index.php"><img src="images/top.jpg" width="400px" height="100px" style="float:right"></a> -->
      <a href="http://localhost/1)MAMA%20CERAMICS/all_products.php?brand=3"><img src="images/somany1.jpg" width="150px" height="100px" style="float:right"></a>
      <a href="http://localhost/1)MAMA%20CERAMICS/all_products.php?brand=2"><img src="images/cera1.jpg" width="150px" height="100px" style="float:right"></a>
      <a href="http://localhost/1)MAMA%20CERAMICS/all_products.php?brand=4"><img src="images/kajaria1.jpg" width="150px" height="100px" style="float:right"></a>
      <a href="http://localhost/1)MAMA%20CERAMICS/all_products.php?brand=5"><img src="images/bajajtiles1.jpg" width="150px" height="100px" style="float:right"></a>
    
      
    </div>
    <!--Header ends here-->
    <!--Navigation Bar starts -->
    <div id="navbar">
<!-- -->
        <ul id="menu">
          <li><a href="index.php" >Home</a></li>
          <li><a href="all_products.php" >All Products</a></li>
          
          <?php
          if(!isset($_SESSION['customer_email'])){
            echo "<li><a href='customer_register.php'>Sign up</a></li>";
          }else{
            echo "<li><a href='customer/my_account.php'>My Account</a></li>";
          }?>
          <li><a href="cart.php" >Shopping Cart</a></li>
          <li><a href="contact.php" >Contact Us</a></li>
        </ul>

        


        <div id="form" >
          <form method="get" action="results.php" enctype="multipart/form-data" style="float: left;">
              <!-- <input type="text" name ="user_query" placeholder="Search a Product"></input> -->
              <!-- <input type="submit" name="search" value="Search"></input> -->
          </form>
          <div class id="log_user">
              <a href="customer_register.php" <i class="fas fa-user-circle"></i> &nbsp;Register</a>
          </div>   
          <div id="log_user">
             <?php
                if(!isset($_SESSION['customer_email'])){
                    echo "<a href='checkout.php'>Login</a>";
                }
                  else {
                    echo "<a href='logout.php'>Logout</a>";
                  }

                 ?>
          </div>
        </div>
     
    </div>
    <!--Navigation Bar ends -->