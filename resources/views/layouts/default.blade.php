<!doctype html>
<html lang="en" class="font-sans">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Chatter</title>
        <link href="{{ mix('css/chatter.css', 'chatter') }}" rel="stylesheet">
    </head>

    <body>
        <div class="mt-10">
            @yield('content')
        </div>
        <script src="{{ mix('js/chatter.js', 'chatter') }}"></script>
    </body>
</html>
