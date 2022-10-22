@extends('admin.admin_basic_structure')
@section('main-content')

    @section('title')
        {{__ ('language.Title_Main') }}
    @endsection

    @section('custom_style')
        <link rel="stylesheet" href="{{asset('css/datetime.css')}}" type="text/css" media="all">
    @endsection

    @section('content')
        @include('inc.fixed_sidebar')
        <section class="home" id="main_page">
            <div class="text"> {{__ ('admin.Menu.Panel') }} </div>
                <div class="col-md-12" id="datetime">
                    <div class="col-md-12">
                        <p id="clockTime">00:00:00</p>
                    </div>
                    <div class="col-md-12">
                        <p id="clockDate"></p>
                    </div>
                </div>
        </section>
    @endsection

    @section('custom_scripts')
        <script src="{{asset('js/datetime.js')}}"></script>
{{--        @include('admin.admin_templates')--}}
{{--            <script async type="text/javascript">--}}
{{--                $('.menu-links li a').on('click', function(){--}}
{{--                    var id   = $(this).attr('id');--}}
{{--                    var tab  = '#tab-' + id;--}}
{{--                    if($(this).attr('data-load') == 0){--}}
{{--                        var arr = $('#main-content section');--}}
{{--                        for(var i = 0; i < arr.length; i++){--}}
{{--                            arr[i].style.display = "none";--}}
{{--                        }--}}
{{--                        var append = $(tab).html();--}}
{{--                        $('#main-content').append(append);--}}
{{--                        $(this).attr('data-load', 1);--}}
{{--                    }--}}
{{--                    else{--}}
{{--                        var section = 'section-' + id;--}}
{{--                        var arr = $('#main-content section');--}}
{{--                        for(var i = 0; i < arr.length; i++){--}}
{{--                            if(arr[i].id == section) arr[i].style.display = "";--}}
{{--                            else                     arr[i].style.display = "none";--}}
{{--                        }--}}
{{--                    }--}}
{{--                    $('.menu-links li a').removeClass('active-element');--}}
{{--                    $(this).addClass('active-element');--}}
{{--                });--}}
{{--                $('#main').click();--}}
{{--            </script>--}}
    @endsection
@endsection
