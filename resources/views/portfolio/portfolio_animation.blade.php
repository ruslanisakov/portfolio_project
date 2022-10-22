@extends('inc.basic_structure')

@section('title')
    {{__ ('language.Title_Main') }}
@endsection

@section('custom_style')
    <link rel="stylesheet" href="{{asset('css/bootstrap/bootstrap-5.1.min.css')}}"   type="text/css" media="all">
    <link rel="stylesheet" href="{{asset('css/fontawesome-6.1.1/css/all.min.css')}}" type="text/css" media="all">
    <link rel="stylesheet" href="{{asset('css/menu/absolute_menu.css')}}"            type="text/css" media="all">
    <link rel="stylesheet" href="{{asset('css/portfolio/portfolio.css')}}"           type="text/css" media="all">
    <link rel="stylesheet" href="{{asset('css/portfolio/footer_block.css')}}"        type="text/css" media="all">
    <link rel="stylesheet" href="{{asset('css/portfolio/portfolio_animation.css')}}" type="text/css" media="all">
@endsection

@section('content')
    @include('inc.absolute_menu')
    <div class="header_block">
        <nav class="navbar navbar-light">
            <div class="container">
                <a class="header-logo" href="{{ route('portfolio') }}">
                    <img src="{{asset('images/logo.png')}}" alt="" width="80" class="d-inline-block align-text-top">
                    <p><span>{{__ ('portfolio.Ruslan') }}</span> {{__ ('portfolio.Isakov') }}</p>
                </a>
            </div>
        </nav>
    </div>
    <div class="container">
        <div class="animation_block">
            <h1 class="header text-center">{{__ ('portfolio.Portfolio.block_03')}}</h1>
            <div class="row animation_blocks">
               <div class="col-md-12">
                    @foreach($data as $value)
                        <div class="animation_item">
                            <div class="thumb-wrap">
                                <iframe src="{{ $value->link }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <h2 class="text-center">{{$value->name}}</h2>
                        </div>
                    @endforeach
               </div>
            </div>
        </div>
    </div>
@endsection

@section('custom_scripts')
    <script type="text/javascript" src="{{ asset('js/jquery/jquery-3.6.0.min.js') }}"> </script>
    <script type="text/javascript" src="{{ asset('js/menu/absolute-menu-switching.js') }}"></script>
    <script src="{{asset('js/bootstrap/bootstrap.bundle.min.js')}}"></script>
@endsection
