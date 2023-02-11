<!DOCTYPE html>
<html>
<head>
	<title>Owl Carosel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.theme.default.min.css">
	<style type="text/css">
		.shadow-effect {
			background: #fff;
			padding: 20px;
			border-radius: 4px;
			text-align: center;
			border: 1px solid #ECECEC;
			box-shadow: 0 19px 38px rgba(0,0,0,0.10), 0 15px 12px rgba(0,0,0,0.02);
		}
		#shadow-effect p {
           font-family: "montserrat",sans-serif;
			font-size: 17px;
			line-height: 1.5;
			margin: 0 0 17px 0;
			font-weight: 300;
		}
		.img-circle {
			border-radius: 50%;
			vertical-align: middle;
			max-width: 90px;
			transform-style: preserve-3d;
			margin: 0 auto 17px;
		}
		.item:hover .img-circle{
        background: #17bebb;
        border-radius: 50%;
       }
		#customer-testimonoals {
			margin-top: -5%;
		}
		.testimonial-name {
           font-family: "montserrat",sans-serif;
			margin: -17px auto 0;
			display: table;
			width: auto;
			background: linear-gradient(#daf0f2, #17bebb);
			padding: 9px 35px;
			border-radius: 12px;
			text-align: center;
			color: #fff;
			box-shadow: 0px 9px 18px rgba(0,0,0,0.12), 0px 5px 7px rgba(0,0,0,0.5);
		}
		.testimonial-name:hover{
        background: #17bebb;
        color: #fff;
		}
        .stars{
        color: #17bebb;
        margin-bottom: 20px;
        }
		#customer-testimonoals .item {
			text-align: center;
			padding: 50px;
			margin-bottom: 0px;
			opacity: 0.2;
			transform: scale3d(0.8, 0.8, 1);
			transition: all 0.3s ease-in-out;
            font-family: Georgia, 'Times New Roman', Times, serif;
            
		}
		#customer-testimonoals .owl-item.active.center .item {
			opacity: 1;
			transform: scale3d(1.0, 1.0, 1);
		}
		.owl-theme .owl-dots .owl-dot.active span, .owl-theme .owl-dots .owl-dot:hover span {
			background: #17bebb;
			transform: translate3d(0px, -50%, 0px) scale(0.7);
		}
		.owl-carousel .owl-dots {
			display: inline-block;
			width: 100%;
			text-align: center;
		}
		.owl-carousel .owl-dots .owl-dot{ 
			display: inline-block;
		}
		.owl-carousel .owl-dots .owl-dot span{ 
			background: #17bebb;
			display: inline-block;
			height: 20px;
			width: 20px;
			margin: 0 2px 5px;
			transform: translate3d(0px, -50%, 0px) scale(0.3);
			transform-origin: 50% 50% 0;
			transition: all 250ms ease-out 0s;
		} 
	</style>
</head>
<body>
	<section class="testimonials">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div id="customer-testimonoals" class="owl-carousel owl-theme">
					    <div class="item">
					    	<div class="shadow-effect">
					    		<img class="img-circle" src="images/user/p9.jpg">
                                <div class="stars">
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star"></i>
                                 <i class="far fa-star"></i>
                               </div>
					    		<p>
                                  "  Design Of All Products like Ceramics ,
                                    Tiles Are Amazing And Quality Is Also Good. You Should Add Some Kitchen Products Also."    
                                </p>
					    	</div>
					    	<div class="testimonial-name">
					    		JAY PATEL
					    	</div>
					    </div>
					    <div class="item">
					    	<div class="shadow-effect">
					    		<img class="img-circle" src="images/user/p3.png">
                                <div class="stars">
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star"></i>
                               </div>
					    		<p>
                                " I Like All Products Tiles And Ceramics Of Your Shop ,
                                I Want TO Thanks All Of You For Wonderful Sevices That You Guys Are Provided "
                                </p>
					    	</div>
					    	<div class="testimonial-name">
					    		RAHUL PATIL
					    	</div>
					    </div>
					    <div class="item">
					    	<div class="shadow-effect">
					    		<img class="img-circle" src="images/user/p10.jpg">
                                <div class="stars">
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star"></i>
                                 <i class="far fa-star"></i>
                                 <i class="far fa-star"></i>
                               </div>
					    		<p>
                                  " Mostly All Proucts Are Good , But Need To Improve Some Specific Products Design. Personally I Feel That.
                                   Even All Tiles Are light Weight  "
                                </p>
					    	</div>
					    	<div class="testimonial-name">
					    		ISHA MEHTA
					    	</div>
					    </div>
					    <div class="item">
					    	<div class="shadow-effect">
					    		<img class="img-circle" src="images/user/p1.png">
                                <div class="stars">
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star"></i>
                                 <i class="far fa-star"></i>
                               </div>
					    		<p>
                                   " If You Are Looking For Budget Tiles This Be  Good Choice For You.
                                    If You Wanna Best Ceramic For Long Days  then it's really Amazing And Fantastic "
                                </p>
					    	</div>
					    	<div class="testimonial-name">
					    		KARAN PANCHAL
					    	</div>
					    </div>
						<div class="item">
					    	<div class="shadow-effect">
					    		<img class="img-circle" src="images/user/p4.jpg">
                                <div class="stars">
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star"></i>
                                 <i class="far fa-star"></i>
                               </div>
					    		<p>
                                   " All Tiles Are In Low Budgets So  This Be  Good Choice For You.
                                    If You Wanna Best Ceramic For Long Days  then it's really Amazing And Fantastic "
                                </p>
					    	</div>
					    	<div class="testimonial-name">
					    		RAJ SHAH
					    	</div>
					    </div>
					    <div class="item">
					    	<div class="shadow-effect">
					    		<img class="img-circle" src="images/user/p6.jpg">
                                <div class="stars">
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star"></i>
                                 <i class="far fa-star"></i>
                                 <i class="far fa-star"></i>
                                 <i class="far fa-star"></i>
                               </div>
					    		<p>
                                    " Your Design Of Tiles Are Super With Fantastic Art Work 
                                      And Variety OF Beautiful Colours . You Need TO Improve Quality Of Some Tiles."
                                    </p>
					    	</div>
					    	<div class="testimonial-name">
					    		MUSKAN PATEL
					    	</div>
					    </div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script> -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
	<script type="text/javascript">
		$('#customer-testimonoals').owlCarousel({
		    loop:true,
		    center: true,
		    items:3,
		    margin:0,
		    autoplay: true,
		    dots: true,
		    autoplayTimeout: 8500,
		    smartSpeed: 450,
		    nav:false,
		    responsive:{
		        0:{
		            items:1
		        },
		        600:{
		            items:3
		        },
		        1000:{
		            items:3
		        }
		    }
		});
	</script>
</body>
</html>