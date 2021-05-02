<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        
    </head>
    <body>

        <div class="row">
            <div class="col-sm-4">
                <h1>VUEjs - AJAX axios</h1>
                <ul class="list-group">
                    <li v-for="item in lists" class="list-group-item">
                        @{{item.name}}
                    </li>
                </ul>
            </div>
            <div class="col-sm-8">
                <h1>JSON</h1>
                    <pre>
                        @{{$data}}
                    </pre>
            </div>
        </div>

        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
