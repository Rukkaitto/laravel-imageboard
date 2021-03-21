@extends('layouts.app')

@section('title')
    @isset($thread->title)
        /{{ $board->id }}/ - {{$thread->title}}
    @else
        /{{ $board->id }}/ - {{$thread->com}}
    @endisset
@endsection

@section('content')
<div class="flex flex-col space-y-3 p-3 md:items-start">
    <x-post-card type="post" :post="$thread"></x-post-card>
    @foreach($replies as $reply)
        <x-post-card type="post" :post="$reply"></x-post-card>
    @endforeach
</div>

<div class="p-3">
    <x-post-form type="post" :route="route('posts.store', [$board, $thread])"></x-post-form>
</div>
@endsection
