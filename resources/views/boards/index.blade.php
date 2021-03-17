<h1>Image board</h1>

<ul>
    @foreach($boards as $board)
        <li>
            <a href="{{ route('threads.index', $board) }}">/{{ $board->id }}/ - {{ $board->name }}</a>
        </li>
    @endforeach
</ul>
