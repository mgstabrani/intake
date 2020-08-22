<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>8VENGERS</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="shortcut icon" href="img/shark.jpg">

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
        <div class="fixed-top mb-5">
            <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #800000 ">
                <ul class="navbar-nav mr-auto">
                    <!-- <li class="nav-item">
                        <a style="color: white">8VENGERS</a>
                        <img src="img/dove.png" height="28">
                    </li> -->
                    <li class="nav-item col">
                        <a style="color: white">Learn for Excellence, Lead for Inspiration</a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <h3>Road to 3rd Step</h3>
            <form action="/sandi2-shark" method="post">
                @csrf
                <div class="form-group">
                    <label for="sandi">Sandi</label>
                    <input type="password" class="form-control" name="sandi" placeholder="Gunakan huruf kecil">
                    <small class="form-text text-muted">Solve this or you cannot move</small>
                </div>
                  <button type="submit" class="btn btn-primary">Next</button>
                  <a href="/menu2-shark" class="btn btn-danger">Back<a>
            </form>
            </div>
        </div>
    </body>
</html>
