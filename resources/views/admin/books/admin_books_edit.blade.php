@extends('admin.admin_basic_structure')
@section('main-content')

@section('title')
    {{__ ('language.Title_Main') }}
@endsection

@section('custom_style')
    <link rel="stylesheet" href="{{asset('css/admin/admin.css')}}" type="text/css" media="all">
@endsection

@section('content')
    @include('inc.fixed_sidebar')
    <section class="home">
        <div class="text"> {{__ ('admin.Books.title_edit') }}</div>

        <section class="main-content" id="main-content">
            <div class="container">
                @include('inc.messages')
                <form action="{{ route('admin_books_edit_submit', $data->id) }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name" class="label_header">{{__ ('admin.Books.name') }}</label>
                        <input class="form-control form-control-lg" type="text" name="name" placeholder="{{__ ('admin.Books.name') }}" value="{{ $data->name }}">
                    </div>
                    <div class="form-group">
                        <label for="name" class="label_header">{{__ ('admin.Books.author') }}</label>
                        <input class="form-control form-control-lg" type="text" name="author" placeholder="{{__ ('admin.Books.author') }}" value="{{ $data->author }}">
                    </div>
                    <div class="form-group">
                        <label for="name" class="label_header">{{__ ('admin.Books.category') }}</label>
                        <select class="form-control form-control-lg" name="category_id">
                            @foreach($dataSub as $el)
                                <option value="{{ $el->id }}" @if($el->id == $data->category_id) selected @endif>{{ $el->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="read_date" class="label_header">{{__ ('admin.Books.read_date') }}</label>
                        <input class="form-control form-control-lg" type="date" name="read_date" value="{{ $data->read_date }}">
                    </div>

                    <button type="submit" class="btn btn-lg btn-send">{{__ ('admin.textEdit') }}</button>
                </form>
            </div>
        </section>
    </section>
@endsection

@endsection
