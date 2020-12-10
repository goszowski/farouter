@extends('farouter::app')

@section('content')

<x-farouter::page-header pretitle="Resources" title="Create new resource">
    <x-slot name="buttons">
        <x-farouter::button type="link" href="{{ route('farouter.resources.index') }}" class="btn-white">
            All resources
        </x-farouter::button>
    </x-slot>
</x-farouter::page-header>

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
