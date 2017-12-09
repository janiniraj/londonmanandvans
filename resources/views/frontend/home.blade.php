@extends('frontend.layouts.main')

@section('content')
  
   <!-- home-section 
			================================================== -->
  
  <!-- End home section --> 
  <section id="home-section" class="slider1"> 

    <div class="tp-banner-container">
      <div class="tp-banner" >
        <ul>
<!-- SLIDE  -->
          <li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on"  data-title="Intro Slide"> 
            <!-- MAIN IMAGE --> 
            <img src="{{ URL::to('/') }}/frontend/images/dummy.png"  alt="2" data-lazyload="{{ URL::to('/') }}/frontend/upload/slide/4.jpg" data-bgposition="right top" data-kenburns="on" data-duration="12000" data-ease="Power0.easeInOut" data-bgfit="100" data-bgfitend="100" data-bgpositionend="center bottom"> 
            <!-- <img src="{{ URL::to('/') }}/frontend/upload/slide/1.jpg"  alt="slidebg1" data-lazyload="{{ URL::to('/') }}/frontend/upload/slide/1.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat"> --> 
            <!-- LAYERS --> 
            
            <!-- LAYER NR. 1 -->
            <div class="tp-caption finewide_medium_white lfl tp-resizeme rs-parallaxlevel-0"
data-x="0"
data-y="165" 
data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;"
data-speed="500"
data-start="1200"
data-easing="Power3.easeInOut"
data-splitin="none"
data-splitout="none"
data-elementdelay="0.1"
data-endelementdelay="0.1"
style="z-index: 8; max-width: auto; max-height: auto; white-space: nowrap;">We provide best <br> mover & packer services
            </div>
            
            <!-- LAYER NR. 2 -->
            <div class="tp-caption small_text customin tp-resizeme rs-parallaxlevel-0"
data-x="0"
data-y="280" 
data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;"
data-speed="500"
data-start="1800"
data-easing="Power3.easeInOut"
data-splitin="none"
data-splitout="none"
data-elementdelay="0.05"
data-endelementdelay="0.1"
style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;">We provide removals to and from the Manchester space. <br>we tend to might have all of the fashionable removals instrumentality<br>at our disposal, however there’s additional to our service than the removal vans.</div>
            
            <!-- LAYER NR. 3 -->
            <div class="tp-caption lfl tp-resizeme rs-parallaxlevel-0"
data-x="0"
data-y="420" 
data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;"
data-speed="500"
data-start="2400"
data-easing="Power3.easeInOut"
data-splitin="none"
data-splitout="none"
data-elementdelay="0.1"
data-endelementdelay="0.1"
data-linktoslide="next"
style="z-index: 10; max-width: auto; max-height: auto; white-space: nowrap;"><a href='#' class='trans-btn'>load more</a> </div>
            
            <!-- LAYER NR. 4 -->
            <div class="tp-caption lfr tp-resizeme rs-parallaxlevel-0"
data-x="220"
data-y="420" 
data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;"
data-speed="500"
data-start="2500"
data-easing="Power3.easeInOut"
data-splitin="none"
data-splitout="none"
data-elementdelay="0.1"
data-endelementdelay="0.1"
data-linktoslide="next"
style="z-index: 11; max-width: auto; max-height: auto; white-space: nowrap;"><a href='#' class='trans-btn2'>Portfolio</a> </div>
          </li>
          
          <!-- SLIDE  -->
          <li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on"  data-title="Intro Slide"> 
            <!-- MAIN IMAGE --> 
            <img src="{{ URL::to('/') }}/frontend/images/dummy.png"  alt="2" data-lazyload="{{ URL::to('/') }}/frontend/upload/slide/3.jpg" data-bgposition="right top" data-kenburns="on" data-duration="12000" data-ease="Power0.easeInOut" data-bgfit="100" data-bgfitend="100" data-bgpositionend="center bottom"> 
            <!-- <img src="{{ URL::to('/') }}/frontend/upload/slide/1.jpg"  alt="slidebg1" data-lazyload="{{ URL::to('/') }}/frontend/upload/slide/1.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat"> --> 
            <!-- LAYERS --> 
            
            <!-- LAYER NR. 1 -->
            <div class="tp-caption finewide_medium_white lfl tp-resizeme rs-parallaxlevel-0"
