<?php include 'header.php'; ?>
<?php
	include 'controllers/UserController.php';
?>



<html>
	<body>
	<fieldset>
	<form action="" method="post">
		<table align="center">
			<tr>
				<td colspan="2" align="center"> <hr></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><h1><b>Sign Up</b></h1></td>
			</tr>
			<tr>
				<td><h5><?php echo $err_db; ?></h5></td>
			<tr>
				<td colspan="2" align="center"> <hr></td>
			</tr>
			<tr>
				<td align="right">Name</td>
				<td><input name="name" value="<?php echo $name;?>" type="text"><br>
					<span><?php echo $err_name;?></span>
				</td>
			</tr>
			<tr>
				<td align="right">Username</td>
				<td><input name="userName" type="text" value="<?php echo $userName;?>"><br>
					<span><?php echo $err_userName;?></span>
				</td>
			</tr>
			<tr>
				<td align="right">Email</td>
				<td>
					<input name="email" type="text" value="<?php echo $email;?>">
					<br>
					<span><?php echo $err_email;?></span>
				</td>
			</tr>
			<tr>
				<td align="right">Password</td>
				<td><input name="password" type="password" value="<?php echo $password;?>">
					<br><span><?php echo $err_password;?></span>
				</td>
			</tr>
			<tr>
				<td colspan="2" align="center"> 
				<input type="submit" name="sign_up" value="Sign up">
				</td>
			</tr>
		</table>
	</form>
	</fieldset>
	</body>
</html>