   {{-- <ul>
                      <li>  <a href="{{route('front.index')}}">Home</a></li>
                      <li> <a href="{{route('woman.details')}}">Woman Fashion</a></li>
                      <li>  <a href="{{route('man.details')}}">Man Fashion</a></li>
                      <li>  <a href="{{route('Cosmetics.details')}}">Cosmetics</a></li>
                      <li>   <a href="{{route('bed.sheets.details')}}">Bed Sheets</a></li>

                   </ul> --}}
   <style>
       nav {
           /* position:fixed !important;
    z-index: 9999 !important; */
           /* background-color: red; */
           /* For browsers that do not support gradients */
           /* background-image: linear-gradient(rgba(255, 0, 0, 0.596), rgba(255, 255, 0, 0.5), #E2B33C); */
       }
   </style>

   <!-- banner bg main start -->


   <nav class="navbar navbar-expand-lg  ">
       <a style="width: 15% !important" class="navbar-brand  mx-auto" href="{{ route('front.index') }}"><img
               style="width: 50% !important; margin-left:80px;" src="{{ asset('front/images/logo.jpg') }}"></a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
           aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
           <img src="{{ asset('front/images/toggle-icon.png') }}">
       </button>
       <div class="collapse navbar-collapse" id="navbarNavDropdown">
           <ul class="navbar-nav mx-auto">
               <li class="nav-item mx-2 active">
                   <h3><a href="{{ route('front.index') }}">Home</a>
                   </h3>
               </li>
               <li class="nav-item mx-2">
                   <h3><a href="{{ route('woman.details') }}">Custom Pedal rackets
                </a></h3>

               </li>
               <li class="nav-item mx-2">
                   <h3><a href="{{ route('man.details') }}">Custom football uniform</a></h3>

               </li>
               <li class="nav-item mx-2 ">
                   <h3><a href="{{ route('Cosmetics.details') }}">Custom soccer uniform</a>
                   </h3>
               </li>
               <li class="nav-item mx-2  ">
                   <h3><a href="{{ route('bed.sheets.details') }}">T shirts mens</a>
                   </h3>
               </li>
               <li class="nav-item mx-2  ">
                   <h3><a href="{{route('sportswears.details')}}">Sports wears</a>
                   </h3>
               </li>
               <li class="nav-item mx-2  ">
                <h3><a href="{{ route('Contact') }}">Contact Us</a>
                </h3>
            </li>
           </ul>
       </div>
   </nav>

   <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    {{-- <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol> --}}
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100 h-100" src="{{asset('front/images/WhatsApp.jpg')}}" alt="First slide">

      </div>
      <div class="carousel-item">
        <img class="d-block w-100 h-100 " src="{{asset('front/images/IMG_2980.JPG')}}" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100 h-100" src="{{asset('front/images/IMG_2983.JPG')}}" alt="Third slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100 h-100" src="{{asset('front/images/2.JPG')}}" alt="{{asset('front/images/2.JPG')}}">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100 h-100" src="{{asset('front/images/IMG_2981.JPG')}}" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
   {{-- <div class="banner_bg_main">
       <div class="banner_section layout_padding">
           <div class="container">
               <div id="my_slider" class="carousel slide" data-ride="carousel">
                   <div class="carousel-inner">
                       <div class="carousel-item active">
                           <div class="row">
                               <div class="col-sm-12">
                                   <h1 class="banner_taital">Get Start <br>Your Favourite Shopping</h1>

                               </div>
                           </div>
                       </div>
                       <div class="carousel-item">
                           <div class="row">
                               <div class="col-sm-12">
                                   <h1 class="banner_taital">Get Start <br>Your Favourite
                                       Shopping</h1>

                               </div>
                           </div>
                       </div>
                       <div class="carousel-item">
                           <div class="row">
                               <div class="col-sm-12">
                                   <h1 class="banner_taital">Get Start <br>Your Favourite
                                       Shopping</h1>
                               </div>
                           </div>
                       </div>
                   </div>
                   <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
                       <i class="fa fa-angle-left"></i>
                   </a>
                   <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
                       <i class="fa fa-angle-right"></i>
                   </a>
               </div>
           </div>
       </div>

   </div> --}}
