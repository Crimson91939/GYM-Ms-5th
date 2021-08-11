@extends('layouts.admin')

@section('content') 

@if (session('status'))
<div class="alert alert-success" role="alert">
{{ session('status') }}
</div>
@endif

<div class="container">
    <h1 class="strong">Future Prospects</h1>
</div>

@endsection
