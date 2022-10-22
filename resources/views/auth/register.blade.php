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
                    <img src="/images/login/reg-form.png" alt="img">
                </div>
                <form action="{{ route('register') }}" class="login100-form validate-form" method="POST">
                @csrf <!-- Безопасность формы -->
                    <span class="login100-form-title"> {{__ ('portfolio.Registr.Reg') }} </span>
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
                        <input class="input100" type="text" name="login" placeholder="{{__ ('portfolio.Registr.Login') }}" autocomplete="off">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                        <input class="input100" type="email" name="email" placeholder = "{{__ ('portfolio.Registr.Email') }}" autocomplete="off">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate = "Password is required">
                        <input class="input100" type="password" name="password" placeholder = "{{__ ('portfolio.Registr.Password') }}" autocomplete="off">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate = "Password is required">
                        <input class="input100" type="password" name="password_confirmation" placeholder="{{__ ('portfolio.Registr.Conf_Password') }}" autocomplete="off">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="container-login100-form-btn">
                        <button type="submit" class="login100-form-btn" name="do_signup"> {{__ ('portfolio.Registr.Signup') }} </button>
                    </div>
                    <div class="text-center p-t-136" style="text-align: center; padding-top: 5em">
                        <input name="langen" type="submit" value="English" class="active txt2 "> |
                        <input name="langru" type="submit" value="Русский" class="passive txt2">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
