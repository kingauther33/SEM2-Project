<!doctype html>
<html lang="en">
<head>
    <title>Login 10</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="front/login/css/style.css">

</head>
<body class="img js-fullheight" style="background-image: url({{asset('front/login/images/bg.jpg')}}); ">
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="login-wrap p-0">
                    <br>
                    <h3 class="mb-4 text-center">Have an account?</h3>
                    <form action="{{ route('admin.checklogin') }}" method="post" class="signin-form">
                        @csrf

                        <div class="results">
                            @if(Session::get('fail'))
                                <div class="alert alert-danger">
                                    {{ Session::get('fail') }}
                                </div>
                                @endif
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="email" placeholder="Enter Email" value="{{ old('email') }}">
                            <span class="text-danger">@error('email') {{ $message }} @enderror</span>
                        </div>
                        <div class="form-group">
                            <input id="password-field" type="password" class="form-control" name="password" placeholder="Password">
                            <span class="text-danger">@error('password') {{ $message }} @enderror</span>
                            {{--  <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>--}}
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
                        </div>
                        <div class="form-group d-md-flex">
                            <div class="w-50">
                                <label class="checkbox-wrap checkbox-primary">Remember Me
                                    <input type="checkbox" checked>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="w-50 text-md-right">
                                <a href="#" style="color: #fff">Forgot Password</a>
                            </div>
                        </div>
                    </form>
                    <div class="social d-flex text-center">
                       <br><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="public/front/login/js/jquery.min.js"></script>
<script src="public/front/login/js/popper.js"></script>
<script src="public/front/login/js/bootstrap.min.js"></script>
<script src="public/front/login/js/main.js"></script>

</body>
</html>
