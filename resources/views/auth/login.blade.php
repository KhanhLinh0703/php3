<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Sign In - AppStack - Admin &amp; Dashboard Template</title>

    <link rel="preconnect" href="//fonts.gstatic.com/" crossorigin="" />

    <link href="{{ asset('auth/css/classic.css') }}" rel="stylesheet" />
    <script src="{{ asset('auth/js/app.js') }}"></script>
</head>

<body>
    <main class="main d-flex w-100">
        <div class="container d-flex flex-column">
            <div class="row h-100">
                <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
                    <div class="d-table-cell align-middle">
                        <div class="text-center mt-4">
                            <h1 class="h2">Welcome back</h1>
                            <p class="lead">Sign in to your account to continue</p>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="m-sm-4">
                                    <form action="{{ route('addLogin') }}" method="post" id="validation-form">
                                      @csrf  
                                      <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control form-control-lg" type="email" name="email"
                                                placeholder="Enter your email" />
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input class="form-control form-control-lg" type="password" name="password"
                                                required placeholder="Enter your password" />
                                        </div>

                                        <div class="d-flex mt-2">
                                            <a href="resetPassword.php">Forgot password?</a>
                                            <a href="{{ route('register') }}" name="" class="ml-auto">You don't
                                                have account? Sign up?</a>
                                        </div>

                                        <div class="text-center mt-3">
                                            <button type="submit" name="signIn" class="btn btn-lg btn-primary">Sign
                                                in</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

</body>

</html>
