@extends('layouts.admin')

@section('content') 

@if (session('status'))
<div class="alert alert-success" role="alert">
{{ session('status') }}
</div>
@endif

  
@if(count($gyms)>0)
<table class="table table-striped table-dark">
<thead>
<tr>
  <th scope="col">ID</th>
  <th scope="col" >GYM NAME</th>
  <th scope="col">Owner Name</th>
  <th scope="col">PHONE NO</th>
  <th scope="col" class="text-left">ACTION</th>
</tr>
</thead>
<tbody>

@foreach($gyms as $gym)
      <tr>
      <th scope="row">{{$gym->id}}</td>
      <td>{{$gym->name}}</td>
      <td>{{$gym->ownername}}</td>
      <td>{{$gym->phno}}</td>
      <td>
      <a href="{{route('admin.gymview',$gym->id)}}" class="btn btn-primary">view info</a>
      <a href="{{route('admin.gym.allmembers',$gym->id)}}" class="btn btn-primary">view members</a>
    </td>

      </tr>
@endforeach
</tbody>
</table>

<div style="margin-left:85%">
{{$gyms->links()}}
</div>
@else
<h1>No GYMS</h1>
@endif

@endsection
