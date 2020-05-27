<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
 	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}">

</head>
<body>
<div class="container h-100">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header text-center">
				<h3>Login to ListKan</h3>

			</div>
			<div class="card-body">
				<form method="POST" action="{{ route('login') }}">
                @csrf
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
                        <input placeholder="username" id="username" type="username" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                            @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="password" required autocomplete="current-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
					</div>

                    @if (Route::has('password.request'))
                    <div class="d-flex justify-content-center float-left">
                        <a class="text-warning" href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
                    </div>
                    @endif

					<div class="form-group">
                        <button type="submit" class="btn btn-primary login_btn float-right">
                            {{ __('Login') }}
                        </button>
					</div>
				</form>
			</div>
			<div class="card-footer ">
                <div class="d-flex justify-content-center">
					<a class="text-warning" href="{{ route('register') }}">Don't have account yet?</a>
                </div>
                <hr>

			</div>
		</div>
	</div>
</div>
</body>
</html>