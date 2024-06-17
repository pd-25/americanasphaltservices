<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>American Asphalt Services</title>
    <meta name="description" content="">
    <meta name="author" content="">
	<meta name="keywords" content="">
    <link rel="shortcut icon" type="image/png" href="images/favicon.png">

	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Bootstrap core CSS -->
	<link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('frontend/css/bootstrap-grid.css')}}" rel="stylesheet">	
	<!-- Bootstrap core JavaScript -->
	<script src="{{asset('frontend/js/jquery-3.3.1.slim.min.js')}}"></script>
	<script src="{{asset('frontend/js/popper.min.js')}}"></script>
	<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
	<!-- Owl Carousel Assets pranab --> 
    <link href="{{asset('frontend/owl-carousel/css/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/owl-carousel/css/owl.theme.default.min.css')}}" rel="stylesheet">
	<!-- Owl Carousel Assets pranab -->
	
    <!-- Custom styles for this template -->
	<link href="{{asset('frontend/css/modern-business.css')}}" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{asset('frontend/css/menu-style.css')}}">
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.6.3/css/ionicons.min.css">
	<link href="{{asset('frontend/css/style.css')}}" rel="stylesheet">
	<link href="{{asset('frontend/css/responsive.css')}}" rel="stylesheet">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">	
	
</head>
<body>
  
<header id="main-header" class="header">
<div id="top-head"> 
<div class="container"> 
 <div class="row">
 <div class="col-lg-6">
 <div class="th-left">
 <a href=""><i class="fa fa-envelope" aria-hidden="true"></i> info@americanasphaltservices.com</a>
</div>
</div>

<div class="col-lg-6">
 <div class="th-right">
 <a href=""><i class="fa fa-map-marker" aria-hidden="true"></i> 10467 Hoke Run Drive Colorado Springs, CO 80925</a>
</div>
</div>
</div>
</div>
</div>

<div id="logo-section"> 
<div class="container"> 
 <div class="row justify-content-between">
 <div class="col-lg-6 col-4">
 <div class="logo-left">
  <img src="{{asset('frontend/images/logo.png')}}"class="img-fluid">
</div>
</div>

<div class="col-lg-3 col-8">
 <div class="logo-right">
 <div class="media">
 <img src="{{asset('frontend/images/phone-icon.png')}}"class="align-self-center mr-2">
                           <div class="media-body ">
                              <p>Call Our Customer Service At</p>
							  <h5>719-285-9736</h5>
                           </div>
                        </div>

</div>
</div>
</div>
</div>
</div>


<div id="main-menu">
 <div class="container"> 
 <div class="row">
 <!-- Section: Navbar Menu -->
					<div class="col-lg-12">
						<div class="overlay"></div>
						<nav class="menu">
							<div class="menu-mobile-header">
								<button type="button" class="menu-mobile-arrow"><i class="ion ion-ios-arrow-back"></i></button>
								<div class="menu-mobile-title"></div>
								<button type="button" class="menu-mobile-close"><i class="ion ion-ios-close"></i></button>
							</div>
							<ul class="menu-section">						
								<li><a href="{{route('home')}}">Home</a></li>
								<li><a href="{{route('about')}}">About Us</a></li>
								<!--<li><a href="services.html">Services</a></li>-->
								
								<li class="menu-item-has-children">
									<a href="#">Our Services <i class="ion ion-ios-arrow-down"></i></a>
									<div class="menu-subs menu-column-1">
										<ul>
											<li><a href="{{route('concrete_services')}}">Concrete Services</a></li>
											<li><a href="{{route('snow_removal')}}">Snow Removal</a></li>
											<li><a href="{{route('asphalt_paving')}}">Asphalt Paving</a></li>
											<li><a href="{{route('patching_and_crack_filling')}}">Patching and Crack Filling</a></li>
										</ul>
									</div>
								</li>
								<li><a href="{{route('commercial')}}">Commercial</a></li>
								<li><a href="{{route('residential')}}">Residential</a></li>
								<li><a href="{{route('contact_us')}}">Contact Us</a></li>
								<li><a href="" class="menu-btn" data-toggle="modal" data-target="#exampleModal">Raise A Query </a></li>
							</ul>
						</nav>
					</div>

					<div class="header-item-right">
						<button type="button" class="menu-mobile-trigger">
							<span></span>
							<span></span>
							<span></span>
							<span></span>
						</button>
					</div>
 </div>
 </div>
  </div>
</header>

<!--------------Popup Form Start----------------->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Get A FREE ESTIMATE</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-left">
       <form role="form" action="" method="post" id="contact-form">
          <div class="controls">
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <input type="text" required="required" placeholder="Full name" class="form-control text-left" name="form_name" id="form_name">
                </div>
              </div>
			   <div class="col-lg-12">
                <div class="form-group">
                  <input type="text" required="required" placeholder="Address" class="form-control text-left" name="form_address" id="form_address">
                </div>
              </div>
              <div class="col-lg-12">
                <div class="form-group">
                  <input type="email" required="required" placeholder="Email" class="form-control text-left" name="form_email" id="form_email">
                </div>
              </div>
              <div class="col-lg-12">
                <div class="form-group">
                  <input type="tel" required="required" placeholder="Phone no" class="form-control text-left" name="form_phone" id="form_phone">
                </div>
              </div>
</div>

