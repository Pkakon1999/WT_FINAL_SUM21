<?php
	require_once 'StudentController.php';
?>
<html>
	<body>
		<h1>Add Student</h1>
		<form action="" method="post">
			<table>
				<tr>
					<td align="right">Name</td>
					<td>:<input name="name" value="<?php echo $name;?>" type="text"><br>
					<span><?php echo $err_name;?></span></td>
				</tr>
				<tr>
					<td align="right">ID</td>
					<td>:<input name="id" value="<?php echo $id;?>" type="text"><br>
					<span><?php echo $err_id;?></span></td>
				</tr>
				<tr>
					<td align="right">Birth Date</td>
					<td>:<input name="dob" value="<?php echo $dob;?>" type="text"><br>
					<span><?php echo $err_dob;?></span></td>
				</tr>
				<tr>
					<td align="right">Credit</td>
					<td>:<input name="credit" value="<?php echo $credit;?>" type="text"><br>
					<span><?php echo $err_credit;?></span></td>
				</tr>
				<tr>
					<td align="right">CGPA</td>
					<td>:<input name="cgpa" value="<?php echo $cgpa;?>" type="text"><br>
					<span><?php echo $err_cgpa;?></span></td>
				</tr>
				<tr>
					<td align="right">Department ID</td>
					<td>:<input name="dept_id" value="<?php echo $dept_id;?>" type="text"><br>
					<span><?php echo $err_dept_id;?></span></td>
				</tr>
				<tr>
					<td align="right"></td>
					<td><input type="submit" value="ADD"></td>
				</tr>
			</table>
		</form>
	</body>
</html>