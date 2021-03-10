{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('admin.login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}


<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from adminui-v1.0.bittyfox.com/default/aqua-black/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 20 Mar 2020 16:06:47 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin-UI</title>
	<!-- Bootstrap -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<!-- slimscroll -->
	<link href="assets/css/jquery.slimscroll.css" rel="stylesheet">
	<!-- Fontes -->
	<link href="assets/css/font-awesome.min.css" rel="stylesheet">
	<link href="assets/css/simple-line-icons.css" rel="stylesheet">
	<!-- all buttons css -->
	<link href="assets/css/buttons.css" rel="stylesheet">
	<!-- animate css -->
<link href="assets/css/animate.css" rel="stylesheet">
<!-- top nev css -->
<link href="assets/css/page-header.css" rel="stylesheet">
<!-- adminui main css -->
	<link href="assets/css/main.css" rel="stylesheet">
	<!-- aqua black theme css -->
	<link href="assets/css/aqua-black.css" rel="stylesheet">
	<!-- media css for responsive  -->
	<link href="assets/css/main.media.css" rel="stylesheet">
	<!--[if lt IE 9]> <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script> <![endif]-->
	<!--[if lt IE 9]> <script src="dist/html5shiv.js"></script> <![endif]-->
</head>

<body class="aqua-bg login">
	<div class="middle-box text-center loginscreen ">
		<div class="widgets-container">
			<div>
                <h2>Bizz-Central.com.pk</h2>
                <hr>
			</div>
			<h3>Welcome to Admin-Bizz-Central</h3>
			<p>Login in. To see it in action.</p>
            <form action="{{route('admin.login')}}" method="POST" class="top15">
                @csrf
				<div class="form-group">
					<input type="email" name="email" required="" placeholder="Username" class="form-control">
				</div>
				<div class="form-group">
					<input type="password" name="password" required="" placeholder="Password" class="form-control">
				</div>
				<button class="btn aqua block full-width bottom15" type="submit">Login</button>
				<a href="forgot_password.html"><small>Forgot password?</small></a>
			</form>
		</div>
	</div>
</body>


<!-- Mirrored from adminui-v1.0.bittyfox.com/default/aqua-black/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 20 Mar 2020 16:06:47 GMT -->
</html>