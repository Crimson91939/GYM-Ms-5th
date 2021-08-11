@extends('layouts.gym')

@section('content') 


<style>

#profile-image1 {
cursor: pointer;

width: 400px;
height: 400px;
border:2px solid #03b1ce ;}
.tital{ font-size:16px; font-weight:500;}
.bot-border{ border-bottom:1px #f8f8f8 solid;  margin:5px 0  5px 0}  

           
      
                        .data{
                            float: left;
                           
                        }
                        .img{
                            float:right;
                            margin-right: 20%;
                            
                        }
             

</style>


<div class="container">
    

            
      <div class="panel-heading">  <h4 >Members Profile</h4></div>
  
           
       
            
     <div> {{--main block--}}         
                    <div class="img">
                            @if($member->image)
                            <div  style="align:center">
                            <img alt="User Pic" src="{{asset('storage/'.$member->image)}}"id="profile-image1" class="img-circle img-responsive"> 
                            </div>
                            @else
                            <img alt="User Pic" src="https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg" id="profile-image1" class="img-circle img-responsive"> 
                                    
                            @endif
                    </div>
               
                         


<div class="data">{{--datablock--}}
                
<h4 style="color:#00b1b1;">{{$member->username}} </h4>        
                
                
             
<div class="clearfix"><hr style="margin:5px 0 5px 0;">
    <div class="tital">Name:</div>
    <div >{{$member->name}}</div>
</div>
<div class="clearfix"></div>

<div class="bot-border">   
    <div class=" tital " >Email:</div>
    <div >{{$member->email}}</div>
</div>
<div class="clearfix"></div>
      
<div class="bot-border">
        <div class="tital " >Phone no:</div>
        <div >{{$member->phno}}</div>
    </div>
<div class="clearfix"></div>    

<div class="bot-border">
        <div class="tital " >Gender:</div>
        <div >{{$member->gender}}</div>
    </div>
<div class="clearfix"></div>    

<div class="bot-border">
        <div class="tital " >Age:</div>
        <div >{{$member->age}}</div>
    </div>
<div class="clearfix"></div>    

<div class="bot-border">
        <div class="tital "> Username:</div>
        <div >{{$member->username}}</div>
    </div>
<div class="clearfix"></div>    

<div class="bot-border">
        <div class="tital "> status</div>
<div > {{$status}}</div>

    </div>
<div class="clearfix"></div> 

<a href="{{route('gym.member.update.page',$member->id)}}" class="btn btn-primary">Update</a>
<a href="{{route('gym.member.delete',$member->id)}}" class="btn btn-danger ml-3">Delete</a>
<div class="clearfix"></div>  

<div class="bot-border">
<form action="{{route('gym.member.password.update', $member->id)}}" method="Post">
       @csrf
       <br>
<label for="password" class="tital ">Change Password</label> <br>
        
        <input type="password" name="password" id="password">
        <button type="submit" class="btn btn-primary">Change</button>
    </form>
</div>

<div class="clearfix"></div> 

</div>{{--data--}}
</div>{{--main block--}}
</div>{{-- Container --}}

           



@endsection
