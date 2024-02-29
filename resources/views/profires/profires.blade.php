<div>
    <p class="text-sm mb-2">profile:</p>
    <div class="border border-gray-300 p-4">
        @if (isset($profires))
            @foreach ($profires as $profire)
                <textarea class="input input-bordered text-left w-80 h-48">{{ $profire->content }}</textarea>
            @endforeach
        @endif
    </div>
</div>