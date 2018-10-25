
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" media="screen" href="/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" media="screen" href="/css/style-ori.css" />
	<link rel="stylesheet" type="text/css" href="/landing/css/login.css">
</head>

<body>
	<nav class="fh5co-nav" role="navigation">
    <div class="container">
      <div class="row">
        <div class="col-xs-2 text-left">
          <div id="fh5co-logo"><a href="{{ route('agent.landing') }}">TaxiVaxi<span>.</span></a></div>
        </div>
        <div class="col-xs-10 text-right menu-1">
          <ul>
            <li><a href="{{ route('agent.landing') }}">Home</a></li>
            <!-- <li><a href="#fh5co-about">About Us</a></li> -->
            <!-- <li><a href="#fh5co-services">What We Do</a></li> -->
            <li><a href="{{ route('agent.contact') }}">Contact Us</a></li>
           <!--  <li><a href="{{ route('agent.signup') }}">Register</a></li> -->
            <li class="active"><a href="{{ route('agent.login') }}">Login</a></li>
          </ul>
        </div>
      </div>
    </div>
  </nav>

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

	<div class="login-form-wrap" style="background-color:#3E4766">
		<form method="post"  action="{{ route('agent.post-login') }}">
			{{ csrf_field() }}
			<h1>LOGIN</h1>
			<div>
				<label>USERNAME</label>
				<input type="text" class="form-control" name="email" id="email" autofocus />
			</div>
			<div>
				<label>PASSWORD</label>
				<input type="password" class="form-control" id="password" name="password" />
			</div>
			@if($flash = session('fail-message'))
					<p style="text-align:center; color:red">{{ $flash }}</p>
			@endif
			<div class="login-btn-last-row">
				<input type="button" id="btnlogin" class="custom-submit-btn" value="Login"/>
			</div>
			<div class="login-forget-wrap">
				<p>Forget Password ? <span><a href="{{ route('agent.reset-password') }}">Reset Here</a></span></p>
			</div>
		</form>
	</div>

<script src="/js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript">

	$(document).ready(function(){
    

		$("#btnlogin").click(function(){
		    $.post("{{ route('agent.post-login') }}",{_token:$('input[name=_token]').val(),email:$('#email').val(),password:$('#password').val()}, function(data){
		        alert("Data: " + data);
		        var json = $.parseJSON(data);

		        if(json[0].message=="success"){
		        	alert('Login Successfully');
		        	window.location="/agents/dashboard"
		        }

		        if(json[0].message=="fail"){
					alert('worng pwd');
					window.location="/agents/login"
		        }


		    });
		});


});


	</script>
</body>

</html>
