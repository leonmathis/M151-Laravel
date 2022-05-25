@extends('layout')

@section('content')

<div>
<section id="contact">
    <h2 class="opacity-75"><i class="bi bi-heart"></i></h2>

    <br>
    <br>

    <div class=" col-md-6 container text-center">
        <button class="btn btn-light" id="popshoebtn" selected="true" onclick="popShoe()"><i class="bi bi-circle"></i></button>
        <button class="btn btn-light" id ="popcontbtn" onclick="popController()"><i class="bi bi-controller"></i></button>

        <br>
        <br>

        @if($shoes->isEmpty())
        <div class="col-md-12" id="likedshoes">
            <p>Table is empty.</p>
        </div>

        @else
    
        <div class="col-md-12" id="likedshoes">
            <table class="table table-hover table-striped table-sm align-middle">
                <thead>
                    <tr style="color: #40373a; font-weight: bold;">
                        <th scope="col">Shoe</th>
                        <th scope="col">Sole</th>
                        <th scope="col">Logo</th>
                        <th scope="col">Outer</th>
                        <th scope="col">Exterior</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach( $shoes as $shoe )
                    <tr id="row" style="color: #40373a;">
                        <td>{{ $shoe->shoe }}</td>
                        <td>{{ $shoe->sole }}</td>
                        <td>{{ $shoe->logo }}</td>
                        <td>{{ $shoe->outer1 }}</td>
                        <td>{{ $shoe->exterior }}</td>
                        <td>
                            <form action="/like/shoe/{{ $shoe->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-dark" title="delete"><i class="bi bi-x-circle"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        @endif

        @if($controllers->isEmpty())
        <div class="col-md-12" id="likedcont">
            <p>Table is empty.</p>
        </div>

        @else
        <div class="col-md-12" id="likedcont">
            <table class="table table-hover table-striped table-sm align-middle">
                <thead>
                    <tr style="color: #40373a; font-weight: bold;">
                        <th scope="col">Controller</th>
                        <th scope="col">Button</th>
                        <th scope="col">Pad</th>
                        <th scope="col">Middle</th>
                        <th scope="col">Sides</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach( $controllers as $controller )
                    <tr id="row" style="color: #40373a;">
                        <td>{{ $controller->controller }}</td>
                        <td>{{ $controller->button }}</td>
                        <td>{{ $controller->pad }}</td>
                        <td>{{ $controller->middle }}</td>
                        <td>{{ $controller->sides }}</td>
                        <td>
                            <form action="/like/cont/{{ $controller->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-dark" title="delete"><i class="bi bi-x-circle"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @endif
    </div>
</section>
</div>

@endsection