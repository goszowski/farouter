@extends('farouter::app')

@section('content')

<x-farouter::page-header pretitle="Resources" title="All Resources">
    <x-slot name="buttons">
        <x-farouter::button type="link" href="{{ route('farouter.resources.create') }}" class="btn-primary">
            <x-slot name="icon">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
            </x-slot>
            Create new resource
        </x-farouter::button>
    </x-slot>
</x-farouter::page-header>

@if(!count($resources))
<div class="empty">
    <div class="empty-img"><img src="{{ asset('vendor/farouter/static/illustrations/undraw_quitting_time_dm8t.svg') }}" alt=""></div>
    <p class="empty-title">Resources are managed from here</p>
    <p class="empty-subtitle text-muted">You don't have any resources yet.</p>
    <div class="empty-action">
        <x-farouter::button type="link" href="{{ route('farouter.resources.create') }}" class="btn-primary">
            <x-slot name="icon">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
            </x-slot>
            Create new resource
        </x-farouter::button>
    </div>
</div>
@else
<div class="row row-cards">
    <div class="col-12">
        <div class="card">
            <div class="table-responsive">
                <table class="table table-vcenter table-striped card-table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Fields</th>
                            <th class="w-1"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($resources as $resource)
                        <tr>
                            <td>
                                <a href="#">{{ $resource->name }}</a>
                            </td>
                            <td>
                                @foreach($resource->controls as $control)
                                <span class="badge bg-green-lt">{{ $control->name }}</span>
                                @endforeach
                            </td>
                            <td>
                                <x-farouter::button type="button" class="btn-sm btn-outline-danger btn-icon" data-toggle="modal" data-target="#delete-resource-{{ $resource->id }}">
                                    <x-slot name="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="4" y1="7" x2="20" y2="7" /><line x1="10" y1="11" x2="10" y2="17" /><line x1="14" y1="11" x2="14" y2="17" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg>
                                    </x-slot>
                                </x-farouter::button>

                                <div class="modal" id="delete-resource-{{ $resource->id }}">
                                    <div class="modal-dialog modal-sm" role="document">
                                        <form action="{{ route('farouter.resources.delete', ['resource'=>$resource]) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <div class="modal-title">Are you sure?</div>
                                                    <div>If you proceed, you will lose all sections of this resource.</div>
                                                </div>
                                                <div class="modal-footer">
                                                    <x-farouter::button type="button" data-dismiss="modal" class="btn-link link-secondary me-auto">
                                                        Cancel
                                                    </x-farouter::button>
                                                    <x-farouter::button type="submit" class="btn-danger">
                                                        Yes, delete resource
                                                    </x-farouter::button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="d-flex mt-4">
    <ul class="pagination">
        <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><polyline points="15 6 9 12 15 18"></polyline></svg>
              prev
            </a>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item active"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">4</a></li>
        <li class="page-item"><a class="page-link" href="#">5</a></li>
        <li class="page-item">
            <a class="page-link" href="#">
              next <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><polyline points="9 6 15 12 9 18"></polyline></svg>
            </a>
        </li>
    </ul>
</div>
@endif
@endsection
