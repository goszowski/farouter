<{{ $tag }} 
    {{ $attributes->merge(['class' => 'ladda-button btn']) }}

    @if($tag != 'a')
        type="{{ $type }}"
    @endif

    data-pjax

    @if($tag == 'a' or $type == 'submit')
    data-ladda-button
    data-style="expand-right"
    @endif

    @if(in_array($attributes->get('class'), ['btn-white']) or Str::is('btn-outline-*', $attributes->get('class')))
    data-spinner-color="#000"
    @endif

    >
    <span class="ladda-label">
        {{ $icon ?? null }} {{ $slot }}
    </span>
    <span class="ladda-spinner"></span>
</{{ $tag }}>
