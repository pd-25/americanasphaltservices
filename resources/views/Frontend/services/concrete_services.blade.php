@extends("Frontend.Layout.app")
@section("content")

<section class="banner-slider" id="inn-banner-slider">
    <div data-ride="carousel" class="carousel slide" id="carouselExampleIndicators">
      <div role="listbox" class="carousel-inner">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div style="background-image: url('{{asset('frontend/images/inner-banner.jpg')}}')" class="carousel-item active">
        <div class="carousel-caption">
            <h1 class="mb-2">COLORADO CONCRETE SERVICES</h1>
            </div>
        </div> 
      </div>
    </div>
  </section>
  <!-- Page Content -->
  
<section id="line-section">
<img src="{{asset('frontend/images/c-line.png')}}" class="img-fluid w-100">
</section>
  
  <section id="inn-section">
  <div class="container">
      <div class="row">		
      <div class="col-lg-12 text-center">
      <h2>Commercial Concrete Services</h2>
      <p>American Asphalt Services offers residential and commercial concrete services across the state of Colorado. As an Asphalt company in Colorado Springs, we understand the importance of a clean and beautiful curb appeal. From concrete driveway construction to residential concrete staining or sidewalks and walkways, we’ve got you covered. You can rely on American Asphalt to provide full-service Colorado concrete services. </p>
      </div>		
    </div>
    <hr>
    
    <div class="row mt-5">		
      <div class="col-lg-6">
      <img src="{{asset('frontend/images/concrete-curbs-gutters-img.jpg')}}" class="img-fluid w-100">
      </div>
<div class="col-lg-6 align-self-center">
      <h2>Concrete Curbs & Gutters</h2>
      <p>Concrete curbs and gutters increase the value of your property and prevent damage to your property from rain runoff, water flow, and erosion. We offer a range of concrete gutters and curbs tailored to meet your specific needs. Our offerings include Barrier Curbs, providing robust separation between roadways and sidewalks, as well as Roll Curbs that facilitate smooth transitions between vehicular and pedestrian areas. Additionally, our Tactile Curbs with distinct patterns serve as vital guides for visually impaired individuals, enhancing accessibility and safety in urban environments.</p>
      </div>		
    </div>
    
    <div class="row mt-5">	
<div class="col-lg-6 align-self-center">
      <h2>Concrete Driveway Construction</h2>
      <p>Concrete driveways last 3 to 4 times longer than asphalt or gravel driveways. They require less maintenance and are durable in the harsh weather of Colorado. We also construct concrete aprons, which are usually found in front of garage doors or when transitioning from one grade slab to another. Concrete aprons make walkways and driveways safe for people and vehicles.</p>
      </div>		  
      <div class="col-lg-6">
      <img src="{{asset('frontend/images/concrete-driveway-construction-img.jpg')}}" class="img-fluid w-100">
      </div>
  
    </div>
    
     <div class="row mt-5">		
      <div class="col-lg-6">
      <img src="{{asset('frontend/images/concrete-sidewalks-walkways-img.jpg')}}" class="img-fluid w-100">
      </div>
<div class="col-lg-6 align-self-center">
      <h2>Concrete Sidewalks & Walkways</h2>
      <p>Concrete sidewalks and walkways are durable, easy to maintain, and add value to your property.</p>
      </div>		
    </div>
    
    <div class="row mt-5">	
<div class="col-lg-6 align-self-center">
      <h2>Concrete Patios</h2>
      <p>Concrete patios are a wonderful addition to your ho me. They can be stamped or stained and are easy to maintain.</p>
      </div>		  
      <div class="col-lg-6">
      <img src="{{asset('frontend/images/concrete-patios-img.jpg')}}" class="img-fluid w-100">
      </div>
  
    </div>
    
    
    <div class="row mt-5">		
      <div class="col-lg-6">
      <img src="{{asset('frontend/images/stamped-concrete-img.jpg')}}" class="img-fluid w-100">
      </div>
<div class="col-lg-6 align-self-center">
      <h2>Stamped Concrete</h2>
      <p>Stamped concrete is available in a wide variety of designs, patterns, and colors. It is considerably lower in price than the materials or stones it replicates.</p>
      </div>		
    </div>
    
    <div class="row mt-5">	
<div class="col-lg-6 align-self-center">
      <h2>Residential Concrete Staining</h2>
      <p>Stained concrete is a great way to beautify your property. It is easy to clean and maintain. A variety of stains are available for you to choose from.</p>
      </div>		  
      <div class="col-lg-6">
      <img src="{{asset('frontend/images/residential-concrete-staining-img.jpg')}}" class="img-fluid w-100">
      </div>	
    </div>
    
    <div class="row mt-5">		
      <div class="col-lg-6">
      <img src="{{asset('frontend/images/concrete-loading-dock-dumpster-pads-img.jpg')}}" class="img-fluid w-100">
      </div>
<div class="col-lg-6 align-self-center">
      <h2>Concrete Loading Dock/Dumpster Pads</h2>
      <p>Concrete loading docks require a detailed knowledge of the loading dock installation process. We use a solid concrete mix to withstand the weight of heavy machinery. For dumpster pads, concrete is ideal because it will not develop dents or dimples in the surface. Additionally, any hydraulic fluid or oils that leak from the trash truck will not soften concrete.</p>
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