<{{ $tag }} 
    {{ $attributes->merge(['class' => 'btn']) }}

    @if($tag != 'a')
        type="{{ $type }}"
    @endif

    >
    {{ $icon ?? null }} {{ $slot }}
</{{ $tag }}>
