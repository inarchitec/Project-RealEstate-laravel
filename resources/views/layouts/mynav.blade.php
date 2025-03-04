<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
  <!--<![endif]-->
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>
      {{ (request()->is('/')) ? 'GARO ESTATE | Home page' : '' }} 
      {{ (request()->is('properties')) ? 'GARO ESTATE | Properties' : '' }} 
      {{ (request()->is('blog')) ? 'GARO ESTATE | Blog' : '' }} 
      {{ (request()->is('contact')) ? 'GARO ESTATE | Contact Us' : '' }} 
      {{ (request()->is('register')) ? 'GARO ESTATE | Register' : '' }} 
      {{ (request()->is('login')) ? 'GARO ESTATE | Login' : '' }}
      {{ (request()->is('submitproperty')) ? 'GARO ESTATE | Submit Property' : '' }}  
      {{ (request()->is('faq')) ? 'GARO ESTATE | FAQ' : '' }}
      {{ (request()->is('terms')) ? 'GARO ESTATE | Terms' : '' }}
      {{ (request()->is('404')) ? 'GARO ESTATE | 404' : '' }}
      {{ (request()->is('properties/{property}')) ? 'GARO ESTATE | property' : '' }}
    </title>
    <meta name="description" content="GARO is a real-estate template" />
    <meta name="author" content="Kimarotec" />
    <meta
      name="keyword"
      content="html5, css, bootstrap, property, real-estate theme , bootstrap template" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link
      href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800"
      rel="stylesheet"
      type="text/css" />

    <!-- Place favicon.ico  the root directory -->
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}" type="image/x-icon" />
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
   
    <link rel="stylesheet" href="{{asset('assets/css/normalize.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/fontello.css')}}" />
    <link
      href="{{asset('assets/fonts/icon-7-stroke/css/pe-icon-7-stroke.css')}}"
      rel="stylesheet" />
    <link href="{{asset('assets/fonts/icon-7-stroke/css/helper.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/animate.css')}}" rel="stylesheet" media="screen" />
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap-select.min.css')}}" />
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/icheck.min_all.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/price-range.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/owl.theme.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/owl.transitions.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/lightslider.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}" />
    
    <link rel="stylesheet" href="{{asset('assets/css/sliderx.css')}}" />
    {{-- <link rel="stylesheet" href="{{asset('assets/css/wizard.css')}}" /> --}}
    <script src="{{asset('assets/js/maindefault.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery-1.10.2.min.js')}}"></script>  


    
   </head>
  <body>
    <div id="preloader">
      <div id="status">&nbsp;</div>
    </div>
    <!-- Body content -->

    <div class="header-connect">
      <div class="container">
        <div class="row">
          <div class="col-md-5 col-sm-8 col-xs-12">
            <div class="header-half header-call">
              <p>
                <span><i class="pe-7s-call"></i>+251 955555555</span>
                <span><i class="pe-7s-mail"></i> your@company.com</span>
              </p>
            </div>
          </div>
          <div
            class="col-md-2 col-md-offset-5 col-sm-3 col-sm-offset-1 col-xs-12">
            <div class="header-half header-social">
              <ul class="list-inline">
                <li>
                  <a href="#"><i class="fa fa-facebook"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-vine"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-linkedin"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-dribbble"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-instagram"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--End top header -->

    <nav class="navbar navbar-default">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button
            type="button"
            class="navbar-toggle collapsed"
            data-toggle="collapse"
            data-target="#navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">
            <img src="{{asset('assets/img/logo.png')}}" alt=""
          /></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse yamm" id="navigation">
          <div class="button navbar-right">
            <button
              class="navbar-btn nav-button wow bounceInRight login"
              onclick=" window.open('login')"
              data-wow-delay="0.4s">
              Login
            </button>
            <button
              class="navbar-btn nav-button wow fadeInRight"
              onclick=" window.open('submitproperty')"
              data-wow-delay="0.5s">
              Submit
            </button>
          </div>
          <ul class="main-nav nav navbar-nav navbar-right">

            <li class="dropdown ymm-sw" data-wow-delay="0.1s">
              <a href="/" class="{{ (request()->is('/')) ? 'active' : '' }}">Home</a>
            </li>

            <li class="wow fadeInDown" data-wow-delay="0.1s">
              <a class="{{ (request()->is('properties')) ? 'active' : '' }}" href="{{route('properties.view')}}">Properties</a>
            </li>

            <li class="wow fadeInDown" data-wow-delay="0.1s">
              <a class="{{ (request()->is('blog')) ? 'active' : '' }}" href="{{route('blog.view')}}">blog</a>
            </li>

            <li class="wow fadeInDown" data-wow-delay="0.4s">
              <a class="{{ (request()->is('contact')) ? 'active' : '' }}"  href="{{route('contact.view')}}">Contact</a>
            </li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
    </nav>
    <!-- End of nav bar -->
