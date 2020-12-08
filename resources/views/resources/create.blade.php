@extends('farouter::app')

@section('content')
<div class="page-header d-print-none">
    <div class="row align-items-center">
        <div class="col">
            <div class="page-pretitle">Resources</div>
            <h2 class="page-title">Create new resource</h2>
        </div>
        <div class="col-auto ms-auto d-print-none">
            <div class="btn-list">
                <a href="{{ route('farouter.resources.index') }}" class="btn btn-white">
                    All resources
                </a>
            </div>
        </div>
    </div>
</div>

<div class="row row-cards">
    <div class="col-12">
        <form action="" class="card">
            <div class="card-body">
                <div class="mb-3">
                    <label class="form-label">Text</label>
                    <input type="text" class="form-control" name="example-text-input" placeholder="Input placeholder">
                </div>

                <div class="mb-3">
                    <label class="form-label">Text</label>
                    <input type="text" class="form-control" name="example-text-input" placeholder="Input placeholder">
                </div>

                <div class="mb-3">
                    <label class="form-label">Text</label>
                    <input type="text" class="form-control" name="example-text-input" placeholder="Input placeholder">
                </div>

                <button class="btn btn-outline-primary">Create</button>
            </div>
        </form>
    </div>
</div>
@endsection
