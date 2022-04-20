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
            <label for="name">Name</label>
            <input type="text" name="name" id="name" placeholder='Name'>
            <label for="username">Username</label>
            <input type="text" name="username" id="username" placeholder='Username'>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder='Email'>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder='Choose a password'>
            <label for="password_confirmation">Password again</label>
            <input class='aux' type="password" name="password_confirmation" id="password_confirmation" placeholder='Repeat your password'>
            <button type="submit">CREATE ACCOUNT</button>
        </form>
    </div>
    <div class='text'>
        <p>Have an Account?</p>
        <p class='log-text'>Log in</p>
    </div>
</body>
</html>