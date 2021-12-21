<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('/assets/css/register.css') }}">
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
        <form action="/register" method="post">
            @csrf;
            <div class="card-register">
                <div class="card-register-atas">
                    <div class="card-register-atas-kiri">
                        <b>Register as Member</b>
                    </div>
                </div>
                <div class="card-register-tengah">


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

                    <div class="isi-tengah">
                        <div class="card-tengah-isi"><b>Phone Number</b></div>
                        <div class="form-floating">
                            <div class="card-tengah-isi">
                                <input type="number" name="phoneNumber" class="form-control @error('phoneNumber') is-invalid @enderror"  id="phoneNumber" placeholder="Phone Number" required value="{{old ('phoneNumber')}}" >
                            </div>
                            @error('phoneNumber')
                            <div class="text-danger">{{$message}}</div>
                            @enderror

                        </div>
                    </div>

                </div>

                <div class="card-register-bawah">
                    <button class=" mt-5 rounded-pill"type="submit">
                        Register
                    </button>
                </div>
                    <small class="text">Already registered? <a href="/login">Login</a></small>


            </div>
        </form>
    </div>

    <div class="footer">

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
