<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        @vite('resources/js/app.js')
    </head>
    <body>
        @include('partials.header')
        <main>
            <div class="jumbotron bg-danger">
                <div class="container">
                    <div class="Series">
                        <h1>CURRENT SERIES</h1>
                    </div>
                </div>            
            </div>
            <div class="container">
                <div class="mb-t">
                    @foreach ($comics as $comic)
                        <div class="m-1">
                            <img src="{{  $comic['thumb'] }}" alt="">        
                        </div>
                    @endforeach                        
                </div>
                <div class="btn-primary">
                    <img src="../img/dc-logo.png" alt="logo">   
                    <button>LOAD MORE</button>
                </div>
            </div>
        </main>
        @include('partials.footer')
    </body>
</html>
