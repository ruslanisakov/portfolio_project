@extends('auth.auth')
@section('main-content')
    @extends('inc.basic_structure') <!-- Наследуем основную структуру сайта -->
    <!-- Встроить код в определенную секцию наследуемой структуры -->
    @section('title')
        {{__ ('language.Title_Main') }}
    @endsection
    <!-- Встроить код в определенную секцию наследуемой структуры -->

    @section('custom-style')
        <link rel="stylesheet" href="./css/authorization.css">
        <link rel="stylesheet" href="./css/fontawesome-all.min.css" type="text/css" media="all">
    @endsection

    @section('content')
        <div class="limiter">
            <div class="container-login100">
                <div class="wrap-login100" style="width: 960px; padding-top: 120px">
                    <div class="login100-pic js-tilt" data-tilt>
                        <img src="{{asset('images/login/reg-form.png')}}" alt="IMG" style="max-width: 150%; margin-top: 2em; margin-left: -2em;">
                    </div>
                    <form action="{{ route('registration') }}" class="login100-form validate-form" method="POST">
                        @csrf <!-- Безопасность формы -->
                        <span class="login100-form-title"> {{__ ('language.Registr.Reg') }} </span>
                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li> {{ $error }} </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="wrap-input100 validate-input" data-validate = "Ex: User">
                            <input class="input100" type="text" name="login" placeholder="{{__ ('language.Registr.Login') }}" autocomplete="off">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-user" aria-hidden="true"></i>
                            </span>
                        </div>
                        <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                            <input class="input100" type="email" name="email" placeholder = "{{__ ('language.Registr.Email') }}" autocomplete="off">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </span>
                        </div>
                        <div class="wrap-input100 validate-input" data-validate = "Password is required">
                            <input class="input100" type="password" name="password" placeholder = "{{__ ('language.Registr.Password') }}" autocomplete="off">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-lock" aria-hidden="true"></i>
                            </span>
                        </div>
                        <div class="wrap-input100 validate-input" data-validate = "Password is required">
                            <input class="input100" type="password" name="confirm_password" placeholder="{{__ ('language.Registr.Conf_Password') }}" autocomplete="off">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-lock" aria-hidden="true"></i>
                            </span>
                        </div>
                        <div class="container-login100-form-btn">
                            <button class="login100-form-btn" name="do_signup"> {{__ ('language.Registr.Signup') }} </button>
                        </div>
                        <div class="text-center p-t-12">
                            <span class="txt1"> <!--	Forgot --> </span>
                            <a class="txt2" href="#"> <!--	Username / Password? --> </a>
                        </div>
                        <div class="text-center p-t-136">
                            <a class="txt2" href="#"> <!--	Create your Account -->
                                <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                            </a>
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
@endsection
