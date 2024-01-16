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

              <?php if(Route::has('login')): ?>
                <!-- <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10"> -->
                    <?php if(auth()->guard()->check()): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(url('showcart')); ?>">
                            <i class="fas fa-shopping-cart"></i>
                            Cart[<?php echo e($count); ?>]</a>
                    </li>

                        <?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>

                    <?php else: ?>
                        <li> <a class="nav-link" href="<?php echo e(route('login')); ?>">Log in</a></li>

                        <?php if(Route::has('register')): ?>
                           <li> <a class="nav-link" href="<?php echo e(route('register')); ?>">Register</a></li>
                        <?php endif; ?>
                    <?php endif; ?>
                <!-- </div> -->
            <?php endif; ?>
</li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- <?php if(session()->has('message')): ?>

          <div align="center" class="alert alert-success">

            <button align="center" style="float: right;" type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;

              </span>
            </button>

            <?php echo e(session()->get('message')); ?>


          </div>

        <?php endif; ?> -->
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

    <?php echo $__env->make('User.product', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

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
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>


  </body>

</html>
<?php /**PATH /Users/stephan/Documents/Ecommerce/resources/views/User/home.blade.php ENDPATH**/ ?>