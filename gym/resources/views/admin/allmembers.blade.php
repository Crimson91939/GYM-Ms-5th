@extends('layouts.admin')

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
  <th scope="col">NAME</th>
  <th scope="col">Phone</th>
  <th scope="col">status</th>
  <th scope="col">ACTION</th>
</tr>
</thead>
<tbody>
    @foreach($members as $member)
      <tr>
      <td scope="row">{{$member->id}}</td>
      <td>{{$member->name}}</td>  
      <td>{{$member->phno}}</td>
      <?php 
          $a= $member->status;
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
      <td><a href="{{route('admin.member.view',$member->id)}}" ><h4>view<h4></a></td>
      </tr>
@endforeach


</tbody>
</table>





@endsection
