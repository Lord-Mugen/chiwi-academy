<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head>
<body>
    <h1>CHiWI ACADEMY</h1>
    <div class='formContainer'>
        <form action="{{ route('register') }}" method="post">
            @csrf
            <div class="containerDiv">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" placeholder='Name' value="{{ old('name') }}">
                @error('name')
                    <p class="errorMessage"> {{ $message }} </p>
                @enderror
            </div>
            <div class="containerDiv">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" placeholder='Username' value="{{ old('username') }}">
                @error('username')
                    <p class="errorMessage"> {{ $message }} </p>
                @enderror
            </div>
            <div class="containerDiv">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder='Email' value="{{ old('email') }}">
                @error('email')
                    <p class="errorMessage"> {{ $message }} </p>
                @enderror
            </div>
            <div class="containerDiv">
                <label for="rol">Rol</label>
                <select name="rol" id="rol">
                    <option value="estudiante">Estudiante</option>
                    <option value="profesor">Profesor</option>
                </select>
            </div>
            <div class="containerDiv">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder='Choose a password'>
                @error('password')
                    <p class="errorMessage"> {{ $message }} </p>
                @enderror
            </div>
            <div class="containerDiv">
                <label for="password_confirmation">Password again</label>
                <input class='aux' type="password" name="password_confirmation" id="password_confirmation" placeholder='Repeat your password'>
            </div>
            <button type="submit">CREATE ACCOUNT</button>
        </form>
    </div>
    <div class='text'>
        <p>Have an Account?</p>
        <a href="/" class='log-text'>Log in</a>
    </div>
</body>
</html>