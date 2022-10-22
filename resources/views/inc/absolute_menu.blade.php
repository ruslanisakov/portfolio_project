@section('absolute-menu')
<div class="menu">
    <a href="" id="menuToggle"> <span class="navClosed"></span> </a>
    <div id="menuToggle2">
        @foreach(Config::get('languages') as $lang => $language)
            @if($lang != App::getLocale())
                <a id="menuToggle2" href="{{ route('lang.switch', $lang) }}" class="passive-lang"> {{ $lang }} </a>
            @endif
            @if($lang == App::getLocale())
                <a id="menuToggle3" href="{{ route('lang.switch', $lang) }}" class="active-lang"> {{ $lang }} </a>
            @endif
        @endforeach
    </div>
    <nav>
        @if(Auth::user())
            <a href="{{ route('admin') }}">{{__ ('language.Auth.Hello') }}, <br> {{Auth::user()->login}}!</a>
        @endif

        @if(Request::is('/'))
            <a href="{{ route('portfolio') }}" class="active"> {{__ ('portfolio.Menu.item_01') }} </a>
            <a href="#about"           class="scroll"> {{__ ('portfolio.Menu.item_02') }} </a>
            <a href="#hard_skills"     class="scroll"> {{__ ('portfolio.Menu.item_03') }} </a>
            <a href="#soft_skills"     class="scroll"> {{__ ('portfolio.Menu.item_04') }} </a>
            <a href="#work_experience" class="scroll"> {{__ ('portfolio.Menu.item_05') }} </a>
            <a href="#education"       class="scroll"> {{__ ('portfolio.Menu.item_06') }} </a>
            <a href="#portfolio"       class="scroll"> {{__ ('portfolio.Menu.item_07') }} </a>
            <a href="#documents"       class="scroll"> {{__ ('portfolio.Menu.item_08') }} </a>
            <a href="#recommendations" class="scroll"> {{__ ('portfolio.Menu.item_09') }} </a>
            <a href="#contacts"        class="scroll"> {{__ ('portfolio.Menu.item_10') }} </a>
        @else
            <a href="{{ route('portfolio') }}" class="active"> {{__ ('portfolio.Menu.item_01') }} </a>
            <a href="{{ route('portfolio') }}#about"           class="scroll"> {{__ ('portfolio.Menu.item_02') }} </a>
            <a href="{{ route('portfolio') }}#hard_skills"     class="scroll"> {{__ ('portfolio.Menu.item_03') }} </a>
            <a href="{{ route('portfolio') }}#soft_skills"     class="scroll"> {{__ ('portfolio.Menu.item_04') }} </a>
            <a href="{{ route('portfolio') }}#work_experience" class="scroll"> {{__ ('portfolio.Menu.item_05') }} </a>
            <a href="{{ route('portfolio') }}#education"       class="scroll"> {{__ ('portfolio.Menu.item_06') }} </a>
            <a href="{{ route('portfolio') }}#portfolio"       class="scroll"> {{__ ('portfolio.Menu.item_07') }} </a>
            <a href="{{ route('portfolio') }}#documents"       class="scroll"> {{__ ('portfolio.Menu.item_08') }} </a>
            <a href="{{ route('portfolio') }}#recommendations" class="scroll"> {{__ ('portfolio.Menu.item_09') }} </a>
            <a href="{{ route('portfolio') }}#contacts"        class="scroll"> {{__ ('portfolio.Menu.item_10') }} </a>
        @endif
        <br>
        @guest
            @if (Route::has('login'))
                <a href="{{ route('login') }}">{{ __('language.Auth.Signin') }}</a>
            @endif
        @else
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                {{ __('language.Auth.Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        @endguest
    </nav>
</div>
<div class="clearfix"> </div>
@show <!-- Для вывода данных из шаблона -->