data-x="620"
data-y="165" 
data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;"
data-speed="500"
data-start="1200"
data-easing="Power3.easeInOut"
data-splitin="none"
data-splitout="none"
data-elementdelay="0.1"
data-endelementdelay="0.1"
style="z-index: 8; max-width: auto; max-height: auto; white-space: nowrap;">We provide best <br> mover & packer services
            </div>
            
            <!-- LAYER NR. 2 -->
            <div class="tp-caption small_text customin tp-resizeme rs-parallaxlevel-0"
data-x="620"
data-y="280" 
data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;"
data-speed="500"
data-start="1800"
data-easing="Power3.easeInOut"
data-splitin="none"
data-splitout="none"
data-elementdelay="0.05"
data-endelementdelay="0.1"
style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;">We provide removals to and from the Manchester space. <br>we tend to might have all of the fashionable removals instrumentality<br>at our disposal, however there’s additional to our service than the removal vans.</div>
            
            <!-- LAYER NR. 3 -->
            <div class="tp-caption lfl tp-resizeme rs-parallaxlevel-0"
data-x="620"
data-y="420" 
data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;"
data-speed="500"
data-start="2400"
data-easing="Power3.easeInOut"
data-splitin="none"
data-splitout="none"
data-elementdelay="0.1"
data-endelementdelay="0.1"
data-linktoslide="next"
style="z-index: 10; max-width: auto; max-height: auto; white-space: nowrap;"><a href='#' class='trans-btn'>load more</a> </div>
            
            <!-- LAYER NR. 4 -->
            <div class="tp-caption lfr tp-resizeme rs-parallaxlevel-0"
data-x="850"
data-y="420" 
data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;"
data-speed="500"
data-start="2500"
data-easing="Power3.easeInOut"
data-splitin="none"
data-splitout="none"
data-elementdelay="0.1"
data-endelementdelay="0.1"
data-linktoslide="next"
style="z-index: 11; max-width: auto; max-height: auto; white-space: nowrap;"><a href='#' class='trans-btn2'>Portfolio</a> </div>
          </li>

          <!-- SLIDE  --> 
                  </ul>
        
      </div></div>
  </section>
<section class="about-box ser-section">
    <div class="container">
      <div class="row">
            <p class="hide">Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis.          </p>
            <div class="mb-0 service-icon col-md-3">
              <img src="{{ URL::to('/') }}/frontend/upload/others/service1.jpg" alt="service1"> <h3>Residential Movers</h3>
              <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis.         </p>
              
              <a href="#" class="btn btn-theme button-one">read more</a>
            </div>
            <div class="mb-0 service-icon col-md-3">
              <img src="{{ URL::to('/') }}/frontend/upload/others/service2.jpg" alt="service1"> <h3>Packaging</h3>
              <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis.          </p>
              
              <a href="#" class="btn btn-theme button-one">read more</a>
            </div>
             <div class="mb-0 service-icon col-md-3">
              <img src="{{ URL::to('/') }}/frontend/upload/others/service3.jpg" alt="service1"> <h3>Commercial Movers</h3>
              <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis.    </p>
              
              <a href="#" class="btn btn-theme button-one">read more</a>
            </div>
             <div class="mb-0 service-icon col-md-3">
              <img src="{{ URL::to('/') }}/frontend/upload/others/service4.jpg" alt="service1"> <h3>Storage</h3>
              <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis.    </p>
              
              <a href="#" class="btn btn-theme button-one">read more</a>
            </div>
      </div>
    </div>
  </section>

      <!-- services section 
			================================================== -->
  <section class="service-section">
  <div class="container">
	  <div class="col-md-12">
        <div class="sec-title style-2 mb-20">
          <h2 class="">Our  <span> Services</span> </h2>
        </div>
        <p class="mb-30">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Consect petur adipiscing elit.  eu fugiat nulla pariatur. Excepteur sint occaecat. </p> </div>


