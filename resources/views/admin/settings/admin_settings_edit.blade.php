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
            <div class="text"> {{__ ('admin.Settings.title_edit_1') }}</div>

            <section class="main-content" id="main-content">
                <div class="container">
                    @include('inc.messages')
                    <form action="{{ route('admin_settings_edit_update', $data->id) }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="name" class="label_header">{{__ ('admin.Settings.name_title') }}</label>
                            <input class="form-control form-control-lg" type="text" name="name" placeholder="{{__ ('admin.Settings.name_name') }}" value="{{ $data->name }}">
                        </div>

                        <div class="form-group">
                            <label for="status" class="label_header">{{__ ('admin.Settings.status.title') }}</label>
                            <select class="form-control form-control-lg" name="status" value="{{ $data->status }}">
                                @if($data->status == 1)
                                    <option value="1" selected> {{__ ('admin.Settings.status.active') }} </option>
                                    <option value="0"> {{__ ('admin.Settings.status.disabled') }} </option>
                                @else
                                    <option value="1"> {{__ ('admin.Settings.status.active') }} </option>
                                    <option value="0"selected> {{__ ('admin.Settings.status.disabled') }} </option>
                                @endif
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="link" class="label_header">{{__ ('admin.Settings.sort_field_name') }}</label>
                            <input class="form-control form-control-lg" type="number" name="sort_field" placeholder="0" value="{{ $data->sort_field }}">
                        </div>

                        <button type="submit" class="btn btn-lg btn-send">{{__ ('admin.textEdit') }}</button>
                    </form>
                </div>
            </section>
        </section>
    @endsection

@endsection
