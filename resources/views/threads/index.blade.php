<h1>/{{ $board->id }}/ - {{ $board->name }}</h1>

<ul>
    @foreach($threads as $thread)
        <li>No. {{ $thread->id }} {{ $thread->name }}: {{ $thread->com }} <a href="{{ route('posts.index', [$board, $thread]) }}">Go to thread</a></li>
    @endforeach
</ul>
