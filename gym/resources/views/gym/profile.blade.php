@extends('layouts.gym')

@section('content') 

@if (session('status'))
<div class="alert alert-success" role="alert">
{{ session('status') }}
</div>
@endif

<div class="container">

      <div class="panel-heading" style="margin-bottom:10px;">  <h4 >{{$gym->username}}</h4></div>

                    <style>
                        .label1{
                                font-size: 1.4em;
                                font-weight: bolder;
                                margin-top: 10px;
                        }
                        .text{
                            font-size: 1.1em;
                            background-color: #F0FFFF;
                            display: block;
                            border-bottom: 1px solid black;
                            width: 80%;
                            text-align: left;
                        }
                        .img{
                            
                            width: 400px;
                            height: 400px;
                            border-radius: 20px;
                            border: 1px solid black;
                            position: absolute;
                            right: 10%;
                            top: 10%;
                            box-sizing: border-box;
                            
                        }
                        .img-box{
                          float:right;
                               
                        }
                        .data{
                            float: left;
                            width: 400px;
                            margin-bottom: 30px;
                           
                        }
                    </style>
<div>
    <div class="img-box">
                    @if($gym->image)
                    <div>
                    <img alt="User Pic" src="{{asset('storage/'.$gym->image)}}"id="profile-image1" class="img-circle img-responsive img"> 
                    </div>
                    @else
                    <img alt="User Pic" src="https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg" id="profile-image1" class="img-circle img-responsive img"> 
                            
                    @endif    
    </div>
    
        
                  <!-- /input-group -->
</div>
<div class="data">
            
                
<div class="clearfix"><hr style="margin:5px 0 5px 0;">
    <div class=" label1" >ID:</div>
    <div class=" text">{{$gym->id}}</div>
</div>

<div class="clearfix"><hr style="margin:5px 0 5px 0;">
    <div class="label1 " >Name:</div>
    <div class="text">{{$gym->name}}</div>
</div>
<div class="clearfix"></div>

<div class="bot-border">   
    <div class="tital label1" >Address:</div>
    <div class=" text">{{$gym->address}}</div>
</div>
<div class="clearfix"></div>
      
<div class="bot-border">
        <div class=" label1" > Gym Phone no:</div>
        <div class="text">{{$gym->gymphno}}</div>
    </div>
<div class="clearfix"></div>    

<div class="bot-border">
        <div class=" label1" >Email:</div>
        <div class=" text">{{$gym->email}}</div>
    </div>
<div class="clearfix"></div>    

<div class="bot-border">
        <div class="tital label1" >Owner Name:</div>
        <div class=" text">{{$gym->ownername}}</div>
    </div>
<div class="clearfix"></div>   
<div class="clearfix"><hr style="margin:5px 0 5px 0;">
    <div class=" label1" >Phone no:</div>
    <div class="text">{{$gym->phno}}</div>
</div> 
<div class="clearfix"></div>   

<div class="bot-border">
        <div class=" label1"> Username:</div>
        <div class="text">{{$gym->username}}</div>
    </div>
<div class="clearfix"></div>    

<div class="bot-border">
        <div class="label1"> status</div>
<div class=" text"> {{$status}}</div>

    </div>
<div class="clearfix"></div> 

</div>
</div>



           


@endsection
