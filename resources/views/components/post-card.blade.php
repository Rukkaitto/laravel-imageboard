<div id="{{ $post->id }}" class="flex flex-row justify-between bg-gray-100 shadow-md rounded-lg p-4">
    @if($post->file)
        <div class="p-2 pr-5 max-w-xs">
            <a target="_blank" href="{{ $post->file }}">
                <img class="rounded-lg" src="{{ $post->file }}"/>
            </a>
        </div>
    @endif
    <div class="flex flex-col w-full">
        <div class="flex flex-row space-x-2 items-center">
            @if($post->title)
                <div class="text-blue-500">
                    {{ e($post->title) }}
                </div>
            @endif
            <div class="text-green-500">
                {{ e($post->name) }}
            </div>
            <div>
                {{ $post->created_at }}
            </div>
            <div>
                No.{{ $post->id }}
            </div>
            @if($type == 'post')
                <div>
                    @foreach($post->quoters as $quoter)
                        <a href="#{{ $quoter->id }}">>>{{ $quoter->id }}</a>
                    @endforeach
                </div>
            @endif
        </div>
        <div class="max-w-prose">
            {!! nl2br(e($post->com)) !!}
        </div>
    </div>
    @if($type == 'thread')
        <a class="pl-4 self-center" href="{{ $route }}">
            <svg class="w-8 h-8 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.3" d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
        </a>
    @endif
</div>