<body>
   @yield('home-contents')
   @yield('properties-contents')
   @yield('blog-contents')
   @yield('contact-contents')
   @yield('register-contents')
   @yield('login-contents')
   @yield('submitproperty-contents')
   @yield('faq-contents') 
   @yield('property-contents')
   @yield('terms-contents')
   @yield('404-contents')
   
 
    <!-- Footer area-->
    <div class="footer-area">
      <div class="footer">
        <div class="container">
          <div class="row">
            <div class="col-md-3 col-sm-6 wow fadeInRight animated">
              <div class="single-footer">
                <h4>About us</h4>
                <div class="footer-title-line"></div>

                <img
                  src="{{asset('assets/img/footer-logo.png')}}"
                  alt=""
                  class="wow pulse"
                  data-wow-delay="1s" />
                <p>
                  Lorem ipsum dolor cum necessitatibus su quisquam molestias.
                  Vel unde, blanditiis.
                </p>
                <ul class="footer-adress">
                  <li>
                    <i class="pe-7s-map-marker strong"> </i> 9089 your adress
                    her
                  </li>
                  <li>
                    <i class="pe-7s-mail strong"> </i> email@yourcompany.com
                  </li>
                  <li><i class="pe-7s-call strong"> </i> +1 908 967 5906</li>
                </ul>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 wow fadeInRight animated">
              <div class="single-footer">
                <h4>Quick links</h4>
                <div class="footer-title-line"></div>
                <ul class="footer-menu">
                  <li><a href="{{route('properties.view')}}">Properties</a></li>
                 
                  <li><a href="{{route('submitproperty.view')}}">Submit property </a></li>
                  <li><a  href="{{route('contact.view')}}">Contact us</a></li>
                  <li><a  href="{{route('faq.view')}}">Faq</a></li>
                  <li><a  href="{{route('terms.view')}}">Terms </a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 wow fadeInRight animated">
              <div class="single-footer">
                <h4>Last News</h4>
                <div class="footer-title-line"></div>
                <ul class="footer-blog">
                  <li>
                    <div class="col-md-3 col-sm-4 col-xs-4 blg-thumb p0">
                      <a href="single.html">
                        <img src="{{asset('assets/img/demo/small-proerty-2.jpg')}}" />
                      </a>
                      <span class="blg-date">12-12-2016</span>
                    </div>
                    <div class="col-md-8 col-sm-8 col-xs-8 blg-entry">
                      <h6><a href="single.html">Add news functions </a></h6>
                      <p style="line-height: 17px; padding: 8px 2px">
                        Lorem ipsum dolor sit amet, nulla ...
                      </p>
                    </div>
                  </li>

                  <li>
                    <div class="col-md-3 col-sm-4 col-xs-4 blg-thumb p0">
                      <a href="single.html">
                        <img src="{{asset('assets/img/demo/small-proerty-2.jpg')}}" />
                      </a>
                      <span class="blg-date">12-12-2016</span>
                    </div>
                    <div class="col-md-8 col-sm-8 col-xs-8 blg-entry">
                      <h6><a href="single.html">Add news functions </a></h6>
                      <p style="line-height: 17px; padding: 8px 2px">
                        Lorem ipsum dolor sit amet, nulla ...
                      </p>
                    </div>
                  </li>

                  <li>
                    <div class="col-md-3 col-sm-4 col-xs-4 blg-thumb p0">
                      <a href="single.html">
                        <img src="{{asset('assets/img/demo/small-proerty-2.jpg')}}" />
                      </a>
                      <span class="blg-date">12-12-2016</span>
                    </div>
                    <div class="col-md-8 col-sm-8 col-xs-8 blg-entry">
                      <h6><a href="single.html">Add news functions </a></h6>
                      <p style="line-height: 17px; padding: 8px 2px">
                        Lorem ipsum dolor sit amet, nulla ...
                      </p>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 wow fadeInRight animated">
              <div class="single-footer news-letter">
                <h4>Stay in touch</h4>
                <div class="footer-title-line"></div>
                <p>
                  Lorem ipsum dolor sit amet, nulla suscipit similique quisquam
                  molestias. Vel unde, blanditiis.
                </p>

                <form>
                  <div class="input-group">
                    <input
                      class="form-control"
                      type="text"
                      placeholder="E-mail ... " />
                    <span class="input-group-btn">
                      <button class="btn btn-primary subscribe" type="button">
                        <i class="pe-7s-paper-plane pe-2x"></i>
                      </button>
                    </span>
                  </div>
                  <!-- /input-group -->
                </form>

                <div class="social pull-right">
                  <ul>
                    <li>
                      <a
                        class="wow fadeInUp animated"
                        href="https://twitter.com/kimarotec"
                        ><i class="fa fa-twitter"></i
                      ></a>
                    </li>
                    <li>
                      <a
                        class="wow fadeInUp animated"
                        href="https://www.facebook.com/kimarotec"
                        data-wow-delay="0.2s"
                        ><i class="fa fa-facebook"></i
                      ></a>
                    </li>
                    <li>
                      <a
                        class="wow fadeInUp animated"
                        href="https://plus.google.com/kimarotec"
                        data-wow-delay="0.3s"
                        ><i class="fa fa-google-plus"></i
                      ></a>
                    </li>
                    <li>
                      <a
                        class="wow fadeInUp animated"
                        href="https://instagram.com/kimarotec"
                        data-wow-delay="0.4s"
                        ><i class="fa fa-instagram"></i
                      ></a>
                    </li>
                    <li>
                      <a
                        class="wow fadeInUp animated"
                        href="https://instagram.com/kimarotec"
                        data-wow-delay="0.6s"
                        ><i class="fa fa-dribbble"></i
                      ></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="footer-copy text-center">
        <div class="container">
          <div class="row">
            <div class="pull-left">
              <span>
                (C) <a href="http://www.KimaroTec.com">KimaroTheme</a> , All
                rights reserved 2016
              </span>
            </div>
            <div class="bottom-menu pull-right">
              <ul>
                <li>
                  <a
                    class="wow fadeInUp animated"
                    href="{{route('home.view')}}"
                    data-wow-delay="0.2s"
                    >Home</a
                  >
                </li>
                <li>
                  <a
                    class="wow fadeInUp animated"
                    href="{{route('properties.view')}}"
                    data-wow-delay="0.3s"
                    >Properties</a
                  >
                </li>
                <li>
                  <a
                    class="wow fadeInUp animated"
                    href="{{route('faq.view')}}"
                    data-wow-delay="0.4s"
                    >Faq</a
                  >
                </li>
                <li>
                  <a
                    class="wow fadeInUp animated"
                    href="{{route('contact.view')}}"
                    data-wow-delay="0.6s"
                    >Contact</a
                  >
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    
     
    
      
      
      
      
      
      
      
      
      
      
      
      
      
       
 
        
    <script src="{{asset('assets/js/modernizr-2.6.2.min.js')}}"></script>
    <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap-hover-dropdown.js')}}"></script>
    <script src="{{asset('assets/js/easypiechart.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.easypiechart.min.js')}}"></script>
    <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/js/wow.js')}}"></script>
    <script src="{{asset('assets/js/icheck.min.js')}}"></script>
    {{-- <script src="{{asset('assets/js/price-range.js')}}"></script> --}}
    <script src="{{asset('assets/js/bootstrap-slider.js')}}"></script>
    <script src="{{asset('assets/js/lightslider.min.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap-sliderx.js')}}"></script>


 
  <script>
    $(document).ready(function () {

        $('#image-gallery').lightSlider({
            gallery: true,
            item: 1,
            thumbItem: 9,
            slideMargin: 0,
            speed: 500,
            auto: true,
            loop: true,
            onSliderLoad: function () {
                $('#image-gallery').removeClass('cS-hidden');
            }
        });
    });
</script>



</body>

</html>


 