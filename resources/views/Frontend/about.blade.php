@extends("Frontend.Layout.app")
@section("content")

<section class="banner-slider" id="inn-banner-slider">
    <div data-ride="carousel" class="carousel slide" id="carouselExampleIndicators">
      <div role="listbox" class="carousel-inner">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div style="background-image: url('{{asset('frontend/images/inner-banner.jpg')}}')" class="carousel-item active">
        <div class="carousel-caption">
            <h1 class="mb-2">About Us</h1>
            </div>
        </div> 
      </div>
    </div>
  </section>
  <!-- Page Content -->
  
<section id="line-section">
<img src="{{asset('frontend/images/c-line.png')}}"class="img-fluid w-100">
</section>
  
  <section id="inn-section">
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
      <h2>Asphalt Company in Colorado Springs</h2>
      <p>American Asphalt Services has over 30 years of experience in the asphalt and sealcoating business. We are a family-owned and operated residential and commercial asphalt paving business. We are bonded and insured by Statefarm Insurance Company. </p>
      <h3>Paving Company In Colorado Springs</h3>
      <p>American Asphalt Services provides complete complete asphalt and concrete for both commercial and residential clients including asphalt paving, concrete, sealcoating, asphalt repair, crack sealing, striping, and snow removal. We are a group of professional asphalt specialists who will work with you as a team to ensure we get the job done right the first time. American Asphalt Services provides asphalt repair and paving services to the Front Range including Colorado Springs, Denver, Pueblo, Castle Rock, Woodland Park, and all of southern Colorado. </p>
       </div>

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