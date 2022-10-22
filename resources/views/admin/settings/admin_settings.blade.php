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
            <div class="text"> {{__ ('admin.Menu.Settings') }} </div>
            <section class="main-content" id="main-content">
                <div class="col-md-12 data_block">
                    <a href="{{ route('admin_settings_add') }}" class="btn btn-lg btn-primary">{{__ ('admin.Settings.btnAddCategory') }}</a>
                    <a href="{{ route('admin_settings_subcategory_add') }}" class="btn btn-lg btn-primary">{{__ ('admin.Settings.btnAddSubCategory') }}</a>
                    <br><br>
                    <div class="col-md-12 table_block">
                        <table class="table">
                            <thead>
                                <h1 class="text-center">{{__ ('admin.Settings.settings_table.header') }}</h1>
                                <tr class="bg-info text-center">
                                    <th scope="col">#</th>
                                    <th scope="col">{{__ ('admin.Settings.settings_table.name') }}</th>
                                    <th scope="col">{{__ ('admin.Settings.settings_table.sorted') }}</th>
                                    <th scope="col">{{__ ('admin.Settings.settings_table.status') }}</th>
                                    <th scope="col">{{__ ('admin.Settings.settings_table.created_at') }}</th>
                                    <th scope="col">{{__ ('admin.Settings.settings_table.updated_at') }}</th>
                                    <th scope="col">*</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $key => $element)
                                <tr>
                                    <td>{{$key + 1}}</td>
                                    <td>{{$element->name}}</td>
                                    <td>{{$element->sort_field}}</td>
                                    <td>
                                        @if($element->status == 1)
                                            {{__ ('admin.Settings.status.active') }}
                                        @else
                                            {{__ ('admin.Settings.status.disabled') }}
                                        @endif
                                    </td>
                                    <td>{{$element->created_at}}</td>
                                    <td>{{$element->updated_at}}</td>
                                    <td>
                                        <a href="{{ route('admin_settings_edit', $element->id) }}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="col-md-12 table_block">
                        <table class="table">
                            <thead>
                            <h1 class="text-center">{{__ ('admin.Settings.subcategories_table.header') }}</h1>
                            <tr class="bg-info text-center">
                                <th scope="col">#</th>
                                <th scope="col">{{__ ('admin.Settings.subcategories_table.name') }}</th>
                                <th scope="col">{{__ ('admin.Settings.subcategories_table.category') }}</th>
                                <th scope="col">{{__ ('admin.Settings.subcategories_table.sorted') }}</th>
                                <th scope="col">{{__ ('admin.Settings.subcategories_table.status') }}</th>
                                <th scope="col">{{__ ('admin.Settings.subcategories_table.created_at') }}</th>
                                <th scope="col">{{__ ('admin.Settings.subcategories_table.updated_at') }}</th>
                                <th scope="col">*</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($dataSub as $key => $element)
                                <tr>
                                    <td>{{$key + 1}}</td>
                                    <td>{{$element->name}}</td>
                                    <td>{{$element->category_name}}</td>
                                    <td>{{$element->sort_field}}</td>
                                    <td>
                                        @if($element->status == 1)
                                            {{__ ('admin.Settings.status.active') }}
                                        @else
                                            {{__ ('admin.Settings.status.disabled') }}
                                        @endif
                                    </td>
                                    <td>{{$element->created_at}}</td>
                                    <td>{{$element->updated_at}}</td>
                                    <td>
                                        <a href="{{ route('admin_settings_subcategory_edit', $element->id) }}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
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
