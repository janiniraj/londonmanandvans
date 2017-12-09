<!doctype html>

<html lang="en" class="no-js">
<head>
<title>MoverPro - HTML 5 Template</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
@yield('before-styles')

@include('frontend.includes.styles')

@yield('after-styles')

</head>
<body class="style-2 style-5">

<!-- Container -->
<div id="container"> 
  <!-- Header
		    ================================================== -->
  @include('frontend.includes.header')
  <!-- End Header --> 

  @yield('content')

  <!-- footer 
      ================================================== -->
  @include('frontend.includes.footer')
  <!-- End footer --> 
  
</div>
<!-- End Container -->
@yield('before-scripts')

@include('frontend.includes.scripts')

@yield('after-scripts')

<!-- Revolution slider -->
</body>
</html>