@extends('layouts.gym')
@section('content')

<div class="container">

<h1>{{$member->name}}</h1>
    <form action="{{ route('gym.member.update',$member->id)}}" method="Post">
    
        @csrf                              
        {{method_field('PUT')}}
        
<label for="status" class="font-weight-bold">Status</label>

<select name="status" id="status"  class="form-control col-md-4">
   <?php
   if ($member->status==1) {
       $a=1;$b="Active";
       $c=0;$d="Inactive";
   }else{
       $a=0;$b="Inactive";
       $c=1;$d="Active";
   }
 ?>
 <option value="{{ $a }}" selected>{{ $b }}</option>
 <option value="{{ $c }}">{{ $d }}</option>
</select>

<br>

        
    
        
        <label for="name" class="font-weight-bold">Name:</label>
        <input type="text" name="name" value="{{$member->name}}" class="form-control col-md-4">
        @error('name')<p style="color:red;">{{$message}}</p>@enderror
        <br>
        <label for="email" class="font-weight-bold">Email:</label>
        <input type="text" name="email" value="{{$member->email}}" class="form-control col-md-4">
        @error('email')<p style="color:red;">{{$message}}</p>@enderror
        <br>                                              
        <label for="phone no" class="font-weight-bold">Phone no:</label>
        <input type="text" name="phno" value="{{$member->phno}}" class="form-control col-md-4">
        @error('phno')<p style="color:red;">{{$message}}</p>@enderror
        <br>  
        <label for="name" class="font-weight-bold">Gender:</label> 
    <select id="gender" name="gender" placeholder="{{$member->gender}} ">  
            <?php
              if ($member->gender=="male") {
                  $a="male";
                  $b="female";
              }else{
                  $a="female";
                  $b="male";
              }
            ?>
            <option value="{{ $a }}" selected>{{ $a }}</option>
            <option value="{{ $b }}">{{ $b }}</option>
          </select>
          @error('gender')<p style="color:red;">{{$message}}</p>@enderror
          <br>
    
    
        <label for="age" class="font-weight-bold">Age:</label>
        <input type="number" name="age" value="{{$member->age}}" class="form-control col-md-4">
        @error('age')<p style="color:red;">{{$message}}</p>@enderror
        <br>  
        <label for="username" class="font-weight-bold">Username:</label>
        <input type="text" name="username" value="{{$member->username}}" class="form-control col-md-4">
        @error('username')<p style="color:red;">{{$message}}</p>@enderror
        <br>  

        
        
        <input type="submit" value="update" class="btn btn-primary">
        </form>
    </div>


@endsection