<div class="row"> 
        
        <!-- Icon -->
        <div class="col-md-4 margin-bottom-30 animate fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
          <div class="icon-box ib-style-3 ib-bordered ib-bordered-thin ib-bordered-white ib-large ib-circle">
            <div class="ib-icon"> <img src="{{ URL::to('/') }}/frontend/images/icon1.png" alt=""> </div>
            <div class="ib-info">
              <h4 class="h6">Residential Movers</h4>
              <p>Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
            </div>
          </div>
        </div>
        
        <div class="col-md-4 margin-bottom-30 animate fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
          <div class="icon-box ib-style-3 ib-bordered ib-bordered-thin ib-bordered-white ib-large ib-circle">
            <div class="ib-icon"> <img src="{{ URL::to('/') }}/frontend/images/icon2.png" alt=""> </div>
            <div class="ib-info">
              <h4 class="h6">Packaging </h4>
              <p>Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
            </div>
          </div>
        </div>
        
        <div class="col-md-4 margin-bottom-30 animate fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
          <div class="icon-box ib-style-3 ib-bordered ib-bordered-thin ib-bordered-white ib-large ib-circle">
            <div class="ib-icon"> <img src="{{ URL::to('/') }}/frontend/images/icon3.png" alt=""> </div>
            <div class="ib-info">
              <h4 class="h6">Commercial Movers</h4>
              <p>Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
            </div>
          </div>
        </div>
        
        <div class="height-20"></div>
        
        <div class="col-md-4 margin-bottom-30 animate fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
          <div class="icon-box ib-style-3 ib-bordered ib-bordered-thin ib-bordered-white ib-large ib-circle">
            <div class="ib-icon"> <img src="{{ URL::to('/') }}/frontend/images/icon4.png" alt=""> </div>
            <div class="ib-info">
              <h4 class="h6">Storage</h4>
              <p>Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
            </div>
          </div>
        </div>
        
        <!-- Icon -->
        <div class="col-md-4 margin-bottom-30 animate fadeInUp" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
          <div class="icon-box ib-style-3 ib-bordered ib-bordered-thin ib-bordered-white ib-large ib-circle">
            <div class="ib-icon"> <img src="{{ URL::to('/') }}/frontend/images/icon5.png" alt=""> </div>
            <div class="ib-info">
              <h4 class="h6">Furniture Rebinding</h4>
              <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p>
            </div>
          </div>
        </div>
        
        <!-- Icon -->
        <div class="col-md-4 margin-bottom-30 animate fadeInUp" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInUp;">
          <div class="icon-box ib-style-3 ib-bordered ib-bordered-thin ib-bordered-white ib-large ib-circle">
            <div class="ib-icon"> <img src="{{ URL::to('/') }}/frontend/images/icon6.png" alt=""> </div>
            <div class="ib-info">
              <h4 class="h6">Recycling</h4>
              <p>Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
            </div>
          </div>
        </div>
      </div>

  </div>
</section>
<!-- End team section --> 

  <section class="help-block text-center help-block-bg">
    <div class="container">
      <div class="row">
        
       <h1>Mover Professional Moving Company in</h1>
       <h2>Newyork, Florida, Las Vegas & Califonia</h2>
       <a href="#" class="btn btn-theme button-one">contact us</a>
        
      </div>
      <!-- End row --> 
      
    </div>
    <!-- End container --> 
    
  </section>
  
