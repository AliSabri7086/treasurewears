@extends('front.layout.layout')
@section('content')

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <h1 class="fashion_taital my-5"> Custom Pedal rackets</h1>
       <div class="container">
        <div class="carousel-inner">
            @php $i = 0; @endphp
            @foreach ($woman->chunk(3) as $items)
                <div class="carousel-item carousel-item_1 @if ($i == 0) active @endif">
                    @php $i++; @endphp
                    <div class="row">
                        @foreach ($items as $item)
                            <div class="col-lg-4">
                                <div class="card" style="width: 22rem;">
                                    <img src="{{ asset('upload/woman_cloths/') }}/{{ $item->image }}" class="card-img-top woman-img" alt="{{ $item->heading }}">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $item->heading }}</h5>
                                        <p class="card-text">{{ $item->description }}</p>
                                        <p class="card-text card-text_inquiry"> Inquiry New </p>
                                        {{-- <p class="card-text"><small class="text-muted">Price: {{ $item->price }}</small></p> --}}
                                        <div class="btn_main">
                                            <div class="buy_bt text-center">
                                                 <a href="{{ route('productView', $item->id) }}">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
       </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    {{-- <div class="fashion_section">
        <div id="main_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                @php $i=0; @endphp
                @foreach ($woman->chunk(3) as $items)
                    <div class="carousel-item @if ($i == 0) active @endif">
                        @php $i=1; @endphp
                        <div class="container">
                            <div class="fashion_section_2">
                                <h1 class="fashion_taital"> Women's Fashion</h1>
                                <div class="row">
                                    @foreach ($items as $item)
                                        <div class="col-lg-4 col-sm-4">
                                            <div class="box_main">
                                                <h4 class="shirt_text">{{ $item->heading }}</h4>
                                                <p class="price_text">Price <span
                                                        style="color: #262626;">{{ $item->price }}</span></p>
                                                <div class="tshirt_img"><img
                                                        src="{{ asset('upload/woman_cloths/') }}/{{ $item->image }}">
                                                </div>
                                                <h2>Description</h2>

                                                <p class=" "> {{ $item->description }} </p>
                                                <div class="btn_main">
                                                    <div class="buy_bt text-center">
                                                        <a href="{{ route('productView', $item->id) }}">Buy Now</a>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
                <i class="fa fa-angle-left"></i>
            </a>
            <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
                <i class="fa fa-angle-right"></i>
            </a>
        </div>
    </div> --}}


    <div id="man" class="carousel slide" data-ride="carousel">
        <h1 class="fashion_taital my-5"> Custom football uniform</h1>
       <div class="container">
        <div class="carousel-inner">
            @php $i = 0; @endphp
            @foreach ($man->chunk(3) as $items)
                <div class="carousel-item carousel-item_1 @if ($i == 0) active @endif">
                    @php $i++; @endphp
                    <div class="row">
                        @foreach ($items as $item)
                            <div class="col-lg-4">
                                <div class="card" style="width: 22rem;">
                                    <img src="{{ asset('upload/man_cloths/') }}/{{ $item->image }}" class="card-img-top woman-img" alt="{{ $item->heading }}">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $item->heading }}</h5>
                                        <p class="card-text">{{ $item->description }}</p>
                                        <p class="card-text card-text_inquiry"> Inquiry New </p>
                                        {{-- <p class="card-text"><small class="text-muted">Price: {{ $item->price }}</small></p> --}}
                                        <div class="btn_main">
                                            <div class="buy_bt text-center">
                                                <a href="{{ route('man.football', $item->id) }}">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
       </div>
        <a class="carousel-control-prev" href="#man" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#man" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    {{-- <div class="fashion_section">
        <div id="electronic_main_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                @php $i=0; @endphp
                @foreach ($man->chunk(3) as $items)
                    <div class="carousel-item @if ($i == 0) active @endif">
                        @php $i=1; @endphp
                        <div class="container">
                            <h1 class="fashion_taital">Men's Fashion</h1>
                            <div class="fashion_section_2">
                                <div class="row">
                                    @foreach ($items as $item)
                                        <div class="col-lg-4 col-sm-4">
                                            <div class="box_main">
                                                <h4 class="shirt_text">{{ $item->heading }}</h4>
                                                <p class="price_text">Start Price <span
                                                        style="color: #262626;">{{ $item->price }}</span></p>
                                                <div class="electronic_img"><img
                                                        src="{{ asset('upload/man_cloths/') }}/{{ $item->image }}">
                                                </div>
                                                <h2>Description</h2>

                                                <p class=" "> {{ $item->description }} </p>
                                                <div class="btn_main">
                                                    <div class="buy_bt text-center">

                                                        <a href="{{ route('manproductView', $item->id) }}">Buy Now</a>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#electronic_main_slider" role="button" data-slide="prev">
                <i class="fa fa-angle-left"></i>
            </a>
            <a class="carousel-control-next" href="#electronic_main_slider" role="button" data-slide="next">
                <i class="fa fa-angle-right"></i>
            </a>
        </div>
    </div> --}}


    <div id="bed_sheets" class="carousel slide" data-ride="carousel">
        <h1 class="fashion_taital my-5"> Custom soccer uniform</h1>
       <div class="container">
        <div class="carousel-inner">
            @php $i = 0; @endphp
            @foreach ($bed_sheets->chunk(3) as $items)
                <div class="carousel-item carousel-item_1 @if ($i == 0) active @endif">
                    @php $i++; @endphp
                    <div class="row">
                        @foreach ($items as $item)
                            <div class="col-lg-4">
                                <div class="card" style="width: 22rem;">
                                    <img src="{{ asset('upload/bed_sheets/') }}/{{ $item->image }}" class="card-img-top woman-img" alt="{{ $item->heading }}">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $item->heading }}</h5>
                                        <p class="card-text">{{ $item->description }}</p>
                                        <p class="card-text card-text_inquiry"> Inquiry New </p>
                                        {{-- <p class="card-text"><small class="text-muted">Price: {{ $item->price }}</small></p> --}}
                                        <div class="btn_main">
                                            <div class="buy_bt text-center">
                                                <a href="{{ route('bed.T-shirts', $item->id) }}">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
       </div>
        <a class="carousel-control-prev" href="#bed_sheets" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#bed_sheets" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    {{-- <div class="fashion_section">
        <div id="electronic_main_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                @php $i=0; @endphp
                @foreach ($bed_sheets->chunk(3) as $items)
                    <div class="carousel-item @if ($i == 0) active @endif">
                        @php $i=1; @endphp
                        <div class="container">
                            <h1 class="fashion_taital">Bed Sheets</h1>
                            <div class="fashion_section_2">
                                <div class="row">
                                    @foreach ($items as $item)
                                        <div class="col-lg-4 col-sm-4">
                                            <div class="box_main">
                                                <h4 class="shirt_text">{{ $item->heading }}</h4>
                                                <p class="price_text">Start Price <span
                                                        style="color: #262626;">{{ $item->price }}</span></p>
                                                <div class="electronic_img"><img
                                                        src="{{ asset('upload/bed_sheets/') }}/{{ $item->image }}">
                                                </div>
                                                <h2>Description</h2>

                                                <p class=" "> {{ $item->description }} </p>
                                                <div class="btn_main">
                                                    <div class="buy_bt text-center">
                                                        <a href="{{ route('bedproductView', $item->id) }}">Buy Now</a>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#electronic_main_slider" role="button" data-slide="prev">
                <i class="fa fa-angle-left"></i>
            </a>
            <a class="carousel-control-next" href="#electronic_main_slider" role="button" data-slide="next">
                <i class="fa fa-angle-right"></i>
            </a>
        </div>
    </div> --}}


    <div id="handi_craft" class="carousel slide" data-ride="carousel">
        <h1 class="fashion_taital my-5"> T-shirts mens</h1>
       <div class="container">
        <div class="carousel-inner">
            @php $i = 0; @endphp
            @foreach ($handi_craft->chunk(3) as $items)
                <div class="carousel-item carousel-item_1 @if ($i == 0) active @endif">
                    @php $i++; @endphp
                    <div class="row">
                        @foreach ($items as $item)
                            <div class="col-lg-4">
                                <div class="card" style="width: 22rem;">
                                    <img src="{{ asset('upload/handi_craft/') }}/{{ $item->image }}" class="card-img-top woman-img" alt="{{ $item->heading }}">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $item->heading }}</h5>
                                        <p class="card-text">{{ $item->description }}</p>
                                        <p class="card-text card-text_inquiry"> Inquiry New </p>
                                        {{-- <p class="card-text"><small class="text-muted">Price: {{ $item->price }}</small></p> --}}
                                        <div class="btn_main">
                                            <div class="buy_bt text-center">
                                                <a href="{{ route('handi.soccer', $item->id) }}">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
       </div>
        <a class="carousel-control-prev" href="#handi_craft" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#handi_craft" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    {{-- <div class="jewellery_section">
        <div id="jewellery_main_slider" class="carousel slide" data-ride="carousel">
            <div class="container">
                <div class="carousel-inner">
                    @php $i=0; @endphp
                    @foreach ($handi_craft->chunk(3) as $items)
                        <div class="carousel-item @if ($i == 0) active @endif">
                            @php $i=1; @endphp
                            <h1 class="fashion_taital">Flash Sale</h1>
                            <div class="fashion_section_2">
                                <div class="row">
                                    @foreach ($items as $item)
                                        <div class="col-lg-4 col-sm-4">
                                            <div class="box_main">
                                                <h4 class="shirt_text">{{ $item->heading }}</h4>
                                                <p class="price_text">Start Price <span
                                                        style="color: #262626;">{{ $item->price }}</span></p>
                                                <div class="jewellery_img"><img
                                                        src="{{ asset('upload/handi_craft/') }}/{{ $item->image }}">
                                                </div>
                                                <h2>Description</h2>

                                                <p class=" "> {{ $item->description }} </p>
                                                <div class="btn_main">
                                                    <div class="buy_bt text-center">
                                                        <a href="{{ route('handiproductView', $item->id) }}">Buy Now</a>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>


                <a class="handi_next carousel-control-prev" href="#jewellery_main_slider" role="button"
                    data-slide="prev">
                    <i class="fa fa-angle-left"></i>
                </a>
                <a class="handi_next carousel-control-next" href="#jewellery_main_slider" role="button"
                    data-slide="next">
                    <i class="fa fa-angle-right"></i>
                </a>

            </div>
        </div>
    </div> --}}


    <div id="sportswears" class="carousel slide" data-ride="carousel">
        <h1 class="fashion_taital my-5"> Sports Wears</h1>
       <div class="container">
        <div class="carousel-inner">
            @php $i = 0; @endphp
            @foreach ($sportswears->chunk(3) as $items)
                <div class="carousel-item carousel-item_1 @if ($i == 0) active @endif">
                    @php $i++; @endphp
                    <div class="row">
                        @foreach ($items as $item)
                            <div class="col-lg-4">
                                <div class="card" style="width: 22rem;">
                                    <img src="{{ asset('upload/sportswears/') }}/{{ $item->image }}" class="card-img-top woman-img" alt="{{ $item->heading }}">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $item->heading }}</h5>
                                        <p class="card-text">{{ $item->description }}</p>
                                        <p class="card-text card-text_inquiry"> Inquiry New </p>
                                        {{-- <p class="card-text"><small class="text-muted">Price: {{ $item->price }}</small></p> --}}
                                        <div class="btn_main">
                                            <div class="buy_bt text-center">
                                                <a href="{{ route('sportswears', $item->id) }}">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
       </div>
        <a class="carousel-control-prev" href="#sportswears" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#sportswears" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

@endsection
