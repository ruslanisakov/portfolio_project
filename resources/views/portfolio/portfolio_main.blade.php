@extends('inc.basic_structure')

@section('title')
    {{__ ('language.Title_Main') }}
@endsection

@section('custom_style')
    <link rel="stylesheet" href="{{asset('css/bootstrap/bootstrap-5.1.min.css')}}"     type="text/css" media="all">
    <link rel="stylesheet" href="{{asset('css/fontawesome-6.1.1/css/all.min.css')}}"   type="text/css" media="all">
    <link rel="stylesheet" href="{{asset('css/menu/absolute_menu.css')}}"              type="text/css" media="all">
    <link rel="stylesheet" href="{{asset('css/portfolio/portfolio.css')}}"             type="text/css" media="all">
    <link rel="stylesheet" href="{{asset('css/portfolio/about_block.css')}}"           type="text/css" media="all">
    <link rel="stylesheet" href="{{asset('css/portfolio/skills_block.css')}}"          type="text/css" media="all">
    <link rel="stylesheet" href="{{asset('css/portfolio/work_experience_block.css')}}" type="text/css" media="all">
    <link rel="stylesheet" href="{{asset('css/portfolio/education_block.css')}}"       type="text/css" media="all">
    <link rel="stylesheet" href="{{asset('css/portfolio/portfolio_block.css')}}"       type="text/css" media="all">
    <link rel="stylesheet" href="{{asset('css/portfolio/documents_block.css')}}"       type="text/css" media="all">
    <link rel="stylesheet" href="{{asset('css/portfolio/recommendations_block.css')}}" type="text/css" media="all">
    <link rel="stylesheet" href="{{asset('css/portfolio/footer_block.css')}}"          type="text/css" media="all">
@endsection

