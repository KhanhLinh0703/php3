<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <title>Sign Up</title>

    <link href="{{ asset('auth/css/classic.css') }}" rel="stylesheet" />
</head>

<body>
    <main class="main d-flex w-100">
        <div class="container d-flex flex-column">
            <div class="row h-100">
                <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
                    <div class="d-table-cell align-middle">
                        <div class="text-center mt-4">
                            <h1 class="h2">Get started</h1>
                            <p class="lead">
                                Start creating the best possible user experience for you
                                customers.
                            </p>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <div class="m-sm-4">
                                    <form method="post" action="{{ route('addRegister') }}" id="validation-form">
                                      @csrf
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control form-control-lg" type="email" name="email"
                                                placeholder="Enter your email" />
                                        </div>
                                        <div class="form-group">
                                            <label>Fullname</label>
                                            <input class="form-control form-control-lg" type="text" name="name"
                                                placeholder="Enter your name" />
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input class="form-control form-control-lg" type="password" name="password"
                                                id="password" placeholder="Enter password" />
                                        </div>
                                        <div class="form-group">
                                            <label>Re Password</label>
                                            <input class="form-control form-control-lg" type="password"
                                                name="password_confirmation" placeholder="Enter re-password" />
                                        </div>

                                        <div class="d-flex mt-2">
                                            <a href="signIn.php" name="" class="ml-auto">You have account? Sign
                                                in?</a>
                                        </div>

                                        <div class="text-center mt-3">
                                            <!-- <a href="?act=signUp.php" class="btn btn-lg btn-primary"
                          >Sign up</a
                        > -->
                                            <button type="submit" name="signUp" class="btn btn-lg btn-primary">Sign
                                                up</button>
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
