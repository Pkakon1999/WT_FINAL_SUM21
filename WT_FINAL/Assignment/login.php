<?php
	include 'header.php';
	include 'controllers/UserController.php';
?>


<html>
	<body>
		<fieldset>
			<form action="" method = "post">
				<table align="center">
					<tr>
						<td colspan="2" align="center"><h2 style="color:blue"><b>Login </b></h2></td>
					</tr>
					<tr>
						<td colspan="2" align="center"><h5 class="text-danger"><?php echo $err_db; ?> </h5></td>
					</tr>
					<tr>
						<td align="center"><input name="userName"  placeholder="Username" value="<?php echo $userName;?>" type="text"> <br> <span><?php echo $err_userName;?></span></td>
					</tr>
					<tr>
						<td align="center"><input name="password" placeholder="Password" value="<?php echo $password;?>" type="Password"> <br> <span><?php echo $err_password;?></span> </td>
					</tr>
					
					<tr>
						<td colspan="2" align="center" ><input name="btn_login" type="Submit" value="Log In">
				    </td>
					<tr>
						<td colspan="2" align="center"><a href ="signup.php">not registered yet? Sign Up</a></td>
					</tr>	
				
					</tr>
				</table >
			</form>
		</fieldset>
	</body>
</html>