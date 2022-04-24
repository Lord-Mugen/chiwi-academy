<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Purple+Purse&display=swap" rel="stylesheet">
</head>
<body class="body-login" >
<div class="container-login">
<h1 class="h1-login" >CHIWI  ACADEMY</h1>

<form  action="{{ route('login') }}" method="post">
@csrf 
  <div class="formulario-login row mb-3">
    <label for="inputEmail3" class="textmail col-sm-2 col-form-label">Email Address</label>
    <div class=" col-sm-10">
      <input type="email" class="input-login form-control" id="inputEmail3" name="email" >
    </div>
    @error('email') {{ $message }} @enderror
  </div>
  <div class="formulario-login row mb-3">
    <label for="inputPassword3" class="textmail col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="input-login form-control" id="inputPassword3" name="password" >
    </div>
    @error('password') {{ $message }} @enderror
  </div>
  @if (@session('status'))
    {{ session('status') }}
  @endif
  <button type="submit" class="button-login btn btn-primary">Log In</button>
</form>
      <div style="display: flex; align-items: center">
        <h3 class="h3-login" >Not a member?</h3>
        <a href="/register" style="color: #FFCB1A">Sing UP</a>
      </div>
    </div>
</body>
</html>