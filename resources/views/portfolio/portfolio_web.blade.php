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
    <link rel="stylesheet" href="{{asset('css/portfolio/portfolio_web.css')}}"       type="text/css" media="all">
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
        <div class="web_block">
            <h1 class="header text-center">{{__ ('portfolio.Portfolio.block_01')}}</h1>
            <h2 class="text-center">{{__ ('portfolio.portfolio_present')}}</h2>
            <div class="row">
                @foreach($data as $val)
                    <div class="col-md-4 item">
                        <div class="item_block text-center">
                            <img src="{{ asset('images/portfolio/works/'.$val->title_image) }}" alt="">
                            <h2>{{ $val->name }}</h2>
                            <a href="{{ route('portfolio_web_view', $val->id) }}" class="btn btn-more">{{__ ('portfolio.Portfolio.btnText') }} <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

@section('custom_scripts')
    <script type="text/javascript" src="{{ asset('js/jquery/jquery-3.6.0.min.js') }}"> </script>
    <script type="text/javascript" src="{{ asset('js/menu/absolute-menu-switching.js') }}"></script>
    <script src="{{asset('js/bootstrap/bootstrap.bundle.min.js')}}"></script>
@endsection
