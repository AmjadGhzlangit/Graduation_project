<!DOCTYPE html>
<html>
<head>
    <title>Block-Vote</title>
    {{-- Main Css File  --}}
    <link rel="stylesheet" href="{{ URL::asset('css/index.css'); }} ">
    <!-- Font Awesome Library -->
    <link rel="stylesheet" href="{{ URL::asset('css/all.min.css'); }}">
    {{-- Google Font  --}}
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
</head>
<body>
    <header class="site-header clearfix">
        <nav>
            <div class="logo">
                <h1>E-Vote</h1>
            </div>
            
        </nav>
        <section>
            <div class="leftside">
                <img src="{{ URL::asset('img/home_page.png'); }}">
            </div>
            <div class="rightside">
                <h1>VOTE!</h1>
                <p> LET YOUR VOICE BE HEARD! </p>
                @if (Route::has('login'))
                <div>
                    @auth
                        <a href="{{ url('/dashboard') }}" >Dashboard</a>
                    @else
                    <a href="{{ route('login') }}"><button>LOGIN</button></a>
                        @if (Route::has('register'))
                        <a href="{{ route('register') }}"> <button>USER SIGN-UP</button></a>
                        @endif
                    @endauth
                </div>
            @endif
            </div>

        </section>

    </header>
</body>

</html>