@section('content')
    @include('inc.absolute_menu')
    <div class="header_block">
        <nav class="navbar navbar-light">
            <div class="container">
                <a class="header-logo" href="#">
                    <img src="{{asset('images/logo.png')}}" alt="" width="80" class="d-inline-block align-text-top">
                    <p><span>{{__ ('portfolio.Ruslan') }}</span> {{__ ('portfolio.Isakov') }}</p>
                </a>
            </div>
        </nav>
        <div class="container">
            <div class="about_block" id="about">
                <div class="row">
                    <div class="col-md-12">
                        <h1><span>{{__ ('portfolio.Hello')}} <i class="fa-regular fa-hand"></i></span></h1>
                        <p>{{__ ('portfolio.About_block.text_01')}}</p>
                    </div>
                    <div class="col-md-6">
                        <p>{{__ ('portfolio.About_block.text_02')}}</p>
                        <p>
                            {{__ ('portfolio.About_block.text_03')}}<br>
                            {{__ ('portfolio.About_block.text_03_1')}} <span class="red-span">{{__ ('portfolio.About_block.text_03_2')}}</span>
                        </p>
                        <p>{{__ ('portfolio.About_block.text_04')}}</p>
                        <h3>{{__ ('portfolio.About_block.text_05')}}</h3>
                        <p><i class="fa-solid fa-trophy about_icons"></i>{{__ ('portfolio.About_block.text_06')}}</p>
                        <p><i class="fa-solid fa-earth-americas about_icons"></i>{{__ ('portfolio.About_block.text_07')}}</p>
                    </div>
                    <div class="col-md-6">
                        <img src="{{asset('images/portfolio/me.webp')}}" alt="">
                    </div>
                    <div class="col-md-12">
                        <p><i class="fa-regular fa-comments about_icons"></i>{{__ ('portfolio.About_block.text_08')}}</p>
                        <p>{{__ ('portfolio.About_block.text_09')}}</p>
                    </div>
                    <div class="text-center">
                        <a href="#hard_skills"><i class="fa-solid fa-chevron-down arrow"></i></a>
                    </div>
                    <div class="contact-me">
                        <a href="{{ asset('files/Ruslan_Isakov_CV.pdf') }}" target="_blank" download><i class="fa-solid fa-file-arrow-down"></i> Резюме </a>
                        <a href="https://t.me/ruslanisakovcom" target="_blank"><i class="fa-brands fa-bounce fa-telegram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="skills_block" id="hard_skills">
            <h1 class="header">{{__ ('portfolio.Hard_skills.title')}}</h1>
            <p class="text-description-header">* {{__ ('portfolio.Hard_skills.description')}}</p>
            <div class="row">
                <div class="col-md-12 hard_skills_block">
                    <div class="skill_container">
                        <i class="fa-brands fa-bootstrap"></i>
                        <h3>{{__ ('portfolio.Hard_skills.item_01')}}</h3>
                    </div>
                    <div class="skill_container">
                        <i class="fa-brands fa-js-square"></i>
                        <h3>{{__ ('portfolio.Hard_skills.item_02')}}</h3>
                    </div>
                    <div class="skill_container">
                        <i class="fa-brands fa-laravel"></i>
                        <h3>{{__ ('portfolio.Hard_skills.item_03')}}</h3>
                    </div>
                    <div class="skill_container">
                        <i class="fa-solid fa-laptop-code"></i>
                        <h3>{{__ ('portfolio.Hard_skills.item_04')}}</h3>
                    </div>
                    <div class="skill_container">
                        <i class="fa-brands fa-ubuntu"></i>
                        <h3>{{__ ('portfolio.Hard_skills.item_05')}}</h3>
                    </div>
                    <div class="skill_container">
                        <i class="fa-solid fa-code-branch"></i>
                        <h3>{{__ ('portfolio.Hard_skills.item_06')}}</h3>
                    </div>
                    <div class="skill_container">
                        <i class="fa-solid fa-database"></i>
                        <h3>{{__ ('portfolio.Hard_skills.item_07')}}</h3>
                    </div>
                    <div class="skill_container">
                        <i class="fa-brands fa-docker"></i>
                        <h3>{{__ ('portfolio.Hard_skills.item_08')}}</h3>
                    </div>
                    <div class="skill_container">
                        <i class="fa-solid fa-server"></i>
                        <h3>{{__ ('portfolio.Hard_skills.item_09')}}</h3>
                    </div>
                    <div class="skill_container">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <h3>{{__ ('portfolio.Hard_skills.item_10')}}</h3>
                    </div>
                    <div class="skill_container">
                        <i class="fa-brands fa-invision"></i>
                        <h3>{{__ ('portfolio.Hard_skills.item_11')}}</h3>
                    </div>
                    <div class="skill_container">
                        <i class="fa-brands fa-buromobelexperte"></i>
                        <h3>{{__ ('portfolio.Hard_skills.item_12')}}</h3>
                    </div>
                    <div class="skill_container">
                        <i class="fa-solid fa-wand-magic-sparkles"></i>
                        <h3>{{__ ('portfolio.Hard_skills.item_13')}}</h3>
                    </div>
                    <div class="skill_container">
                        <i class="fa-solid fa-display"></i>
                        <h3>{{__ ('portfolio.Hard_skills.item_14')}}</h3>
                    </div>
                    <div class="skill_container">
                        <i class="fa-brands fa-python"></i>
                        <h3>{{__ ('portfolio.Hard_skills.item_15')}}</h3>
                    </div>
                    <div class="skill_container">
                        <i class="fa-solid fa-language"></i>
                        <h3>{{__ ('portfolio.Hard_skills.item_16')}}</h3>
                    </div>
                    <i class="fa-solid fa-gear fa-spin icon_bg item_1" style="--fa-animation-duration: 10s;"></i>
                    <i class="fa-solid fa-gear fa-spin icon_bg item_2" style="--fa-animation-duration: 11s; --fa-animation-direction: reverse;"></i>
                </div>
            </div>
            <div class="col-md-12 soft_skills_block" id="soft_skills">
                <h1 class="header text-right">{{__ ('portfolio.Soft_skills.title')}}</h1>
                <p class="text-description-header text-right">{{__ ('portfolio.Soft_skills.description')}} *</p>
                <div class="skill_container">
                    <i class="fa-solid fa-graduation-cap"></i>
                    <div class="group">
                        <h3>{{__ ('portfolio.Soft_skills.item_01.name')}}</h3>
                        <p class="text-description">* {{__ ('portfolio.Soft_skills.item_01.description')}}</p>
                    </div>
                </div>
                <div class="skill_container">
                    <i class="fa-solid fa-bullseye"></i>
                    <div class="group">
                        <h3>{{__ ('portfolio.Soft_skills.item_02.name')}}</h3>
                        <p class="text-description">* {{__ ('portfolio.Soft_skills.item_02.description')}}</p>
                    </div>
                </div>
                <div class="skill_container">
                    <i class="fa-solid fa-bullhorn"></i>
                    <div class="group">
                        <h3>{{__ ('portfolio.Soft_skills.item_03.name')}}</h3>
                        <p class="text-description">* {{__ ('portfolio.Soft_skills.item_03.description')}}</p>
                    </div>
                </div>
                <div class="skill_container">
                    <i class="fa-solid fa-brain"></i>
                    <div class="group">
                        <h3>{{__ ('portfolio.Soft_skills.item_04.name')}}</h3>
                        <p class="text-description">* {{__ ('portfolio.Soft_skills.item_04.description')}}</p>
                    </div>
                </div>
                <div class="skill_container">
                    <i class="fa-solid fa-users"></i>
                    <div class="group">
                        <h3>{{__ ('portfolio.Soft_skills.item_05.name')}}</h3>
                        <p class="text-description">* {{__ ('portfolio.Soft_skills.item_05.description')}}</p>
                    </div>
                </div>
                <div class="skill_container">
                    <i class="fa-solid fa-comment-dots"></i>
                    <div class="group">
                        <h3>{{__ ('portfolio.Soft_skills.item_06.name')}}</h3>
                        <p class="text-description">* {{__ ('portfolio.Soft_skills.item_06.description')}}</p>
                    </div>
                </div>
                <div class="skill_container">
                    <i class="fa-solid fa-clipboard-question"></i>
                    <div class="group">
                        <h3>{{__ ('portfolio.Soft_skills.item_07.name')}}</h3>
                        <p class="text-description">* {{__ ('portfolio.Soft_skills.item_07.description')}}</p>
                    </div>
                </div>
                <div class="skill_container">
                    <i class="fa-solid fa-hand-holding-hand"></i>
                    <div class="group">
                        <h3>{{__ ('portfolio.Soft_skills.item_08.name')}}</h3>
                        <p class="text-description">* {{__ ('portfolio.Soft_skills.item_08.description')}}</p>
                    </div>
                </div>
                <div class="skill_container">
                    <i class="fa-solid fa-heart"></i>
                    <div class="group">
                        <h3>{{__ ('portfolio.Soft_skills.item_09.name')}}</h3>
                        <p class="text-description">* {{__ ('portfolio.Soft_skills.item_09.description')}}</p>
                    </div>
                </div>
                <div class="skill_container">
                    <div class="group">
                        <i class="fa-solid fa-clipboard-check"></i>
                    </div>
                    <div class="group">
                        <h3>{{__ ('portfolio.Soft_skills.item_10.name')}}</h3>
                        <p class="text-description">* {{__ ('portfolio.Soft_skills.item_10.description')}}</p>
                    </div>
                </div>
                <div class="skill_container">
                    <div class="group">
                        <i class="fa-solid fa-face-grin-stars"></i>
                    </div>
                    <div class="group">
                        <h3>{{__ ('portfolio.Soft_skills.item_11.name')}}</h3>
                        <p class="text-description">* {{__ ('portfolio.Soft_skills.item_11.description')}}</p>
                    </div>
                </div>
                <div class="skill_container">
                    <div class="group">
                        <i class="fa-solid fa-spinner fa-spin load"></i>
                    </div>
                    <div class="group">
                        <h3>{{__ ('portfolio.Soft_skills.item_12.name')}}</h3>
                        <p class="text-description">* {{__ ('portfolio.Soft_skills.item_12.description')}}</p>
                    </div>
                </div>
                <div class="skill_container">
                    <div class="group">
                        <i class="fa-solid fa-spinner fa-spin load"></i>
                    </div>
                    <div class="group">
                        <h3>{{__ ('portfolio.Soft_skills.item_13.name')}}</h3>
                        <p class="text-description">* {{__ ('portfolio.Soft_skills.item_13.description')}}</p>
                    </div>
                </div>
                <div class="skill_container">
                    <div class="group">
                        <i class="fa-solid fa-spinner fa-spin load"></i>
                    </div>
                    <div class="group">
                        <h3>{{__ ('portfolio.Soft_skills.item_14.name')}}</h3>
                        <p class="text-description">* {{__ ('portfolio.Soft_skills.item_14.description')}}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="work_experience_block" id="work_experience">
            <div class="container">
                <h1 class="header text-center"><i class="fa-solid fa-briefcase text-center work_icon_header"></i> {{__ ('portfolio.Work_experience.title')}}</h1>
                <div class="work_experience_item">
                    <div class="col-md-12">
                        <div class="company_name_container">
                            <img src="{{ asset('images/portfolio/work_experience/logo_kulikov.png') }}" alt="">
                            <div class="group">
                                <h1>{{__ ('portfolio.Work_experience.item_02.name')}}</h1>
                                <p class="date_work">{{__ ('portfolio.Work_experience.item_02.date_start')}} - {{__ ('portfolio.Work_experience.item_02.date_end')}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="responsibilities_block">
                            <h3><i class="fa-solid fa-list-ul"></i> {{__ ('portfolio.Work_experience.responsibilities_header_2')}}</h3>
                            <p><i class="fa-regular fa-circle-check"></i> {{__ ('portfolio.Work_experience.item_02.responsibilities.item_01')}}</p>
                            <p><i class="fa-regular fa-circle-check"></i> {{__ ('portfolio.Work_experience.item_02.responsibilities.item_02')}}</p>
                            <p><i class="fa-regular fa-circle-check"></i> {{__ ('portfolio.Work_experience.item_02.responsibilities.item_03')}}</p>
                            <p><i class="fa-regular fa-circle-check"></i> {{__ ('portfolio.Work_experience.item_02.responsibilities.item_04')}}</p>
                            <p><i class="fa-regular fa-circle-check"></i> {{__ ('portfolio.Work_experience.item_02.responsibilities.item_05')}}</p>
                            <p><i class="fa-regular fa-circle-check"></i> {{__ ('portfolio.Work_experience.item_02.responsibilities.item_06')}}</p>
                            <p><i class="fa-regular fa-circle-check"></i> {{__ ('portfolio.Work_experience.item_02.responsibilities.item_07')}}</p>
                            <p><i class="fa-regular fa-circle-check"></i> {{__ ('portfolio.Work_experience.item_02.responsibilities.item_08')}}</p>
                            <p><i class="fa-regular fa-circle-check"></i> {{__ ('portfolio.Work_experience.item_02.responsibilities.item_09')}}</p>
                            <p><i class="fa-regular fa-circle-check"></i> {{__ ('portfolio.Work_experience.item_02.responsibilities.item_10')}}</p>
                            <p><i class="fa-regular fa-circle-check"></i> {{__ ('portfolio.Work_experience.item_02.responsibilities.item_11')}}</p>
                            <p><i class="fa-regular fa-circle-check"></i> {{__ ('portfolio.Work_experience.item_02.responsibilities.item_12')}}</p>
                            <p><i class="fa-regular fa-circle-check"></i> {{__ ('portfolio.Work_experience.item_02.responsibilities.item_13')}}</p>
                            <p><i class="fa-regular fa-circle-check"></i> {{__ ('portfolio.Work_experience.item_02.responsibilities.item_14')}}</p>
                            <p><i class="fa-regular fa-circle-check"></i> {{__ ('portfolio.Work_experience.item_02.responsibilities.item_15')}}</p>
                            <p><i class="fa-regular fa-circle-check"></i> {{__ ('portfolio.Work_experience.item_02.responsibilities.item_16')}}</p>
                            <p><i class="fa-regular fa-circle-check"></i> {{__ ('portfolio.Work_experience.item_02.responsibilities.item_17')}}</p>
                            <p><i class="fa-regular fa-circle-check"></i> {{__ ('portfolio.Work_experience.item_02.responsibilities.item_18')}}</p>
                            <p><i class="fa-regular fa-circle-check"></i> {{__ ('portfolio.Work_experience.item_02.responsibilities.item_19')}}</p>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="achievements_block">
                            <h3><i class="fa-solid fa-trophy"></i> {{__ ('portfolio.Work_experience.achievements_header')}}</h3>
                            <p><i class="fa-regular fa-circle-check"></i> {{__ ('portfolio.Work_experience.item_02.achievements.item_01')}}</p>
                            <p><i class="fa-regular fa-circle-check"></i> {{__ ('portfolio.Work_experience.item_02.achievements.item_02')}}</p>
                            <p><i class="fa-regular fa-circle-check"></i> {{__ ('portfolio.Work_experience.item_02.achievements.item_03')}}</p>
                        </div>
                    </div>
                </div>
                <div class="work_experience_item">
                    <div class="col-md-12">
                        <div class="company_name_container">
                            <img src="{{ asset('images/portfolio/work_experience/logo_impuls_animation.png') }}" alt="">
                            <div class="group">
                                <h1>{{__ ('portfolio.Work_experience.item_01.name')}}</h1>
                                <p class="date_work">{{__ ('portfolio.Work_experience.item_01.date_start')}} - {{__ ('portfolio.Work_experience.item_01.date_end')}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="responsibilities_block">
                            <h3><i class="fa-solid fa-list-ul"></i> {{__ ('portfolio.Work_experience.responsibilities_header')}}</h3>
                            <p><i class="fa-regular fa-circle-check"></i> {{__ ('portfolio.Work_experience.item_01.responsibilities.item_01')}}</p>
                            <p><i class="fa-regular fa-circle-check"></i> {{__ ('portfolio.Work_experience.item_01.responsibilities.item_02')}}</p>
                            <p><i class="fa-regular fa-circle-check"></i> {{__ ('portfolio.Work_experience.item_01.responsibilities.item_03')}}</p>
                            <p><i class="fa-regular fa-circle-check"></i> {{__ ('portfolio.Work_experience.item_01.responsibilities.item_04')}}</p>
                            <p><i class="fa-regular fa-circle-check"></i> {{__ ('portfolio.Work_experience.item_01.responsibilities.item_05')}}</p>
                            <p><i class="fa-regular fa-circle-check"></i> {{__ ('portfolio.Work_experience.item_01.responsibilities.item_06')}}</p>
                            <p><i class="fa-regular fa-circle-check"></i> {{__ ('portfolio.Work_experience.item_01.responsibilities.item_07')}}</p>
                            <p><i class="fa-regular fa-circle-check"></i> {{__ ('portfolio.Work_experience.item_01.responsibilities.item_08')}}</p>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="achievements_block">
                            <h3><i class="fa-solid fa-trophy"></i> {{__ ('portfolio.Work_experience.achievements_header')}}</h3>
                            <p><i class="fa-regular fa-circle-check"></i> {{__ ('portfolio.Work_experience.item_01.achievements.item_01')}}</p>
                            <p><i class="fa-regular fa-circle-check"></i> {{__ ('portfolio.Work_experience.item_01.achievements.item_02')}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="education_block" id="education">
            <div class="container">
                <h1 class="header text-left">{{__ ('portfolio.Education.title')}}</h1>
                <div class="row">
                    <div class="col-md-12">
                        <span class="icon-experience">
                            <i class="fa fa-graduation-cap"></i>
                        </span>
                        <div class="all-experience">
                            <div class="experience-content">
                                <span class="period-experience">{{__ ('portfolio.Education.item_04.date_start') }} - {{__ ('portfolio.Education.item_04.date_end') }}</span>
                                <h3 class="specialty-name">{{__ ('portfolio.Education.item_04.name') }}</h3>
                                <h3 class="company-name">{{__ ('portfolio.Education.item_04.speciality') }}</h3>
                                <p>{{__ ('portfolio.Education.item_04.faculty') }}</p>
                            </div>
                            <div class="experience-content">
                                <span class="period-experience">{{__ ('portfolio.Education.item_03.date_start') }} - {{__ ('portfolio.Education.item_03.date_end') }}</span>
                                <h3 class="specialty-name">{{__ ('portfolio.Education.item_03.name') }}</h3>
                                <h3 class="company-name">{{__ ('portfolio.Education.item_03.speciality') }}</h3>
                                <p>{{__ ('portfolio.Education.item_03.faculty') }}</p>
                            </div>
                            <div class="experience-content">
                                <span class="period-experience">{{__ ('portfolio.Education.item_02.date_start') }} {{__ ('portfolio.Education.item_02.date_end') }}</span>
                                <h3 class="specialty-name">{{__ ('portfolio.Education.item_02.name') }}</h3>
                                <h3 class="company-name">{{__ ('portfolio.Education.item_02.speciality') }}</h3>
                                <p>{{__ ('portfolio.Education.item_02.faculty') }}</p>
                            </div>
                            <div class="experience-content">
                                <span class="period-experience">{{__ ('portfolio.Education.item_01.date_start') }} - {{__ ('portfolio.Education.item_01.date_end') }}</span>
                                <h3 class="specialty-name">{{__ ('portfolio.Education.item_01.name') }}</h3>
                                <h3 class="company-name">{{__ ('portfolio.Education.item_01.speciality') }}</h3>
                                <p>{{__ ('portfolio.Education.item_01.faculty') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="portfolio_block" id="portfolio">
            <div class="container">
                <h1 class="header text-right">{{__ ('portfolio.Portfolio.title')}}</h1>
                <p class="text-description-header text-right">{{__ ('portfolio.Portfolio.description')}} *</p>
                <div class="row items_block">
                    <div class="col-md-4 portfolio_item">
                        <div class="item_block text-center">
                            <i class="fa-solid fa-code fa-bounce" style="--fa-animation-duration: 2s;"></i>
                            <h2>{{__ ('portfolio.Portfolio.block_01') }}</h2>
                            <a href="{{route('portfolio_web')}}" class="btn btn-more">{{__ ('portfolio.Portfolio.btnText') }} <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                        </div>
                    </div>
                    <div class="col-md-4 portfolio_item">
                        <div class="item_block text-center">
                            <i class="fa-solid fa-display fa-beat" style="--fa-animation-duration: 3s;"></i>
                            <h2>{{__ ('portfolio.Portfolio.block_02') }}</h2>
                            <a href="{{route('portfolio_app')}}" class="btn btn-more">{{__ ('portfolio.Portfolio.btnText') }} <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                        </div>
                    </div>
                    <div class="col-md-4 portfolio_item">
                        <div class="item_block text-center">
                            <i class="fa-solid fa-wand-magic-sparkles fa-flip" style="--fa-animation-duration: 3s;"></i>
                            <h2>{{__ ('portfolio.Portfolio.block_03') }}</h2>
                            <a href="{{route('portfolio_animation')}}" class="btn btn-more">{{__ ('portfolio.Portfolio.btnText') }} <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="documents_block" id="documents">
            <div class="container">
                <h1 class="header">{{__ ('portfolio.Documents.title')}}</h1>
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{ asset('images/portfolio/documents/cert_korean.webp') }}" alt="">
                        <h1 class="text-center">{{__ ('portfolio.Documents.item_01.name')}}</h1>
                        <h5 class="text-center">{{__ ('portfolio.Documents.item_01.position')}}</h5>
                    </div>
                    <div class="col-md-4">
                        <img src="{{ asset('images/portfolio/documents/cert_student.webp') }}" alt="">
                        <h1 class="text-center">{{__ ('portfolio.Documents.item_02.name')}}</h1>
                        <h5 class="text-center">{{__ ('portfolio.Documents.item_02.position')}}</h5>
                    </div>
                    <div class="col-md-4">
                        <img src="{{ asset('images/portfolio/documents/cert_millenium.webp') }}" alt="">
                        <h1 class="text-center">{{__ ('portfolio.Documents.item_03.name')}}</h1>
                        <h5 class="text-center">{{__ ('portfolio.Documents.item_03.position')}}</h5>
                    </div>
                    <div class="col-md-12">
                        <img src="{{ asset('images/portfolio/documents/diploma.webp') }}" alt="">
                        <h1 class="text-center">{{__ ('portfolio.Documents.item_04.name')}}</h1>
                        <h5 class="text-center">{{__ ('portfolio.Documents.item_04.position')}}</h5>
                    </div>
                </div>
            </div>
        </div>

        <div class="recommendations_block" id="recommendations">
            <div class="container">
                <h1 class="header text-center">{{__ ('portfolio.Recommendations.title')}}</h1>
                <div class="d-flex align-items-start">
                    <div class="nav nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <button class="nav-link active" id="item_02_tab" data-bs-toggle="pill" data-bs-target="#item_02" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">{{__ ('portfolio.Recommendations.item_02.name')}}</button>
                        <button class="nav-link" id="item_01_tab" data-bs-toggle="pill" data-bs-target="#item_01" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">{{__ ('portfolio.Recommendations.item_01.name')}}</button>
                    </div>
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="item_02" role="tabpanel" aria-labelledby="v-pills-home-tab">
                            <p>{{__ ('portfolio.Recommendations.item_02.text.01')}}</p>
                            <p>{{__ ('portfolio.Recommendations.item_02.text.02')}}</p>
                            <p>{{__ ('portfolio.Recommendations.item_02.text.03')}}</p>
                            <p>{{__ ('portfolio.Recommendations.item_02.text.04')}}</p>
                            <p>{{__ ('portfolio.Recommendations.item_02.text.05')}}</p>
                            <p>{{__ ('portfolio.Recommendations.item_02.text.06')}}</p>
                            <a href="https://weproject.media/articles/detail/kak-animatsionnaya-studiya-iz-kyrgyzstana-sozdaet-svoy-multik-i-delaet-kontent-dlya-krupnykh-mezhdun/" class="link" target="_blank">{{__ ('portfolio.Recommendations.link')}}</a>
                        </div>
                        <div class="tab-pane fade" id="item_01" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                            <p>{{__ ('portfolio.Recommendations.item_01.text.01')}}</p>
                            <p>{{__ ('portfolio.Recommendations.item_01.text.02')}}{{__ ('portfolio.Recommendations.item_01.text.03')}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="footer_block">
        <div class="container">
            <div class="row contacts_main_block">
                <div class="col-md-4">
                    <a class="header-logo" href="#">
                        <img src="{{asset('images/logo.png')}}" alt="" width="80" class="d-inline-block align-text-top">
                        <p><span>{{__ ('portfolio.Ruslan') }}</span> {{__ ('portfolio.Isakov') }}</p>
                    </a>
                </div>
                <div class="col-md-8">
                    <div class="contacts_block text-center">
                        <a href="https://t.me/ruslanisakovcom" target="_blank"><i class="fa-brands fa-telegram"></i></a>
                        <a href="https://github.com/ruslanisakov" target="_blank"><i class="fa-brands fa-github"></i></a>
                        <a href="https://linkedin.com/ruslanisakovcom" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                        <a href="https://instagram.com/ruslanisakovcom" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="phone_number">
                        <a href="tel:+996776000512"><h1 class="text-center">+996-776-000-512</h1></a>
                    </div>
                    <div class="created_by">
                        <p class="text-center">{{__ ('portfolio.footer_text')}}</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="modal fade" id="messageModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="logoutModalLabel">Предупреждение</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                </div>
                <div class="modal-body">
                    У вас нет доступа к данному блоку
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
