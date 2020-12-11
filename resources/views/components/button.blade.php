<{{ $tag }} 
    {{ $attributes->merge(['class' => 'btn']) }}

    @if($tag != 'a')
        type="{{ $type }}"
    @endif

    data-pjax

    >
    {{ $icon ?? null }} {{ $slot }}
</{{ $tag }}>
