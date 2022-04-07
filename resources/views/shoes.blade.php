@extends('layout')

@section('content')

<div>
<section id="contact">
    <div class="row container col-md-4">
    <div id="picadidas" class="picadidas col-md-5"><a href="/adidas"><img src="{{ asset('images/adidas.png') }}" class="rounded" height="200px" width="180px"></a></div>
    <div class="col-md-2"></div>
    <div id="picjordan" class="picjordan col-md-5"><a href="/jordan"><img src="{{ asset('images/jumpman.png') }}" class="rounded" height="200px" width="180px"></a></div>
    </div>
</section>
</div>

@endsection