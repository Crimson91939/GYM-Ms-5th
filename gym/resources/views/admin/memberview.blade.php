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
.bot-border{ border-bottom:1px black solid;  margin:15px 0  5px 0; width: 50%;}  
</style>


<div class="container">
    
    <div class="row">
            
            
           <div class="col-md-7 ">
    
    <div class="panel panel-default">
      <div class="panel-heading">  <h4 >Members Profile</h4></div>
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
                  <br>           
                  <br>
        
       
</div>


<div style="margin-top:-70%">
                <div class="col-sm-6">
                <h4 style="color:#00b1b1;">{{$member->username}} </h4></span>
                <span><p>{{$member->gym->name}}</p></span>            
                </div>
                
             
<div class="bot-border"> 
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

<div style="margin-bottom:20px;">
        <div class="col-sm-5 col-xs-6 tital "> status</div>
<div class="col-sm-7"> {{$status}}</div>

    </div>

@endsection
