<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>DER3 LABS</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/allxf.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <link rel="stylesheet" href="css/bootstrap4-neon-glow.min.css">


    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel='stylesheet' href='//cdn.jsdelivr.net/font-hack/2.020/css/hack.min.css'>
    <link rel="stylesheet" href="css/main.css">
</head>

<body class="imgloaded">
<div class="glitch">
    <div class="glitch__img"></div>
    <div class="glitch__img"></div>
    <div class="glitch__img"></div>
    <div class="glitch__img"></div>
    <div class="glitch__img"></div>
</div>
<div class="navbar-dark text-white">
    <div class="container">
        <nav class="navbar px-0 navbar-expand-lg navbar-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="pl-md-0 p-3 text-decoration-none text-light">
                        <h3 class="bold"><span class="color_danger">DER3</span><span class="color_white"></span></h3>
                    </a>
                </div>
                <div class="navbar-nav ml-auto">
                    @guest
                    @if(Route::has('login'))
                            <a href="{{route("login")}}" class="p-3 text-decoration-none text-white bold">Login</a>
                        @endif
                        @if(Route::has("register"))
                            <a href="{{route("register")}}" class="p-3 text-decoration-none text-white bold">Register</a>

                        @endif

                        @else
                        <a href="{{route("home")}}" class="p-3 text-decoration-none text-light bold">Challenges</a>
                        <a href="{{route("score")}}" class="p-3 text-decoration-none text-white bold">ScoreBoard</a>
                        <a class="p-3 text-decoration-none text-white bold" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>


                    @endguest
                </div>
            </div>
        </nav>

    </div>
</div>
@yield("content")

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>
