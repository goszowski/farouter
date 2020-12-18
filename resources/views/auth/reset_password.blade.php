@extends('farouter::base')

@section('app')
   <div class="flex-fill d-flex flex-column justify-content-center py-4">
      <div class="container-tight py-6">
      <div class="text-center mb-4">
         <a href="."><img src="" height="36" alt=""></a>
      </div>
      <form class="card card-md" action="{{route('password.update')}}" method="post">
         <div class="card-body">
         <h2 class="card-title text-center mb-4">Enter your credentials</h2>
         <div class="mb-3">
            <label class="form-label">Email</label>
            <input name="email" type="email" class="form-control" placeholder="Enter your email">
         </div>
         <div class="mb-3">
            <label class="form-label">Password</label>
            <input name="password" type="password" class="form-control" placeholder="Enter new password">
         </div>
         <div class="mb-3">
            <label class="form-label">Password confirmation</label>
            <input name="password_confirmation" type="password" class="form-control" placeholder="Confirm new password">
         </div>
         <div class="form-footer">
            <button href="#" class="btn btn-primary w-100" type="submit">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><rect x="3" y="5" width="18" height="14" rx="2"></rect><polyline points="3 7 12 13 21 7"></polyline></svg>
            Confirm
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
@endsection