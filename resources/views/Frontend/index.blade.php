
@extends("Frontend.Layout.app")
@section("content")




     <section id="banner-slider" class="banner-slider">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <!--<ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        </ol>-->
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('{{asset('frontend/images/banner.jpg')}}');">
		  <canvas id="canvas"></canvas>
            <div class="carousel-caption">
			  <h1>American Asphalt Services</h1>
			  <p class="banner-ctn">Our full service concrete and asphalt services include all paving, sealcoating, asphalt repair, pothole repair, striping, and snow removal.</p>
			  <a href="" class="banner-btn">Request A FREE Estimate</a>
            </div>
          </div> 
		  
          <!-- Slide Two - Set the background image for this slide in the line below -->
     <!-- <div class="carousel-item" style="background-image: url('images/banner2.jpg')">
            <div class="carousel-caption">
			
			
            </div>
          </div>  -->

        </div>
     <!-- <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"><img src="{{asset('frontend/images/ban-left-btn.png')}}"class="img-fluid"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"><img src="{{asset('frontend/images/ban-right-btn.png')}}"class="img-fluid"></span>
          <span class="sr-only">Next</span>
        </a>-->
      </div>
    </section>
    <!-- Page Content -->
	
<section id="line-section">
<img src="{{asset('frontend/images/c-line.png')}}"class="img-fluid w-100">
</section>
	
	<section id="welcome-section">
	<div class="container">
	    <div class="row">
		<div class="col-lg-4">
		<img src="{{asset('frontend/images/wel-pic1.jpg')}}"class="img-fluid w-100 mb-2 wel-img">
        </div>
		<div class="col-lg-2">
		<div class="wel-img-ctn">
		<h5>10 years</h5>
<p>Experiences</p>
</div>
		<img src="{{asset('frontend/images/wel-pic2.jpg')}}"class="img-fluid w-100 mb-2 wel-img">
        </div>
		
        <div class="col-lg-6 align-self-center">
		<div class="hm-about-ctn-box">
<div class="hm-about-topctn">
		<p class="head-caption">about us</p>
		<h2>Colorado Concrete and Asphalt Services</h2>
		<p>American Asphalt Services, based in Colorado Springs, boasts over 30 years of expertise in the asphalt industry. Our comprehensive range of services covers concrete and paving across the Front Range, encompassing paving, sealcoating, pothole repair, crack fill, parking lot striping, and snow removal. As a bonded and insured company backed by Statefarm Insurance, we are committed to using only the finest quality products and employing highly trained professionals to deliver the best Colorado asphalt services to our clients. Furthermore, we offer FREE estimates and are more than happy to arrange a meeting at your place of business or home to discuss your requirements.</p>
		 </div>
		
		<div class="row justify-content-between my-3">
		<div class="col-lg-6">
		<div class="media">
  <img src="{{asset('frontend/images/wel-icon1.png')}}"class="mr-3" alt="...">
  <div class="media-body align-self-center">
   <h5>Quality Materials</h5>
  </div>
</div>
		</div>
		
		<div class="col-lg-6">
		<div class="media">
  <img src="{{asset('frontend/images/wel-icon2.png')}}"class="mr-3" alt="...">
  <div class="media-body align-self-center">
   <h5>Expert<br> Engineer</h5>
  </div>
</div>
		</div>
		
		</div>
<a href="" class="rm-btn">More About Us <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
        </div>
		</div>		
      </div>
	  </div>
	</section>
	
	
	
	<section id="service-section">
	<div class="container-fluid">
	  <div class="row justify-content-center serv-head">
	  <div class="col-lg-10 text-center">
		<h2>What We <span>Do</span></h2>
		<p class="head-txt">Our full service concrete and asphalt services include all paving, sealcoating.</p>
	  </div>        
