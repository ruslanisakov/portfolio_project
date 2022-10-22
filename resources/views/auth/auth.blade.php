@if(Auth::user())
    @yield('main-content')
@endif
@guest
    <?php
        header("Location: /login");
        exit();
    ?>
@endguest
