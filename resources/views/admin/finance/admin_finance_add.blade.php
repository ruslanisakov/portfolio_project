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
        <div class="text"> {{__ ('admin.Finance.title') }}</div>

        <section class="main-content" id="main-content">
            <div class="container">
                @include('inc.messages')
                <form action="{{ route('finance_submit') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="date_purchase" class="label_header">{{__ ('admin.Finance.date_purchase') }}</label>
                        <input class="form-control form-control-lg" type="date" name="date_purchase">
                    </div>
                    <div class="form-group">
                        <label for="name" class="label_header">{{__ ('admin.Finance.category') }}</label>
                        <select class="form-control form-control-lg" name="category_id">
                            @foreach($data as $el)
                                <option value="{{ $el->id }}">{{ $el->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="name" class="label_header">{{__ ('admin.Finance.name') }}</label>
                        <input class="form-control form-control-lg" type="text" name="name" placeholder="{{__ ('admin.Finance.name') }}">
                    </div>
                    <div class="form-group">
                        <label for="description" class="label_header">{{__ ('admin.Finance.description') }}</label>
                        <input class="form-control form-control-lg" type="text" name="description" placeholder="{{__ ('admin.Finance.description') }}">
                    </div>
                    <div class="form-group">
                        <label for="price" class="label_header">{{__ ('admin.Finance.price') }}</label>
                        <input class="form-control form-control-lg" type="number" name="price" placeholder="0">
                    </div>
                    <div class="form-group">
                        <label for="count" class="label_header">{{__ ('admin.Finance.count') }}</label>
                        <input class="form-control form-control-lg" type="number" name="count" placeholder="0">
                    </div>
                    <button type="submit" class="btn btn-lg btn-send">{{__ ('admin.textAdd') }}</button>
                </form>
            </div>
        </section>
    </section>
@endsection

@endsection
