<h1>/{{ $board->id }}/ - {{ $board->name }}</h1>

<ul>
    @foreach($posts as $post)
        <li>{{ $post->name }}: {{ $post->com }}</li>
    @endforeach
</ul>
