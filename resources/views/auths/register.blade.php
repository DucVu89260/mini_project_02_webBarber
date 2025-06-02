@extends('layouts_login_register.master')

@section('content_user')
<form method="post" action="{{ route('process_register') }}">
   @csrf
   <div class="card" data-background="color" data-color="blue">
      <div class="card-header">
            <h3 class="card-title">Register</h3>
      </div>
      <div class="card-content">
         <div class="form-group">
            <label>Name</label>
            <input type="text" placeholder="Enter name" class="form-control input-no-border" name="name" value="{{ old('name') }}">
         </div>
         <div class="form-group">
            <label>Email address</label>
            <input type="email" placeholder="Enter email" class="form-control input-no-border" name="email" value="{{ old('email') }}" required autofocus>
         </div>
         <div class="form-group">
            <label>Password</label>
            <input type="password" placeholder="Password" class="form-control input-no-border" name="password" required>
            @if ($errors->any())
               <div class="alert alert-danger">
                  <ul>
                     @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                     @endforeach
                  </ul>
               </div>
            @endif
         </div>
      </div>
      <div class="card-footer text-center">
         <button type="submit" class="btn btn-fill btn-wd ">Register</button>
      </div>
   </div>
</form>
@endsection