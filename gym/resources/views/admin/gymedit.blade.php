@extends('layouts.admin')

@section('content') 

@if (session('status'))
<div class="alert alert-success" role="alert">
{{ session('status') }}
</div>
@endif

<div class="container" style="margin-left:5%">
<h1 class="font-weight-bold">{{$gym->name}} Update</h1>

 <form action="{{ route('admin.agym.update', $gym->id) }}" method="POST" enctype="multipart/form-data">

@csrf                              

{{method_field('PUT')}}

<label for="name" class="font-weight-bold">gym name:</label>
<input type="text" name="name" value="{{$gym->name}}" class="form-control col-md-4">
@error('name')<p style="color:red;">{{$message}}</p>@enderror
<br>     

<label for="address" class="font-weight-bold">gym address:</label>
<input type="text" name="address" value="{{$gym->address}}" class="form-control col-md-4">
@error('address')<p style="color:red;">{{$message}}</p>@enderror
<br>     

<label for="phone no" class="font-weight-bold">phone no:</label>
<input type="text" name="gymphno" value="{{$gym->gymphno}}" class="form-control col-md-4">
@error('gymphno')<p style="color:red;">{{$message}}</p>@enderror
<br>    

<label for="email" class="font-weight-bold">email:</label>  
<input type="text" name="email" value="{{$gym->email}}" class="form-control col-md-4">
@error('email')<p style="color:red;">{{$message}}</p>@enderror
<br>       

<label for="ownername" class="font-weight-bold">Owner Name:</label> 
<input type="text" name="ownername" value="{{$gym->ownername}}" class="form-control col-md-4">
@error('ownername')<p style="color:red;">{{$message}}</p>@enderror 
<br>   
      
<label for="owner pno" class="font-weight-bold">owner phone no:</label>
<input type="text" name="phno" value="{{$gym->phno}}" class="form-control col-md-4">          
@error('phno')<p style="color:red;">{{$message}}</p>@enderror
<br>       
            
<label for="owner pno" class="font-weight-bold">Username:</label>    
<input type="text" name="username" value="{{$gym->username}}" class="form-control col-md-4">    
@error('username')<p style="color:red;">{{$message}}</p>@enderror
<br>                          

<label for="status" class="font-weight-bold">Status</label>

 <select name="status" id="status"  class="form-control col-md-4">
    <?php
    if ($gym->status==1) {
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
@error('status')<p style="color:red;">{{$message}}</p>@enderror<br>

<label for="images" class="font-weight-bold">Profile image:</label>         
            <input type="file" name="image" multiple="multiple">
            @error('image')<p style="color:red;">{{$message}}</p>@enderror
<br>



<input type="submit" value="submit" class="btn btn-primary">


</form>
</div>


@endsection

