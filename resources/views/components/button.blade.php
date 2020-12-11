<{{ $tag }} 
    {{ $attributes->merge(['class' => 'ladda-button btn']) }}

    @if($tag != 'a')
        type="{{ $type }}"
    @endif

    data-pjax
    data-ladda-button
    data-style="expand-right"

    @if(in_array($attributes->get('class'), ['btn-white']))
    data-spinner-color="#000"
    @endif

    >
    <span class="ladda-label">
        {{ $icon ?? null }} {{ $slot }}
    </span>
    <span class="ladda-spinner"></span>
</{{ $tag }}>
