@extends('layouts.admin')

@section('content') 

@if (session('status'))
<div class="alert alert-success" role="alert">
{{ session('status') }}
</div>
@endif

<div class="container">
<form action="{{route('admin.profile.update')}}" method="POST" >
  @csrf
  <div class="form-group">
  <label for="username"><h3>Admin Profile</h3></label><hr>
  <input type="text" readonly class="form-control-plaintext" value="{{$a->username}}" style=" font-size: 30px;">
  </div><br>
  <div class="form-group">
    <label for="Password">New Password</label>
    <input type="text" class="form-control" name="password" placeholder="enter new Password">
  </div>
  <button type="submit" class="btn btn-primary mb-2">Change Password</button>
</form>
</div>



@endsection
