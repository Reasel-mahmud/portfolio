
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Starlight">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/starlight/img/starlight-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/starlight">
    <meta property="og:title" content="Starlight">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>@yield('title')</title>

    <!-- vendor css -->
    <link href="{{asset('adminAsset')}}/asset/lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="{{asset('adminAsset')}}/asset/lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="{{asset('adminAsset')}}/asset/lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <link href="{{asset('adminAsset')}}/asset/lib/rickshaw/rickshaw.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Starlight CSS -->
    <link rel="stylesheet" href="{{asset('adminAsset')}}/asset/css/starlight.css">
  </head>

  <body>

    <!-- ########## START: LEFT PANEL ########## -->
  @include('admin.include.leftsid')

      <br>
    </div><!-- sl-sideleft -->
    <!-- ########## END: LEFT PANEL ########## -->

    <!-- ########## START: HEAD PANEL ########## -->
    @include('admin.include.header')

    <!-- ########## START: RIGHT PANEL ########## -->
    @include('admin.include.right')
    <!-- ########## END: RIGHT PANEL ########## --->

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">


      @yield('content')
      <!-- sl-pagebody -->
     @include('admin.include.footer')
    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/brands.min.js" integrity="sha512-rbApvPERCHI8cOpTOKfMLVJNlXSCs4QRu8UsJ0HieeHyNKkHtUIQTZq3hv0pT7X0SUsLrRGEUsMTTpzwpdeIuw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{asset('adminAsset')}}/asset/lib/jquery/jquery.js"></script>
    <script src="{{asset('adminAsset')}}/asset/lib/popper.js/popper.js"></script>
    <script src="{{asset('adminAsset')}}/asset/lib/bootstrap/bootstrap.js"></script>
    <script src="{{asset('adminAsset')}}/asset/lib/jquery-ui/jquery-ui.js"></script>
    <script src="{{asset('adminAsset')}}/asset/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
    <script src="{{asset('adminAsset')}}/asset/lib/jquery.sparkline.bower/jquery.sparkline.min.js"></script>
    <script src="{{asset('adminAsset')}}/asset/lib/d3/d3.js"></script>
    <script src="{{asset('adminAsset')}}/asset/lib/rickshaw/rickshaw.min.js"></script>
    <script src="{{asset('adminAsset')}}/asset/lib/chart.js/Chart.js"></script>
    <script src="{{asset('adminAsset')}}/asset/lib/Flot/jquery.flot.js"></script>
    <script src="{{asset('adminAsset')}}/asset/lib/Flot/jquery.flot.pie.js"></script>
    <script src="{{asset('adminAsset')}}/asset/lib/Flot/jquery.flot.resize.js"></script>
    <script src="{{asset('adminAsset')}}/asset/lib/flot-spline/jquery.flot.spline.js"></script>

    <script src="{{asset('adminAsset')}}/asset/js/starlight.js"></script>
    <script src="{{asset('adminAsset')}}/asset/js/ResizeSensor.js"></script>
    <script src="{{asset('adminAsset')}}/asset/js/dashboard.js"></script>
    
  </body>
</html>
