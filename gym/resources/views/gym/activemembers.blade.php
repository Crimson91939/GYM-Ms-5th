@extends('layouts.gym')

@section('content') 

@if (session('status'))
<div class="alert alert-success" role="alert">
{{ session('status') }}
</div>
@endif

 

<table class="table table-striped table-dark">
<thead>
<tr>
  <th scope="col">ID</th>
  <th scope="col" >GYM NAME</th>
  <th scope="col">Gender</th>
  <th scope="col">PHONE NO</th>
  <th scope="col" class="text-left">ACTION</th>
</tr>
</thead>
<tbody>

@foreach($members as $member)
      <tr>
      <th scope="row">{{$member->id}}</td>
      <td>{{$member->name}}</td>
      <td>{{$member->gender}}</td>
      <td>{{$member->phno}}</td>
      <td>
      <a href="{{route('gym.member.view',$member->id)}}" class="btn btn-primary">view info</a>
    </td>

      </tr>
@endforeach
</tbody>
</table>

<div style="margin-left:85%">
{{$members->links()}}
</div>



@endsection
