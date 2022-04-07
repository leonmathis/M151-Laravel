@extends('layout')

@section('content')

<div>
    <section>
        <h2 class="opacity-75">edit</h2>

        @isset( $user )
        <div class="col-md-4 container">
            <form method="POST" action="">
            @csrf
            @method('PUT')
                <br>

                <div class="row mb-3">
                    <label for="exampleFormControlInput1" class="col-sm-2 col-form-label" style="colour: #4d4d4d;">firstname</label>
                    <div class="col-sm-10">
                    <input type="text" class="opacity-50 form-control col-sm-10" id="firstname" name="firstname" value="{{ $user->firstname }}">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="exampleFormControlInput1" class="col-sm-2 col-form-label" style="colour: #4d4d4d;">lastname</label>
                    <div class="col-sm-10">
                    <input type="text" class="opacity-50 form-control col-sm-10" id="lastname" name="lastname" value="{{ $user->lastname }}">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="exampleFormControlInput1" class="col-sm-2 col-form-label" style="colour: #4d4d4d;">username</label>
                    <div class="col-sm-10">
                    <input type="text" class="opacity-50 form-control col-sm-10" id="username" name="username" value="{{ $user->username }}">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="exampleFormControlInput1" class="col-sm-2 col-form-label" style="colour: #4d4d4d;">password</label>
                    <div class="col-sm-10">
                    <input type="password" class="opacity-50 form-control col-sm-10" id="password" name="password">
                    </div>
                </div>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <button type="submit" id="submit-button" class="btn btn-dark">submit</button>
            </form>
        </div>
    @endisset

    @isset( $shoe )
        <div class="col-md-4 container">
            <form method="POST" action="">
            @csrf
            @method('PUT')
                <br>

                <div class="row mb-3">
                    <label for="exampleFormControlInput1" class="col-sm-2 col-form-label" style="colour: #4d4d4d;">Shoe</label>
                    <div class="col-sm-10">
                    <input type="text" class="opacity-50 form-control col-sm-10" id="shoe" name="shoe" value="{{ $shoe->shoe }}">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="exampleFormControlInput1" class="col-sm-2 col-form-label" style="colour: #4d4d4d;">Sole</label>
                    <div class="col-sm-10">
                    <input type="text" class="opacity-50 form-control col-sm-10" id="sole" name="sole" value="{{ $shoe->sole }}">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="exampleFormControlInput1" class="col-sm-2 col-form-label" style="colour: #4d4d4d;">logo</label>
                    <div class="col-sm-10">
                    <input type="text" class="opacity-50 form-control col-sm-10" id="logo" name="logo" value="{{ $shoe->logo }}">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="exampleFormControlInput1" class="col-sm-2 col-form-label" style="colour: #4d4d4d;">Outer</label>
                    <div class="col-sm-10">
                    <input type="text" class="opacity-50 form-control col-sm-10" id="outer1" name="outer1" value="{{ $shoe->outer1 }}">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="exampleFormControlInput1" class="col-sm-2 col-form-label" style="colour: #4d4d4d;">Exterior</label>
                    <div class="col-sm-10">
                    <input type="text" class="opacity-50 form-control col-sm-10" id="exterior" name="exterior" value="{{ $shoe->exterior }}">
                    </div>
                </div>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <button type="submit" id="submit-button" class="btn btn-dark">submit</button>
            </form>
        </div>
    @endisset

    @isset( $controller )
        <div class="col-md-4 container">
            <form method="POST" action="">
            @csrf
            @method('PUT')
                <br>

                <div class="row mb-3">
                    <label for="exampleFormControlInput1" class="col-sm-2 col-form-label" style="colour: #4d4d4d;">Controller</label>
                    <div class="col-sm-10">
                    <input type="text" class="opacity-50 form-control col-sm-10" id="controller" name="controller" value="{{ $controller->controller }}">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="exampleFormControlInput1" class="col-sm-2 col-form-label" style="colour: #4d4d4d;">Button</label>
                    <div class="col-sm-10">
                    <input type="text" class="opacity-50 form-control col-sm-10" id="button" name="button" value="{{ $controller->button }}">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="exampleFormControlInput1" class="col-sm-2 col-form-label" style="colour: #4d4d4d;">pad</label>
                    <div class="col-sm-10">
                    <input type="text" class="opacity-50 form-control col-sm-10" id="pad" name="pad" value="{{ $controller->pad }}">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="exampleFormControlInput1" class="col-sm-2 col-form-label" style="colour: #4d4d4d;">Middle</label>
                    <div class="col-sm-10">
                    <input type="text" class="opacity-50 form-control col-sm-10" id="middle" name="middle" value="{{ $controller->middle }}">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="exampleFormControlInput1" class="col-sm-2 col-form-label" style="colour: #4d4d4d;">Sides</label>
                    <div class="col-sm-10">
                    <input type="text" class="opacity-50 form-control col-sm-10" id="sides" name="sides" value="{{ $controller->sides }}">
                    </div>
                </div>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <button type="submit" id="submit-button" class="btn btn-dark">submit</button>
            </form>
        </div>
    @endisset        
    </section>
</div>

@endsection