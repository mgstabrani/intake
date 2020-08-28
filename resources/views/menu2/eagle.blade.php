<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="shortcut icon" href="img/eagle.jpg">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

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
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Unduh soal</strong> terlebih dahulu, kemudian <strong>klik "Next"</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>    
            <div class="row justify-content-center">
                <div class="card" style="width: 18rem;">
                    <img src="img/eagle.jpg" class="card-img-top" alt="eagle" height="220" >
                    <div class="card-body">
                        <h3 class="card-text">Eagle</h3>
                        <p>Fly high</p>
                        <p>
                        <a href="/pdf/eagle/eagle-2.pdf" download class="btn btn-success">
                            Unduh soal
                        </a>
                        </p>
                        <p>
                        <a href="/sandi2-eagle" class="btn btn-primary">
                            Next
                        </a>
                        <a href="/sandi1-eagle" class="btn btn-danger">Back<a>
                        </p>
                    </div>
                </div>                      
            </div>
        </div>
    </body>
</html>
