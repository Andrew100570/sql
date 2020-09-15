<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    {{--    <script src="{{ asset('js/api.js') }}" ></script>--}}
{{--    <script>--}}
{{--        $(document).ready(function(){--}}

{{--            $.getJSON("/api", function(data) {--}}
{{--                var main = document.createElement("div");--}}
{{--                main.className='main';--}}

{{--                var done = document.createElement("div");--}}
{{--                done.className='done';--}}
{{--                main.appendChild(done);--}}


{{--                $.each(data.notebook, function(i, field){--}}
{{--                    var li = document.createElement('li');--}}
{{--                    var title = document.createElement("span");--}}

{{--                    var ul = document.createElement("ul");--}}


{{--                    title.append(field.pipeline_ORG);--}}
{{--                    li.className='class';--}}
{{--                    li.appendChild(title);--}}
{{--                    ul.appendChild(li);--}}
{{--                    done.appendChild(ul);--}}

{{--                });--}}

{{--                window.document.body.appendChild(main);--}}

{{--                console.log(data.notebook);--}}
{{--            });--}}



{{--        });--}}

{{--    </script>--}}
</head>
<body>
<form id="logout-form" action="" method="POST" style="padding-top:60px;width: 100%;display: flex;flex-direction: column;
            justify-content:center;align-items:center" enctype="multipart/form-data">
    @csrf

    <div class="form-row mb-3">
        <input type="file" class="btn btn-primary" name="userfile"></input>
    </div>
    <div class="form-row mb-3">
        <button type="submit" class="btn btn-primary">Загрузить на сайт</button>
    </div>
</form>
</body>
</html>

