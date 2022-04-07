@extends('layout')

@section('content')

<div>
<section>
    <h2 class="opacity-75">edit</h2>
        <div class="col-md-4 container">
            <form method="POST" action="">
            @csrf
            @method('PUT')
                <br>

                <div class="row mb-3">
                    <label for="exampleFormControlInput1" class="col-sm-2 col-form-label" style="colour: #4d4d4d;">firstname</label>
                    <div class="col-sm-8">
                    <input type="text" class="opacity-50 form-control col-sm-10" id="firstname" name="firstname" value="{{ $user->firstname }}">
                    </div>
                    <div class="col-sm-2">
                    @error('firstname')
                    <span class="text-danger col-sm-2 mt-2"><i class="bi bi-x-square"></i></span>
                    @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="exampleFormControlInput1" class="col-sm-2 col-form-label" style="colour: #4d4d4d;">lastname</label>
                    <div class="col-sm-8">
                    <input type="text" class="opacity-50 form-control col-sm-10" id="lastname" name="lastname" value="{{ $user->lastname }}">
                    </div>
                    <div class="col-sm-2">
                    @error('lastname')
                    <span class="text-danger col-sm-2 mt-2"><i class="bi bi-x-square"></i></span>
                    @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="exampleFormControlInput1" class="col-sm-2 col-form-label" style="colour: #4d4d4d;">username</label>
                    <div class="col-sm-8">
                    <input type="text" class="opacity-50 form-control col-sm-10" id="username" name="username" value="{{ $user->username }}">
                    </div>
                    <div class="col-sm-2">
                    @error('username')
                    <span class="text-danger col-sm-2 mt-2"><i class="bi bi-x-square"></i></span>
                    @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="exampleFormControlInput1" class="col-sm-2 col-form-label" style="colour: #4d4d4d;">password</label>
                    <div class="col-sm-8">
                    <input type="password" class="opacity-50 form-control col-sm-10" id="password" name="password">
                    </div>
                    <div class="col-sm-2">
                    @error('password')
                    <span class="text-danger col-sm-2 mt-2 pt-2"><i class="bi bi-x-square"></i></span>
                    @enderror
                    </div>
                </div>

                <button type="submit" id="submit-button" class="btn btn-dark">submit</button>
            </form>
</div>
</section>

</div>

@endsection