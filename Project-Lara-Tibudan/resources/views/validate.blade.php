<html>
	<head>
		<title> Validated User </title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" type ="text/css" href ="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="login-box">
			<div class = "row">
				<div class = "col-md-6 login-left">
					<h2><br>Login Successfully! </h2>
						<div class ="form-group">
							<label>Welcome User!</label>
						</div>
						<div class ="form-group">
							<label> Sample</label>
						</div>
						<br>
						<button type="button" onClick="location.href='{{ url('/dashboard') }}'" class="btn btn-primary">Go to Homepage</button>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
