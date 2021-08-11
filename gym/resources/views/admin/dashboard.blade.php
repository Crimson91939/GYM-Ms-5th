@extends('layouts.admin')

@section('content') 

@if (session('status'))
<div class="alert alert-success" role="alert">
{{ session('status') }}
</div>
@endif
<div class="container">
<h1>Welocome <b style="color:red">Admin</b></h1>
  <div class="pt-5"><label for="gyms">No of gyms =</label>
  {{$gym}}
  </div>
  <div>
  <label for="member">No of members =</label>
  {{$member}}
  </div>

</div>













@endsection