<div class="row mb-3">
              <div class="col-lg-12">
			  <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
  <label class="form-check-label" for="inlineRadio1">Commercial</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
  <label class="form-check-label" for="inlineRadio2">Residential</label>
</div>

			  </div>
              </div>
			  
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <textarea data-error="Please,leave us a message." required="required" rows="3" placeholder="Description of Project:" class="form-control text-left" name="form_message" id="form_message"></textarea>
                </div>
              </div>
              <div class="col-md-12">
                <input type="submit" value="Submit Now" class="rm-btn">
              </div>
            </div>
          </div>
        </form>
      </div>
      
    </div>
  </div>
</div>	
<!--------------Popup Form End----------------->


@yield('content')

<a href="https://api.whatsapp.com/send?phone=7192859736&text=Hello..." class="float" target="_blank">
    <i class="fa fa-whatsapp my-float"></i>
    </a>
    
    <footer id="main_footer">	
    <div id="top-footer">
                <div class="container">			
                    <div class="row">			
                        <div class="col-lg-4 fst-footer">
                        <img src="{{asset('frontend/images/footer-logo.png')}}"class="img-fluid mb-3">
                            <p class="mb-3">American Asphalt Services, based in Colorado Springs, boasts over 30 years of expertise in the asphalt industry. </p>						
                        </div>
                        
                        <div class="col-lg-2 snd-footer">
                        <h4>Quick Links</h4>
                        <ul class="footer-menu">
                          <li><a href="{{route('home')}}">Home</a></li>
                          <li><a href="{{route('about')}}">About Us</a></li>
                          <li><a href="{{route('commercial')}}">Commercial</a></li>
                          <li><a href="{{route('residential')}}">Residential</a></li>
                          <li><a href="{{route('contact_us')}}">Contact Us</a></li>
     </ul>
     </div>
     <div class="col-lg-2 snd-footer">
                        <h4>Our services</h4>
                        <ul class="footer-menu">
                          <li><a href="{{route('concrete_services')}}">Concrete Services</a></li>
                          <li><a href="{{route('snow_removal')}}">Snow Removal</a></li>
                          <li><a href="{{route('asphalt_paving')}}">Asphalt Paving</a></li>
                          <li><a href="{{route('patching_and_crack_filling')}}">Patching and Crack Filling</a></li>
     </ul>
     </div>
      <div class="col-lg-4 trd-footer">
    <h4>Connect with Us</h4>
    <p><i class="fa fa-map-marker" aria-hidden="true"></i> 10467 Hoke Run Drive, Colorado Springs, CO 80925</p>
    <p class="footer-contact mb-0"><i class="fa fa-phone" aria-hidden="true"></i> 719-285-9736</p>
    <p class="footer-contact mb-0"><i class="fa fa-envelope" aria-hidden="true"></i> info@americanasphaltservices.com</p>
     <ul class="footer-social">
    <li><a href=""><i class="fa fa-facebook-f" aria-hidden="true"></i></a></li>
    <li><a href=""><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
    <li><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
    <li><a href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
    </ul>
    
      </div>
                    </div>
                </div>
            </div>
            
            <div id="footer-copyright">
                <div class="container">			
                    <div class="row">			
     <div class="col-lg-12">
                            <p class="footer-copyright">Copyright © 2024, American Asphalt Services. All Rights Reserved.</p>	 
                        </div>
                    </div>
                </div>
            </div>
            
        </footer>
        <script src="{{asset('frontend/js/script.js')}}" defer></script>
    <script src="{{asset('frontend/owl-carousel/js/owl.carousel.js')}}"></script>
    <!-- End Owl pranab-->
              <script>
                $(document).ready(function() {
                  var owl = $('#owl-services');
                  owl.owlCarousel({
                    items: 4,
                    loop: true,
                    nav:false,
                    dots:true,
                    margin: 20,
                    autoplay: true,
                    autoplayTimeout: 2000,
                    autoplayHoverPause: true,
                    responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:4
            }
        }
                  });
                  $('.play').on('click', function() {
                    owl.trigger('play.owl.autoplay', [2000])
                  })
                  $('.stop').on('click', function() {
                    owl.trigger('stop.owl.autoplay')
                  })
                })
              </script>
    <script>
                $(document).ready(function() {
                  var owl = $('#owl-testimonial');
                  owl.owlCarousel({
                    items: 1,
                    loop: true,
                    nav:false,
                    margin: 0,
                    autoplay: true,
                    autoplayTimeout: 2000,
                    autoplayHoverPause: true,
                    responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
                  });
                  $('.play').on('click', function() {
                    owl.trigger('play.owl.autoplay', [2000])
                  })
                  $('.stop').on('click', function() {
                    owl.trigger('stop.owl.autoplay')
                  })
                })
              </script>	
    <script>
                $(document).ready(function() {
                  var owl = $('#owl-client');
                  owl.owlCarousel({
                    items: 5,
                    loop: true,
                    nav:false,
                    dots:false,
                    margin: 0,
                    autoplay: true,
                    autoplayTimeout: 2000,
                    autoplayHoverPause: true,
                    responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
                  });
                  $('.play').on('click', function() {
                    owl.trigger('play.owl.autoplay', [2000])
                  })
                  $('.stop').on('click', function() {
                    owl.trigger('stop.owl.autoplay')
                  })
                })
              </script>			  
              
    </body>   
    </html>