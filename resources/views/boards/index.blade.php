@extends('layouts.app')

@section('title')
    Laravel Imageboard
@endsection

@section('content')
<div class="flex flex-col space-y-3 p-3 md:items-center">
    @foreach($boards as $board)
        <a href="{{ route('threads.index', $board) }}">
            <div class="bg-gray-100 shadow-md p-5 font-bold rounded-md">
                /{{ $board->id }}/ - {{ $board->name }}
            </div>
        </a>
    @endforeach
</div>
@endsection
