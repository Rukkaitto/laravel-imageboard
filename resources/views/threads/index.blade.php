<h1>/{{ $board->id }}/ - {{ $board->name }}</h1>

<ul>
    @foreach($threads as $thread)
        <li>{{ $thread->name }}: {{ $thread->com }} <a href="{{ route('replies.index', [$board, $thread]) }}">Go to thread</a></li>
    @endforeach
</ul>
