@extends('auth.auth')

@section('main_content')
    @extends('inc.basic_structure')
    @section('main_styles')
        <link rel="stylesheet" href="{{asset('css/menu/fixed-sidebar.css')}}"          type="text/css" media="all">
        <link rel="stylesheet" href="{{asset('css/bootstrap/bootstrap-5.1.min.css')}}" type="text/css" media="all">
        <link rel="stylesheet" href="{{asset('css/fontawesome-all.min.css')}}"         type="text/css" media="all">
    @endsection

    @section('main_scripts')
        <script src="{{asset('js/jquery/jquery-3.6.0.min.js')}}"></script>
        <script src="{{asset('js/menu/fixed-sidebar.js')}}"></script>
        <script src="{{asset('js/bootstrap/bootstrap.bundle.min.js')}}"></script>
    @endsection
@endsection
