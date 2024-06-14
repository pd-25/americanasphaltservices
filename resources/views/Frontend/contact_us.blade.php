@extends("Frontend.Layout.app")
@section("content")
<section class="banner-slider" id="inn-banner-slider">
    <div data-ride="carousel" class="carousel slide" id="carouselExampleIndicators">
      <div role="listbox" class="carousel-inner">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div style="background-image: url('{{asset('frontend/images/inner-banner.jpg')}}')" class="carousel-item active">
        <div class="carousel-caption">
            <h1 class="mb-2">Contact Us</h1>
            </div>
        </div> 
      </div>
    </div>
  </section>
<section id="line-section">
    <img src="{{asset('frontend/images/c-line.png')}}" class="img-fluid w-100">
    </section>
        
        <section id="inn-section">
        <div class="container">
            <div class="row">		
            <div class="col-lg-12 text-center">
            <h2>CONTACT US FOR A FREE ESTIMATE</h2>
            </div>		
          </div>
    
    <div class="row box-shadow border-rd">
            <div class="col-lg-5 px-0 contact-form-bg">
    <h3>Get in touch with us</h3>
    <form role="form" action="" method="post" id="contact-form">
              <div class="controls">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group">
                      <input type="text" required="required" placeholder="Full name" class="form-control" name="form_name" id="form_name">
                    </div>
                  </div>
                   <div class="col-lg-12">
                    <div class="form-group">
                      <input type="text" required="required" placeholder="Address" class="form-control" name="form_address" id="form_address">
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="form-group">
                      <input type="email" required="required" placeholder="Email" class="form-control" name="form_email" id="form_email">
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="form-group">
                      <input type="tel" required="required" placeholder="Phone no" class="form-control" name="form_phone" id="form_phone">
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
                      <textarea data-error="Please,leave us a message." required="required" rows="3" placeholder="Description of Project:" class="form-control" name="form_message" id="form_message"></textarea>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <input type="submit" value="Submit Now" class="rm-btn">
                  </div>
                </div>
              </div>
            </form>
    
    </div>
    <div class="col-lg-7 px-0">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3112.2407677844335!2d-104.635713224071!3d38.73523687175919!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87133fdd1a2b9bb5%3A0x692b9498c28041ef!2s10467%20Hoke%20Run%20Dr%2C%20Colorado%20Springs%2C%20CO%2080925%2C%20USA!5e0!3m2!1sen!2sin!4v1717695905070!5m2!1sen!2sin" width="100%" height="640" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    
    </div>
             
             
             
          </div>
        </section>
        
        <section id="address-section">
        <div class="container">
        <div class="row justify-content-center">
    <div class="col-lg-8 text-center">
    <div class="address-box box-shadow">
    <h3>Let's Connect With Us</h3>
    <p><i class="fa fa-map-marker" aria-hidden="true"></i> 10467 Hoke Run Drive, Colorado Springs, CO 80925</p>
    <p><i class="fa fa-phone" aria-hidden="true"></i>  719-285-9736</p>
    <p><i class="fa fa-envelope" aria-hidden="true"></i> info@companyname.com</p>
    <h3 class="mt-5 mb-0">Get in Touch With US</h3>
    <ul class="footer-social">
    <li><a href=""></a><i class="fa fa-facebook-f" aria-hidden="true"></i></li>
    <li><a href=""></a><i class="fa fa-youtube" aria-hidden="true"></i></li>
    <li><a href=""></a><i class="fa fa-twitter" aria-hidden="true"></i></li>
    <li><a href=""></a><i class="fa fa-linkedin" aria-hidden="true"></i></li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    </section>
        
        
        
        <section id="contact-section" class="mt-0">
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
      <img src="{{asset('frontend/images/contact-icon.png')}}" class="img-fluid mr-3">
      <div class="media-body align-self-center">
       <h5><a href="tel:7193458934">719-345-8934</a></h5>
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
      <img src="{{asset('frontend/images/client-logo1.png')}}" class="img-fluid" alt="...">
              </div>
              </div>
              <div class="item">
              <div class="client-box">
      <img src="{{asset('frontend/images/client-logo1.png')}}" class="img-fluid" alt="...">
              </div>
              </div>
              <div class="item">
              <div class="client-box">
      <img src="{{asset('frontend/images/client-logo1.png')}}" class="img-fluid" alt="...">
              </div>
              </div>
              <div class="item">
              <div class="client-box">
      <img src="{{asset('frontend/images/client-logo1.png')}}" class="img-fluid" alt="...">
              </div>
              </div>
              <div class="item">
              <div class="client-box">
      <img src="{{asset('frontend/images/client-logo1.png')}}" class="img-fluid" alt="...">
              </div>
              </div>
              <div class="item">
              <div class="client-box">
      <img src="{{asset('frontend/images/client-logo1.png')}}" class="img-fluid" alt="...">
              </div>
              </div>
             
              
    
              </div>
              
              </div>
    </div>
    </div>
    </div>
        </section>
        
    
@endsection