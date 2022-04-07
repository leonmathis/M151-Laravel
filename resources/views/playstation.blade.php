@extends('layout')

@section('content')

<div>
<section id="contact">
        <div class="row container">
            <form class="row container" method="POST" action="">
            @csrf
                <input type="hidden" name="controller" value="PS5">
                <div class="selectdiv col-md-3">
                    <div class="input-group mb-3">
                    <label class="input-group-text col-4 opacity-75" for="inputGroupSelect01">Button</label>
                        <select class="form-select opacity-50" id="select-box1" name="button" onchange="changeShade()">
                            <option selected>white</option>
                            <option value="black">black</option>
                            <option value="yellow">yellow</option>
                        </select>
                    </div>
                    <div class="input-group mb-3">
                    <label class="input-group-text col-4 opacity-75" for="inputGroupSelect01">Pad</label>
                        <select class="form-select opacity-50" id="select-box2" name="pad" onchange="changeShade()">
                            <option selected>red</option>
                            <option value="green">green</option>
                            <option value="turquoise">turquoise</option>
                            <option value="purple">purple</option>
                            <option value="blue">blue</option>
                            <option value="brown">brown</option>
                            <option value="light grey">light grey</option>
                        </select>
                    </div>
                    <div class="input-group mb-3">
                    <label class="input-group-text col-4 opacity-75" for="inputGroupSelect01">Middle</label>
                        <select class="form-select opacity-50" id="select-box3" name="middle" onchange="changeShade()">
                            <option selected>red</option>
                            <option value="green">green</option>
                            <option value="turquoise">turquoise</option>
                            <option value="purple">purple</option>
                            <option value="blue">blue</option>
                            <option value="brown">brown</option>
                            <option value="light grey">light grey</option>
                        </select>
                    </div>
                    <div class="input-group mb-3">
                    <label class="input-group-text col-4 opacity-75" for="inputGroupSelect01">Sides</label>
                        <select class="form-select opacity-50" id="select-box4" name="sides" onchange="changeShade()">
                            <option selected>red</option>
                            <option value="green">green</option>
                            <option value="blue">blue</option>
                            <option value="purple">purple</option>
                            <option value="turquoise">turquoise</option>
                            <option value="brown">brown</option>
                            <option value="light grey">light grey</option>
                        </select>
                    </div>   
                </div>
                <div class="ps5 row container col-md-4">
                    <img id="button" src="{{ asset('images/btn.png') }}" class="button" height="200px" width="180px">
                    <img id="pad" src="{{ asset('images/pad1.png') }}" class="pad" height="200px" width="180px">
                    <img id="middle" src="{{ asset('images/middle1.png') }}" class="middle" height="200px" width="180px">
                    <img id="sides" src="{{ asset('images/sides1.png') }}" class="sides" height="200px" width="180px">
                </div>
                <div class="text-end col-md-4 pt-5">
                    <button id="likebtn" class="btn btn-dark p-4 opacity-75"><i class="bi bi-heart-fill"></i></button>
                </div>
            </form>     
        </div>
</section>
</div>

@endsection