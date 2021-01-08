@extends('farouter::base')

@section('app')
   <div class="flex-fill d-flex flex-column justify-content-center py-4">
      <div class="container-tight py-6">
      <div class="text-center mb-4">
         <a href="."><img src="" height="36" alt=""></a>
      </div>
      <form class="card card-md" action="{{route('password.email')}}" method="post">
         <div class="card-body">
         <h2 class="card-title text-center mb-4">Forgot password</h2>
         <p class="text-muted mb-4">Enter your email address and your password will be reset and emailed to you.</p>
         <div class="mb-3">
            <label class="form-label">Email address</label>
            <input name="email" type="email" class="form-control" placeholder="Enter email">
         </div>
         <div class="form-footer">
            <button href="#" class="btn btn-primary w-100" type="submit">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><rect x="3" y="5" width="18" height="14" rx="2"></rect><polyline points="3 7 12 13 21 7"></polyline></svg>
            Send me new password
            </button>
         </div>
         </div>
         @method('POST')
         @csrf
      </form>
      <div class="text-center text-muted mt">
         Forget it, <a href="{{route('login')}}">send me back</a> to the login screen.
      </div>
      </div>
   </div>
   @if( session('status') )
      <div class="modal-dialog modal-sm" role="document">
         <div class="modal-content">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-status bg-success"></div>
            <div class="modal-body text-center py-4">
               <h3>
                 {{ session('status') }}
               </h3>
            </div>
         </div>
      </div>
   @endif
@endsection