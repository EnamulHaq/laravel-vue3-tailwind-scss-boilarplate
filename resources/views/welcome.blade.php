<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel boilarplate</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body class="antialiased">
    <div id="app">
{{--        <div class="Hello">this is test</div>--}}
        {{-- stuff in here --}}
        <hello-world/>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>