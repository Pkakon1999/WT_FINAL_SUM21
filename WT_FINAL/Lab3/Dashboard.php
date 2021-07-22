<?php
	session_start();
	if(!isset($_SESSION["loggeduser"])){
		header("Location: Login.php");
	}
?>
<html>
	<body>
			<table>
				<tr>
					<td><h1> WELCOME! </h1></td>
				</tr>
				<tr>
					<td><a href="AddStudent.php">Add Students</a></td>
				</tr>
				<tr>
					<td><a href="AllStudent.php">All Students</a></td>
				</tr>
				<tr>
					<td><a href="Department.php">Add Department</a></td>
				</tr>
				<tr>
					<td><a href="AllDepartment.php">All Departments</a></td>
				</tr>
			</table>
	</body>
</html>