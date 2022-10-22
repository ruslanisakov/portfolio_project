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
        <div class="text"> {{__ ('admin.Books.title') }} </div>
        <section class="main-content" id="main-content">
            <div class="col-md-12 data_block">
                <a href="{{ route('admin_books_add') }}" class="btn btn-lg btn-primary">{{__ ('admin.textAdd') }}</a>
                <br><br>
                @include('inc.messages')
                <div class="col-md-12">
                    <form action="{{route('admin_books')}}" id="admin_finance">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="category_id" class="label_header">{{__ ('admin.Finance.category') }}</label>
                                    <select class="form-control form-control-lg" name="category_id" onchange="$('#admin_finance').submit()">
                                        <option value="-1">Все</option>
                                        @foreach($categories as $el)
                                            <option value="{{ $el->id }}" @if($el->id == $category_id) selected @endif>{{ $el->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="date_start" class="label_header">{{__ ('admin.Finance.date_start') }}</label>
                                    <input type="date" class="form-control form-control-lg" name="date_start" onchange="$('#admin_finance').submit()" value="{{ $date_start }}">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="date_end" class="label_header">{{__ ('admin.Finance.date_end') }}</label>
                                    <input type="date" class="form-control form-control-lg" name="date_end" onchange="$('#admin_finance').submit()" value="{{ $date_end }}">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-12 table_block">
                    <table class="table">
                        <thead>
                        <tr class="bg-info text-center">
                            <th scope="col">#</th>
                            <th scope="col">{{__ ('admin.Books.name') }}</th>
                            <th scope="col">{{__ ('admin.Books.author') }}</th>
                            <th scope="col">{{__ ('admin.Books.author') }}</th>
                            <th scope="col">{{__ ('admin.Books.category') }}</th>
                            <th scope="col">{{__ ('admin.Books.read_date') }}</th>
                            <th scope="col">*</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $key => $element)
                                <tr>
                                    <td>{{$key + 1}}</td>
                                    <td>{{$element->name}}</td>
                                    <td>{{$element->author}}</td>
                                    <td>{{$element->category_name}}</td>
                                    <td>{{$element->read_date}}</td>
                                    <td>
                                        <form action="{{ route('admin_books_delete_submit', $element->id) }}">
                                            <a href="{{ route('admin_books_edit', $element->id) }}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                            <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </section>
@endsection

@section('custom_scripts')
    <script src="{{asset('js/bootstrap/bootstrap.bundle.min.js')}}"></script>
@endsection
@endsection
