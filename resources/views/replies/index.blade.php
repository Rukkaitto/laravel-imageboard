<ul>
    <li id="{{ $thread->id }}">{{ $thread->name }}: {{ $thread->com }}</li>
    @foreach($replies as $reply)
        <li id="{{ $reply->id }}">{{ $reply->name }}: {{ $reply->com }}</li>
    @endforeach
</ul>
