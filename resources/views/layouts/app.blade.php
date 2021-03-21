<html>
    <head>
        <title>@yield('title')</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="{{ \Illuminate\Support\Facades\App::environment('production') ? secure_asset('css/app.css') : asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="flex flex-col">
            <!-- Scrolling navbar -->
            <x-navbar></x-navbar>

            <!-- Main content -->
            <div class="flex flex-col w-full overflow-y-auto pt-14">
                @yield('content')
            </div>
        </div>
    </body>
</html>
