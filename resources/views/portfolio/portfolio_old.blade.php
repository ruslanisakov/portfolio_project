@extends('inc.basic_structure') <!-- Наследуем основную структуру сайта -->
<!-- Встроить код в определенную секцию наследуемой структуры -->
@section('title')
    {{__ ('language.Title_Main') }}
@endsection
<!-- Встроить код в определенную секцию наследуемой структуры -->
@section('custom_style')
    <link href="{{ asset('css/bootstrap/bootstrap.min.css') }}"                          rel="stylesheet" type="text/css" media="all">
    <link href="{{asset('css/fontawesome-all.min.css')}}"                                rel="stylesheet" type="text/css" media="all">
    <link href="{{ asset('css/style.css') }}"                                            rel='stylesheet' type='text/css' media="all">
    <link href="{{ asset('css/unslider.css') }}"                                         rel="stylesheet" type="text/css" media="all">
    <link href="{{ asset('css/lightbox.css') }}"                                         rel="stylesheet" type="text/css" media="all">
    <link href="//fonts.googleapis.com/css?family=Montserrat:300,400,500"                rel="stylesheet" type="text/css" media="all">
    <link href="//fonts.googleapis.com/css?family=Encode+Sans+Condensed:400,500,600,700" rel="stylesheet" type="text/css" media="all">
    <!-- Preloader Script -->
    <script>
        window.onload = function () {
            document.body.classList.add('loaded_hiding');
            window.setTimeout(function () {
                document.body.classList.add('loaded');
                document.body.classList.remove('loaded_hiding');
            }, 500);
        }
    </script>
    <!-- Preloader Script -->
@endsection

