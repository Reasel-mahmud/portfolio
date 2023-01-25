
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Richard. - Easy Onepage Personal Template">
    <meta name="author" content="Paul">

    <!-- CSS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700&display=swap">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('frontEndAsset')}}/asset/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



    <title>Tanimul. -Personal Protfolio</title>
  </head>
<body>

   <!-- Loader -->
   <div class="loader">
    <div class="spinner"><div class="double-bounce1"></div><div class="double-bounce2"></div></div>
   </div>

    <!-- Click capture -->
   <div class="click-capture d-lg-none"></div>

  @include('frontEnd.include.header')

    <!-- Masthead -->
    @foreach ($banners as $banner)
    <main id="home" class="masthead jarallax" style="background-image:url('{{asset($banner->image)}}')" role="main">
        <div class="opener">

            {{-- ------------contact page error--------------- --}}
            @if (session('msgContact'))
                <div class="alert alert-success" >
                {{session('msgContact')}}
                </div>
             @endif


  @if ($errors->any())
  <div class="alert alert-danger">
      <ul>
          @foreach ($errors->all() as $error)
             <h5> <li>{{ $error }}</li></h5>
          @endforeach
      </ul>
  </div>
  @endif
  {{-- ------------contact page error--------------- --}}


          <div class="container">
            <div class="row">
              <div class="col-md-6 col-lg-5">
                <h1>Hey, I am {{$banner->name}}.</h1>
                <p class="lead mt-4 mb-5">{{$banner->short_description}}</p>
                <button type="button" class="btn" data-toggle="modal" data-target="#send-request">Let's talk</button>
            </div>
            </div>
          </div>
        </div>
      </main>
    @endforeach

@yield('content')


    <!-- Footer -->
  @include('frontEnd.include.footer')

    <!-- Modal -->

<!-- Optional JavaScript -->
<script src="{{asset('frontEndAsset')}}/asset/js/jquery-1.12.4.min.js"></script>
<script src="{{asset('frontEndAsset')}}/asset/js/popper.min.js" ></script>
<script src="{{asset('frontEndAsset')}}/asset/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
<script src="{{asset('frontEndAsset')}}/asset/js/jarallax.min.js"></script>
<script src="{{asset('frontEndAsset')}}/asset/js/jquery.ajaxchimp.min.js"></script>
<script src="{{asset('frontEndAsset')}}/asset/js/jquery.validate.min.js"></script>
<script src="{{asset('frontEndAsset')}}/asset/js/jquery.magnific-popup.min.js"></script>
<script src="{{asset('frontEndAsset')}}/asset/js/aos.js"></script>
<script src="{{asset('frontEndAsset')}}/asset/js/owl.carousel.min.js"></script>
<script src="{{asset('frontEndAsset')}}/asset/js/interface.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/brands.min.js" integrity="sha512-rbApvPERCHI8cOpTOKfMLVJNlXSCs4QRu8UsJ0HieeHyNKkHtUIQTZq3hv0pT7X0SUsLrRGEUsMTTpzwpdeIuw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>
</html>
