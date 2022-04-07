@extends('layout')

@section('content')

<div>
<section id="contact">
        <div class="row container">
            <form class="row container" method="POST" action="">
                @csrf
                <input type="hidden" name="shoe" value="jordan">
                <div class="col-md-3">
                    <div class="input-group mb-3">
                    <label class="input-group-text col-4 opacity-75" for="inputGroupSelect01">Sole</label>
                        <select class="form-select opacity-50" id="select-box1" name="sole" onchange="changeColor()">
                            <option selected>white</option>
                            <option value="black">black</option>
                            <option value="yellow">yellow</option>
                        </select>
                    </div>
                    <div class="input-group mb-3">
                    <label class="input-group-text col-4 opacity-75" for="inputGroupSelect01">Logo</label>
                        <select class="form-select opacity-50" id="select-box2" name="logo" onchange="changeColor()">
                            <option selected>white</option>
                            <option value="black">black</option>
                            <option value="yellow">yellow</option>
                        </select>
                    </div>
                    <div class="input-group mb-3">
                    <label class="input-group-text col-4 opacity-75" for="inputGroupSelect01">Outer</label>
                        <select class="form-select opacity-50" id="select-box3" name="outer" onchange="changeColor()">
                            <option selected>red</option>
                            <option value="green">green</option>
                            <option value="turquoise">turquoise</option>
                            <option value="purple">purple</option>
                            <option value="blue">blue</option>
                            <option value="camo">brown</option>
                            <option value="light grey">light grey</option>
                        </select>
                    </div>
                    <div class="input-group mb-3">
                    <label class="input-group-text col-4 opacity-75 color-dark" for="inputGroupSelect01">Exterior</label>
                        <select class="form-select opacity-50" id="select-box4" name="exterior" onchange="changeColor()">
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
                <div class="shoe row container col-md-4">
                    <img id="sole" src="{{ asset('images/sole3.png') }}" class="sole" height="200px" width="180px">
                    <img id="logo" src="{{ asset('images/nikelogo1.png') }}" class="logo" height="200px" width="180px">
                    <img id="outer" src="{{ asset('images/outer2.png') }}" class="outer" height="200px" width="180px">
                    <img id="exterior" src="{{ asset('images/exterior2.png') }}" class="exterior" height="200px" width="180px">
                </div>
                <div class="text-end col-md-4 pt-5">
                    <button id="likebtn" class="btn btn-dark p-4 opacity-75"><i class="bi bi-heart-fill"></i></button>
                </div>
            </form>     
        </div>
</section>
</div>

@endsection