@section('content')
    <!-- Preloader Block -->
    <div class="preloader">
        <div class="preloader__row">
            <div class="preloader__item"></div>
            <div class="preloader__item"></div>
        </div>
    </div>
    <!-- Preloader Block -->

    <!-- Header -->
    <div class="header-outs" id="header">
        <div class="header-w3layouts">
            <div class="container">
                <div class="hedder-logo">
                    <h1><a href="/"><span>{{__ ('language.Banner.Banner_Main_01') }}</span>  {{__ ('language.Banner.Banner_Main_02') }} </a></h1>
                </div>
                <!-- Navigation Section -->
                @include('inc.absolute_menu')
                <!-- Navigation Section -->
            </div>
            <div class="clearfix"> </div>
        </div>

        <!-- Banner -->
        <div class="slider" id="home">
            <div class="callbacks_container">
                <ul class="rslides" id="slider4">
                    <li>
                        <div class="slider-img one-img">
                            <div class="container">
                                <div class="slider-info">
                                    <br><br><br><br>
                                    <h5> {{__ ('language.Banner.Hello') }}! <br> {{__ ('language.Banner.Banner_Text_01') }}</h5>
                                    <p></p>
                                    <div class="outs_more-buttn">
                                        <a href="#contact" class="scroll"> {{__ ('language.Banner.Contacts') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="slider-img two-img">
                            <div class="container">
                                <div class="slider-info">
                                    <br><br><br><br>
                                    <h5> {{__ ('language.Banner.Hello') }}! <br>{{__ ('language.Banner.Banner_Text_02') }}</h5>
                                    <p></p>
                                    <div class="outs_more-buttn">
                                        <a href="#contact" class="scroll"> {{__ ('language.Banner.Contacts') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Banner -->
        <div class="clearfix"></div>
    </div>
    <!-- Header -->


    <!-- About -->
    <!--service-->
    <section class="service py-lg-4 py-md-3 py-sm-3 py-3" id="about" style="margin: 0 4% -6em 4%;">
        <div class="container py-lg-5 py-md-5 py-sm-4 py-3">
            <div class="title-sub text-left mb-lg-5 mb-md-4 mb-sm-4 mb-3">
                <h3 class="title mb-2"> {{__ ('language.About.About_Title') }}</h3>
                <hr>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 ser-icon p-0 text-left title-sub">
                    <p>
                        <span class="span-cursive">{{__ ('language.About.About_Hello') }}</span> {{__ ('language.About.About_Text_01') }}<br><br>
                        {{__ ('language.About.About_Text_02') }}<br><br>
                    </p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 ser-icon p-0 text-left title-sub">
                    <p>
                        <span class="span-cursive">{{__ ('language.About.About_Text_03') }}</span><br>
                        {{__ ('language.About.About_Text_04') }}<br><br>
                        {{__ ('language.About.About_Text_05') }}<br><br>
                        {{__ ('language.About.About_Text_06') }}<br><br>
                        {{__ ('language.About.About_Text_07') }}<br>
                    </p>
                    <ul class="about-ul-li">
                        <li> <p><i class="fa fa-check-circle" aria-hidden="true"></i> {{__ ('language.About.About_Text_Item_01') }} </p></li>
                        <li> <p><i class="fa fa-check-circle" aria-hidden="true"></i> {{__ ('language.About.About_Text_Item_02') }} </p></li>
                        <li> <p><i class="fa fa-check-circle" aria-hidden="true"></i> {{__ ('language.About.About_Text_Item_03') }} </p></li>
                        <li> <p><i class="fa fa-check-circle" aria-hidden="true"></i> {{__ ('language.About.About_Text_Item_04') }} </p></li>
                        <li> <p><i class="fa fa-check-circle" aria-hidden="true"></i> {{__ ('language.About.About_Text_Item_05') }} </p></li>
                        <li> <p><i class="fa fa-check-circle" aria-hidden="true"></i> {{__ ('language.About.About_Text_Item_06') }} </p></li>
                        <li> <p><i class="fa fa-check-circle" aria-hidden="true"></i> {{__ ('language.About.About_Text_Item_07') }} </p></li>
                        <li> <p><i class="fa fa-check-circle" aria-hidden="true"></i> {{__ ('language.About.About_Text_Item_08') }} </p></li>
                        <li> <p><i class="fa fa-check-circle" aria-hidden="true"></i> {{__ ('language.About.About_Text_Item_09') }} </p></li>
                    </ul>
                    <div class="outs_about-buttn mt-lg-4 mt-md-3 mt-3">
                        <a download href="{{ asset('images/portfolio/Ruslan ISAKOV_CV.pdf') }}">
                            <i class="fa fa-download" aria-hidden="true"></i>
                            {{__ ('language.About.Download_CV') }}
                        </a>
                        <a href="{{ asset('images/portfolio/Ruslan ISAKOV_CV.pdf') }}" target="_blank">
                            <i class="fa fa-eye" aria-hidden="true"></i>
                            {{__ ('language.About.View_CV') }}
                        </a>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 col-sm-6 ser-icon p-0">
                    <div class="col-lg-12 col-md-4">
                        <br>
                        <div class="row mx-0">
                            <div class="col-md-2 col-sm-2 col-3 pl-0 text-right banner-icon">
                                <span class="fa fa-laptop"></span>
                            </div>
                            <div class="col-md-10 col-sm-9 col-9 ser-text-wthree text-left">
                                <h4>{{__ ('language.About.About_Icon_01') }}</h4>
                                <p class="mt-3">HTML, CSS, Bootstrap, JS(Ajax, jQuery), PHP (Laravel, Bitrix)</p>
                            </div>
                        </div>
                        <br>
                        <div class="row mx-0">
                            <div class="col-md-2 col-sm-3 col-3 pl-0 text-right banner-icon">
                                <span class="fa fa-code"></span>
                            </div>
                            <div class="col-md-10 col-sm-9 col-9 ser-text-wthree text-left">
                                <h4>{{__ ('language.About.About_Icon_02') }}</h4>
                                <p class="mt-3">C++, C#, Java, Phyton</p>
                            </div>
                        </div>
                        <br>
                        <div class="row mx-0">
                            <div class="col-md-2 col-sm-3 col-3 pl-0 text-right banner-icon">
                                <span class="fa fa-database"></span>
                            </div>
                            <div class="col-md-10 col-sm-9 col-9 ser-text-wthree text-left">
                                <h4>{{__ ('language.About.About_Icon_03') }}</h4>
                                <p class="mt-3">SQL (MySql, Ms Sql)</p>
                            </div>
                        </div>
                        <br>
                        <div class="row mx-0">
                            <div class="col-md-2 col-sm-3 col-3 pl-0 text-right banner-icon">
                                <span class="fa fa-play"></span>
                            </div>
                            <div class="col-md-10 col-sm-9 col-9 ser-text-wthree text-left">
                                <h4>{{__ ('language.About.About_Icon_04') }}</h4>
                                <p class="mt-3">Cinema 4D, Adobe After Effects, Adobe Audition</p>
                            </div>
                        </div>
                        <br>
                        <div class="row mx-0">
                            <div class="col-md-2 col-sm-3 col-3 pl-0 text-right banner-icon">
                                <span class="fa fa-image"></span>
                            </div>
                            <div class="col-md-10 col-sm-9 col-9 ser-text-wthree text-left">
                                <h4>{{__ ('language.About.About_Icon_05') }}</h4>
                                <p class="mt-3">Adobe PhotoShop, CorelDraw, Adobe illustrator</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <br><br>
                        <div class="video">
                            <div class="video-wrp">
                                <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/J7pYEZj0DEc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
    </section>
    <!--//service-->
    <!-- About -->


    <!-- Experience Block -->
    <section class="service py-lg-4 py-md-3 py-sm-3 py-3 section section-experience wow fadeInUp" class="" data-wow-offset="40" id="experience">
        <div class="container py-lg-5 py-md-5 py-sm-4 py-3">
            <div class="title-sub text-left mb-lg-5 mb-md-4 mb-sm-4 mb-3">
                <h3 class="title mb-2">{{__ ('language.Experience.Title') }}</h3>
                <hr>
            </div>
            <div class="row">
                <div class="col-md-12 col-md-offset-1">
               <span class="icon-experience">
                  <i class="fa fa-briefcase"></i>
               </span>
                    <div class="all-experience">
                        <!-- single experience -->
                        <div class="experience-content">
                            <span class="period-experience">{{__ ('language.Experience.Block_02.Date_Start') }} - {{__ ('language.Experience.Block_02.Date_End') }}</span>
                            <h3 class="specialty-name">{{__ ('language.Experience.Block_02.Name') }}</h3>
                            <h3 class="company-name">{{__ ('language.Experience.Block_02.Speciality') }}</h3>
                            <br>
                            <h5 class="mb-3"><i class="fa fa-list-ul" aria-hidden="true"></i> {{__ ('language.Experience.Duties') }}</h5>
                            <ul class="about-ul-li">
                                <li><p> <i class="fa fa-check-circle" aria-hidden="true"></i> {{__ ('language.Experience.Block_02.Description_01.Item_01') }} </p></li>
                                <li><p> <i class="fa fa-check-circle" aria-hidden="true"></i> {{__ ('language.Experience.Block_02.Description_01.Item_02') }} </p></li>
                                <li><p> <i class="fa fa-check-circle" aria-hidden="true"></i> {{__ ('language.Experience.Block_02.Description_01.Item_03') }} </p></li>
                                <li><p> <i class="fa fa-check-circle" aria-hidden="true"></i> {{__ ('language.Experience.Block_02.Description_01.Item_04') }} </p></li>
                                <li><p> <i class="fa fa-check-circle" aria-hidden="true"></i> {{__ ('language.Experience.Block_02.Description_01.Item_05') }} </p></li>
                                <li><p> <i class="fa fa-check-circle" aria-hidden="true"></i> {{__ ('language.Experience.Block_02.Description_01.Item_06') }} </p></li>
                            </ul>
                            <br>
                            <h5 class="mb-3"> <i class="fa fa-trophy" aria-hidden="true"></i> {{__ ('language.Experience.Achievements') }}</h5>
                            <ul class="about-ul-li">
                                <li><p> <i class="fa fa-check-circle" aria-hidden="true"></i> {{__ ('language.Experience.Block_02.Description_02.Item_01') }} </p></li>
                                <li><p> <i class="fa fa-check-circle" aria-hidden="true"></i> {{__ ('language.Experience.Block_02.Description_02.Item_02') }} </p></li>
                                <li><p> <i class="fa fa-check-circle" aria-hidden="true"></i> {{__ ('language.Experience.Block_02.Description_02.Item_03') }} </p></li>
                            </ul>
                        </div>
                        <!-- / single experience -->
                        <!-- single experience -->
                        <div class="experience-content">
                            <span class="period-experience">{{__ ('language.Experience.Block_01.Date_Start') }} - {{__ ('language.Experience.Block_01.Date_End') }}</span>
                            <h3 class="specialty-name">{{__ ('language.Experience.Block_01.Name') }}</h3>
                            <h3 class="company-name">{{__ ('language.Experience.Block_01.Speciality') }}</h3>
                            <br>
                            <h5 class="mb-3"><i class="fa fa-list-ul" aria-hidden="true"></i> {{__ ('language.Experience.Duties') }}</h5>
                            <ul class="about-ul-li">
                                <li><p> <i class="fa fa-check-circle" aria-hidden="true"></i> {{__ ('language.Experience.Block_01.Description_01.Item_01') }} </p></li>
                                <li><p> <i class="fa fa-check-circle" aria-hidden="true"></i> {{__ ('language.Experience.Block_01.Description_01.Item_02') }} </p></li>
                                <li><p> <i class="fa fa-check-circle" aria-hidden="true"></i> {{__ ('language.Experience.Block_01.Description_01.Item_03') }} </p></li>
                                <li><p> <i class="fa fa-check-circle" aria-hidden="true"></i> {{__ ('language.Experience.Block_01.Description_01.Item_04') }} </p></li>
                                <li><p> <i class="fa fa-check-circle" aria-hidden="true"></i> {{__ ('language.Experience.Block_01.Description_01.Item_05') }} </p></li>
                                <li><p> <i class="fa fa-check-circle" aria-hidden="true"></i> {{__ ('language.Experience.Block_01.Description_01.Item_06') }} </p></li>
                            </ul>
                            <br>
                            <h5 class="mb-3"> <i class="fa fa-trophy" aria-hidden="true"></i> {{__ ('language.Experience.Achievements') }}</h5>
                            <ul class="about-ul-li">
                                <li><p> <i class="fa fa-check-circle" aria-hidden="true"></i> {{__ ('language.Experience.Block_01.Description_02.Item_01') }} </p></li>
                                <li><p> <i class="fa fa-check-circle" aria-hidden="true"></i> {{__ ('language.Experience.Block_01.Description_02.Item_02') }} </p></li>
                            </ul>
                        </div>
                        <!-- / single experience -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Experience Block -->


    <!-- Education Block -->
    <section class="service section section-experience wow fadeInUp" class="" data-wow-offset="40" id="education">
        <div class="container">
            <div class="title-sub text-left mb-lg-5 mb-md-4 mb-sm-4 mb-3">
                <h3 class="title mb-2">{{__ ('language.Education.Title') }}</h3>
                <hr>
            </div>
            <div class="row">
                <div class="col-md-12 col-md-offset-1">
               <span class="icon-experience">
                  <i class="fa fa-graduation-cap"></i>
               </span>
                    <div class="all-experience">
                        <!-- single experience -->
                        <div class="experience-content">
                            <span class="period-experience">{{__ ('language.Education.Block_04.Year') }}</span>
                            <h3 class="specialty-name">{{__ ('language.Education.Block_04.Name') }}</h3>
                            <h3 class="company-name">{{__ ('language.Education.Block_04.Speciality') }}</h3>
                            <p>{{__ ('language.Education.Block_04.Description') }}</p>
                        </div>
                        <!-- / single experience -->
                        <!-- single experience -->
                        <div class="experience-content">
                            <span class="period-experience">{{__ ('language.Education.Block_03.Year') }}</span>
                            <h3 class="specialty-name">{{__ ('language.Education.Block_03.Name') }}</h3>
                            <h3 class="company-name">{{__ ('language.Education.Block_03.Speciality') }}</h3>
                            <p>{{__ ('language.Education.Block_03.Description') }}</p>
                        </div>
                        <!-- / single experience -->
                        <!-- single experience -->
                        <div class="experience-content">
                            <span class="period-experience">{{__ ('language.Education.Block_02.Year') }}</span>
                            <h3 class="specialty-name">{{__ ('language.Education.Block_02.Name') }}</h3>
                            <h3 class="company-name">{{__ ('language.Education.Block_02.Speciality') }}</h3>
                            <p>{{__ ('language.Education.Block_02.Description') }}</p>
                        </div>
                        <!-- / single experience -->
                        <!-- single experience -->
                        <div class="experience-content">
                            <span class="period-experience">{{__ ('language.Education.Block_01.Year') }}</span>
                            <h3 class="specialty-name">{{__ ('language.Education.Block_01.Name') }}</h3>
                            <h3 class="company-name">{{__ ('language.Education.Block_01.Speciality') }}</h3>
                            <p>{{__ ('language.Education.Block_01.Description') }}</p>
                        </div>
                        <!-- / single experience -->
                    </div>
                </div>
            </div>
        </div>
        <br><br><br>
    </section>
    <!-- Education Block -->


    <!-- Portfolio-block -->
    <div class="portfolio py-5" id="portfolio">
        <div class="container py-lg-5 py-md-3">
            <div class="services-block_grids_bottom">
                <div class="title-sub text-left mb-lg-5 mb-md-4 mb-sm-4 mb-3">
                    <h3 class="title mb-2">{{__ ('language.Portfolio.Title') }}</h3>
                    <hr>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 service_grid_btm_left">
                        <a href="/web">
                            <div class="service_grid_btm_left1">
                                <div class="service_grid_btm_left2">
                                    <span class="fa fa-desktop text-primary" aria-hidden="true"></span>
                                    <h5>{{__ ('language.Portfolio.Block_01.Title') }}</h5>
                                    <p>{{__ ('language.Portfolio.View_Block_Text') }}</p>
                                </div>
                                <img src="{{ asset('images/portfolio/portfolio-bg-1.jpg') }}" alt=" " class="img-fluid" />
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 service_grid_btm_left mt-md-0 mt-sm-5 mt-4">
                        <a href="/programming">
                            <div class="service_grid_btm_left1">
                                <div class="service_grid_btm_left2">
                                    <span class="fa fa-laptop text-primary" aria-hidden="true"></span>
                                    <h5>{{__ ('language.Portfolio.Block_02.Title') }}</h5>
                                    <p>{{__ ('language.Portfolio.View_Block_Text') }}</p>
                                </div>
                                <img src="{{ asset('images/portfolio/portfolio-bg-2.jpg') }}" alt=" " class="img-fluid" />
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 service_grid_btm_left mt-lg-0 mt-sm-5 mt-4">
                        <a href="/animation">
                            <div class="service_grid_btm_left1">
                                <div class="service_grid_btm_left2">
                                    <span class="fa fa-camera text-primary" aria-hidden="true"></span>
                                    <h5>{{__ ('language.Portfolio.Block_03.Title') }}</h5>
                                    <p>{{__ ('language.Portfolio.View_Block_Text') }}</p>
                                </div>
                                <img src="{{ asset('images/portfolio/portfolio-bg-3.jpg') }}" alt=" " class="img-fluid" />
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio-block -->


    <!-- Certificates-block -->
    <div class="my-slider" id="certificates">
        <div class="title-sub container text-left mb-lg-5 mb-md-4 mb-sm-4 mb-3">
            <h3 class="title mb-2">{{__ ('language.Certificates.Title') }}</h3>
            <hr>
        </div>
        <ul>
            <li>
                <section class="block3-section">
                    <h2></h2>
                    <h3></h3>
                    <div class="block3-main center-block-main clearfix certificates">
                        <article>
                            <figcaption>
                                <a href="{{ asset('images/portfolio/cert-html.jpg') }}" data-lightbox="example-set" data-title="">
                                    <img src="{{ asset('images/portfolio/cert-html.jpg') }}">
                                </a>
                            </figcaption>
                            <p>
                                <i class="fa fa-check-circle" aria-hidden="true"></i>
                                <a href="https://www.sololearn.com/Certificate/1014-11011479/pdf/" target="_blank">
                                    {{__ ('language.Certificates.Verify_Text') }}
                                </a>
                            </p>
                        </article>
                        <article>
                            <figcaption>
                                <a href="{{ asset('images/portfolio/cert-css.jpg') }}" class="gallery-box" data-lightbox="example-set" data-title="">
                                    <img src="{{ asset('images/portfolio/cert-css.jpg') }}" alt="">
                                </a>
                            </figcaption>
                            <p>
                                <i class="fa fa-check-circle" aria-hidden="true"></i>
                                <a href="https://www.sololearn.com/Certificate/1023-11011479/pdf/" target="_blank">
                                    {{__ ('language.Certificates.Verify_Text') }}
                                </a>
                        </article>
                        <article>
                            <figcaption>
                                <a href="{{ asset('images/portfolio/cert-js.jpg') }}" class="gallery-box" data-lightbox="example-set" data-title="">
                                    <img src="{{ asset('images/portfolio/cert-js.jpg') }}" alt="">
                                </a>
                            </figcaption>
                            <p>
                                <i class="fa fa-check-circle" aria-hidden="true"></i>
                                <a href="https://www.sololearn.com/Certificate/1024-11011479/pdf/" target="_blank">
                                    {{__ ('language.Certificates.Verify_Text') }}
                                </a>
                            </p>
                        </article>
                    </div>
                </section>
            </li>
            <li>
                <section class="block3-section">
                    <h2></h2>
                    <h3></h3>
                    <div class="block3-main center-block-main clearfix certificates">
                        <article>
                            <figcaption>
                                <a href="{{ asset('images/portfolio/cert-jquery.jpg') }}" class="gallery-box" data-lightbox="example-set" data-title="">
                                    <img src="{{ asset('images/portfolio/cert-jquery.jpg') }}" alt="">
                                </a>
                            </figcaption>
                            <p>
                                <i class="fa fa-check-circle" aria-hidden="true"></i>
                                <a href="https://www.sololearn.com/Certificate/1082-11011479/pdf/" target="_blank">{{__ ('language.Certificates.Verify_Text') }}</a>
                            </p>
                        </article>
                        <article>
                            <figcaption>
                                <a href="{{ asset('images/portfolio/cert-sql.jpg') }}" class="gallery-box" data-lightbox="example-set" data-title="">
                                    <img src="{{ asset('images/portfolio/cert-sql.jpg') }}" alt="">
                                </a>
                            </figcaption>
                            <p>
                                <i class="fa fa-check-circle" aria-hidden="true"></i>
                                <a href="https://www.sololearn.com/Certificate/1060-11011479/pdf/" target="_blank"> {{__ ('language.Certificates.Verify_Text') }}</a>
                            </p>
                        </article>
                        <article>
                            <figcaption>
                                <a href="{{ asset('images/portfolio/cert-php.jpg') }}" class="gallery-box" data-lightbox="example-set" data-title="">
                                    <img src="{{ asset('images/portfolio/cert-php.jpg') }}" alt="">
                                </a>
                            </figcaption>
                            <p>
                                <i class="fa fa-check-circle" aria-hidden="true"></i>
                                <a href="https://www.sololearn.com/Certificate/1059-11011479/pdf/" target="_blank"> {{__ ('language.Certificates.Verify_Text') }}</a>
                            </p>
                        </article>
                    </div>
                </section>
            </li>
            <li>
                <section class="block3-section">
                    <h2></h2>
                    <h3></h3>
                    <div class="block3-main center-block-main clearfix certificates">
                        <article>
                            <figcaption>
                                <a href="{{ asset('images/portfolio/cert-c.jpg') }}" class="gallery-box" data-lightbox="example-set" data-title="">
                                    <img src="{{ asset('images/portfolio/cert-c.jpg') }}" alt="">
                                </a>
                            </figcaption>
                            <p>
                                <i class="fa fa-check-circle" aria-hidden="true"></i>
                                <a href="https://www.sololearn.com/Certificate/1089-11011479/pdf/" target="_blank"> {{__ ('language.Certificates.Verify_Text') }}</a>
                            </p>
                        </article>
                        <article>
                            <figcaption>
                                <a href="{{ asset('images/portfolio/cert-c++.jpg') }}" class="gallery-box" data-lightbox="example-set" data-title=""><img src="{{ asset('images/portfolio/cert-c++.jpg') }}" alt=""> </a>
                            </figcaption>
                            <p>
                                <i class="fa fa-check-circle" aria-hidden="true"></i>
                                <a href="https://www.sololearn.com/Certificate/1051-11011479/pdf/" target="_blank"> {{__ ('language.Certificates.Verify_Text') }}</a>
                            </p>
                        </article>
                        <article>
                            <figcaption>
                                <a href="{{ asset('images/portfolio/cert-csharp.jpg') }}" class="gallery-box" data-lightbox="example-set" data-title=""><img src="{{ asset('images/portfolio/cert-csharp.jpg') }}" alt=""></a>
                            </figcaption>
                            <p>
                                <i class="fa fa-check-circle" aria-hidden="true"></i>
                                <a href="https://www.sololearn.com/Certificate/1080-11011479/pdf/" target="_blank">{{__ ('language.Certificates.Verify_Text') }}</a>
                            </p>
                        </article>
                    </div>
                </section>
            </li>
            <li>
                <section class="block3-section">
                    <h2></h2>
                    <h3></h3>
                    <div class="block3-main center-block-main clearfix certificates">
                        <article>
                            <figcaption>
                                <a href="{{ asset('images/portfolio/cert-java.jpg') }}" class="gallery-box" data-lightbox="example-set" data-title="">
                                    <img src="{{ asset('images/portfolio/cert-java.jpg') }}" alt="">
                                </a>
                            </figcaption>
                            <p>
                                <i class="fa fa-check-circle" aria-hidden="true"></i>
                                <a href="https://www.sololearn.com/Certificate/1068-11011479/pdf/" target="_blank"> {{__ ('language.Certificates.Verify_Text') }}</a>
                            </p>
                        </article>
                        <article>
                            <figcaption>
                                <a href="{{ asset('images/portfolio/cert-phyton.jpg') }}" class="gallery-box" data-lightbox="example-set" data-title="">
                                    <img src="{{ asset('images/portfolio/cert-phyton.jpg') }}" alt="">
                                </a>
                            </figcaption>
                            <p>
                                <i class="fa fa-check-circle" aria-hidden="true"></i>
                                <a href="https://www.sololearn.com/Certificate/1073-11011479/pdf/" target="_blank"> {{__ ('language.Certificates.Verify_Text') }}</a>
                            </p>
                        </article>
                        <article>
                            <figcaption>
                                <a href="{{ asset('images/portfolio/cert-swift.jpg') }}" class="gallery-box" data-lightbox="example-set" data-title="">
                                    <img src="{{ asset('images/portfolio/cert-swift.jpg') }}" alt="">
                                </a>
                            </figcaption>
                            <p>
                                <i class="fa fa-check-circle" aria-hidden="true"></i>
                                <a href="https://www.sololearn.com/Certificate/1075-11011479/pdf/" target="_blank"> {{__ ('language.Certificates.Verify_Text') }}</a>
                            </p>
                        </article>
                    </div>
                </section>
            </li>
        </ul>
    </div>
    <section class="block4-section center-block-main">
        <div class="block4-main clearfix">
            <article>
                <a href="{{ asset('images/portfolio/cert-korean.png') }}" class="gallery-box" data-lightbox="example-set" data-title="">
                    <img src="{{ asset('images/portfolio/cert-korean.png') }}" alt="">
                </a>
                <div class="block4-main-content">
                    <h2>{{__ ('language.Certificates.Cert_01.Title') }}</h2>
                    <h3></h3>
                    <p>{{__ ('language.Certificates.Cert_01.Description') }}</p>
                </div>
            </article>
            <article>
                <a href="{{ asset('images/portfolio/cert-student.png') }}" class="gallery-box" data-lightbox="example-set" data-title="">
                    <img src="{{ asset('images/portfolio/cert-student.png') }}" alt="">
                </a>
                <div class="block4-main-content">
                    <h2>{{__ ('language.Certificates.Cert_02.Title') }}</h2>
                    <h3></h3>
                    <p>{{__ ('language.Certificates.Cert_02.Description') }}</p>
                </div>
            </article>
            <article>
                <a href="{{ asset('images/portfolio/cert-millenium.png') }}" class="gallery-box" data-lightbox="example-set" data-title="">
                    <img src="{{ asset('images/portfolio/cert-millenium.png') }}" alt="">
                </a>
                <div class="block4-main-content">
                    <h2>{{__ ('language.Certificates.Cert_03.Title') }}</h2>
                    <h3></h3>
                    <p>{{__ ('language.Certificates.Cert_03.Description') }}</p>
                </div>
            </article>
            <article>
                <img src="{{ asset('images/portfolio/cert-bg.jpg') }}" alt="">
                <div class="block4-main-content">
                    <h2>{{__ ('language.Certificates.Cert_None') }}</h2>
                    <h3></h3>
                    <p>{{__ ('language.Certificates.Cert_None') }}</p>
                </div>
            </article>
        </div>
    </section>
    <!-- Certificates-block -->


    <!-- Recommendations-block -->
    <section class="clients py-lg-4 py-md-3 py-sm-3 py-3" id="recommend">
        <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
            <div class="title-sub container text-left mb-lg-5 mb-md-4 mb-sm-4 mb-3">
                <h3 class="title mb-2">{{__ ('language.Recommendations.Title') }}</h3>
                <hr>
            </div>
            <div class="naccs">
                <div class="gridm col-lg-12 col-md-12">
                    <div class="gcmer gc--1-of-3">
                        <div class="menuu">
                            <div>                <span class="light"></span> <span> {{__ ('language.Recommendations.Block_01.Name') }} </span></div>
                            <div>                <span class="light"></span> <span> {{__ ('language.Recommendations.Block_02.Name') }} </span></div>
                            <div class="active"> <span class="light"></span> <span> {{__ ('language.Recommendations.Block_03.Name') }} </span></div>
                        </div>
                    </div>
                    <div class="gcmer gc--2-of-3">
                        <ul class="nacc">
                            <li>
                                <div>
                                    <p>
                                        {{__ ('language.Recommendations.Block_01.Description_01') }}
                                        <br><br>
                                        {{__ ('language.Recommendations.Block_01.Description_02') }}
                                        <br><br>
                                        {{__ ('language.Recommendations.Block_01.Description_03') }}
                                        <br><br>
                                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                                        {{__ ('language.Recommendations.Respectfully') }}, {{__ ('language.Recommendations.Block_01.Full_Name') }}
                                        <br>{{__ ('language.Recommendations.Block_01.Position') }}
                                        <br><br>
                                        {{__ ('language.Recommendations.Block_01.Date') }}
                                    </p>
                                </div>
                            </li>
                            <li class="active">
                                <div>
                                    <p>
                                        {{__ ('language.Recommendations.Block_02.Description_01') }}
                                        <br><br>
                                        {{__ ('language.Recommendations.Block_02.Description_02') }}
                                        <br><br>
                                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                                        {{__ ('language.Recommendations.Respectfully') }}, {{__ ('language.Recommendations.Block_02.Full_Name') }}
                                        <br>{{__ ('language.Recommendations.Block_02.Position') }}
                                        <br><br>
                                        {{__ ('language.Recommendations.Block_02.Date') }}
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <p>
                                        {{__ ('language.Recommendations.Block_03.Description_01') }}
                                        <br><br>
                                        {{__ ('language.Recommendations.Block_03.Description_02') }}
                                        <br><br>
                                        {{__ ('language.Recommendations.Block_03.Description_03') }}
                                        <br><br>
                                        {{__ ('language.Recommendations.Block_03.Description_04') }}
                                        <br>
                                        {{__ ('language.Recommendations.Block_03.Description_04_Items.Item_01') }}<br>
                                        {{__ ('language.Recommendations.Block_03.Description_04_Items.Item_02') }}<br>
                                        {{__ ('language.Recommendations.Block_03.Description_04_Items.Item_03') }}<br>
                                        {{__ ('language.Recommendations.Block_03.Description_04_Items.Item_04') }}<br>
                                        {{__ ('language.Recommendations.Block_03.Description_04_Items.Item_05') }}<br>
                                        {{__ ('language.Recommendations.Block_03.Description_04_Items.Item_06') }}
                                        <br><br>
                                        {{__ ('language.Recommendations.Block_03.Description_05') }}
                                        <br><br>
                                        {{__ ('language.Recommendations.Block_03.Description_06') }}
                                        <br><br>
                                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                                        {{__ ('language.Recommendations.Respectfully') }}, {{__ ('language.Recommendations.Block_03.Full_Name') }}
                                        <br>{{__ ('language.Recommendations.Block_03.Position') }}
                                        <br><br>
                                        {{__ ('language.Recommendations.Block_03.Date') }}
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Recommendations-block -->

    <!-- Up Button -->
    <div id="toTop"></div>
    <!-- Up Button -->

    @include('inc.footer_portfolio')

    <!-- Map-block -->
    <!--	<div class="map" id="map">
             <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3073803.562606644!2d72.49667037681405!3d41.205177539510395!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3897381dfce927f3%3A0x281058b74e88c433!2z0JrQuNGA0LPQuNC30LjRjw!5e0!3m2!1sru!2skg!4v1564476263836!5m2!1sru!2skg" allowfullscreen></iframe>
     </div> -->
    <!-- Map-block -->
@endsection

@section('custom_scripts')
    <!-- jQuery 3.6.0 -->
    <script type="text/javascript" src="{{ asset('js/jquery/jquery-3.6.0.min.js') }}"> </script>
    <!-- jQuery 3.6.0 -->

    <!-- Image gallery script -->
    <script src="{{ asset('js/jquery/lightbox-plus-jquery.min.js') }}"> </script>
    <!-- Image gallery script -->

    <!-- Banner slider script -->
    <script type="text/javascript" src="{{ asset('js/responsiveslides.min.js') }}"> </script>
    <!-- Banner slider script -->

    <!-- Certificates slider script -->
    <script type="text/javascript" src="{{ asset('js/unslider-min.js') }}"></script>
    <!-- Certificates slider script -->

    <!-- Side menu script -->
    <script type="text/javascript" src="{{ asset('js/menu/absolute-menu-switching.js') }}"></script>
    <!-- Side menu script -->

    <!-- Banner slider script -->
    <script>
        // You can also use "$(window).load(function() {"
        $(function () {
            $("#slider4").responsiveSlides({
                auto: true,
                pager: false,
                nav: true,
                speed: 900,
                namespace: "callbacks",
                before: function () {
                    $('.events').append("<li> before event fired. </li>");
                },
                after: function () {
                    $('.events').append("<li> after event fired. </li>");
                }
            });
        });
    </script>
    <!-- Banner slider script -->

    <!-- Image gallery script -->
    <script>
        $(document).ready(function ($) {
            $('.my-slider').unslider({
                autoplay: true,
                arrows: false
            });
        });
    </script>
    <!-- Image gallery script -->

    <!-- Move top script -->
    <script type="text/javascript" src="{{ asset('js/move-top.js') }}"></script>
    <!-- Move top script -->

    <!-- Script for recommendation Tabs -->
    <script type="text/javascript" src="{{ asset('js/tabs.js') }}"></script>
    <!-- Script for recommendation Tabs -->
@endsection
