<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/assets/css/layout.css') }}">
        <link rel="stylesheet" href="{{ asset('/assets/css/aboutus.css') }}">
        <link rel="stylesheet" href="{{ asset('/assets/css/contactus.css') }}">
        <link rel="stylesheet" href="{{ asset('/assets/css/speakerdetail.css') }}">
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>

        <title></title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light navigasi">
            <div class="container-fluid">
                <a class="navbar-brand" href="/home">
                    <img src="/assets/logo/logo speakvider 1.png" alt="" width="197px" height="93px" class="d-inline-block align-text-top">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/allspeakers">All Speakers</a>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Transactions</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/aboutus">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contactus">Contact Us</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container mt-4 mb-4 yieldContainer">
            <div class="yield">
                @yield('yieldPlace')
            </div>
        </div>

        <div class="footer mt-2">
            <img src="/assets/logo/logo speakvider 1.png" alt="" width="179px" height="83px" class="d-inline-block align-text-top mt-2">
            <div class="socialMedia mt-2">
                <a href="https://www.instagram.com/speakvider.id/"><img src="/assets/logo/instagram.png" alt="" width="50px" height="50px"></a>
                <a href="https://twitter.com/speakvider"><img src="/assets/logo/twitter.png" alt="" width="50px" height="50px"></a>
                <a href="https://www.facebook.com/speakvider.id/"><img src="/assets/logo/facebook.png" alt="" width="50px" height="50px"></a>
            </div>
            <p class="mt-2 mb-2">Copyright © 2021 SpeakVider</p>
        </div>
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    </body>
</html>
<link rel="stylesheet" href="{{ asset('assets/css/layout.css') }}">
