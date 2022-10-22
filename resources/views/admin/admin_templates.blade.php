<script type="text/template" id="tab-main">
    <section id="section-main">
        <div class="container">
            <div class="col-md-12 form-section">
                <h1> {{__ ('admin.Main.Title') }} </h1>
            </div>
        </div>
    </section>
</script>

<script type="text/template" id="tab-portfolio">
    <section id="section-portfolio">
        <div class="col-md-8 mx-auto form-section">
            <h1 class="text-center"> {{__ ('admin.Portfolio.Title') }} </h1>
            <form action="#" method="post" id="form-portfolio" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name"> {{__ ('admin.Portfolio.Name_Title') }} </label>
                    <input type="text" class="form-control" name="name" placeholder="{{__ ('admin.Portfolio.Name_Name') }}">
                </div>
                <div class="form-group">
                    <label for="type"> {{__ ('admin.Portfolio.Type.Title') }} </label>
                    <select class="form-control" name="type">
                        <option value="0"> {{__ ('admin.Portfolio.Type.Web') }}         </option>
                        <option value="1"> {{__ ('admin.Portfolio.Type.Programming') }} </option>
                        <option value="2"> {{__ ('admin.Portfolio.Type.Animation') }}   </option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="images"> {{__ ('admin.Portfolio.Images_Title') }} </label>
                    <input type="file" id="images" class="form-control-file" name="images[]" accept="image/*" multiple>
                </div>
                <div class="form-group">
                    <label for="link"> {{__ ('admin.Portfolio.Link_Title') }} </label>
                    <input type="text" class="form-control" name="link" placeholder="{{__ ('admin.Portfolio.Link_Name') }}">
                </div>
                <div class="form-group">
                    <label for="description"> {{__ ('admin.Portfolio.Description_Title') }} </label>
                    <textarea class="form-control" name="description" rows="6" placeholder="{{__ ('admin.Portfolio.Description_Name') }}"></textarea>
                </div>
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li> {{ $error }} </li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <button type="submit" class="btn" id="data_add"  data-type="0">Добавить</button>
            </form>
        </div>
    </section>
</script>

<script>
    $(document).on('submit', '#form-portfolio', function(e) {
        e.preventDefault();
        var elements   = $(this).find('input, textarea, select');
        var dataUpload = new FormData;
        dataUpload.append('form-type', $(this).attr('id'));
        for (var i = 0; i < elements.length; i++) {
            if(elements[i].name == 'images[]')
                $.each($(this).find('#images')[0].files, function(key, input){
                    dataUpload.append('images[]', input);
                });
            else dataUpload.append(elements[i].name, elements[i].value);
        }
        $.ajax({
            type: "POST",
            url: '{{route('portfolio-add')}}',
            data: dataUpload,
            cache : false,
            contentType : false,
            processData: false,
            success: function(data)
            {

            }
        });
    });
</script>




