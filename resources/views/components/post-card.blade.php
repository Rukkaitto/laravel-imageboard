@if($type == 'thread')
    <a href="{{ $route }}">
        @endif
        <div id="{{ $post->id }}" class="flex flex-row justify-between bg-gray-100 shadow-md rounded-lg p-4">
            @if($post->file)
                <div class="p-2 pr-5 w-60">
                    <a target="_blank" href="{{ $post->file }}">
                        <img class="rounded-lg" src="{{ $post->file }}"/>
                    </a>
                </div>
            @endif
            <div class="flex flex-col w-full">
                <div class="flex flex-wrap space-x-2 items-center">
                    @if($post->title)
                        <div class="text-blue-500">
                            {{ e($post->title) }}
                        </div>
                    @endif
                    <div class="text-green-500">
                        {{ e($post->name) }}
                    </div>
                    <div>
                        {{ $post->created_at->format('m/d H:i') }}
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
        </div>
        @if($type == 'thread')
    </a>
@endif

