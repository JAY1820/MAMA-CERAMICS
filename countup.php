<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Counter up Animation </title>


    <link rel="stylesheet" type="text/css" href="css/countup.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
</head>
<body>

<div class="universal-counterup">

  
  <div class="counter-up">
    <div class="content-counterup">

      <div class="box-counterup">
        <div class="icon-counterup"><i class="fas fa-city"></i></div>
        <div class="counter-counterup">5</div>
        <div class="text-counterup">active City</div>
      </div>
      
      <div class="box-counterup">
        <div class="icon-counterup"><i class="fas fa-history"></i></div>
        <div class="counter-counterup">15</div>
        <div class="text-counterup">Working Hours</div>
      </div>
      
      <div class="box-counterup">
        <div class="icon-counterup"><i class="fas fa-shipping-fast"></i></div>
        <div class="counter-counterup">200</div>
        <div class="text-counterup">Completed Shipping</div>
      </div>
      
      <div class="box-counterup">
        <div class="icon-counterup"><i class="fas fa-users"></i></div>
        <div class="counter-counterup">100</div>
        <div class="text-counterup">Happy Clients</div>
      </div>
      
    </div>
  </div>
  
  
</div>  <!-- unoversal conterup end -->

  
  
  
  <script>
  $(document).ready(function(){
    $('.counter-counterup').counterUp({
      delay: 10,
      time: 1200
    });
  });
  </script>

</body>
</html>
