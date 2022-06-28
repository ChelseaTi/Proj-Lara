<head>
		<title> Update and Delete </title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" type ="text/css" href ="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<?php
include ("./sqlCon.php");

$query = mysqli_query($con, "SELECT * FROM student_changes") or die (mysqli_error());
echo "<br><br>";
?>
	<div class="container">
	<div class ="row justify-content center">
		<table class="table">
			<th>
				<tr>	
					<th>Student ID</th>
					<th>Last Name</th>
					<th>First Name</th>
					<th>Middle Initial</th>
					<th>Course</th>
					<th>Year Level</th>
				</tr>
			</th>
	<?php
			while($row = mysqli_fetch_array($query)){
			echo "<tr>
					<td>$row[ID]</td>
					<td>$row[frsName]</td>
					<td>$row[lstName]</td>
					<td>$row[midInitial]</td>
					<td>$row[cours]</td>
					<td>$row[yerLevel]<br>
					</tr>";
		}
		
        echo "<a href='./index.php'><input type='button' value ='Back'/></a>";
	?>
