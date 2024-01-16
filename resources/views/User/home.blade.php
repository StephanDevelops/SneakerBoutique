<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>

    <title>Sneaker Boutique</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/sneakerboutique.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="#top"><h2>Sneaker <em>Boutique</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="#top">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#products">Our Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">About Us</a>
              </li>

              <li class="nav-item">

              @if (Route::has('login'))
                    @auth
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('showcart')}}">
                            <i class="fas fa-shopping-cart"></i>
                            Cart[{{$count}}]</a>
                    </li>

                        <x-app-layout>

                        </x-app-layout>

                    @else
                        <li> <a class="nav-link" href="{{ route('login') }}">Log in</a></li>

                        @if (Route::has('register'))
                           <li> <a class="nav-link" href="{{ route('register') }}">Register</a></li>
                        @endif
                    @endauth
            @endif
</li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner header-text" id="top">
      <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
          <div class="text-content">
            <h4>Exclusive Deals</h4>
            <h2>New Arrivals</h2>
          </div>
        </div>
        <div class="banner-item-02">
          <div class="text-content">
            <h4>Latest Releases</h4>
            <h2>Elevate Your Sneaker Game</h2>
          </div>
        </div>
        <div class="banner-item-03">
          <div class="text-content">
            <h4>Explore New Styles</h4>
            <h2>Step Into Fashion</h2>
          </div>
        </div>
      </div>
    </div>
    <!-- Banner Ends Here -->

    @include('User.product')

    <div class="best-features" id="about">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>About Sneaker Boutique</h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <h4>Seeking standout sneakers? Find your perfect pair amidst our handpicked selection of exclusive releases and iconic classics at Sneaker Boutique.</h4>
              <p>Sneaker Boutique is your premier online destination for stylish and exclusive sneakers. Discover a curated collection of the latest releases, limited editions, and iconic classics. Elevate your sneaker game with our premium selection and enjoy a seamless online shopping experience that caters to your passion for unique and fashionable footwear.</p>
              <ul class="featured-list">
                <li><a href="#">Exclusive Sneaker Releases</a></li>
                <li><a href="#">Iconic Classics Redefined</a></li>
                <li><a href="#">Handpicked Styles for Every Taste</a></li>
                <li><a href="#">Elevate Your Collection with Premium Footwear</a></li>
                <li><a href="#">Your Ultimate Destination for Sneaker Fashion</a></li>
              </ul>
              <!-- <a href="about.html" class="filled-button">Read More</a> -->
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image">
              <img src="assets/images/feature-image.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <div class="row">
                <div class="col-md-8">
                  <h4>Explore <em>Creative</em> &amp; <em>Unique</em> Sneaker Styles at Sneaker Boutique</h4>
                  <p>Elevate Your Wardrobe with Exceptional Designs and Unmatched Comfort.</p>
                </div>
                <div class="col-md-4">
                  <a href="#products" class="filled-button">Shop Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>Copyright &copy; 2024 Sneaker Boutique Co. All Rights Reserved.</p>
            </div>
          </div>
        </div>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>


    <script language = "text/Javascript">
      cleared[0] = cleared[1] = cleared[2] = 0;
      function clearField(t){
      if(! cleared[t.id]){
          cleared[t.id] = 1;
          t.value='';
          t.style.color='#fff';
          }
      }
    </script>


  </body>

</html>