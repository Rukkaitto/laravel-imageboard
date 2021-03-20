<div id="{{ $post->id }}" class="flex flex-row justify-between items-center bg-gray-100 shadow-md rounded-lg p-4">
    <div class="p-2 max-w-xs">
        <img class="rounded-lg" src="{{ $post->file }}"/>
    </div>
    <div class="flex flex-col w-full">
        <div class="flex flex-row space-x-2 items-center">
            @if($type == 'thread' && $post->title)
                <div class="text-blue-500">
                    {{ $post->title }}
                </div>
            @endif
            <div class="text-green-500">
                {{ $post->name }}
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
        <div>
            {{ $post->com }}
        </div>
    </div>
    @if($type == 'thread')
        <a class="pl-4" href="{{ $route }}">
            <svg class="w-8 h-8 text-gray-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
        </a>
    @endif
</div>
