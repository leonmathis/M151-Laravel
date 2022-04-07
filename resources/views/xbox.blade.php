@extends('layout')

@section('content')

<div>
<section id="contact">
<div class="row container">
            <form class="row container" method="POST" action="">
            @csrf
                <input type="hidden" name="controller" value="xbox">
                <input type="hidden" name="pad" value="none">
                <div class="selectdiv col-md-3">
                    <div class="input-group mb-3">
                    <label class="input-group-text col-4 opacity-75" for="inputGroupSelect01">Button</label>
                        <select class="form-select opacity-50" id="select-box1" name="button" onchange="changeShade1()">
                            <option selected>white</option>
                            <option value="black">black</option>
                            <option value="yellow">yellow</option>
                        </select>
                    </div>
                    <div class="input-group mb-3">
                    <label class="input-group-text col-4 opacity-75" for="inputGroupSelect01">Joy-Stick</label>
                        <select class="form-select opacity-50" id="select-box2" name="sides" onchange="changeShade1()">
                            <option selected>white</option>
                            <option value="black">black</option>
                            <option value="yellow">yellow</option>
                        </select>
                    </div>
                    <div class="input-group mb-3">
                    <label class="input-group-text col-4 opacity-75" for="inputGroupSelect01">Middle</label>
                        <select class="form-select opacity-50" id="select-box3" name="middle" onchange="changeShade1()">
                            <option selected>red</option>
                            <option value="green">green</option>
                            <option value="turquoise">turquoise</option>
                            <option value="purple">purple</option>
                            <option value="blue">blue</option>
                            <option value="brown">brown</option>
                            <option value="light grey">light grey</option>
                        </select>
                    </div> 
                </div>
                <div class="ps5 row container col-md-4">
                    <img id="xblack" src="{{ asset('images/xblack.png') }}" class="xblack" height="200px" width="180px">
                    <img id="xwhite" src="{{ asset('images/xwhite.png') }}" class="xwhite" height="200px" width="180px">
                    <img id="xmain" src="{{ asset('images/xmain.png') }}" class="xmain" height="200px" width="180px">
                </div>
                <div class="text-end col-md-4 pt-5">
                    <button id="likebtn" class="btn btn-dark p-4 opacity-75"><i class="bi bi-heart-fill"></i></button>
                </div>
            </form>     
        </div>
</section>
</div>

@endsection