@extends("Frontend.Layout.app")
@section("content")
<section class="banner-slider" id="inn-banner-slider">
    <div data-ride="carousel" class="carousel slide" id="carouselExampleIndicators">
      <div role="listbox" class="carousel-inner">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div style="background-image: url('{{asset('frontend/images/inner-banner.jpg')}}')" class="carousel-item active">
        <div class="carousel-caption">
            <h1 class="mb-2">Asphalt Paving</h1>
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
      <h2>Asphalt Paving in Colorado Springs</h2>
      <p>When it comes to top-quality asphalt paving in Colorado Springs, American Asphalt Services stands as the industry leader. With our expert team and a reputation for excellence, we offer a wide range of asphalt paving services to meet your needs.</p>
      </div>		
    </div>
    <hr>
    
    <div class="row mt-5">		
      <div class="col-lg-12 text-center">
      <h3>Our Asphalt Paving Services</h3>
      <p>For reliable, durable, and visually appealing asphalt surfaces, trust our expertise. We specialize in asphalt paving projects throughout the Front Range, ensuring that your paving needs are met with precision and professionalism.</p>
      </div>	
    </div>
    
     <div class="row mt-5">		
      <div class="col-lg-6">
      <img src="{{asset('frontend/images/complete-asphalt-paving-solutions.jpg')}}" class="img-fluid w-100">
      </div>
<div class="col-lg-6 align-self-center">
      <h2>Complete Asphalt Paving Solutions</h2>
      <p>Whether you require new asphalt paving or are looking to revitalize your existing surfaces, our complete asphalt paving solutions have got you covered. From driveways to parking lots, we provide comprehensive services to enhance your property's functionality and aesthetics. At American Asphalt Services, we service both residential and commercial properties.</p>
      </div>		
    </div>
    
    <div class="row mt-5">		
<div class="col-lg-6 align-self-center">
      <h2>Asphalt Paving Repair and Maintenance</h2>
      <p>Is your asphalt showing signs of wear and tear? We offer expert asphalt paving repair and maintenance to extend the life of your pavement. Our skilled team will assess the condition of your asphalt and recommend cost-effective asphalt repair and paving services to keep it in optimal shape.</p>
      </div>
<div class="col-lg-6">
      <img src="{{asset('frontend/images/asphalt-paving-repair-and-maintenance.jpg')}}" class="img-fluid w-100">
      </div>		
    </div>

    
   
    <div class="row bg-box mt-5 text-center">		
<div class="col-lg-12">
      <h3>Asphalt Paving Colorado Springs Can Trust</h3>
      <p class="mb-0">When it comes to Colorado asphalt services in Colorado Springs, American Asphalt Services is your trusted partner. As an asphalt company in Colorado Springs, let us help you achieve a smooth, durable, and attractive asphalt surface for your property. Call us today to discuss your asphalt paving needs, and elevate your paving with American Asphalt Services - the name you can rely on for outstanding asphalt paving results.</p>
      </div>	
    </div>
    
    
    
    
    </div>
  </section>
  
  
  
  
  
  @include('Frontend.Layout.contactinfo')
  
@endsection