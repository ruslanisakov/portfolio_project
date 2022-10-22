@extends('inc.basic_structure')

@section('title')
    {{__ ('language.Title_Main') }}
@endsection

@section('custom_style')
    <link rel="stylesheet" href="{{asset('css/bootstrap/bootstrap-5.1.min.css')}}"      type="text/css" media="all">
    <link rel="stylesheet" href="{{asset('css/fontawesome-6.1.1/css/all.min.css')}}"    type="text/css" media="all">
    <link rel="stylesheet" href="{{asset('css/menu/absolute_menu.css')}}"               type="text/css" media="all">
    <link rel="stylesheet" href="{{asset('css/portfolio/portfolio.css')}}"              type="text/css" media="all">
    <link rel="stylesheet" href="{{asset('css/portfolio/footer_block.css')}}"           type="text/css" media="all">
    <link rel="stylesheet" href="{{asset('css/portfolio/portfolio_applications.css')}}" type="text/css" media="all">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.min.css')}}" type="text/css" media="all">
@endsection

@section('content')
    @include('inc.absolute_menu')
    <div class="header_block">
        <nav class="navbar navbar-light">
            <div class="container">
                <a class="header-logo" href="/">
                    <img src="{{asset('images/logo.png')}}" alt="" width="80" class="d-inline-block align-text-top">
                    <p><span>{{__ ('portfolio.Ruslan') }}</span> {{__ ('portfolio.Isakov') }}</p>
                </a>
            </div>
        </nav>
    </div>
    <div class="container">
        <div class="applications_block">
            <h1 class="text-center">{{ $data->name }}</h1>
            <div class="row">
                <div class="gallery-section">
                    <div class="gallery">
                        @foreach($images as $val)
                            <a href="{{ asset('images/portfolio/works/'.$val) }}" class="image">
                                <img src="{{ asset('images/portfolio/works/'.$val) }}" alt="">
                            </a>
                        @endforeach
                    </div>
                    <div class="description">
                        <p>
                            {{ $data->description }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('custom_scripts')
    <script type="text/javascript" src="{{ asset('js/jquery/jquery-3.6.0.min.js') }}"> </script>
    <script type="text/javascript" src="{{ asset('js/menu/absolute-menu-switching.js') }}"></script>
    <script src="{{asset('js/bootstrap/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('js/jquery/jquery.magnific-popup.min.js')}}"></script>
    <script>
        $(".gallery").magnificPopup({
            delegate: 'a',
            type: 'image',
            gallery:{
                enabled: true
            }
        });
    </script>
@endsection
