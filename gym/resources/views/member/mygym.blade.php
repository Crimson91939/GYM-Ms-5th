@extends('layouts.member')

@section('content')
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
.bot-border{ border-bottom:1px #f8f8f8 solid;  margin:5px 0  5px 0}  
</style>

<div class="container" style="margin-top:20px;">

    
        <div class="box box-info" style="margin-left:50%;">
            
            <div class="box-body">
                     
                     <div  style="align:center"> <img alt="User Pic" src="{{asset("storage/".$gym->image)}}" id="profile-image1" class="img-circle img-responsive"> 
                
       

</div> </div>  </div>           
              <br>
              <div style=margin-left:10%;margin-top:-40%>
        <h1 class="font-weight-bold">{{$gym->name}} INFO </h2>                                      
        <label for="address" class="font-weight-bold" >gym address:</label><p class="h6 col-md-4"> {{$gym->address}}  </p>
                                           
        <label for="phone no" class="font-weight-bold" >phone no:</label><p class="h6  col-md-4"> {{$gym->gymphno}}</p>
        
        <label for="email" class="font-weight-bold" >email</label><p class="h6  col-md-4"> {{$gym->email}} </p>  
                                                  
        <label for="gymownername" class="font-weight-bold" >owner name:</label><p class="h6  col-md-4"> {{$gym->ownername}}</p>
                   
        <label for="owner pno" class="font-weight-bold" >owner phone no:</label><p class="h6  col-md-4"> {{$gym->phno}} </p>        
                         
        <label for="owner pno" class="font-weight-bold" >Username:</label><p class=h6 l col-md-4"> {{$gym->username}} </p>          
                             
        <label for="owner pno" class="font-weight-bold" >password:</label><p class="h6  col-md-4"> {{$gym->password}} </p>  
        
        <label for="updated at" class="font-weight-bold" >status:</label><p class="h6  col-md-4">
        <?php
        $a=$gym->status;
        if( $a==1){echo 'Active';} 
        else{echo 'Inactive';}
        ?>
        </p>

</div>

<script>
    $(function() {
$('#profile-image1').on('click', function() {
$('#profile-image-upload').click();
});
});       
    </script> 


@endsection