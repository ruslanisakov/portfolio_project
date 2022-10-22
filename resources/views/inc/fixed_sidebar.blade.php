@section('fixed-sidebar')
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <a href="{{ route('admin') }}"><img src="{{asset('images/logo.png')}}" alt=""></a>
                </span>
                <div class="text logo-text">
                    <span class="name">{{__ ('admin.Menu.Title_logo') }}</span>
                    @if(Auth::user())
                        <span class="profession">{{__ ('language.Auth.Hello') }}, {{Auth::user()->login}}!</span>
                    @endif
                </div>
            </div>
            <i class='fa fa-bars toggle'></i>
        </header>
        <div class="menu-bar">
            <div class="menu">
                @foreach(Config::get('languages') as $lang => $language)
                    @if($lang != App::getLocale())
                        <li>
                            <form action="{{ route('lang.switch', $lang) }}">
                                <input type="submit" value="{{ $lang }}" class="btn text-uppercase btn-lang">
                            </form>
                        </li>
                    @endif
                @endforeach
                <li class="search-box">
                    <i class='fa fa-search icon'></i>
                    <input type="text" placeholder="{{__ ('admin.Menu.Search') }}">
                </li>
                <ul class="menu-links">
                    <li>
                        <a href="{{ route('admin') }}" id="main" {{ Request::is('admin') ? 'class=active-element' : null }}>
                            <i class='fa fa-home icon' ></i>
                            <span class="text nav-text">{{__ ('admin.Menu.Home') }}</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin_portfolio') }}" id="portfolio" {{ Request::is('admin/portfolio*') ? 'class=active-element' : null }}>
                            <i class='fa fa-briefcase icon' ></i>
                            <span class="text nav-text">{{__ ('admin.Menu.Portfolio') }}</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin_finance') }}" id="finance" {{ Request::is('admin/finance*') ? 'class=active-element' : null }}>
                            <i class='fa fa-dollar-sign icon' ></i>
                            <span class="text nav-text">{{__ ('admin.Menu.Finance') }}</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin_books') }}" id="books" {{ Request::is('admin/books*') ? 'class=active-element' : null }}>
                            <i class='fa fa-book icon'></i>
                            <span class="text nav-text">{{__ ('admin.Menu.Books') }}</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" id="movies">
                            <i class='fa fa-film icon' ></i>
                            <span class="text nav-text">{{__ ('admin.Menu.Movies') }}</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" id="achievements">
                            <i class='fa fa-trophy icon' ></i>
                            <span class="text nav-text">{{__ ('admin.Menu.Achievements') }}</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" id="tasks">
                            <i class='fa fa-tasks icon' ></i>
                            <span class="text nav-text">{{__ ('admin.Menu.Tasks') }}</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin_settings') }}" id="portfolio" {{ Request::is('admin/settings*') ? 'class=active-element' : null }}>
                            <i class='fa fa-cogs icon' ></i>
                            <span class="text nav-text">{{__ ('admin.Menu.Settings') }}</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="bottom-content">
                <li>
                    <a data-bs-toggle="modal" data-bs-target="#logoutModal">
                        <i class='fa fa-sign-out-alt icon' ></i>
                        <span class="text nav-text">{{ __('language.Auth.Logout') }}</span>
                    </a>
                </li>
{{--                <li class="mode">--}}
{{--                    <div class="sun-moon">--}}
{{--                        <i class='fa fa-moon icon moon'></i>--}}
{{--                        <i class='fa fa-sun icon sun'></i>--}}
{{--                    </div>--}}
{{--                    <span class="mode-text text">Dark mode</span>--}}
{{--                    <div class="toggle-switch">--}}
{{--                        <span class="switch"></span>--}}
{{--                    </div>--}}
{{--                </li>--}}
            </div>
        </div>
    </nav>
    @include('auth.logout')
@show <!-- Для вывода данных из шаблона -->
