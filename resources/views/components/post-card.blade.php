<div id="{{ $post->id }}">
    <img src="{{ $post->file }}"/>
    No. {{ $post->id }} {{ $post->name }}: {{ $post->com }}

    @if($type == 'post')
        @foreach($post->quoters as $quoter)
            <a href="#{{ $quoter->id }}">>>{{ $quoter->id }}</a>
        @endforeach
    @else
        <a href="{{ $route }}">Go to thread</a>
    @endif
</div>
