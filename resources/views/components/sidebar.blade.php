<div class="fixed flex flex-col group w-10 hover:w-1/6 transition-width duration-300 ease-in-out text-gray-600 bg-gray-100 h-screen p-2 shadow-lg rounded-r-2xl">
    <div class="flex flex-row items-center space-x-5 h-5">
        <svg class="w-5 flex-none" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
        <div class="text-black text-2xl font-bold group-hover:opacity-100 opacity-0 whitespace-nowrap transition-opacity">
            Laravel Imageboard
        </div>
    </div>

    <div class="flex flex-col group-hover:opacity-100 opacity-0 overflow-y-auto transition-opacity whitespace-nowrap">
        @foreach(\App\Models\Board::all() as $board)
            <div class="border-b-2 p-4">
                <a href="{{ route('threads.index', $board) }}">/{{ $board->id }}/ - {{ $board->name }}</a>
            </div>
        @endforeach
    </div>
</div>
