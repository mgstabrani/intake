<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>8VENGERS</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="shortcut icon" href="img/logo.png">

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
        <div class="container">
            <div class="content">
                <div class="title">
                    READ ME!!
                </div>
                <div class="alert alert-danger" role="alert" style="text-align:left;">
                    <ul>
                        <li>Klik tombol hijau di bawah </li>
                        <li>Kamu akan dialihkan ke halaman selanjutnya</li>
                        <li>Unduh soal terlebih dahulu</li>
                        <li>Diskusikan jawabannya dengan house tercinta</li>
                        <li>Jika sudah mendapatkan seluruh jawaban, silakan klik "Next"</li>
                        <li>Tuliskan sandi yang berasal dari karakter-karakter awal jawaban soal sebelumya untuk melanjutkan ke tahap selanjutnya</li>
                        <li><i>Gunakan huruf kecil dan angka</i></li>
                    </ul>
                    <h6 style="text-align: center;">Selamat bersenang-senang</h5>
                </div>
                <a href="/menu" class="btn btn-success">
                        Go to 1st step
                </a>
            </div>
        </div>
    </body>
</html>
