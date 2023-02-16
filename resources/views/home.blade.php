<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Styles -->
        <link href="{{ asset('/css/app.css') }}" rel="stylesheet"> 
    </head>
    <body>
        @include('partials.header')
        <div>
            @foreach ($comics as $comic)
            {{ print_r( $comic['title'])}}            
            @endforeach
        </div>
        @include('partials.footer')
    </body>
</html>
