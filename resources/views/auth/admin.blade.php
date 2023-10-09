<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lato:wght@500&display=swap" />
    <link rel="stylesheet" href="resources\css\reg.css">
</head>
<body style="background-color: #C5BFBF;">
    <div class="container-fluid">
        <section>
            <div class="row justify-content-center align-items-center g-2 mt-5" >
                <div class="col-sm-12 col-md-10 col-xm-12">
                    <div class="card" id="head" style="background-color: #FFFFFF;">
                      <div class="card-body" style="padding: 0;">
                        <div class="row d-flex flex-wrap-reverse">
                            <div class="col-md-5 col-sm-12 col-xs-12">
                                <h4 class="card-title text-center">Welcome Back !</h4>
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="row">
                                            <label for="email">{{ __('Email Address') }}</label>
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                {{-- <input  type="email" id="email" placeholder="Enter your email"> --}}
                                                <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label for="password" >{{ __('Password') }}</label>
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                {{-- <input type="password" id="password" placeholder="Enter your password"> --}}
                                                <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                            </div>
                                        </div>
                                        <div class="row mt-1 ms-lg-4 ms-0">
                                            <div class="col-xs-6 col-sm-6 col-md-10 col-lg-6 d-flex">
                                                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} style="width: 16px;height: 15px;"><span id="rem" for="remember" class="ms-1">{{ __('Remember Me') }}</span>
                                            </div>
                                            <div class="col-xs-6 col-sm-6 col-md-10 col-lg-6">
                                                <div class="offset-2" style="margin-top: -2%;">
                                                    @if (Route::has('password.request'))
                                                    <a href="{{ route('password.request') }}" id="rem">{{ __('Forgot Your Password?') }}</a>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-4 col-xs-12 col-sm-12 col-md-12 col-lg-12 justify-content-center">
                                            <button type="submit" id="sign-in">{{ __('Sign In') }}</button>
                                        </div>
                                        {{-- <div class="row text-center mt-4 ms-lg-3 ms-0 col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <p id="footer">Don’t have an account? <a href="{{ route('register') }}" style="text-decoration: none; color: #000000;">Sign up for free
                                            </a></p>
                                        </div> --}}
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-7 col-sm-12 col-xs-12 ">
                                <img src="public/image/admin-page.png" alt="login" class="card-img" style="width: 100%;height: 100%;">
                            </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>
</html>
