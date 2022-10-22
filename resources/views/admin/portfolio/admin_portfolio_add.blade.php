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
            <div class="text"> {{__ ('admin.Portfolio.title_add') }}</div>

            <section class="main-content" id="main-content">
                <div class="container">
                    @include('inc.messages')
                    <form action="{{ route('portfolio_submit') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name" class="label_header">{{__ ('admin.Portfolio.name_title') }}</label>
                            <input class="form-control form-control-lg" type="text" name="name" placeholder="{{__ ('admin.Portfolio.name_name') }}">
                        </div>
                        <div class="form-group">
                            <label for="photo_upload" class="label_header">{{__ ('admin.Portfolio.image_main_title') }}</label>
                            <div class="photo_upload">
                                <div class="photo_upload_image">
                                    <label for="title_image" class="photo_upload_label"></label>
                                    <input id="title_image" name="title_image" type="file" accept="image/*">
                                </div>
                                <div class="photo-upload__info" style="margin-left: 2%;">
                                    <span class="form__hint">{{__ ('admin.Portfolio.image_main_name') }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="label_header">{{__ ('admin.Portfolio.type.title') }}</label>
                            <select class="form-control form-control-lg" name="category_id">
                                @foreach($data as $el)
                                    <option value="{{ $el->id }}">{{ $el->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="photo_upload" class="label_header">{{__ ('admin.Portfolio.images_title') }}</label>
                            <div class="photo_upload">
                                <div class="photo_upload_image">
                                    <label for="image" class="photo_upload_label"></label>
                                    <input id="image" name="images[]" type="file" accept="image/*" multiple>
                                </div>
                                <div class="photo-upload__info" style="margin-left: 2%;">
                                    <span class="form__hint">{{__ ('admin.Portfolio.images_name') }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="link" class="label_header">{{__ ('admin.Portfolio.link_title') }}</label>
                            <input class="form-control form-control-lg" type="text" name="link" placeholder="{{__ ('admin.Portfolio.link_name') }}">
                        </div>
                        <div class="form-group">
                            <label for="link" class="label_header">{{__ ('admin.Portfolio.sort_field_name') }}</label>
                            <input class="form-control form-control-lg" type="number" name="sort_field" placeholder="0">
                        </div>
                        <div class="form-group">
                            <label for="link" class="label_header">{{__ ('admin.Portfolio.description_title') }}</label>
                            <textarea class="form-control form-control-lg" name="description" rows="8" placeholder="{{__ ('admin.Portfolio.description_name') }}"></textarea>
                        </div>
                        <button type="submit" class="btn btn-lg btn-send">{{__ ('admin.textAdd') }}</button>
                    </form>
                </div>
            </section>
        </section>
    @endsection

@endsection
