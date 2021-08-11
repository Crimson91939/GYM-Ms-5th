@extends('layouts.member')

@section('content') 

@if (session('status'))
<div class="alert alert-success" role="alert">
{{ session('status') }}
</div>
@endif



<div class="container">
<div>
     <iframe src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=1&amp;bgcolor=%23A79B8E&amp;ctz=Asia%2FKathmandu&amp;src=cmFtYW5zaHJlc3RoYTg4QGdtYWlsLmNvbQ&amp;src=YWRkcmVzc2Jvb2sjY29udGFjdHNAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&amp;src=YTVnams3bHQyY2dvaHNxaWNzczhwZml0ODBAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&amp;src=ZW4ubnAjaG9saWRheUBncm91cC52LmNhbGVuZGFyLmdvb2dsZS5jb20&amp;color=%23039BE5&amp;color=%2333B679&amp;color=%23009688&amp;color=%230B8043&amp;showPrint=0&amp;showTabs=1&amp;showCalendars=0&amp;showNav=1&amp;showTitle=0" style="border:solid 1px #777" width="100%" height="570" frameborder="0" scrolling="no"></iframe>
</div>


</div>


@endsection
