<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
            <div class="container mt-5 ">
            <div class="row">
                <div class="card mb-2 mr-2" style="width: 18rem;">
                    <img src="dolphin.png" class="card-img-top" alt="dolphin">
                    <div class="card-body">
                        <h3 class="card-text">Dolphin</h3>
                    </div>
                </div>
                <div class="card mb-2 mr-2" style="width: 18rem;">
                    <img src="img/dove.png" class="card-img-top" alt="dove">
                    <div class="card-body">
                        <h3 class="card-text">Dove</h3>
                    </div>
                </div>
                <div class="card mb-2 mr-2" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="eagle">
                    <div class="card-body">
                        <h3 class="card-text">Eagle</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="card mb-2 mr-2" style="width: 18rem;">
                    <img src="dolphin.png" class="card-img-top" alt="hornbill">
                    <div class="card-body">
                        <h3 class="card-text">Hornbill</h3>
                    </div>
                </div>
                <div class="card mb-2 mr-2" style="width: 18rem;">
                    <img src="img/dove.png" class="card-img-top" alt="komodo">
                    <div class="card-body">
                        <h3 class="card-text">Dove</h3>
                    </div>
                </div>
                <div class="card mb-2 mr-2" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="lion">
                    <div class="card-body">
                        <h3 class="card-text">Lion</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="card mb-2 mr-2" style="width: 18rem;">
                    <img src="dolphin.png" class="card-img-top" alt="mantaray">
                    <div class="card-body">
                        <h3 class="card-text">Mantaray</h3>
                    </div>
                </div>
                <div class="card mb-2 mr-2" style="width: 18rem;">
                    <img src="img/dove.png" class="card-img-top" alt="rhino">
                    <div class="card-body">
                        <h3 class="card-text">Rhino</h3>
                    </div>
                </div>
                <div class="card mb-2 mr-2" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="shark">
                    <div class="card-body">
                        <h3 class="card-text">Shark</h3>
                    </div>
                </div>
            </div>
        </div>
                
            </div>
        </div>
    </body>
</html>
