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

<form   method="post">
@csrf 
  <div class="formulario-login row mb-3">
    <label for="inputEmail3" class="textmail col-sm-2 col-form-label">Email Address</label>
    <div class=" col-sm-10">
      <input type="email" class="input-login form-control" id="inputEmail3" name="inputEmail3" >
    @error('inputEmail3') {{$message}} @enderror
    </div>
  </div>
  <div class="formulario-login row mb-3">
    <label for="inputPassword3" class="textmail col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="input-login form-control" id="inputPassword3" name="inputPassword3" >
      @error('inputPassword3') {{$message}} @enderror
    </div>
  </div>
  
   
  <button type="submit" class="button-login btn btn-primary">Log In</button>
</form>
      
    <h3 class="h3-login" >Not a member? Sing UP </h3>
    </div>
</body>
</html>