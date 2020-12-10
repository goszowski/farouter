<div class="page-header d-print-none">
    <div class="row align-items-center">
        <div class="col">
            <div class="page-pretitle">{{ $pretitle }}</div>
            <h2 class="page-title">{{ $title }}</h2>
        </div>

        @isset($buttons)
        <div class="col-auto ms-auto d-print-none">
            <div class="btn-list">
                {{ $buttons }}
            </div>
        </div>
        @endisset
    </div>
</div>
