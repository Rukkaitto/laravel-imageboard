<html>
    <head>
        <title>@yield('title')</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="flex flex-row space-x-5">
            <!-- Sidebar -->

            <div class="flex flex-col group w-10 hover:w-1/5 transition-width duration-300 ease-in-out text-gray-600 bg-gray-300 h-screen p-2 shadow-lg rounded-tr-lg space-y-5">
                <div class="flex flex-row items-center space-x-5 h-5">
                    <svg class="w-5 flex-none" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <div class="group-hover:opacity-100 opacity-0 whitespace-nowrap transition-opacity">
                        Laravel Imageboard
                    </div>
                </div>

                <div class="flex flex-col group-hover:opacity-100 opacity-0 overflow-y-auto transition-opacity whitespace-nowrap">
                    @foreach(\App\Models\Board::all() as $board)
                        <div>
                            <a href="{{ route('threads.index', $board) }}">/{{ $board->id }}/ - {{ $board->name }}</a>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Main content -->
            <div>
                @yield('content')
            </div>
        </div>
    </body>
</html>
