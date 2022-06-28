<head>
		<title> Update and Delete </title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" type ="text/css" href ="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<?php

include("./sqlCon.php");

$query = mysqli_query($con,"Update student_data SET status='Deleted' WHERE stID ='".$_GET['stID']."'") or die(mysqli_error());

?>
	<?php
		if(!$query){
			echo "Record not deleted!";
		}
		else{
			echo"Record successfully deleted";
		}
		echo "<a href='./index.php'><input type='button' value ='Back'/></a>";
?>
	