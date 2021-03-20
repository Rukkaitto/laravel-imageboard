@extends('layouts.app')

@section('title')
    @isset($thread->title)
        /{{ $board->id }}/ - {{$thread->title}}
    @else
        /{{ $board->id }}/ - {{$thread->com}}
    @endisset
@endsection

@section('content')
<form action="{{ route('posts.store', [$board, $thread]) }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="text" placeholder="Name" name="name">
    <input type="text" placeholder="Title" name="title">
    <textarea placeholder="Comment" name="com"></textarea>
    <input type="file" name="file">
    <input type="submit" value="Submit">
</form>

<ul>
    <x-post-card type="post" :post="$thread"></x-post-card>
    @foreach($replies as $reply)
        <x-post-card type="post" :post="$reply"></x-post-card>
    @endforeach
</ul>
@endsection
