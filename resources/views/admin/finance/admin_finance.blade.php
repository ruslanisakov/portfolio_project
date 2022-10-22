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
            <div class="text"> {{__ ('admin.Finance.title') }} </div>
            <section class="main-content" id="main-content">
                <div class="col-md-12 data_block">
                    <a href="{{ route('admin_finance_add') }}" class="btn btn-lg btn-primary">{{__ ('admin.textAdd') }}</a>
                    <br><br>
                    @include('inc.messages')
                    <div class="col-md-12">
                        <form action="{{route('admin_finance')}}" id="admin_finance">
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
                                <th scope="col">{{__ ('admin.Finance.date_purchase') }}</th>
                                <th scope="col">{{__ ('admin.Finance.category') }}</th>
                                <th scope="col">{{__ ('admin.Finance.description') }}</th>
                                <th scope="col">{{__ ('admin.Finance.name') }}</th>
                                <th scope="col">{{__ ('admin.Finance.price') }}</th>
                                <th scope="col">{{__ ('admin.Finance.count') }}</th>
                                <th scope="col">{{__ ('admin.Finance.total') }}</th>
                                <th scope="col">*</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $key => $element)
                                    <tr>
                                        <td>{{$key + 1}}</td>
                                        <td class="date_purchase">{{$element->date_purchase}}</td>
                                        <td>{{$element->category_name}}</td>
                                        <td>{{$element->description}}</td>
                                        <td>{{$element->name}}</td>
                                        <td class="price">{{$element->price}}</td>
                                        <td class="count">{{$element->count}}</td>
                                        <td class="total">{{$element->total}}</td>
                                        <td>
                                            <form action="{{ route('admin_finance_delete_submit', $element->id) }}">
                                                <a href="{{ route('admin_finance_edit', $element->id) }}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                                <button type="submit" class="btn btn-danger d-none"><i class="fa fa-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="total_sum">{{$max_total}}</td>
                                </tr>
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
