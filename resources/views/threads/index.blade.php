@extends('layouts.app')

@section('title')
    /{{ $board->id }}/ - {{ $board->name }}
@endsection

@section('content')
<div class="p-5 self-center text-4xl font-bold">
    /{{ $board->id }}/ - {{ $board->name }}
</div>

<div class="flex flex-col items-start space-y-3 pb-5">
    @foreach($threads as $thread)
        <x-post-card type="thread" :post="$thread" :route="route('posts.index', [$board, $thread])"></x-post-card>
    @endforeach
</div>

<x-post-form type="thread" :route="route('threads.store', $board)"></x-post-form>
@endsection