</div>
<div class="row">
		<div class="col-lg-12">
		<div id="demo-pranab">
        <div id="owl-services" class="owl-carousel owl-theme">     
          <div class="item">
		  <div class="service-box">
		  <div class="service-box-img">
  <img src="{{asset('frontend/images/serv-pic1.jpg')}}"class="img-fluid mb-4">
		  </div>
		  <div class="service-box-ctn">
  <h3>Residential</h3>
  <p>Are you a homeowner? American  Asphalt Services offers residential</p>
  <a href="">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
		  </div>
		  </div>
		  </div>
		  <div class="item">
		  <div class="service-box">
		  <div class="service-box-img">
  <img src="{{asset('frontend/images/serv-pic2.jpg')}}"class="img-fluid mb-4">
		  </div>
		  <div class="service-box-ctn">
  <h3>Commercial</h3>
  <p>Are you a homeowner? American  Asphalt Services offers residential</p>
  <a href="">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
		  </div>
		  </div>
		  </div>
		  <div class="item">
		  <div class="service-box">
		  <div class="service-box-img">
  <img src="{{asset('frontend/images/serv-pic3.jpg')}}"class="img-fluid mb-4">
		  </div>
		  <div class="service-box-ctn">
  <h3>Concrete</h3>
  <p>Are you a homeowner? American  Asphalt Services offers residential</p>
  <a href="">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
		  </div>
		  </div>
		  </div>
		  <div class="item">
		  <div class="service-box">
		  <div class="service-box-img">
  <img src="{{asset('frontend/images/serv-pic4.jpg')}}"class="img-fluid mb-4">
		  </div>
		  <div class="service-box-ctn">
  <h3>Asphalt Paving</h3>
  <p>Are you a homeowner? American  Asphalt Services offers residential</p>
  <a href="">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
		  </div>
		  </div>
		  </div>
		  <div class="item">
		  <div class="service-box">
		  <div class="service-box-img">
  <img src="{{asset('frontend/images/serv-pic5.jpg')}}"class="img-fluid mb-4">
		  </div>
		  <div class="service-box-ctn">
  <h3>Snow Removal</h3>
  <p>Are you a homeowner? American  Asphalt Services offers residential</p>
  <a href="">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
		  </div>
		  </div>
		  </div>
		  <div class="item">
		  <div class="service-box">
		  <div class="service-box-img">
  <img src="{{asset('frontend/images/serv-pic6.jpg')}}"class="img-fluid mb-4">
		  </div>
		  <div class="service-box-ctn">
  <h3>Patching & Crack Filling</h3>
  <p>Are you a homeowner? American  Asphalt Services offers residential</p>
  <a href="">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
		  </div>
		  </div>
		  </div>
		   
		  </div>
		  
          </div>
</div>
<div class="col-lg-12 service-link">
<p>Want to see our company industrial services...<a href="">View More Services</a></p>
</div>
</div>

</div>
	</section>
	
	<section id="contact-section">
	<div class="container">
	  <div class="row">
        <div class="col-lg-7">
		<div class="contact-ctn-box">
<h2>10% Discount</h2>
<p>for Seniors, Military, Teachers & First Responders Financing Available!</p>
		</div>
		</div>
		<div class="col-lg-5 align-self-center">
		<div class="call-box">
		<div class="media">
  <img src="{{asset('frontend/images/contact-icon.png')}}"class="img-fluid mr-3">
  <div class="media-body align-self-center">
   <h5><a href="tel:7193458934">719-345-8934</a></h5>
  </div>
</div>
		</div>
		</div>
		</div>
	  </div>
	</section>
	
	
	
	<section id="why-coose-section">
	<div class="container">
	  <div class="row">
        <div class="col-lg-7">
