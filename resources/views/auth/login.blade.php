@extends('inc.basic_structure')

    @section('title')
        {{__ ('language.Title_Main') }}
    @endsection

    @section('custom_style')
        <link rel="stylesheet" href="{{asset('css/auth/authorization.css')}}" type="text/css" media="all">
        <link rel="stylesheet" href="{{asset('/css/fontawesome-all.min.css')}}" type="text/css" media="all">
    @endsection

    @section('content')
        <div class="limiter">
            <div class="container-login100">
                <div class="wrap-login100" >
                    <form action="{{ route('login') }}" class="login100-form validate-form" method="POST">
                        @csrf
                        <span class="login100-form-title">
                            <img src="{{asset('images/login/user.png')}}" style="max-width: 30%">
                            <h3 class="text-center"> {{__ ('portfolio.Auth.Auth') }} </h3>
                        </span>
                        <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@gmail.com">
                            <input class="input100" type="email" placeholder="{{__ ('portfolio.Auth.Email') }}" name="email" value="">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-user" aria-hidden="true"></i>
                            </span>
                        </div>
                        <div class="wrap-input100 validate-input" data-validate="Password is required">
                            <input class="input100" type="password" placeholder="{{__ ('portfolio.Auth.Password') }}" name="password" autocomplete="on" value="">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-lock" aria-hidden="true"></i>
                            </span>
                        </div>
                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li> {{ $error }} </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="container-login100-form-btn">
                            <button type="submit" class="login100-form-btn" name="do_login"> {{__ ('portfolio.Auth.Login') }} </button>
                        </div>
                        <div class="text-center p-t-12">
                            <span class="txt1"> <!--	Forgot --> </span>
                            <a class="txt2" href="#"> <!--	Username / Password? --> </a>
                        </div>
                        <div class="text-center" style="margin-top: 7em; text-align: center;">
                            @foreach(Config::get('languages') as $lang => $language)
                                @if($lang != App::getLocale())
                                    <a href="{{ route('lang.switch', $lang) }}" class="passive-lang"> {{ $language }} </a>
                                @endif
                                @if($lang == App::getLocale())
                                    <a href="{{ route('lang.switch', $lang) }}" class="active-lang"> {{ $language }} </a>
                                @endif
                            @endforeach
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endsection
