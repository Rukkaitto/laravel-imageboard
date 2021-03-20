@extends('layouts.app')

@section('title')
    /{{ $board->id }}/ - {{ $board->name }}
@endsection

@section('content')
<h1>/{{ $board->id }}/ - {{ $board->name }}</h1>

<form action="{{ route('threads.store', $board) }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="text" placeholder="Name" name="name">
    <input type="text" placeholder="Title" name="title">
    <textarea placeholder="Comment" name="com"></textarea>
    <input type="file" name="file">
    <input type="submit" value="Submit">
</form>

<ul>
    @foreach($threads as $thread)
        <img src="{{ $thread->file }}"/>
        <li>No. {{ $thread->id }} {{ $thread->name }}: {{ $thread->com }} <a href="{{ route('posts.index', [$board, $thread]) }}">Go to thread</a></li>
    @endforeach
</ul>
@endsection
