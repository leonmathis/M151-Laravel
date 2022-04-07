<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Retro Customs</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

    @include('component.nav')

    @yield('content')

    <!-- Logout Button -->
    <div class="logout" id="logout">
    <button id="logoutnbtn" class="btn"><a href="#" onclick="document.querySelector('#logoutForm').submit()">Logout</a></button>
    </div>

    <!-- Logout Fortify -->
    <form method="POST" action="/logout" id="logoutForm">
    @csrf
    </form>

    <!-- Login Button -->
    <div class="login" id="login">
    <button id="loginbtn" class="btn"><a href="/login">Login</a></button>
    </div>

    <!-- Login Button -->
    <div class="register" id="register">
    <button id="registerbtn" class="btn"><a href="/register">Register</a></button>
    </div>

    <!-- Login Button -->
    <div class="edit" id="edit">
    <button id="editbtn" class="btn"><a href="/edit">Edit</a></button>
    </div>

<script src="../js/app.js"></script>
</body>
</html>
