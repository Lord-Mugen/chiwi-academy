<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
    <title>Chiwi-academy</title>
</head>


<header>
    <nav class="navbar">
        <div class="navbar-logo-container">
            <a class="navbar-logo-link"><h3 class="navbar-logo">CHiWI ACÁDEMY</h3></a>
        </div>

        <div class="navbar-icons" style="display: flex; align-items: center; gap: 1rem">
            <p> {{ auth()->user()->name }} </p>
            
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <button type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg"  fill="currentColor" class="bi bi-box-arrow-right icon-exit" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
                        <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                    </svg>
                </button>
            </form>

        </div>
    </nav>
</header>

<body>
    
</body>
</html>