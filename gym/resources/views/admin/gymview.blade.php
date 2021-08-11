@extends('layouts.admin')

@section('content') 

@if (session('status'))
<div class="alert alert-success" role="alert">
{{ session('status') }}
</div>
@endif


<style>
    input.hidden {
position: absolute;
left: -9999px;
}

#profile-image1 {
cursor: pointer;

width: 400px;
height: 400px;
border:2px solid #03b1ce ;}
.tital{ font-size:16px; font-weight:500;}
.bot-border{ border-bottom:1px black solid;
            width:50%;margin:10px 0  5px 0;
            }  
</style>


<div class="container">
    
    <div class="row">
            
            
           <div class="col-md-7 ">
    
    <div class="panel panel-default">
      <div class="panel-heading" style="margin-bottom:40px;">  <h4 >{{$gym->name}}</h4></div>
       <div class="panel-body">
           
        <div class="box box-info">
            
                <div class="box-body">
                         <div style="margin-left:80%">
                            @if($gym->image)
                            <div>
                            <img alt="User Pic" src="{{asset('storage/'.$gym->image)}}"id="profile-image1" class="img-circle img-responsive img"> 
                            </div>
                            @else
                            <img alt="User Pic" src="https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg" id="profile-image1" class="img-circle img-responsive img"> 
                                    
                            @endif   
                         </div>            
                  <br>
        
                  <!-- /input-group -->
</div>
<div style="margin-top:-75%">
             
                
    <div class="bot-border">   
    <div class="col-sm-5 col-xs-6 tital " >ID:</div>
    <div class="col-sm-7 col-xs-6 ">{{$gym->id}}</div>
</div>

<div class="bot-border">   
    <div class="col-sm-5 col-xs-6 tital " >Name:</div>
    <div class="col-sm-7 col-xs-6 ">{{$gym->name}}</div>
</div>
<div class="clearfix"></div>

<div class="bot-border">   
    <div class="col-sm-5 col-xs-6 tital " >Address:</div>
    <div class="col-sm-7">{{$gym->address}}</div>
</div>
<div class="clearfix"></div>
      
<div class="bot-border">
        <div class="col-sm-6 col-xs-6 tital " > Gym Phone no:</div>
        <div class="col-sm-7">{{$gym->gymphno}}</div>
    </div>
<div class="clearfix"></div>    

<div class="bot-border">
        <div class="col-sm-5 col-xs-6 tital " >Email:</div>
        <div class="col-sm-7">{{$gym->email}}</div>
    </div>
<div class="clearfix"></div>    

<div class="bot-border">
        <div class="col-sm-5 col-xs-6 tital " >Owner Name:</div>
        <div class="col-sm-7">{{$gym->ownername}}</div>
    </div>
<div class="clearfix"></div>   
<div class="bot-border">   
    <div class="col-sm-5 col-xs-6 tital " >Phone no:</div>
    <div class="col-sm-7 col-xs-6 ">{{$gym->phno}}</div>
</div> 
<div class="clearfix"></div>   

<div class="bot-border">
        <div class="col-sm-5 col-xs-6 tital "> Username:</div>
        <div class="col-sm-7">{{$gym->username}}</div>
    </div>
<div class="clearfix"></div>    

<div style="margin-bottom:10px;">
        <div class="col-sm-5 col-xs-6 tital "> status</div>
<div class="col-sm-7"> {{$status}}</div>

    </div>
<div class="clearfix"></div> 
<div>


<form action="{{ route('admin.gym.hakai',$gym->id)}}" method="POST">
    @method('DELETE')
    @csrf
    <a href="{{route('admin.agym.edit',$gym->id)}}" class="btn btn-primary">update</a>
    <button class="btn btn-danger">Delete GYM</button>
    </form>
</div>
<div class="clearfix"></div>  

<div style="margin-bottom:20px;">
<form action="{{route('admin.password.update',$gym->id)}}" method="Post">
           @csrf
           <br>
    <label for="password" class="col-sm-5 col-xs-6 tital ">Change Password</label> <br>
            
            <input type="password" name="password" id="password">
            <button type="submit" class="btn btn-primary">Change</button>
        </form>
    </div>
    
   

<div class="clearfix"></div> 
</div>
</div>
</div> 
        <script>
                  $(function() {
        $('#profile-image1').on('click', function() {
            $('#profile-image-upload').click();
        });
    });       
                  </script> 
           


@endsection
