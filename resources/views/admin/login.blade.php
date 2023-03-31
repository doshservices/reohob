<!DOCTYPE html><html lang="en">

<head><meta charset="utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width,initial-scale=1"><meta name="description" content="Reohob Admin Login"><meta name="keywords" content="Reohob Admin Login"><title>Reohob Admin Login</title><link href="/img/logo/favicon.png" rel="icon"><link rel="apple-touch-icon" href="/img/logo/touch-icon-iphone.png"><link rel="apple-touch-icon" sizes="152x152" href="/img/logo/touch-icon-ipad.png"><link rel="apple-touch-icon" sizes="180x180" href="/img/logo/touch-icon-iphone-retina.png"><link rel="apple-touch-icon" sizes="167x167" href="/img/logo/touch-icon-ipad-retina.png"><link href="/css/vendor.css" rel="stylesheet" type="text/css"><link href="/css/admin.css" rel="stylesheet" type="text/css"><link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet"><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]--></head>
    
    <body>
        <div id="loader"><div id="loader-content"><div id="loader-circle"></div><span>Reohob Admin Login</span></div></div>
        
        <div id="wrapper" class="full-height auth-widget">
            <div class="card card-shadow auth-panel"><h4 class="h4 mb-5">Sing In</h4>
            @include('inc.messages')

                <form class="mb-3" id="login_form" method="POST" action="/login/admin" aria-label="{{ __('login admin') }}">

                    @csrf
            <div class="form-field">
                <input type="text" placeholder="Email" name="email" class="form-control">
            </div>

            <div class="form-field">
                <input type="password" placeholder="Password" name="password" class="form-control">
            </div>

            <div class="form-field d-flex">
                <div class="cf-checkbox mr-auto">
                    <input type="checkbox" id="remeber"> <label for="remeber">Remeber me</label>
                </div>
                {{-- <a href="forgot.html">Forgot password?</a> --}}
            </div>
            <div class="form-field">
                <input type="submit" value="Sign In" class="btn btn-block bg-cyan">
            </div>
        </form>

        {{-- <div class="form-field d-flex justify-content-center"><a href="#" class="btn bg-blue"><i class="icon ion-social-facebook"></i> <span class="ml-1">Facebook login</span> </a><a href="#" class="btn bg-red ml-2 ml-sm-3"><i class="icon ion-social-googleplus"></i> <span class="ml-1">Google login</span></a>
        </div>
        <p>Don't you have an account? <a href="signup.html" class="c-cyan">Sign Up</a></p> --}}
    
    </div>
    
    </div>
        
        <script src="/js/vendor.js"></script><script src="/js/base/custom.js"></script>
    </body>

</html>