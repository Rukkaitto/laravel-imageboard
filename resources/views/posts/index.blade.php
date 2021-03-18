<form action="{{ route('posts.store', [$board, $thread]) }}" method="post">
    @csrf
    <input type="text" placeholder="Name" name="name">
    <input type="text" placeholder="Title" name="title">
    <textarea placeholder="Comment" name="com"></textarea>
    <input type="submit" value="Submit">
</form>

<ul>
    <li id="{{ $thread->id }}">
        No. {{ $thread->id }} {{ $thread->name }}: {{ $thread->com }}
        @foreach($thread->quoters as $quoter)
            <a href="#{{ $quoter->id }}">>>{{ $quoter->id }}</a>
        @endforeach
    </li>
    @foreach($replies as $reply)
        <li id="{{ $reply->id }}">
            No. {{ $reply->id }} {{ $reply->name }}: {{ $reply->com }}
            @foreach($reply->quoters as $quoter)
                <a href="#{{ $quoter->id }}">>>{{ $quoter->id }}</a>
            @endforeach
        </li>
    @endforeach
</ul>
