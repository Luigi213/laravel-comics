<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Styles -->
    </head>
    <body>
        @include('partials.header')
        <div>
            <img src="img/adv.jpg" alt="logo">
            @foreach ($comics as $comic)
                <div>
                    <img src="{{ print_r( $comic['thumb'])}}" alt="">        
                </div>
            @endforeach
        </div>
        @include('partials.footer')
    </body>
</html>
