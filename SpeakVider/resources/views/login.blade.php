<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('/assets/css/login.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light navigasi border-bottom border-dark    ">
        <div class="container-fluid">
            <a class="navbar-brand" href="/home">
                <img src="/assets/logo/logo speakvider 1.png" alt="" width="197px" height="93px" class="d-inline-block align-text-top">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse fs-4" id="navbarNav">

                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/register">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="content">
        <form action="/login" method="post">
            @csrf
            <div class="card-login">
                <div class="card-login-atas mt-5">
                    <div class="card-login-atas-kiri">
                        <b>Login</b>
                    </div>
                </div>
                <div class="card-login-tengah">
                    <div class="isi-tengah">


                        <div class="card-tengah-isi"><b>Email</b></div>
                        <div class="form-floating">
                            <div class="card-tengah-isi">
                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"  id="email" placeholder="Email" required value="{{old ('email')}}" >
                            </div>
                            @error('email')
                            <div class="text-danger">{{$message}}</div>
                            @enderror

                        </div>
                    </div>

                    <div class="isi-tengah">
                        <div class="card-tengah-isi"><b>Password</b></div>
                        <div class="form-floating">
                            <div class="card-tengah-isi">
                                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"  id="password" placeholder="Password" required value="{{old ('password')}}" >
                            </div>
                            @error('password')
                            <div class="text-danger">{{$message}}</div>
                            @enderror

                        </div>
                    </div>

                </div>

                <div class="card-login-bawah">
                    <button class=" mt-5 rounded-pill"type="submit">
                        Login
                    </button>
                </div>

                <div class="signup mt-3">
                    <p>or</p>
                    <a href="/register">
                        <p>Sign Up</p>
                    </a>
                </div>

            </div>
        </form>
    </div>

    <div class="footer">

    </div>

    @include('sweetalert::alert')

</body>
</html>
