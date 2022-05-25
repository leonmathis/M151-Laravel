@extends('layout')

@section('content')

<div>
<section id="contact">
    <h2 class="opacity-75"><i class="bi bi-bookmark-fill"></i></h2>

    <br>
    <br>

    <div class=" col-md-6 container text-center">
        <button class="btn btn-light" onclick="popAdShoe()"><i class="bi bi-circle"></i></button>
        <button class="btn btn-light" onclick="popAdController()"><i class="bi bi-controller"></i></button>
        <button class="btn btn-light" onclick="popAdUser()"><i class="bi bi-person-circle"></i></button>

        <br>
        <br>

        <div class="col-md-12" id="adminuser">
            <table class="table table-hover table-striped table-sm align-middle">
                <thead>
                    <tr style="color: #40373a; font-weight: bold;">
                        <th scope="col">Firstname</th>
                        <th scope="col">Lastname</th>
                        <th scope="col">Username</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach( $users as $user )
                    <tr id="row" style="color: #40373a;">
                        <td>{{ $user->firstname }}</td>
                        <td>{{ $user->lastname }}</td>
                        <td>{{ $user->username }}</td>
                        <td>
                            <form action="/admin/user/{{ $user->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-dark" title="delete"><i class="bi bi-x-circle"></i></button>
                            </form>
                        </td>
                        <td><button class="btn btn-dark"><a href="/admin/user/edit/{{ $user->id }}"><i class="bi bi-pen-fill"></i></a></button></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="col-md-12" id="adminshoes">
            <table class="table table-hover table-striped table-sm align-middle">
                <thead>
                    <tr style="color: #40373a; font-weight: bold;">
                        <th scope="col">Shoe</th>
                        <th scope="col">Sole</th>
                        <th scope="col">Logo</th>
                        <th scope="col">Outer</th>
                        <th scope="col">Exterior</th>
                        <th scope="col"></th>
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
                            <form action="/admin/shoe/{{ $shoe->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-dark" title="delete"><i class="bi bi-x-circle"></i></button>
                            </form>
                        </td>
                        <td><button class="btn btn-dark"><a href="/admin/shoe/edit/{{ $shoe->id }}"><i class="bi bi-pen-fill"></i></a></button></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="col-md-12" id="admincont">
            <table class="table table-hover table-striped table-sm align-middle">
                <thead>
                    <tr style="color: #40373a; font-weight: bold;">
                        <th scope="col">Controller</th>
                        <th scope="col">Button</th>
                        <th scope="col">Pad</th>
                        <th scope="col">Middle</th>
                        <th scope="col">Sides</th>
                        <th scope="col"></th>
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
                            <form action="/admin/cont/{{ $controller->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-dark" title="delete"><i class="bi bi-x-circle"></i></button>
                            </form>
                        </td>
                        <td><button class="btn btn-dark"><a href="/admin/controller/edit/{{ $controller->id }}"><i class="bi bi-pen-fill"></i></a></button></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>
</div>

@endsection