<section class="why-choose">
    <div class="container">
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="col-md-12">
        <div class="sec-title style-2 mb-20">
          <h2 class="">Why  <span> Choose Us</span> </h2>
        </div>
        <p class="mb-30">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p> </div>
        <div class="col-md-12 margin-bottom-30 animate fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
          <div class="icon-box ib-style-3 ib-bordered ib-bordered-thin ib-bordered-white ib-large ib-circle">
            <div class="ib-icon"> <img src="{{ URL::to('/') }}/frontend/images/wallet.jpg" alt=""> </div>
            <div class="ib-info">
              <h4 class="h6">Free Estimate</h4>
              <p>Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
            </div>
          </div>
        </div>
        <div class="col-md-12 margin-bottom-30 animate fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
          <div class="icon-box ib-style-3 ib-bordered ib-bordered-thin ib-bordered-white ib-large ib-circle">
            <div class="ib-icon"> <img src="{{ URL::to('/') }}/frontend/images/24x7.jpg" alt=""> </div>
            <div class="ib-info">
              <h4 class="h6">24/7 Services</h4>
              <p>Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
            </div>
          </div>
        </div>
        <div class="col-md-12 margin-bottom-30 animate fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
          <div class="icon-box ib-style-3 ib-bordered ib-bordered-thin ib-bordered-white ib-large ib-circle">
            <div class="ib-icon"> <img src="{{ URL::to('/') }}/frontend/images/price.jpg" alt=""> </div>
            <div class="ib-info">
              <h4 class="h6">Flat Rate Fees</h4>
              <p>Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 video-box">
        <div class="cta-form ">
                                <div class="cta cta-2 bg-theme">
                                    <div class="cta-desc">

                                        <h5>Request A Quote</h5>
                                    </div>
                                </div><!-- .cta-2 end -->

                                <div class="form">
                                    <form novalidate="novalidate" id="quote-form" action="assets/php/sendquote.php" method="post">
                                <div class="col-md-6"><input aria-required="true" class="form-control" name="quote-name" id="name" placeholder="First Name" required="" type="text"> </div>
                                <div class="col-md-6"><input aria-required="true" class="form-control" name="quote-email" id="email" placeholder="Email" required="" type="email"></div>
                                <div class="col-md-6"> <input aria-required="true" class="form-control" name="quote-from" id="from" placeholder="Move From" required="" type="text"></div>
                                <div class="col-md-6"> <input aria-required="true" class="form-control" name="quote-to" id="to" placeholder="Move To" required="" type="text"> </div>
                                <div class="col-md-12">
                                <textarea class="form-control" name="quote-message" id="quote" placeholder="Message" rows="2" required=""></textarea> </div>
                                <div class="col-md-12"><button type="submit" class="btn btn-primary btn-black btn-block">Submit Inquiry</button></div> <!--Alert Message-->

                                        <div id="quote-result" class="mt-xs"></div>
                                    </form>
                                </div>
                            </div>
      </div>
    </div>
  </section>
    <!-- team section 
			================================================== -->
  <section class="team-section">
  <div class="container">
	  <div class="col-md-12">
        <div class="sec-title style-2 mb-20">
          <h2 class="">Our  <span> Team</span> </h2>
        </div>
        <p class="mb-30">Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.<br>
          Duis aute irure dolor in reprehenderit in voluptate velit esse  nulla pariatur. </p> </div>
     <div class="col-md-3">
      <div class="team-box">
        <div class="team-inner"> <img src="{{ URL::to('/') }}/frontend/upload/team/1.jpg" alt="" >
          <div class="mask"></div>
          <ul class="team-social-list">
            <li><a href="#"><i class="fa fa-envelope"></i></a></li>
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>
        <div class="team-content">
          <h6>Douglas Gilbert</h6>
          <div class="subtext">Supervisor</div>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="team-box">
        <div class="team-inner"> <img src="{{ URL::to('/') }}/frontend/upload/team/2.jpg" alt="" >
          <div class="mask"></div>
          <ul class="team-social-list">
            <li><a href="#"><i class="fa fa-envelope"></i></a></li>
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>
        <div class="team-content">
          <h6>Douglas Gilbert</h6>
          <div class="subtext">Supervisor</div>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="team-box">
        <div class="team-inner"> <img src="{{ URL::to('/') }}/frontend/upload/team/3.jpg" alt="" >
          <div class="mask"></div>
          <ul class="team-social-list">
            <li><a href="#"><i class="fa fa-envelope"></i></a></li>
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>
        <div class="team-content">
          <h6>Douglas Gilbert</h6>
          <div class="subtext">Supervisor</div>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="team-box">
        <div class="team-inner"> <img src="{{ URL::to('/') }}/frontend/upload/team/4.jpg" alt="" >
          <div class="mask"></div>
          <ul class="team-social-list">
            <li><a href="#"><i class="fa fa-envelope"></i></a></li>
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>
        <div class="team-content">
          <h6>Douglas Gilbert</h6>
          <div class="subtext">Supervisor</div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End team section --> 
  
  <!-- testimonial-section 
			================================================== -->
  <section class="testimonial-section">
    <div class="container">
      <div class="col-md-12">
        <div class="project-title title"> <span class="sm-title">What people say?</span>
          <h2 class="box-header">TESTIMONIALS</h2>
        </div>
        <div class="testimonial-box">
          <ul class="bxslider">
            <li>
              <h2>John Smith</h2>
              <span>Chief Director</span>
              <p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci.</p>
            </li>
            <li>
              <h2>Franz Auer</h2>
              <span>Project Menager</span>
              <p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. </p>
            </li>
            <li>
              <h2>Tobias Steiner</h2>
              <span>Electricity Engineer</span>
              <p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. </p>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- End testimonial section --> 
  <section class="news-section news-section-home">
    <div class="container">
        <div class="sec-title style-2 mb-20">
          <h2 class="">Latest  <span> News</span> </h2>
        <p class="mb-30">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Consect petur adipiscing elit.  eu fugiat nulla pariatur. Excepteur sint occaecat. </p> </div>
      <div class="news-box">
        <div class="row">
          <div class="col-md-4 col-sm-6">
            <article>
              <div class="news-post">
                <div class="img-cap-effect">
                  <div class="img-box"> <img src="{{ URL::to('/') }}/frontend/upload/others/ser1.jpg" alt="Awesome Image">
                    <div class="img-caption">
                      <div class="box-holder"></div>
                    </div>
                  </div>
                </div>
                <div class="post-content-text">
                  
                  <h2><a href="single-post.html">News Title Here</a></h2>
                  <ul class="blog_infos nav">
                    <li><a href="#"><i class="fa fa-calendar"></i>19 May, 2015</a></li>
                    <li><a href="#"><i class="fa fa-comment"></i>(3) comments</a></li>
                  </ul>
                  <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                  <a class="btn readmore" href="single-post.html">read more</a> </div>
              </div>
            </article>
          </div>
          <div class="col-md-4 col-sm-6">
            <article>
              <div class="news-post">
                <div class="img-cap-effect">
                  <div class="img-box"> <img src="{{ URL::to('/') }}/frontend/upload/others/ser2.jpg" alt="Awesome Image">
                    <div class="img-caption">
                      <div class="box-holder"></div>
                    </div>
                  </div>
                </div>
                <div class="post-content-text">
                 
                  <h2><a href="single-post.html">News Title Here</a></h2>
                   <ul class="blog_infos nav">
                    <li><a href="#"><i class="fa fa-calendar"></i>19 May, 2015</a></li>
                    <li><a href="#"><i class="fa fa-comment"></i>(3) comments</a></li>
                  </ul>
                  <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                  <a class="btn readmore" href="single-post.html">read more</a> </div>
              </div>
            </article>
          </div>
          <div class="col-md-4 col-sm-6">
            <article>
              <div class="news-post">
                <div class="img-cap-effect">
                  <div class="img-box"> <img src="{{ URL::to('/') }}/frontend/upload/others/ser3.jpg" alt="Awesome Image">
                    <div class="img-caption">
                      <div class="box-holder"></div>
                    </div>
                  </div>
                </div>
                <div class="post-content-text">
                 
                  <h2><a href="single-post.html">News Title Here</a></h2>
                   <ul class="blog_infos nav">
                    <li><a href="#"><i class="fa fa-calendar"></i>19 May, 2015</a></li>
                    <li><a href="#"><i class="fa fa-comment"></i>(3) comments</a></li>
                  </ul>
                  <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                  <a class="btn readmore" href="single-post.html">read more</a> </div>
              </div>
            </article>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <section class="help-block text-left">
    <div class="container">
      <div class="row">
        <div class="col-md-5"></div>
        <div class="col-md-7">
       <h1>Need a copy of Mover Theme</h1>
       <h2>so what are you waiting?</h2>
       <a href="#" class="btn btn-theme button-one">click here</a>
        </div>
      </div>
      <!-- End row --> 
      
    </div>
  </section>
    <!-- End container -->
@endsection