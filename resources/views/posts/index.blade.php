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
    <li id="{{ $thread->id }}">
        No. {{ $thread->id }} {{ $thread->name }}: {{ $thread->com }}
        @foreach($thread->quoters as $quoter)
            <a href="#{{ $quoter->id }}">>>{{ $quoter->id }}</a>
        @endforeach
    </li>
    @foreach($replies as $reply)
        <li id="{{ $reply->id }}">
            <img src="{{ $reply->file }}"/>
            No. {{ $reply->id }} {{ $reply->name }}: {{ $reply->com }}
            @foreach($reply->quoters as $quoter)
                <a href="#{{ $quoter->id }}">>>{{ $quoter->id }}</a>
            @endforeach
        </li>
    @endforeach
</ul>
@endsection
