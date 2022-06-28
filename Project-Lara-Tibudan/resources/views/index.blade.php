<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
		<title> User Login and Registration </title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" type ="text/css" href ="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="login-box">
		<div class = "row">
			<div class = "col-md-6 login-left">
				<h2><br> Login Here </h2>
				<form action="{{route('Login-Validation')}}" method="post">
					@csrf
					<div class ="form-group">
						<label> Username</label>
						<input type="text" name="stID" class="form-control" required>
					</div>
				<div class ="form-group">
					<label> Password</label>
					<input type="password" name="lsName" class="form-control" required>
				</div>
				<br>
					<button type="submit" class="btn btn-primary">Login</button>
				</form>
			</div>

			
	<div class = "col-md-6 login-right">
					<h2><br> Register Here </h2>
					<form action="{{route('Register-Validation')}}" method="post">
						@csrf
						<div class ="form-group">
							<label> Student ID</label>
							<input type="text" name="stID" class="form-control" required>
						</div>
					<div class ="form-group">
						<label> First Name</label>
						<input type="text" name="frName" class="form-control" required>
					</div>
					<div class ="form-group">
						<label> Last Name</label>
						<input type="text" name="lsName" class="form-control" required>
					</div>
					<div class ="form-group">
						<label> Middle Initial</label>
						<input type="text" name="miInitial" class="form-control" required>
					</div>
					<div class ="form-group">
						<label> Course</label>
						<input type="text" name="cour" class="form-control" required>
					</div>
					<div class ="form-group">
						<label>Year Level</label>
						<input type="text" name="yrLevel" class="form-control" required>
					</div>
				<br>
			<button type="submit" class="btn btn-primary">Register</button>
			<br>
			<hr>
			<br>
			@if(Session::has('saved'))
            	<div style="border-style:inset; background-color: lightgreen; border: radius 5px;">{{Session::get('saved')}}</div>
        	@endif
        	@if(Session::has('failed'))
            	<div style="border-style:inset; background-color: red; border: radius 5px;">{{Session::get('failed')}}</div>
        	@endif
			</form>
		</div>
	</div>
</div>
	</div>
    </body>
</html>
