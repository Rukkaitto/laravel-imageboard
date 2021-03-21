<div class="flex flex-row bg-gray-100 space-x-2 text-xl overflow-x-auto text-gray-700 rounded-b-xl shadow fixed top-0 w-screen">
    <a href="{{ route('boards.index') }}">
        <div class="p-3">
            Boards
        </div>
    </a>
    @foreach(\App\Models\Board::all() as $board)
        <a href="{{ route('threads.index', $board) }}">
            <div class="p-3">
                /{{ $board->id }}/
            </div>
        </a>
    @endforeach
</div>
