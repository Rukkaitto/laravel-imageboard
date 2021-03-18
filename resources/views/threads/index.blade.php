<h1>/{{ $board->id }}/ - {{ $board->name }}</h1>

<form action="{{ route('threads.store', $board) }}" method="post">
    @csrf
    <input type="text" placeholder="Name" name="name">
    <input type="text" placeholder="Title" name="title">
    <textarea placeholder="Comment" name="com"></textarea>
    <input type="submit" value="Submit">
</form>

<ul>
    @foreach($threads as $thread)
        <li>No. {{ $thread->id }} {{ $thread->name }}: {{ $thread->com }} <a href="{{ route('posts.index', [$board, $thread]) }}">Go to thread</a></li>
    @endforeach
</ul>
