@extends("Frontend.Layout.app")
@section("content")

<section class="banner-slider" id="inn-banner-slider">
    <div data-ride="carousel" class="carousel slide" id="carouselExampleIndicators">
      <div role="listbox" class="carousel-inner">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div style="background-image: url('{{asset('frontend/images/res-as-banner.jpg')}}')" class="carousel-item active">
        <div class="carousel-caption">
            <h1 class="mb-2">Residential Service</h1>
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
      <h2>RESIDENTIAL ASPHALT SERVICES IN COLORADO</h2>
      <p>Enhance your Colorado residence with premium residential asphalt solutions by American Asphalt Services. From residential driveway sealcoating to asphalt repair and paving, our expertise and proficiency guarantee exceptional outcomes that surpass expectations. As a trusted asphalt company in Colorado Springs, our dedication to excellence and longevity guarantees that your asphalt surfaces not only appear flawless but also endure the challenges of time and the unpredictable Colorado climate. Count on American Asphalt for comprehensive concrete and asphalt services.</p>
      </div>		
    </div>
    <hr>






<div class="row mt-5">		
      <div class="col-lg-4">
      <div class="inn-serv-box">
      <div class="inn-serv-box-img">
      <img src="{{asset('frontend/images/rs-pic1.jpg')}}" class="img-fluid w-100">
      </div>
      <div class="inn-serv-box-ctn">
      <h3>Paving</h3>
      <p class="mb-0">An inexpensive solution for a beautiful driveway. If you have problems with icing in the winter, a black paved driveway will heat up faster to melt snow and ice sooner.</p>
      </div>
      </div>
      </div>


<div class="col-lg-4">
      <div class="inn-serv-box">
      <div class="inn-serv-box-img">
      <img src="{{asset('frontend/images/rs-pic2.jpg')}}" class="img-fluid w-100">
      </div>
      <div class="inn-serv-box-ctn">
      <h3>Driveway Sealcoating</h3>
      <p class="mb-0">The benefits of asphalt are numerous, such as affordability, durability, strength, and texture. In order to get the most out of your asphalt, a good sealcoating is required.</p>
      </div>
      </div>
      </div>

<div class="col-lg-4">
      <div class="inn-serv-box">
      <div class="inn-serv-box-img">
      <img src="{{asset('frontend/images/rs-pic4.jpg')}}" class="img-fluid w-100">
      </div>
      <div class="inn-serv-box-ctn">
      <h3>Striping</h3>
      <p class="mb-0">Striping a basketball court, tennis court, pickleball court, or any special project is a specialty of ours. We can turn your driveway into a fun area for the entire family to enjoy.</p>
      </div>
      </div>
      </div>
  
       </div>
       
       
       
       <div class="row mt-5 justify-content-center">		
      
<div class="col-lg-4">
      <div class="inn-serv-box">
      <div class="inn-serv-box-img">
      <img src="{{asset('frontend/images/rs-pic3.jpg')}}" class="img-fluid w-100">
      </div>
      <div class="inn-serv-box-ctn">
      <h3>Asphalt Pothole Repair</h3>
      <p class="mb-0">Asphalt cracks and potholes, really no way to avoid it, especially with the weather we see in Colorado. The key to prolonging the life of your asphalt driveway is to repair the cracks and potholes quickly and thoroughly. Our asphalt paving teams can help you do just that.</p>
      </div>
      </div>
      </div>

<div class="col-lg-4">
      <div class="inn-serv-box">
      <div class="inn-serv-box-img">
      <img src="{{asset('frontend/images/rs-pic5.jpg')}}" class="img-fluid w-100">
      </div>
      <div class="inn-serv-box-ctn">
      <h3>Construction & Maintenance</h3>
      <p class="mb-0">Our dedicated team specializes in both residential asphalt maintenance and new asphalt construction, ensuring that your surfaces remain safe, durable, and visually appealing. We understand the importance of proper maintenance to prolong the life of your existing asphalt surfaces. Looking for a fresh start? Whether you need routine upkeep or a brand-new installation, American Asphalt Services is here to deliver excellence in every aspect of asphalt craftsmanship. </p>
      </div>
      </div>
      </div>



       </div>
    
     
    

    
   
    
    
    
    
    
    </div>
  </section>
  
  
  
  
  
   @include('Frontend.Layout.contactinfo')
  
@endsection