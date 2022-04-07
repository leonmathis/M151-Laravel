@extends('layout')

@section('content')

<div>
<section id="contact">
    <div class="row container col-md-4">
    <div id="picadidas" class="picadidas col-md-5"><a href="/xbox"><img src="{{ asset('images/xbox.png') }}" class="rounded" height="200px" width="180px"></a></div>
    <div class="col-md-2"></div>
    <div id="picadidas" class="picadidas col-md-5"><a href="/playstation"><img src="{{ asset('images/playstation.png') }}" class="rounded" height="200px" width="180px"></a></div>
    </div> 
</section>
</div>

@endsection