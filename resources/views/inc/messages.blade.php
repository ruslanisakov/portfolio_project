@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li> {{ $error }} </li>
            @endforeach
        </ul>
    </div>
@endif

@if(session('success'))
    <div class="alert alert-success">
        <p> {{session('success')}}</p>
    </div>
@endif

{{--<h1>ds</h1>--}}
{{--@foreach($data as $element)--}}
{{--    <div class="alert alert-info">--}}
{{--        <h3>{{$element->name}}</h3>--}}
{{--    </div>--}}
{{--@endforeach--}}
