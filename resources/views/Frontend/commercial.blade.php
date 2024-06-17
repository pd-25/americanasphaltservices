@extends("Frontend.Layout.app")
@section("content")

<section class="banner-slider" id="inn-banner-slider">
    <div data-ride="carousel" class="carousel slide" id="carouselExampleIndicators">
      <div role="listbox" class="carousel-inner">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div style="background-image: url('{{asset('frontend/images/inner-banner.jpg')}}')" class="carousel-item active">
        <div class="carousel-caption">
            <h1 class="mb-2">Commercial Service</h1>
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
      <h2>COMMERCIAL ASPHALT SERVICES IN COLORADO</h2>
      <p>As an asphalt company in Colorado Springs, American Asphalt Services offers commercial asphalt services across the state of Colorado. If your business exterior is in need of a facelift, we’ve got you covered. From commercial parking lot paving to striping or snow removal, you can rely on American Asphalt to provide full-service Colorado asphalt services.</p>
      </div>		
    </div>
    <hr>






<div class="row mt-5">		
      <div class="col-lg-4">
      <div class="inn-serv-box">
      <div class="inn-serv-box-img">
      <img src="{{asset('frontend/images/cs-pic1.jpg')}}" class="img-fluid w-100">
      </div>
      <div class="inn-serv-box-ctn">
      <h3>Commercial Asphalt Paving</h3>
      <p class="mb-0">We provide complete asphalt paving solutions including ground preparation, removal or treatment of existing surface pavement, and quality asphalt application. We use modern equipment and the latest techniques for in stalling asphalt. Our experienced team can handle projects large and small.</p>
      </div>
      </div>
      </div>


<div class="col-lg-4">
      <div class="inn-serv-box">
      <div class="inn-serv-box-img">
      <img src="{{asset('frontend/images/cs-pic2.jpg')}}" class="img-fluid w-100">
      </div>
      <div class="inn-serv-box-ctn">
      <h3>Commercial Sealcoating</h3>
      <p class="mb-0">Sealcoating involves applying a specially designed protective sealant to the surface of asphalt or concrete pavement. It ensures that the pavement will last longer by resisting cracking, chipping, or peeling due to weather conditions.</p>
      </div>
      </div>
      </div>


<div class="col-lg-4">
      <div class="inn-serv-box">
      <div class="inn-serv-box-img">
      <img src="{{asset('frontend/images/cs-pic3.jpg')}}" class="img-fluid w-100">
      </div>
      <div class="inn-serv-box-ctn">
      <h3>Pothole Patching & Crack Filling</h3>
      <p class="mb-0">We remove the damaged material, prepare the area to be patched with an adhesive material, and fill the damaged area with a cold patch, gator pave, or hot asphalt. We then compact the new asphalt and seal the edges of the patch.</p>
      </div>
      </div>
      </div>	
       </div>
       
       
       
       <div class="row mt-5">		
      <div class="col-lg-4">
      <div class="inn-serv-box">
      <div class="inn-serv-box-img">
      <img src="{{asset('frontend/images/cs-pic4.jpg')}}" class="img-fluid w-100">
      </div>
      <div class="inn-serv-box-ctn">
      <h3>Striping</h3>
      <p class="mb-0">Striping your driveway and parking lot is of critical importance to both safety and general appearance. </p>
      </div>
      </div>
      </div>


<div class="col-lg-4">
      <div class="inn-serv-box">
      <div class="inn-serv-box-img">
      <img src="{{asset('frontend/images/cs-pic5.jpg')}}" class="img-fluid w-100">
      </div>
      <div class="inn-serv-box-ctn">
      <h3>Snow Removal</h3>
      <p class="mb-0">We provide complete snow removal services that include plowing, shoveling, and anti-icing protection for your parking lots, driveways, and sidewalks.</p>
      </div>
      </div>
      </div>


<div class="col-lg-4">
      <div class="inn-serv-box">
      <div class="inn-serv-box-img">
      <img src="{{asset('frontend/images/cs-pic6.jpg')}}" class="img-fluid w-100">
      </div>
      <div class="inn-serv-box-ctn">
      <h3>Commercial Construction & Maintenance</h3>
      <p class="mb-0">Our dedicated team specializes in both commercial asphalt maintenance and new asphalt construction, ensuring that your surfaces remain safe, durable, and visually appealing. We understand the importance of proper maintenance to prolong the life of your existing asphalt surfaces. Looking for a fresh start? Whether you need routine upkeep or a brand-new installation, American Asphalt Services is here to deliver excellence in every aspect of asphalt craftsmanship. </p>
      </div>
      </div>
      </div>	
       </div>
    
     
    

    
   
    
    
    
    
    
    </div>
  </section>
  
  
  
  
  
  @include('Frontend.Layout.contactinfo')
@endsection