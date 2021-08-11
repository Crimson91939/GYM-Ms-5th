@extends('layouts.member')

@section('content')


<style>
    input.hidden {
position: absolute;
left: -9999px;
}

#profile-image1 {
cursor: pointer;
margin-top:20px;
width: 400px;
height: 400px;
border:2px solid #03b1ce ;}
.tital{ font-size:16px; font-weight:500;}
.bot-border{ border-bottom:1px #f8f8f8 solid;  margin:5px 0  5px 0}  
</style>


<div class="container">
    
    <div class="row">
            
            
           <div class="col-md-7 ">
    
    <div class="panel panel-default">
     
       <div class="panel-body">
           
        <div class="box box-info">
            
    <div class="box-body">
    <div style="margin-left:80%">
        

@if($member->image)
<div  style="align:center">
<img alt="User Pic" src="{{asset('storage/'.$member->image)}}"id="profile-image1" class="img-circle img-responsive"> 
</div>
@else
<img alt="User Pic" src="https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg" id="profile-image1" class="img-circle img-responsive"> 
        
@endif                
        
            
</div>

<br>
<div style="margin-top:-80%">
                
                <div style="margin-top:90px;border-bottom: 1px solid black;width:60%"><h4>{{$member->gym->name}}</h4></div>            
                
                
             
<div class="clearfix"><hr style="margin:5px 0 5px 0;">
    <div class="col-sm-5 col-xs-6 tital " >Name:</div>
    <div class="col-sm-7 col-xs-6 ">{{$member->name}}</div>
</div>
<div class="clearfix"></div>

<div class="bot-border">   
    <div class="col-sm-5 col-xs-6 tital " >Email:</div>
    <div class="col-sm-7">{{$member->email}}</div>
</div>
<div class="clearfix"></div>
      
<div class="bot-border">
        <div class="col-sm-5 col-xs-6 tital " >Phone no:</div>
        <div class="col-sm-7">{{$member->phno}}</div>
    </div>
<div class="clearfix"></div>    

<div class="bot-border">
        <div class="col-sm-5 col-xs-6 tital " >Gender:</div>
        <div class="col-sm-7">{{$member->gender}}</div>
    </div>
<div class="clearfix"></div>    

<div class="bot-border">
        <div class="col-sm-5 col-xs-6 tital " >Age:</div>
        <div class="col-sm-7">{{$member->age}}</div>
    </div>
<div class="clearfix"></div>    

<div class="bot-border">
        <div class="col-sm-5 col-xs-6 tital "> Username:</div>
        <div class="col-sm-7">{{$member->username}}</div>
    </div>
<div class="clearfix"></div>    

<div class="bot-border">
        <div class="col-sm-5 col-xs-6 tital "> status</div>
<div class="col-sm-7"> {{$status}}</div>

    </div>
<div class="clearfix"></div> 

<a href="{{route('member.edit')}}" class="btn btn-primary">update</a>
<div class="clearfix"></div>  

<div class="bot-border">
<form action="{{route('member.password.update')}}" method="Post">
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
 
           



@endsection