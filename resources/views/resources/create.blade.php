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
        <form action="{{ route('farouter.resources.store') }}" method="post" class="card">
            @csrf

            <div class="card-body">
                <div class="mb-3">
                    <label class="form-label">Text</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Input placeholder" value="{{ old('name') }}">
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <x-farouter::button type="submit" class="btn-outline-primary">
                    Create
                </x-farouter::button>
            </div>
        </form>
    </div>
</div>

{!! JsValidator::formRequest('Farouter\Http\Requests\Resources\StoreRequest') !!}

@endsection
