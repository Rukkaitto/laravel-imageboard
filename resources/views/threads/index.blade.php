@extends('layouts.app')

@section('title')
    /{{ $board->id }}/ - {{ $board->name }}
@endsection

@section('content')
<div class="p-5 self-center text-4xl font-bold">
    /{{ $board->id }}/ - {{ $board->name }}
</div>

<div class="flex flex-col space-y-3 p-3 md:items-start">
    @foreach($threads as $thread)
        <x-post-card type="thread" :post="$thread" :route="route('posts.index', [$board, $thread])"></x-post-card>
    @endforeach
</div>

<div class="p-3">
    <x-post-form type="thread" :route="route('threads.store', $board)"></x-post-form>
</div>
@endsection
