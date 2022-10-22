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
            <div class="text"> {{__ ('admin.Menu.Portfolio') }} </div>
            <section class="main-content" id="main-content">
                <div class="col-md-12 data_block">
                    <a href="{{ route('admin_portfolio_add') }}" class="btn btn-lg btn-primary">{{__ ('admin.textAdd') }}</a>
                    <br><br>
                    @include('inc.messages')
                    <div class="col-md-12 table_block">
                        <table class="table">
                            <thead>
                            <tr class="bg-info text-center">
                                <th scope="col">#</th>
                                <th scope="col">{{__ ('admin.Portfolio.portfolio_table.name') }}</th>
                                <th scope="col">{{__ ('admin.Portfolio.portfolio_table.category') }}</th>
                                <th scope="col">{{__ ('admin.Portfolio.portfolio_table.link_image') }}</th>
                                <th scope="col">{{__ ('admin.Portfolio.portfolio_table.sort_field') }}</th>
                                <th scope="col">{{__ ('admin.Portfolio.portfolio_table.status') }}</th>
                                <th scope="col">{{__ ('admin.Portfolio.portfolio_table.created_at') }}</th>
                                <th scope="col">*</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $key => $element)
                                <tr>
                                    <td>{{$key + 1}}</td>
                                    <td>{{$element->name}}</td>
                                    <td>{{$element->category_name}}</td>
                                    <td>
                                        @if($element->images != null)
                                            <a href="#"> {{__ ('admin.Portfolio.view') }}</a>
                                        @else
                                            {{$element->link}}
                                        @endif
                                    </td>
                                    <td>{{$element->sort_field}}</td>
                                    <td>
                                        @if($element->status == 1)
                                            {{__ ('admin.Settings.status.active') }}
                                        @else
                                            {{__ ('admin.Settings.status.disabled') }}
                                        @endif
                                    </td>
                                    <td>{{$element->created_at}}</td>
                                    <td>
                                        <form action="{{ route('admin_portfolio_delete_submit', $element->id) }}">
                                            <a href="{{ route('admin_portfolio_edit', $element->id) }}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
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
