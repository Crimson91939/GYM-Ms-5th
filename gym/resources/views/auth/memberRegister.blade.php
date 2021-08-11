@extends('layouts.app')

@section('content')
<div class="container" style="margin-left:30%;color:white">

<form action="{{route('register.submit')}}" method="post">
<h1>Register</h1>
@csrf

<div class="form-group col-5" style="border:10px;">
    <label for="gymselect">Choose GYM</label>
    <select class="form-control" name="gym_id">
        @foreach ($gyms as $gym)
        <option value="{{$gym->id}}">{{$gym->name}}</option>
    @endforeach
    </select>
</div>
<div class="form-group col-5">
    <label for="email">Email:</label><br>
    <input class="form-control" type="email" name="email" id="email">
</div>
<div class="form-group col-5">
<label for="name">Name:</label>
<input class="form-control" type="text" name="name" id="name">
</div>
<div class="form-group col-5">
<label for="phno">Phno</label>
<input class="form-control" type="tel" name="phno" id="phno">
</div>

<div class="form-check col-5">
<label for="gender">Gender</label>
<div>
<input class="form-check-input col-5" type="radio" name="gender" id="gender" value="male">
<label class="form-check-label" for="exampleRadios1">Male</label>
</div>
<div>
<input class="form-check-input col-5"  type="radio" name="gender" id="gender" value="female">
<label class="form-check-label" for="exampleRadios1">female</label>
</div>
</div>
<br>
<div class="form-group col-2">
<label for="age">Age:</label>
<input class="form-control" type="number" name="age" id="age"> 
</div>
<div class="form-group col-5">
<label for="username">UserName:</label>
<input class="form-control" type="text" name="username" id="username">
</div>
<div class="form-group col-5">
    <label for="password">Password:</label><br>
    <input class="form-control" type="password" name="password" id="password">
</div>

<input class="btn btn-primary " type="submit" value="submit">

</form>

</div>
@endsection