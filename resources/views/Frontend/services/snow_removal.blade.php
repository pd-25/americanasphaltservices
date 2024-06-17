@extends("Frontend.Layout.app")
@section("content")
<section class="banner-slider" id="inn-banner-slider">
    <div data-ride="carousel" class="carousel slide" id="carouselExampleIndicators">
      <div role="listbox" class="carousel-inner">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div style="background-image: url('{{asset('frontend/images/inner-banner.jpg')}}')" class="carousel-item active">
        <div class="carousel-caption">
            <h1 class="mb-2">Snow Removal</h1>
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
      <h2>Snow Removal in Colorado Springs</h2>
      <p>When winter weather strikes in Colorado Springs, reliable snow removal is essential for residential and commercial properties. At American Asphalt  Services, we are your trusted partner for all your snow removal needs. </p>
      </div>		
    </div>
    <hr>
    
    <div class="row mt-5">		
      <div class="col-lg-12 text-center">
      <h3>Our Snow Removal Services</h3>
      </div>	
    </div>
    
     <div class="row mt-5">		
      <div class="col-lg-4">
      <div class="inn-serv-box">
      <div class="inn-serv-box-img">
      <img src="{{asset('frontend/images/concrete-loading-dock-dumpster-pads-img.jpg')}}" class="img-fluid w-100">
      </div>
      <div class="inn-serv-box-ctn">
      <h3>Residential Snow Removal in Colorado Springs</h3>
      <p class="mb-0">Winter should be a time of enjoyment, not a source of worry. Our residential snow removal services ensure your driveway, walkways, and sidewalks remain clear and safe. Trust us to keep your home accessible during the coldest months.</p>
      </div>
      </div>
      </div>


<div class="col-lg-4">
      <div class="inn-serv-box">
      <div class="inn-serv-box-img">
      <img src="{{asset('frontend/images/commercial-snow-removal-in-colorado-springs.jpg')}}" class="img-fluid w-100">
      </div>
      <div class="inn-serv-box-ctn">
      <h3>Commercial Snow Removal in Colorado Springs</h3>
      <p class="mb-0">For businesses, maintaining accessibility during winter is crucial. Our commercial snow removal services are tailored to the unique needs of commercial properties. We keep your parking lots and pathways clear, minimizing disruption and ensuring the safety of employees and customers.</p>
      </div>
      </div>
      </div>


<div class="col-lg-4">
      <div class="inn-serv-box">
      <div class="inn-serv-box-img">
      <img src="{{asset('frontend/images/colorado-springs-sidewalk-snow-removal.jpg')}}" class="img-fluid w-100">
      </div>
      <div class="inn-serv-box-ctn">
      <h3>Colorado Springs Sidewalk Snow Removal</h3>
      <p class="mb-0">Clear sidewalks are essential for the safety of pedestrians. Our Colorado Springs sidewalk snow removal services are dedicated to keeping pathways clear, and preventing slips and falls.</p>
      </div>
      </div>
      </div>	
       </div>
<div class="row bg-box mt-5">
<div class="col-lg-4 align-self-center">
<img src="{{asset('frontend/images/rsr-pic.jpg')}}" class="img-fluid w-100">
</div>	
<div class="col-lg-8">
<h3>Reliable Snow Removal, All Winter Long</h3>
<p>Colorado winters can be harsh, but you don't have to worry about snow piling up. American Asphalt Services is your partner in keeping your property safe and accessible throughout the winter season.</p>
<p class="mb-0">American Asphalt Services has you covered whether you need residential or commercial snow removal, including sidewalk snow removal. Don't let winter weather hold you back. Contact us today for a consultation and ensure your property remains snow-free all winter. Stay safe and worry-free with American Asphalt Services' snow removal services in Colorado Springs.</p>

</div>

      
    </div>
    
   
    
    
    
    
    
    </div>
  </section>
  
  
  
  
  
  @include('Frontend.Layout.contactinfo')
  
@endsection