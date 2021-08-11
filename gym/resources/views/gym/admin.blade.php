@extends('layouts.gym')

@section('content') 

<h1>Contact admin for password change</h1>

<label for="email">Email</label>
{{$admin->email}}

<label for="phone no">Phone no </label>
{{$admin->phno}}

@endsection
