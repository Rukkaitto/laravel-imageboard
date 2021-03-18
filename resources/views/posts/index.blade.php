<ul>
    @foreach($posts as $post)
        <li id="{{ $post->id }}">No. {{ $post->id }} {{ $post->name }}: {{ $post->com }}</li>
    @endforeach
</ul>
