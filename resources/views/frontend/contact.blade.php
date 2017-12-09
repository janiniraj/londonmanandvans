@extends('frontend.layouts.main')

@section('content')
<!-- page-banner-section 
			================================================== -->
  <section class="page-banner-section">
    <div class="text-center">
      <div class="row">
        <div class="col-md-12">
          <h2>Contact Us</h2>
        </div>
      </div>
    </div>
  </section>
  <!-- End page-banner section --> 
  
  <!-- contact section 
			================================================== -->
  <section class="contact-section">
    <div class="container">
      <div class="col-md-12">
        <div class="sec-title style-2 mb-20">
          <h2 class="white">Get a  <span> Quote</span> </h2>
        </div>
        <p class="mb-30">Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.<br>
          Duis aute irure dolor in reprehenderit in voluptate velit esse  nulla pariatur. </p> </div>
      <div class="col-md-8">
        <form id="contact-form">
          <div class="row">
            <div class="col-md-6">
              <input name="name" id="name" type="text" placeholder="Name">
            </div>
            <div class="col-md-6">
              <input name="mail" id="mail" type="text" placeholder="Email">
            </div>
          </div>
          <textarea name="comment" id="comment" placeholder="Message"></textarea>
          <input type="submit" id="submit_contact" value="Send Message">
          <div id="msg" class="message"></div>
        </form>
      </div>
      <div class="col-md-4">
        <div class="contact-info">
          <h2>Contact Info</h2>
          <p>You can contact or visit us in our office from Monday to Friday from 8:00 - 17:00</p>
          <ul class="information-list">
            <li><i class="fa fa-map-marker"></i><span>A 41 Pandav Nagar, New Delhi, India, 110005</span></li>
            <li><i class="fa fa-phone"></i><span>+91 4000-5000</span><span>+91 4500-4000</span></li>
            <li><i class="fa fa-envelope-o"></i><a href="#">MoverPro@gmail.com</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- End contact section --> 
  <!-- map 
			================================================== -->
  <div id="map"></div>
  <!-- map --> 
  <!-- Buy Now 
			================================================== -->
  <section class="pad-tb-40 callto-action">
    <div class="container">
      <div class="row"> 
        <!-- Column -->
        <div class="col-sm-12">
          <div class="callto-action text-center">
            <h3 class=""><span class="call-title-text"><span class="call-title-text">Need a copy of this beautiful Html5 so what are you waiting?</span></span><a href="https://themeforest.net/checkout/13941544" class="button-one">Buy now</a></h3>
          </div>
        </div>
        <!-- Column --> 
      </div>
      <!-- row --> 
    </div>
    <!-- Container --> 
  </section>
@endsection