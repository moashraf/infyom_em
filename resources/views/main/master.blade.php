
			<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> {{  site_settings("Web site name")  }}   </title>
    <!--==================== Bootstrap css ====================-->
    <link rel="stylesheet" href="  {{ asset('css/bootstrap.min.css') }} ">
    <!--==================== font-awesome css ====================-->
    <link rel="stylesheet" href=" {{ asset('css/font-awesome.min.css') }} ">
    <!--==================== google fonts css ====================-->
    <link href="https://fonts.googleapis.com/css?family=Anton|Cinzel+Decorative|Limelight|Mina|Raleway" rel="stylesheet">
    <!--==================== animate css ====================-->
    <link rel="stylesheet" href="{{ asset('css/animate.css') }} ">
    <!--========== LightBox Slider Style ==========-->
    <link rel="stylesheet" href=" {{ asset('css/gallery.css') }} ">
    <!--==================== main style css ====================-->
    <link rel="stylesheet" href="{{ asset('css/style.css') }} ">
    <!--==================== arabic-style ====================-->
 
<style type="text/css">@import url(https://fonts.googleapis.com/earlyaccess/droidarabickufi.css);
a{  font-family: 'Droid Arabic Kufi', serif!important;  }

strong {  font-family: 'Droid Arabic Kufi', serif!important;  }
  h1{   font-family: 'Droid Arabic Kufi', serif!important;     }
h2{  font-family: 'Droid Arabic Kufi', serif!important; }
h3{     font-family: 'Droid Arabic Kufi', serif!important; }
li {     font-family: 'Droid Arabic Kufi', serif!important; }
 h4{ font-family: 'Droid Arabic Kufi', serif!important;  }
h5{     font-family: 'Droid Arabic Kufi', serif!important; }
h6{     font-family: 'Droid Arabic Kufi', serif!important; }
p{     font-family: 'Droid Arabic Kufi', serif!important; }
</style>


<?php if (App::isLocale('ar')) {
?>
 <link rel='stylesheet' href="{{ asset('css/arabic-style.css') }}" > 
 <?php }   ?>

      <style>
        #portfolio .mix {
          display: none;
        }
    </style>
    <style>
        img{
            max-width: 100%;
        }
        .photo-thumbs img{
            cursor: pointer
        }
        .row{
        }
        h2{
        }
    </style>