<img src="{{asset('frontend/images/why-choose-img.png')}}"class="img-fluid">
		</div>
		<div class="col-lg-5 align-self-center">
		<p class="head-caption">WHY CHOOSE US</p>
		<h2>Few Reasons to Choose Our Company</h2>
		<p>It is a long established fact that a reader will be distracted the readable content of a page when looking at layout the point of using lorem the is Ipsum less normal distribution of letters.</p>
		<ul class="wel-list">
		<li>Lorem ipsum dolor sit amet, citetur adipiscing elit.</li>
		<li>Curabitur auctor nibh quis ante venenatis semper.</li>
		<li>Maecenas posuere quam sit amet justo lobortis,</li>
		<li>Donec vitae lectus sit amet tellus maximus pharetra </li>
		<li>Curabitur maximus mauris a felis laoreet efficitur.</li>
		</ul>
		</div>
		
		</div>
	  </div>
	</section>
	
	
	
	
	
	<section id="testimonial-section">
	<div class="container-fluid">
	  <div class="row">
        <div class="col-lg-6 blue-bg">
		<div class="contact-box-left">
		 		 <p class="head-caption">BOOK APPOINTMENT</p>
		<h2>Asphalt Services Available</h2>
		<form role="form" action="" method="post" id="booking-form">
          <div class="controls">
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
				<label>Your Name</label>
                  <input type="text" required="required" placeholder="First Name" class="form-control" name="first_name" id="first_name">
                </div>
              </div>
              </div>
<div class="row">		
<div class="col-lg-6">
                <div class="form-group">
				<label>Your Email</label>
                  <input type="text" required="required" placeholder="Email" class="form-control" name="form_Email" id="form_Email">
                </div>
              </div>	  
			  <div class="col-lg-6">
                <div class="form-group">
				<label>Your Phone</label>
                  <input type="tel" required="required" placeholder="Phone" class="form-control" name="form_Phone" id="form_Phone">
                </div>
              </div>
			  </div>
			  
			  <div class="row">		
<div class="col-lg-6">
                <div class="form-group">
				<label>Location</label>
                  <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>Option a</option>
		<option>Option b</option>
		<option>Option c</option>
		<option>Option d</option>
      </select>

                </div>
              </div>	  
			  <div class="col-lg-6">
                <div class="form-group">
				<label>Date</label>
                  <input type="datetime-local" id="birthdaytime" name="birthdaytime">
                </div>
              </div>
			  </div>
			  
	<div class="row">
			<div class="col-lg-12 mt-3">
                <input type="submit" value="Submit Request" class="rm-btn w-100">
              </div>
          </div>
	  </div>
	  </form>
		</div>
		</div>
        <div class="col-lg-6">
		<div class="testimonial-box">
		<p class="head-caption">Testimonials</p>
		<h2>CLient feedback</h2>
		<p>It is a long established fact that a reader will be distracted the readable content of a page when looking at layout the point of using lorem the is Ipsum less normal distribution of letters.</p>
		<div id="demo-pranab">
        <div id="owl-testimonial" class="owl-carousel owl-theme">     
          <div class="item">
		  <div class="testimonial-ctn-box">
		  <div class="media">
  <img src="{{asset('frontend/images/pic-img.jpg')}}"class="mr-3 pro-img" alt="...">
  <div class="media-body align-self-center">
   <h5>Moana Smile</h5>
   <p class="ts-designation mb-0">Designation</p>
   <span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
    
  </div>
   <img src="{{asset('frontend/images/quote-icon.png')}}"class="img-fluid" alt="...">
</div>
    <p class="tsCtn">Curabitur velit arcu, pellenteue quis varius at, portead eget ex. Nulla phtra semper tortor, ornaunt est fcibus at. Pellentesque arcu justo, finibus non volutpat a, maximus convallis lectus.</p>	
		  </div>
		  </div>
		  <div class="item">
		  <div class="testimonial-ctn-box">
		  <div class="media">
  <img src="{{asset('frontend/images/pic-img.jpg')}}"class="mr-3 pro-img" alt="...">
  <div class="media-body align-self-center">
   <h5>Moana Smile</h5>
   <p class="ts-designation mb-0">Designation</p>
   <span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
    
  </div>
   <img src="{{asset('frontend/images/quote-icon.png')}}"class="img-fluid" alt="...">
