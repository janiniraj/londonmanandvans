<header class="clearfix">
  <nav class="navbar navbar-default " role="navigation">
    <div class="top-line">
      <div class="container">
        <div class="row">
          <div class="col-md-7 pull-right text-right">
            <p> <span><span class="icon icon-Phone2"></span>1234 - 5678 - 9012</span> <span><span class="icon icon-Mail"></span>support@MoverPro.com</span> </p>
          </div>
          <div class="col-md-5">
            <ul class="social-icons">
              <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="rss" href="#"><i class="fa fa-rss"></i></a></li>
              <li><a class="google" href="#"><i class="fa fa-google-plus"></i></a></li>
              <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a class="pinterest" href="#"><i class="fa fa-pinterest"></i></a></li>
            </ul>
          </div>
      </div></div>
    </div>
    <div class="container"> 
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a class="navbar-brand" href="index.html"><img src="{{ URL::to('/') }}/frontend/images/logo-dark.png" alt=""></a> </div>
      
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          @foreach($headerMenu as $key => $value)
            <li><a  class="{{ isset($slug) && ($key == $slug) ? 'active' : ''}}" href="{{ route('frontend.page', $key) }}">{{$value}}</a> </li>
          @endforeach
          
        </ul>
      </div>
      <!-- /.navbar-collapse --> 
    </div>
    <!-- /.container --> 
  </nav>
</header>