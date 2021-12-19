<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('/assets/css/login.css') }}">
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
        <form action="" method="post">
            <div class="card-login">
                <div class="card-login-atas">
                    <div class="card-login-atas-kiri">
                        <b>Login</b>
                    </div>
                </div>
                <div class="card-login-tengah">
                    <div class="isi-tengah">
                        <div class="card-tengah-isi"><b>Email</b></div>
                        <div class="card-tengah-isi">
                            <input type="email" placeholder="Email">
                        </div>
                    </div>

                    <div class="isi-tengah">
                        <div class="card-tengah-isi"><b>Password</b></div>
                        <div class="card-tengah-isi">
                            <input type="password" placeholder="Password">
                        </div>
                    </div>

                </div>

                <div class="card-login-bawah">
                    <button>
                        Login
                    </button>
                </div>

                <div class="forgetpass">
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
