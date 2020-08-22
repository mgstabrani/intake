<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="shortcut icon" href="img/shark.jpg">

        <style>
            h3{
                text-align:center;
            }
            p {
                text-align:center;
            }
        </style>
        <title>8VENGERS</title>
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
        <br><br>
        <div class="container mt-5 ">
            <div class="row justify-content-center">
                <div class="card" style="width: 18rem;">
                    <img src="img/shark.jpg" class="card-img-top" alt="shark" height="220" >
                    <div class="card-body">
                        <h3 class="card-text">Shark</h3>
                        <p>No complain do the best</p>
                        <p>
                        <a href="/pdf/shark.pdf" download class="btn btn-success">
                            Unduh soal
                        </a>
                        </p>
                        <p>
                        <a href="/sandi3-shark" class="btn btn-primary">
                            Next
                        </a>
                        <a href="/sandi2-shark" class="btn btn-danger">Back<a>
                        </p>
                    </div>
                </div>                      
            </div>
        </div>
    </body>
</html>
