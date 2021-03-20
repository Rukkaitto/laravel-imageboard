@extends('layouts.app')

@section('title')
    @isset($thread->title)
        /{{ $board->id }}/ - {{$thread->title}}
    @else
        /{{ $board->id }}/ - {{$thread->com}}
    @endisset
@endsection

@section('content')
    <x-post-form :route="route('posts.store', [$board, $thread])"></x-post-form>

<div class="flex flex-col items-start space-y-3">
    <x-post-card type="post" :post="$thread"></x-post-card>
    @foreach($replies as $reply)
        <x-post-card type="post" :post="$reply"></x-post-card>
    @endforeach
</div>
@endsection