</head>
<body>
    <div class="wrap_body">
        <!--********** Start socials **********-->
        <section class="top_socials">
            <div class="container-fluid">
                <div class="row">
                    
                    <div class="col-md-6 col-xs-12">
                        <ul class="top_phones list-unstyled list-inline">
                            <li>
                                <i class="fa fa-mobile fa-fw"></i>
                                <span>  {{  site_settings("first phone")  }}  </span>
                            </li>
                            <li>
                                <i class="fa fa-mobile fa-fw"></i>
                                <span> {{  site_settings("second phone")  }}  </span>
                            </li>
                        </ul>
                    </div>
                    
                    <div class="col-md-6 col-xs-12">
                        <ul class="top_mails list-unstyled list-inline text-right">
                            <li>
                                <i class="fa fa-envelope fa-fw"></i>
                                <span> {{  site_settings("Mail")  }}  </span>
                            </li>
                        </ul>
                    </div>
                    
                </div>
            </div>
        </section>
        <!--********** End socials **********-->
        
        <!--********** Start navbar **********-->
        <nav class="navbar">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                        <span class="back_brand"></span>
                        <img src="imgs/Logo.png" alt="logo">
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active">
                            <a data-value="home"> {{ trans('DataLang.Home') }}  
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li>
                            <a data-value="services">{{ trans('DataLang.Services') }}  </a>
                        </li>
                        <li>
                            <a data-value="gallery">{{ trans('DataLang.Gallery') }}  </a>
                        </li>
                        <li>
                            <a data-value="contact">   {{ trans('DataLang.Contact') }}   </a>
                        </li>
                        <li class="dropdown lang">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">language <span class="caret"></span></a>
                          <ul class="dropdown-menu">
                           <a href="{{ URL::to('/ar')}}">  <li>العربية</li> </a>
                            <li role="separator" class="divider"></li>
                          <a href="{{ URL::to('/')}}">   <li>English</li> </a> 
                          </ul>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <!--********** End navbar **********-->
			
		@yield('content')	






        <!--********** Start contact **********-->
        <section id="contact" class="contact">
            <div class="overlay"><!--start overlay-->
                <div class="container"><!--start container-->

                    <div class="row">

                        <div class="col-sm-6 col-xs-12">
                            <div class="contact_info">
                                <h3> {{  site_settings("sub titles")  }}      </h3>
                                <p>
 {{  site_settings("About Us")  }} 
                                 </p>
                                <ul class="list-unstyled address">
                                    <li>
                                        <i class="fa fa-home fa-fw"></i>{{  site_settings("Location")  }}
                                        <span> </span>
                                    </li>
                                    <li>
                                        <i class="fa fa-phone fa-fw"></i>
                                        <span>  {{  site_settings("second phone")  }} </span>
                                    </li>
                                    <li>
                                        <i class="fa fa-mobile fa-fw"></i>
                                        <span> {{  site_settings("first phone")  }}  </span>
                                    </li>
                                    
                                     <li>
                                        <i class="fa fa-envelope fa-fw"></i>
                                        <span> {{  site_settings("Mail")  }}  </span>
                                    </li>
                                </ul>

                                <ul class="list-unstyled list-inline socials">
                                    <li>
                                        <a href="{{  site_settings('facebook')  }} ">
                                            <i class="fa fa-facebook fa-fw"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{  site_settings('instagram')  }} " target="_blank">
                                            <i class="fa fa-instagram fa-fw"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=" {{  site_settings('twitter')  }} " target="_blank">
                                            <i class="fa fa-twitter fa-fw"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=" {{  site_settings('youtube')  }}  " target="_blank">
                                            <i class="fa fa-youtube fa-fw"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-sm-6 col-xs-12">
                            <div class="contact_form">
                            {{ Form::open(array('url' => 'request_save', 'files' => true,'enctype' => 'multipart/form-data'))}}

                                     <div class="input-group">
                                        <input  required= required type="text"  name="name" placeholder="{{ trans('DataLang.name') }} ">
                                    </div>
                                    <div class="input-group">
                                        <input  required= required type="tel"  name="tel"  placeholder=" {{ trans('DataLang.tel') }} ">
                                        <input  required= required type="email"  name="email"  placeholder=" {{ trans('DataLang.email') }}  ">
                                    </div>
                                    <div class="input-group">
                                        <textarea  name="message" placeholder=" {{ trans('DataLang.message') }}  "></textarea>
                                    </div>
                                    <button type="submit">
                                        <div class="svg-wrapper">
                                          <svg height="60" width="320" xmlns="http://www.w3.org/2000/svg">
                                            <rect class="shape" height="60" width="320" />
                                          </svg>
                                           <div class="text">{{ trans('DataLang.Send') }} </div>
                                        </div>
                                    </button>
                                    {!! Form::close() !!}
                            </div>
                        </div>

                    </div>

                </div><!--End container-->
            </div><!--End overlay-->
        </section>
        <!--********** End contact **********-->

        <!--********** Start copyright **********-->
        <section class="copyright">
            <div class="container text-center"><!--Start container-->
                <div class="row"><!--Start row-->

                    <div class="col-xs-12">
                        <p>
                            all rights are reserved to high touch company.
                            <span>designed <a href="#">be4em</a></span>
                        </p>
                    </div>

                </div><!--End row-->
            </div><!--End container-->
        </section>
        <!--********** End copyright **********-->

        <!--********** Start up **********-->
        <section class="up">
            <i class="fa fa-arrow-up fa-fw"></i>
        </section>
        <!--********** End up **********-->
    </div>
    
    <!--========== jquery js ==========-->
    <script src=" {{ asset('js/jquery-3.2.1.min.js') }} "></script>
    <!--========== bootstrap js ==========-->
    <script src=" {{ asset('js/bootstrap.min.js') }} "></script>
    <!--========== wow js ==========-->
    <script src=" {{ asset('js/wow.min.js') }} "></script>
    <!--========== noice scroll js ==========-->
    <script src="{{ asset('js/jquery.nicescroll.min.js ') }} "></script>
    <!--========== LightBox JS ==========-->
    <script src=" {{ asset('js/gallery.js') }} " ></script>
    <!--========== mix it up Slider js ==========-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mixitup/2.1.11/jquery.mixitup.js"></script>
    <!--========== custom js ==========-->
    <script src=" {{ asset('js/custom.js') }} "></script>
    
    <script>
        $(document).ready(function () {
            $(function(){
              $('#Container').on('mixLoad', function() {
                console.log('[event-handler] MixItUp Loaded');
              });

              $('#Container').on('mixStart', function() {
                console.log('[event-handler] Animation Started')
              });

              $('#Container').on('mixEnd', function() {
                console.log('[event-handler] Animation Ended')
              });

              $('#Container').mixItUp({
                callbacks: {
                  onMixLoad: function() {
                    console.log('[callback] MixItUp Loaded');
                  },
                  onMixStart: function() {
                    console.log('[callback] Animation Started');
                  },
                  onMixEnd: function() {
                    console.log('[callback] Animation Ended');
                  }
                }
              });
            });
            //trigger wow
            new WOW().init();
        });
    </script>
    
    <script src='//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script><script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.7/vue.js'></script><script src='https://rawgit.com/Wlada/vue-carousel-3d/master/dist/vue-carousel-3d.min.js'></script>
        <script>
            new Vue({
              el: '#carousel3d',
                  data: {
                    slides: 7
                  },
                  components: {
                    'carousel-3d': Carousel3d.Carousel3d,
                    'slide': Carousel3d.Slide
                  }
            })
        </script>

</body>
</html>






