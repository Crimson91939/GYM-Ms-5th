@extends('layouts.admin')

@section('content') 

@if (session('status'))
<div class="alert alert-success" role="alert">
{{ session('status') }}
</div>
@endif

 
<div class="container" >
    <div style=margin-left:320px;>
    <div class="font-weight-bold "><h1>ADD NEW GYM</h1></div>
     <form action="{{route('admin.addgym')}}" method="post" enctype="multipart/form-data">
    @csrf  
        <div class="form-group col-md-6">                             
            <label for="name" class="font-weight-bold ">gym name:</label>
            <input type="text" name="name" class="form-control" >
            @error('name')<p style="color:red;">{{$message}}</p>@enderror
        </div>
        <div class="form-group col-md-6">                                           
            <label for="address" class="font-weight-bold ">gym address:</label>
            <input type="text" name="address" class="form-control">
            @error('address')<p style="color:red;">{{$message}}</p>@enderror
        </div>
        <div class="form-group col-md-6">                                 
            <label for="phone no" class="font-weight-bold ">phone no:</label>
            <input type="text" name="gymphno" class="form-control">
            @error('gymphno')<p style="color:red;">{{$message}}</p>@enderror
        </div>  
        <div class="form-group col-md-6">
            <label for="email" class="font-weight-bold ">email</label>  
            <input type="text" name="email" class="form-control">
            @error('email')<p style="color:red;">{{$message}}</p>@enderror
        </div>
        <div class="form-group col-md-6">                                        
            <label for="ownername" class="font-weight-bold ">owner Name:</label> 
            <input type="text" name="ownername" class="form-control">   
            @error('ownername')<p style="color:red;">{{$message}}</p>@enderror
        </div>
        <div class="form-group col-md-6">     
            <label for="owner pno" class="font-weight-bold ">owner phone no:</label>
            <input type="text" name="phno" class="form-control"> 
            @error('phno')<p style="color:red;">{{$message}}</p>@enderror         
        </div>  
        <div class="form-group col-md-6">                 
            <label for="owner pno" class="font-weight-bold ">Username:</label>    
            <input type="text" name="username" class="form-control">    
            @error('username')<p style="color:red;">{{$message}}</p>@enderror
        </div>             
        <div class="form-group col-md-6">         
            <label for="owner pno" class="font-weight-bold ">password:</label>   
            <input type="password" name="password" class="form-control">
            @error('password')<p style="color:red;">{{$message}}</p>@enderror
        </div>   
        <div class="form-group col-md-4">
            <label for="status" class="font-weight-bold ">Status:</label>
            <select name="status" id="active" class="form-control">
            <option selected value="1">active</option>
            <option value="0">inactive</option>
            </select>
            @error('status')<p style="color:red;">{{$message}}</p>@enderror
        </div>
        <div class="form-group col-md-8 ">
            <label for="images" class="font-weight-bold">Profile image:</label>         
            <input type="file" name="image">
            @error('image')<p style="color:red;">{{$message}}</p>@enderror
        </div>  

       
    
    <input type="submit" value="submit" style="margin-left:20%"class="btn btn-primary">
    </form>
    </div>
    </div>
    






@endsection
