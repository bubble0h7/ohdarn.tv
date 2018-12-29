<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>OH DARN | COMING SOON</title>
        
        <!-- Favicon -->
        <link rel="shortcut icon" href="/img/icon.png">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Finger+Paint" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Work+Sans:200" rel="stylesheet"><link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ asset('/css/custom.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title">
                    <span style="color:#fe5b88">O</span>H DARN
                </div>
                <div class="subtitle m-b-md">
                    website coming soon
                </div>
                <div class="links">
                    <a href="https://discord.gg/FjbUQ2B">Join our Discord</a>
                </div>
            </div>
            
            
            
            
            @if (Route::has('login'))
                <div class="bottom-right links">
                    @auth
                        <a href="{{ url('/dashboard') }}">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif
        </div>
    </body>
</html>
