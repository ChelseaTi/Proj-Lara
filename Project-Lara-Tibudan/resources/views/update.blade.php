<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
		<title> User Login and Registration </title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" type ="text/css" href ="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
	
	<div class = "col-md-6 login-right">
					<h2><br> Register Here </h2>
					<form action="{{route('Update')}}" method="post">
						@csrf
						<div class ="form-group">
							<label> Student ID</label>
							<input type="hidden" class="form-control"  name="id" value="{{$currentRecord->id}}">
							<input type="text" name="stID" value="{{$currentRecord->stID}}" class="form-control" required>
						</div>
					<div class ="form-group">
						<label> First Name</label>
						<input type="text" name="frName" value="{{$currentRecord->frName}}" class="form-control" required>
					</div>
					<div class ="form-group">
						<label> Last Name</label>
						<input type="text" name="lsName" value="{{$currentRecord->lsName}}" class="form-control" required>
					</div>
					<div class ="form-group">
						<label> Middle Initial</label>
						<input type="text" name="miInitial" value="{{$currentRecord->miInitial}}" class="form-control" required>
					</div>
					<div class ="form-group">
						<label> Course</label>
						<input type="text" name="cour" value="{{$currentRecord->cour}}" class="form-control" required>
					</div>
					<div class ="form-group">
						<label>Year Level</label>
						<input type="text" name="yrLevel" value="{{$currentRecord->yrLevel}}" class="form-control" required>
						<input type="hidden" class="form-control"  name="statu" value="{{$currentRecord->status}}">
					</div>
				<br>
			<button type="submit" class="btn btn-primary">Update</button>
			<hr>
			<a href="{{ url('/dashboard') }}">Go back to Homepage</a>
			<br>
			@if(Session::has('updated'))
            	<div style="border-style:inset; background-color: lightgreen; border: radius 5px;">{{Session::get('updated')}}</div>
        	@endif
			</form>
		</div>
	</div>
</div>
	</div>
    </body>
</html>
