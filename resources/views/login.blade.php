<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="Template Content">
    <meta name="keywords" content="Template Keywords">
    <meta name="author" content="Dreamguys - DreamsChat">
    <title>DreamsChat</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/feather.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
</head>

<body class="login-form">

    <div class="main-wrapper register-surv">
        <div class="container-fluid">
            <div class="login-wrapper">
                <header class="logo-header">
                    <a href="index.html" class="logo-brand">
                        <img src="{{ asset('assets/img/login-logo.png') }}" alt="Logo" class="img-fluid logo-dark">
                        <h5>DREAMSCHAT</h5>
                    </a>
                </header>
                <div class="login-inbox">
                    <div class="log-auth">
                        <div class="login-auth-wrap">
                            <div class="login-content-head">
                                <h3>Login</h3>
                                <p>Hi Welcome Back</p>
                            </div>
                            <div class="phone-login">
                                <span>
                                    Sign in with
                                    <a href="phone-login.html">
                                        Phone Number
                                    </a>
                                </span>
                            </div>
                        </div>
                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label class="form-label">Email Address <span>*</span></label>
                                <input type="email" name="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Password <span>*</span></label>
                                <div class="pass-group">
                                    <input type="password" name="password" class="form-control pass-input">
                                    <span class="fas fa-eye toggle-password"></span>
                                </div>
                            </div>
                            <div class="form-group form-remember d-flex align-items-center justify-content-between">
                                <div class="form-check d-flex align-items-center justify-content-start ps-0">
                                    <label class="custom-check mt-0 mb-0">
                                        <span class="remember-me">Remember Me</span>
                                        <input type="checkbox" name="remeber">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <span class="forget-pass">
                                    <a href="forgot-password.html">
                                        Forgot Password
                                    </a>
                                </span>
                            </div>
                            <button type="submit"
                                class="btn btn-primary w-100 btn-size justify-content-center">Login</button>
                            <div class="login-or">
                                <span class="span-or-log">or Login With</span>
                            </div>
                            <div class="form-group mb-0">
                                <ul class="social-login d-flex align-items-center">
                                    <li class="text-center">
                                        <a href="javascript:void(0)"
                                            class="d-flex align-items-center justify-content-center">
                                            <img src="{{ asset('assets/img/icons/google.svg') }}" class="img-fluid"
                                                alt="Google">
                                            <span>Google</span>
                                        </a>
                                    </li>
                                    <li class="text-center">
                                        <a href="javascript:void(0)"
                                            class="d-flex align-items-center justify-content-center">
                                            <img src="{{ asset('assets/img/icons/facebook.svg') }}" class="img-fluid"
                                                alt="Facebook">
                                            <span>Facebook</span>
                                        </a>
                                    </li>
                                    <li class="text-center">
                                        <a href="javascript:void(0)"
                                            class="d-flex align-items-center justify-content-center">
                                            <img src="{{ asset('assets/img/icons/apple.svg') }}" class="img-fluid"
                                                alt="Apple">
                                            <span>Apple</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="bottom-text text-center">
                                <p>Don’t have account? <a href="register.html">Sign up!</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="{{ asset('assets/js/jquery-3.7.0.min.js')}}" type="7de321beeef26f35672baf50-text/javascript"></script>

    <script src="{{ asset('assets/js/bootstrap.bundle.min.js')}}" type="7de321beeef26f35672baf50-text/javascript"></script>

    <script src="{{ asset('assets/js/script.js')}}" type="7de321beeef26f35672baf50-text/javascript"></script>
    <script src="{{ asset('assets/js/rocket-loader.min.js') }}" data-cf-settings="7de321beeef26f35672baf50-|49" defer>
    </script>
</body>


</html>

