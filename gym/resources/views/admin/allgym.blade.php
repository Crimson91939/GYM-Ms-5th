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
  <th scope="col">GYM NAME</th>
  <th scope="col">Joined AT</th>
  <th scope="col">Phone No</th>
  <th scope="col" >STATUS</th>
  <th scope="col">ACTION</th>
</tr>
</thead>
<tbody>

@foreach($gyms as $gym)
      <tr>
      <td scope="row">{{$gym->id}}</td>
      <td>{{$gym->name}}</td>  
      <td>{{$gym->created_at}}</td> 
      <td>{{$gym->phno}}</td>      
   
     <?php 
          $a= $gym->status;
          if($a==1)
          {$status="#00FF00";}
          elseif ($a==0) {
            $status="#FF0000";
          }
          else{
            $status="black";
          }
      ?>
     <td bgcolor="{{$status}}"></td>        
      <td>
      <a href="{{route('admin.gymview',$gym->id)}}" class="btn btn-primary" >view</a>
      <a href="{{route('admin.gym.allmembers',$gym->id)}}" class="btn btn-primary">view members</a>
      </td>
      </tr>
@endforeach
</tbody>
</table>


@else
<h1>No GYMS</h1>
@endif







@endsection
