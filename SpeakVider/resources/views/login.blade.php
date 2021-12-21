<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('/assets/css/login.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <div class="header">
        <div class="leftheader">
            <img src="../assets/logo speakvider 2.png" alt="">
        </div>

        <div class="rightheader">

            <div class="need">
                <h4>need</h4>
            </div>


            <div class="help">
                <h4>Help?</h4>
            </div>

        </div>

    </div>

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

                <div class="forgetpass mt-5">
                    <p>Forget Your Password ?</p>
                </div>

                <div class="signup">
                    <a href="/register">
                        <p>Sign Up</p>
                    </a>
                </div>

            </div>
        </form>
    </div>

    <div class="footer">

    </div>


</body>
</html>
