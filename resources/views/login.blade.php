<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<title>:: Good Health Admin ::</title>
<link rel="icon" href="favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="/plugins/bootstrap/css/bootstrap.min.css"/>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" type="text/css">

<!-- Custom Css -->
<link rel="stylesheet" href="/css/main.css"/>

</head>

<body class="theme-cyan authentication">
<div class="container d-flex row">
    <div class="card-top"></div>
    <div class="card col-lg-12">
        <h1 class="title"><span>Good Health Hospital</span>Login <span class="msg">Sign in to start your session</span></h1>
        <div class="body">
            <form method="POST">
                <div class="input-group icon before_span">
                    <span class="input-group-addon"> <i class="zmdi zmdi-account"></i> </span>
                    <div class="form-line">
                        <input type="text" class="form-control" name="email" placeholder="Email" required autofocus>
                        <span class="text-danger">@error('email') {{ $message}} @enderror</span>
                    </div>
                </div>
                <div class="input-group icon before_span">
                    <span class="input-group-addon"> <i class="zmdi zmdi-lock"></i> </span>
                    <div class="form-line">
                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                        <span class="text-danger">@error('password') {{ $message}} @enderror</span>
                    </div>
                </div>
                <div>
                    <div class="">
                        <input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-pink">
                        <label for="rememberme">Remember Me</label>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">SIGN IN</button>
                    </div>
                    <div class="text-center"> <a href="forgot-password.html">Forgot Password?</a></div>
                </div>
            </form>
        </div>
    </div>    
</div>
<div class="theme-bg"></div>

<!-- Jquery Core Js --> 
<script src="/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
<script src="/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->

<script src="/bundles/mainscripts.bundle.js"></script><!-- Custom Js -->
</body>

</html>