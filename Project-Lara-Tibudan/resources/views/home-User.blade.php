<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
		<title> Homepage </title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" type ="text/css" href ="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>

	<div class="container">
	<div class ="row justify-content center">
		<table class="table">
		<h2>Welcome to Homepage</h2>
		<hr>
		<header style="justify-content: center; font: size 17px;">Welcome to Homepage</header>
			<th>
				<tr>	
					<th>Student ID</th>
					<th>Last Name</th>
					<th>First Name</th>
					<th>Middle Initial</th>
					<th>Course</th>
					<th>Year Level</th>	
					<th>Status</th>	
					<th colspan="3">Action</th>
				</tr>
			</th>
			@foreach ($table_data as $td)
			<tbody>
				<tr>
					<td>{{$td->stID}}</td>
					<td>{{$td->lsName}}</td>
					<td>{{$td->frName}}</td>
					<td>{{$td->miInitial}}</td>
					<td>{{$td->cour}}</td>
					<td>{{$td->yrLevel}}</td>
					<td>{{$td->status}}</td>		
					<td>
                            <a style="margin-right:10px;" href="/edit-record/{{$td->id}}">edit</a>
                            <a style="margin-right:10px;" href="//delete-record/{{$td->id}}">delete</a>
							<a href="{{url('/add-newRecord')}}">Add</a>
                    </td>	
				</tr>
			</tbody>
			@endforeach
			@if(Session::has('deleted'))
            	<div style="border-style:inset; background-color: lightgreen; border: radius 5px;">{{Session::get('deleted')}}</div>
        	@endif
    </body>
</html>
