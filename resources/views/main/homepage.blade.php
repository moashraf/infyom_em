@extends('main.master')
@section('content')

        <!--********** Start home slider **********-->
        <section id="home" class="home_slider">
            <div id="myCarousel" class="carousel slide" data-ride="carousel" dir="ltr">
                <!-- Wrapper for slides -->
                <div class="carousel-inner" dir="ltr">

                   
                    



 @foreach($sliders as $sliders_val)  


<style>
  .home_slider #myCarousel .item:nth-of-type(<?php  if($loop->iteration){echo "$loop->iteration";}    ?>)  {
    background: url( "{{ URL::to('/').'/data/'.$sliders_val->photo}}" ) no-repeat fixed;
    background-size: cover;
}

 </style>
 


          <div class="item    <?php  if($loop->iteration == 1){echo 'active';}    ?> ">
                        <div class="overlay_slider">
                            <div class="carousel-caption">
                                <h3 class="wow fadeInLeftBig" data-wow-duration="2s">  {{$sliders_val->title}}    </h3>
                                <p class="wow fadeInRightBig" data-wow-duration="2s">
                                    {{$sliders_val->body}}   
                                </p>
                            </div>
                        </div>
                    </div>

 @endforeach
                </div>
                <!-- End Carousel Inner -->
                <ul class="nav nav-pills nav-justified">

 @foreach($sliders as  $key => $sliders_val )  

                    <li data-target="#myCarousel" data-slide-to="<?php  if($loop->iteration){echo "$key";}    ?>" 
                      class=" <?php  if($loop->iteration ==1 ){echo "active";}    ?> ">
                        <a href="#">
                            <img src="{{ URL::to('/').'/data/'.$sliders_val->photo}}" alt="smallslide1">
                        </a>
                    </li>

                  

 @endforeach


                </ul>
            </div>
            <!-- End Carousel -->
        </section>
        <!--********** End home slider **********-->
        
        <!--********** Start about **********-->
        <section class="about">
            <div class="container"><!--Start Container-->
                <div class="row"><!--Start row-->
                    
                    <div class="col-xs-12 text-center">
                        <h2> {{ trans('DataLang.About') }}  </h2>
                        <p data-text="  {{  site_settings("About Us")  }}  "> 
                             {{  site_settings("About Us")  }} 

                        </p>
                        <img src="{{ asset('imgs/pencil.png') }}" alt="pencil">
                    </div>
                    
                </div><!--End row-->
            </div><!--End Container-->
        </section>
        <!--********** End about **********-->
        
        <!--********** Start certs **********-->
        <section class="certs">
            <h3 class="text-center"> {{ trans('DataLang.Certificates') }}  </h3>
        
            <div id="carousel3d">

                <div class="photo-thumbs">
                    <carousel-3d :perspective="0" :space="200" :display="5" :controls-visible="true" :controls-prev-html="'❬'" :controls-next-html="'❭'" :controls-width="30" :controls-height="60" :clickable="true" :autoplay="true" :autoplay-timeout="5000">

                     @foreach($Certificates as  $key => $Certificates_val )  


                        <slide :index="<?php  if($loop->iteration){echo "$key";}    ?>">
                            <img src="{{ URL::to('/').'/data/'.$Certificates_val->photo  }}" alt="" width="100%" height="100%">
                        </slide>


                        @endforeach


                    </carousel-3d>
                </div>    

            </div>
        </section>
        <!--********** End certs **********-->

        <!--********** Start services **********-->
        <section id="services" class="services">
            <div class="container"><!--Start Container-->
                <div class="heading text-center">
                    <h2> {{ trans('DataLang.services') }}  </h2>
                    
                </div>
                <div class="row"><!--Start row-->





                    @foreach($Services as  $key => $Services_val )  




                    <div class="single_service">
                        <div class="row">
                            <div class="col-md-6 col-xs-12" style="<?php  if($loop->iteration  % 2 == 0){echo "float: right!important;";}    ?>" 
 >
                                <div class="describe_service">
                                    <h2> {{  $Services_val->title  }}   </h2>
                                    <p> {{  $Services_val->body  }}
                                </p>
                                 <a href="{{  $Services_val->link  }}" target="_blank">  {{ trans('DataLang.show') }}   
                                            <i class="fa fa-chevron-right"></i>
                                        </a>
                                </div>
                            </div>

                            <div class="col-md-6 col-xs-12">
                    <img class="img-responsive center-block" src="{{ URL::to('/').'/data/'.$Services_val->photo  }}" alt="one">
                            </div>
                        </div>
                    </div>

                     
 

                        @endforeach
                     

                </div><!--End row-->
            </div><!--End Container-->
        </section>
        <!--********** End services **********-->

        <!--========== Start work_slider ==========-->
        <section id="gallery" class="work_slider">
            <div class="container"><!--Start Container-->
                <div class="work_slider_head text-center">
                    <h2>  {{ trans('DataLang.OurGallery') }}   </h2>
                   
                </div>
            </div><!--End Container-->
            <div class="container-fluid">

                <div class="wrapper_slider">
                    <div class="controls">
                    @foreach($GalleryCategory as  $key => $GalleryCategory_val )  
 
                        <button class="filter" data-filter=".{{$GalleryCategory_val->title}}">{{$GalleryCategory_val->title}}</button> 
                        @endforeach

                    </div>

                    <div id="Container" class="container">
                        <div class="photo-thumbs"><!--Start wrap of gallery-->


                    @foreach($galleryAlbum as  $key => $galleryAlbum_val )  


                            <div class="cover-slide mix  {{  $galleryAlbum_val->get_projects_cat['title']  }}   cover-slide" 
                              data-my order="<?php  if($loop->iteration  ){echo "$key";}    ?>">
                                    <img src="{{ URL::to('/').'/data/'.$galleryAlbum_val->photo  }}" alt="slide1" 
                                    data-caption="{{  $galleryAlbum_val->body  }} ">
                                    <div class="info text-center">
                                        <h3>{{  $galleryAlbum_val->title  }} </h3>
                                        <p>{{  $galleryAlbum_val->body  }} </p>
                                    </div>
                                </div>
                                
                        @endforeach
                                                                                         
                        </div>

                    </div>

                    <div class="gap"></div>
                    <div class="gap"></div>
                </div>

            </div>

        </section>
        <!--========== Ebd work_slider ==========-->


@endsection