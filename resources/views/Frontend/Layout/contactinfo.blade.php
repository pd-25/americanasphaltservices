<section id="contact-section" class="mt-0">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
        <div class="contact-ctn-box">
  <h2>{{$contactInfo->discount}}</h2>
  <p>{{$contactInfo->text}}</p>
        </div>
        </div>
        <div class="col-lg-5 align-self-center">
        <div class="call-box">
        <div class="media">
  <img src="{{asset('frontend/images/contact-icon.png')}}"class="img-fluid mr-3">
  <div class="media-body align-self-center">
    @php
    // Original phone number (assuming it's stored as a continuous string)
    $originalNumber = $contactInfo->number;
    
    // Format the phone number
    $formattedNumber = substr($originalNumber, 0, 3) . '-' . 
                       substr($originalNumber, 3, 3) . '-' . 
                       substr($originalNumber, 6);
@endphp

<h5><a href="tel:{{ $originalNumber }}">{{ $formattedNumber }}</a></h5>
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
         

          @foreach ($partnerlogos  as $item)
          <div class="item">
          <div class="client-box">
  <img src="{{ asset('storage/partner_logos/' . $item->image) }}"class="img-fluid" alt="...">
          </div>
          </div>
          
          @endforeach
          
  
          </div>
          
          </div>
  </div>
  </div>
  </div>
    </section>