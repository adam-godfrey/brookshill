@extends('layouts.default')

@section('content')

<section class="page-section">
    <div class="container">
      <div class="d-none d-sm-block mb-5 pb-4">
        <div id="map" style="height: 480px;"></div>
        <script>
          function initMap() {
            var uluru = {lat: -25.363, lng: 131.044};
            var grayStyles = [
              {
                featureType: "all",
                stylers: [
                  { saturation: -90 },
                  { lightness: 50 }
                ]
              },
              {elementType: 'labels.text.fill', stylers: [{color: '#ccdee9'}]}
            ];
            var map = new google.maps.Map(document.getElementById('map'), {
              center: {lat: -31.197, lng: 150.744},
              zoom: 9,
              styles: grayStyles,
              scrollwheel:  false
            });
          }
          
        </script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpfS1oRGreGSBU5HHjMmQ3o5NLw7VdJ6I&callback=initMap"></script>
        
      </div>


    </div>
  </section>

  <section class="page-section cta">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 mx-auto">
                <div class="cta-inner rounded">
                    <h2 class="section-heading mb-5 text-center">
                        <span class="section-heading-upper">Come On In</span>
                        <span class="section-heading-lower">Gallery</span>
                    </h2>

                    <div class="row">
				        <div class="col-lg-8">
				          <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
				            <div class="row">
				              <div class="col-12">
				                <div class="form-group">
				                    <textarea class="form-control w-100 placeholder hide-on-focus" name="message" id="message" cols="30" rows="9" placeholder="Enter Message"></textarea>
				                </div>
				              </div>
				              <div class="col-sm-6">
				                <div class="form-group">
				                  <input class="form-control placeholder hide-on-focus" name="name" id="name" type="text" placeholder="Enter your name">
				                </div>
				              </div>
				              <div class="col-sm-6">
				                <div class="form-group">
				                  <input class="form-control placeholder hide-on-focus" name="email" id="email" type="email" placeholder="Enter email address">
				                </div>
				              </div>
				              <div class="col-12">
				                <div class="form-group">
				                  <input class="form-control placeholder hide-on-focus" name="subject" id="subject" type="text" placeholder="Enter Subject">
				                </div>
				              </div>
				            </div>
				            <div class="form-group mt-3">
				              <button type="submit" class="btn btn-primary button-contactForm">Send Message</button>
				            </div>
				          </form>
				        </div>
				        <div class="col-lg-4">
				          <div class="media contact-info">
				            <span class="contact-info__icon"><i class="ti-home"></i></span>
				            <div class="media-body">
				              <h3><a href="">Buttonwood, California.</a></h3>
				              <p>Rosemead, CA 91770</p>
				            </div>
				          </div>
				          <div class="media contact-info">
				            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
				            <div class="media-body">
				              <h3><a href="tel:454545654">00 (440) 9865 562</a></h3>
				              <p>Mon to Fri 9am to 6pm</p>
				            </div>
				          </div>
				          <div class="media contact-info">
				            <span class="contact-info__icon"><i class="ti-email"></i></span>
				            <div class="media-body">
				              <h3><a href="mailto:support@colorlib.com">support@colorlib.com</a></h3>
				              <p>Send us your query anytime!</p>
				            </div>
				          </div>
				        </div>
				      </div>
				  </div>
				</div>
			</div>
		</div>
	</section>


  @endsection