<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Halaman @yield('title')</title>
  <meta name="description" content="">
<!-- 
Motor Template
http://www.templatemo.com/tm-463-motor
-->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
  <link href="{{ asset('motor/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('motor/css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ asset('motor/css/templatemo-style.css') }}" rel="stylesheet">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

      </head>
      <body class="about-page">

        <!-- Preloader -->
        <div id="loader-wrapper">
          <div id="loader"></div>
          <div class="loader-section section-left"></div>
          <div class="loader-section section-right"></div>
        </div>
        <!-- End Preloader -->
    
        <section class="templatemo-top-section">
            @yield('header')
          
         <div class="templatemo-welcome welcome-slider">
          <div class="container">
            <div class="row">
              <div class="flexslider">
                <ul class="slides">
                  <li>
                    <div class="about-slider">
                      <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                        <img src="{{ asset('motor/img/about/1.jpg') }}" class="img-responsive" alt="Image">
                      </div>
                      <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 about-slider-description">
                        <h2 class="text-uppercase welcome-title">
                          	<span class="welcome-title-1">Performance</span>
                      		<span class="welcome-title-2">for the speed</span>
                        </h2>
                        <p class="welcome-message">Motor is free Bootstrap v3.3.4 responsive web template provided 
                by <span class="blue">template</span><span class="green">mo</span>.com website. You can download, 
                modify and use this for your website projects. Please tell your friends about our templates. 
                Thank you for visiting. Have fun!</p>
                      </div>              
                    </div>  
                  </li>
                  <li>
                    <div class="about-slider">
                      <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                        <img src="{{ asset('motor/img/about/1.jpg') }}" class="img-responsive" alt="Image">
                      </div>
                      <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 about-slider-description">
                        <h2 class="text-uppercase welcome-title">
                          <span class="welcome-title-1">Find to own</span>
                          <span class="welcome-title-2">the fast &amp; best</span>
                        </h2>
                        <p class="welcome-message">Lorem ipsum dolor sit amet, consectetuer adipiscing elit dori. Aenean commodo ligula eget. Aenean massa. Cumdent sociis natoque penatibus et magnis dis parturient montes, sor ind nascetur ridiculus mus. Lorem ipsum dolor sit amet dipiscing elit dori.</p>
                      </div>              
                    </div>  
                  </li>
                </ul>
              </div>                          
            </div>    
          </div>
        </div>
      </section>

    <!--Main content-->
    <section class="container margin-bottom-50"> 
         
      @yield('content')

      <div class="about-container-2 margin-bottom-50">
        <div class="about-container-inner">
          <h3 class="about-title-2">Two Columns</h3>
          <img src="{{ asset('motor/img/about/3.jpg') }}" alt="Image" class="img-responsive margin-bottom-15">          
          <p class="about-description">Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
          <a href="#" class="about-link about-link-2">Details</a>
        </div>
        <div class="about-container-inner">
          <h3 class="about-title-2">Two Columns</h3>
          <img src="{{ asset('motor/img/about/4.jpg') }}" alt="Image" class="img-responsive margin-bottom-15">          
          <p class="about-description">Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
          <a href="#" class="about-link about-link-2">Details</a>
        </div>
      </div>
      
      <div class="about-container-2">
        <div class="services-container-inner">
          <h3 class="about-title-2">Three Columns</h3>
          <img src="{{ asset('motor/img/services-1.jpg') }}" alt="Image" class="img-responsive margin-bottom-15">          
          <p class="about-description">Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
          <a href="#" class="about-link about-link-2">Details</a>
        </div>
        <div class="services-container-inner">
          <h3 class="about-title-2">Three Columns</h3>
          <img src="{{ asset('motor/img/services-1.jpg') }}" alt="Image" class="img-responsive margin-bottom-15">          
          <p class="about-description">Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
          <a href="#" class="about-link about-link-2">Details</a>
        </div>
        <div class="services-container-inner">
          <h3 class="about-title-2">Three Columns</h3>
          <img src="{{ asset('motor/img/services-1.jpg') }}" alt="Image" class="img-responsive margin-bottom-15">          
          <p class="about-description">Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
          <a href="#" class="about-link about-link-2">Details</a>
        </div>
      </div>


      <!--banner-->
      <div class="tm-banner">
        <h2 class="tm-banner-title">Maecenas</h2>
        <p class="tm-banner-description">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium</p>
        <a href="#" class="tm-banner-link"><i class="fa fa-play"></i></a>
      </div>
      
    </section> <!-- Main content -->
    
    <!--Footer content-->
    <footer class="tm-footer">
    @yield('footer')
    </footer> <!-- Footer content-->
    
    <!-- JS -->
    <script type="text/javascript" src="{{ asset('motor/js/jquery-1.11.2.min.js') }}"></script>      <!-- jQuery -->
    <script type="text/javascript" src="{{ asset('motor/js/templatemo-script.js') }}"></script>      <!-- Templatemo Script -->
    <script defer src="{{ asset('motor/js/jquery.flexslider-min.js') }}"></script><!-- FlexSlider -->
    <script>
    $(window).load(function() {
        $('.flexslider').flexslider({
        animation: "slide",
        slideshow: false,
        prevText: "&#xf104;",
        nextText: "&#xf105;"
        });
        // Remove preloader
        // https://ihatetomatoes.net/create-custom-preloading-screen/
        $('body').addClass('loaded');
    });
    </script>
</body>
</html>