</div>
    <p class="tsCtn">Curabitur velit arcu, pellenteue quis varius at, portead eget ex. Nulla phtra semper tortor, ornaunt est fcibus at. Pellentesque arcu justo, finibus non volutpat a, maximus convallis lectus.</p>	
		  </div>
		  </div>
		  <div class="item">
		  <div class="testimonial-ctn-box">
		  <div class="media">
  <img src="{{asset('frontend/images/pic-img.jpg')}}"class="mr-3 pro-img" alt="...">
  <div class="media-body align-self-center">
   <h5>Moana Smile</h5>
   <p class="ts-designation mb-0">Designation</p>
   <span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
    
  </div>
   <img src="{{asset('frontend/images/quote-icon.png')}}"class="img-fluid" alt="...">
</div>
    <p class="tsCtn">Curabitur velit arcu, pellenteue quis varius at, portead eget ex. Nulla phtra semper tortor, ornaunt est fcibus at. Pellentesque arcu justo, finibus non volutpat a, maximus convallis lectus.</p>	
		  </div>
		  </div>
		  <div class="item">
		  <div class="testimonial-ctn-box">
		  <div class="media">
  <img src="{{asset('frontend/images/pic-img.jpg')}}"class="mr-3 pro-img" alt="...">
  <div class="media-body align-self-center">
   <h5>Moana Smile</h5>
   <p class="ts-designation mb-0">Designation</p>
   <span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
    
  </div>
   <img src="{{asset('frontend/images/quote-icon.png')}}"class="img-fluid" alt="...">
</div>
    <p class="tsCtn">Curabitur velit arcu, pellenteue quis varius at, portead eget ex. Nulla phtra semper tortor, ornaunt est fcibus at. Pellentesque arcu justo, finibus non volutpat a, maximus convallis lectus.</p>	
		  </div>
		  </div>
		  <div class="item">
		  <div class="testimonial-ctn-box">
		  <div class="media">
  <img src="{{asset('frontend/images/pic-img.jpg')}}"class="mr-3 pro-img" alt="...">
  <div class="media-body align-self-center">
   <h5>Moana Smile</h5>
   <p class="ts-designation mb-0">Designation</p>
   <span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
    
  </div>
   <img src="{{asset('frontend/images/quote-icon.png')}}"class="img-fluid" alt="...">
</div>
    <p class="tsCtn">Curabitur velit arcu, pellenteue quis varius at, portead eget ex. Nulla phtra semper tortor, ornaunt est fcibus at. Pellentesque arcu justo, finibus non volutpat a, maximus convallis lectus.</p>	
		  </div>
		  </div>

		  </div>
          </div>
</div>
</div>
</div>
</div>
	</section>
	
	
	

	
	
	
	<section id="client-section">
	<div class="container">
	  <div class="row">
        <div class="col-lg-12">
		<div id="demo-pranab">
        <div id="owl-client" class="owl-carousel owl-theme">     
          <div class="item">
		  <div class="client-box">
  <img src="{{asset('frontend/images/client-logo1.png')}}"class="img-fluid" alt="...">
		  </div>
		  </div>
		  <div class="item">
		  <div class="client-box">
  <img src="{{asset('frontend/images/client-logo1.png')}}"class="img-fluid" alt="...">
		  </div>
		  </div>
		  <div class="item">
		  <div class="client-box">
  <img src="{{asset('frontend/images/client-logo1.png')}}"class="img-fluid" alt="...">
		  </div>
		  </div>
		  <div class="item">
		  <div class="client-box">
  <img src="{{asset('frontend/images/client-logo1.png')}}"class="img-fluid" alt="...">
		  </div>
		  </div>
		  <div class="item">
		  <div class="client-box">
  <img src="{{asset('frontend/images/client-logo1.png')}}"class="img-fluid" alt="...">
		  </div>
		  </div>
		  <div class="item">
		  <div class="client-box">
  <img src="{{asset('frontend/images/client-logo1.png')}}"class="img-fluid" alt="...">
		  </div>
		  </div>
		 
		  

		  </div>
		  
          </div>
</div>
</div>
</div>
	</section>
	

	
	

    @endsection