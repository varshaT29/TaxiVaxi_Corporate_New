<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" media="screen" href="/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" media="screen" href="/css/style-ori.css" />
</head>
<body>
	<header class="login-head">
		<div class="container">
			<a class="navbar-brand" href="#">Fleet247.in</a>
		</div>
	</header>
	
	@if($flash = session('fail-message'))
	<div class="alert-wrap alert-wrap-login">
		<div class="alert alert-danger custom-alert-fail" role="alert">
			<p>{{ $flash }}</p>
		</div>
	</div>
	@endif

	@if($flash = session('success-message'))
	<div class="alert-wrap">
		<div class="alert alert-success custom-alert-success" role="alert">
			<p>{{ $flash }}</p>
		</div>
	</div>
	@endif

	<div class="login-form-wrap">
		<form method="post" action="{{ route('agent.post-reset-password') }}">
			{{ csrf_field() }}
			<h1>RESET PASSWORD</h1>
			<div>
				<label>Email/Username</label>
				<input type="email" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="Please enter your email" name="email" autofocus required/>
			</div>
			<div class="login-btn-last-row">
				<input type="submit" class="custom-submit-btn" value="Reset Password"/>
			</div>
			<div class="login-forget-wrap">
				<p>Login? <span><a href="{{ route('agent.login') }}">Click Here</a></span></p>
			</div>
		</form>
	</div>
</body>
</html>
