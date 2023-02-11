
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <title></title>
  <link rel="stylesheet" href="styles/style.css" media="all"/>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
  

<!-- Site Icons -->
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
  <link rel="apple-touch-icon" href="images/A Icon.jpg">
   <script src="codewrites.js"></script>
  <style> A{text-decoration: none;}</style>
 


<style type="text/css">  
.header{
  width:1000px;
  height:100px;
  border-bottom:6px groove orange;
  background-image: url(admin_header.png);
}
.right {
    width: 200px;
    height: 1350px;
    border-left: 6px groove orange;
    float: right;
    background: rgb(59,126,171);
}
 .wrapper2 {
    width: 78vh;
    height: 130vh;
    margin-top: 10%;
    margin-left: 10%;

    }
    .calendar {
    margin: auto;
    margin-right: 45%;
    width: 600px;
    background-color: #ddd;
    box-shadow: 0px 0px 15px 4px rgba(0, 0, 0, 0.2);
   
    }
    .month {
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 100%;
    padding: 40px 30px;
    text-align: center;
    /* background-color: #22a7f4; */
    /* color: #fff; */
    }
    .weekdays {
    background-color: #3998cf;
    color: #fff;
    padding: 7px 0;
    display: flex;
    }
    .days {
    font-weight: 300;
    padding: 10px 0;
    display: flex;
    flex-wrap: wrap;
    }
    .weekdays div,
    .days div {
    text-align: center;
    width: 14.28%;
    }
    .days div {
    padding: 10px 0;
    margin-bottom: 10px;
    transition: all 0.4s;
    }
    .prev_date {
    color: #999;
    }
    .today {
    background-color: #22a7f4;
    color: #fff;
    }
    .days div:hover {
    cursor: pointer;
    background-color: #dfe6e9
    }
    .prev,
    .next {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    font-size: 23px;
    background-color: rgba(0, 0, 0, 0.1);
    transition: all 0.4s;
    }
    .prev:hover,
    .next:hover {
    cursor: pointer;
    background-color: rgba(0, 0, 0, 0.2);
    }
    #month {
    font-size: 30px;
    font-weight: 500;}


    
   .wrapper1{
    width: 1000px;
    height: auto;
    margin:auto;
    background:white;
    }


</style>


</head>

<body onload="renderDate()">


<div class="wrapper1">
    <a href="dashboard.php"><div class="header"></div></a>

         <div class="right">
      <a style="font-size:25px;color:white;" href="dashboard.php">DASHBOARD</a> <hr>        
      <a href="index.php?insert_product"><i class="fas fa-cart-plus" style="color:white">&nbsp;</i>Insert New Product</a><br>
      <a href="index.php?view_products"><i class="fab fa-product-hunt" style="color:white">&nbsp;</i>View All Product</a><br>
      <a href="index.php?insert_cat"><i class="fas fa-plus-square" style="color:white">&nbsp;</i>Add New Category</a><br>
      <a href="index.php?view_cats"><i class="fas fa-copyright" style="color:white">&nbsp;</i>View All Category</a><br>
      <a href="index.php?insert_brand"><i class="fas fa-bold" style="color:white">&nbsp;</i>Insert New Brand</a><br>
      <a href="index.php?view_brands"><i class="fa fa-eye" style="color:white">&nbsp;</i>View All Brands</a><br>
      <a href="index.php?view_customers"><i class="fas fa-user-circle" style="color:white">&nbsp;</i>View Customers</a><br>
      <a href="index.php?view_orders"><i class="fas fa-shipping-fast" style="color:white">&nbsp;</i>View Orders</a><br>
      <a href="index.php?view_payments"><i class="fab fa-paypal" style="color:white">&nbsp;</i>View Payments</a><br>
      <a href="logout.php"><i class="fas fa-arrow-circle-right" style="color:white">&nbsp;</i>Admin logout</a><br>
    </div>

    <?php
    
    include ("includes/db.php");
    if(isset($_GET['insert_product'])){
      include ("insert_product.php");
    }
        if(isset($_GET['view_products'])){
          include ("view_products.php");
        }
        if(isset($_GET['edit_pro'])){
          include ("edit_pro.php");
        }
        if(isset($_GET['insert_cat'])){
          include ("insert_cat.php");
        }
        if(isset($_GET['view_cats'])){
          include ("view_cats.php");
        }
        if(isset($_GET['edit_cat'])){
          include ("edit_cat.php");
        }
        if(isset($_GET['delete_cat'])){
          include ("delete_cat.php");
        }
        if(isset($_GET['insert_brand'])){
          include ("insert_brand.php");
        }
        if(isset($_GET['view_brands'])){
          include ("view_brands.php");
        }
        if(isset($_GET['edit_brand'])){
          include ("edit_brand.php");
        }
        if(isset($_GET['delete_brand'])){
          include ("delete_brand.php");
        }
        if(isset($_GET['view_customers'])){
          include ("view_customers.php");
        }
        if(isset($_GET['view_orders'])){
          include ("view_orders.php");
         }
         if(isset($_GET['view_payments'])){
           include ("view_payments.php");
          }
       ?>

<?php
    include ("todo.php");
    ?>


<div class="wrapper2">
        <div class="calendar">
            <div class="month">
                <div class="prev" onclick="moveDate('prev')">
                    <span>&#10094;</span>
                </div>
                <h2 id="month"></h2>
                <p id="date_str"></p>
                <div class="next" onclick="moveDate('next')">
                    <span>&#10095;</span>
                  </div>
            </div>
            <div class="weekdays">
                <div>Sun</div>
                <div>Mon</div>
                <div>Tue</div>
                <div>Wed</div>
                <div>Thu</div>
                <div>Fri</div>
                <div>Sat</div>
                
              </div>
            <div class="days"></div>
            
            
        </div>
    </div>


    
    
<script type="text/javascript">
  
  
var dt = new Date();
function renderDate() {
dt.setDate(1);
var day = dt.getDay();
var today = new Date();
var endDate = new Date(
dt.getFullYear(),
dt.getMonth() + 1,
0
).getDate();
var prevDate = new Date(
dt.getFullYear(),
dt.getMonth(),
0
).getDate();
var months = [
"January",
"February",
"March",
"April",
"May",
"June",
"July",
"August",
"September",
"October",
"November",
"December"
]
document.getElementById("month").innerHTML =
months[dt.getMonth()];
document.getElementById("date_str").innerHTML =
dt.toDateString();
var cells = "";
for (x = day; x > 0; x--) {
cells += "<div class='prev_date'>" + (prevDate - x +
1) + "</div>";
}
console.log(day);
for (i = 1; i <= endDate; i++) {
if (i == today.getDate() && dt.getMonth() ==
today.getMonth()) cells += "<div class='today'>" + i + "</div>";
else
cells += "<div>" + i + "</div>";
}
document.getElementsByClassName("days")[0].innerHTML =
cells;
}
function moveDate(para) {
if(para == "prev") {
dt.setMonth(dt.getMonth() - 1);
} else if(para == 'next') {
dt.setMonth(dt.getMonth() + 1);
}
renderDate();
}
                  




	</script>



</body>
</html>