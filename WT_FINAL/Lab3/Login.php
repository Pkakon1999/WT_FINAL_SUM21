<?php
	include 'UserController.php';
?>
<html>
	<body>
		<form action="" method="post">
			<table>
				<tr>
					<td align="right">Username</td>
					<td>:<input name="uname" type="text" value="<?php echo $uname;?>"><br>
					<span><?php echo $err_uname;?></span></td>
				</tr>
				
				<tr>
					<td align="right">Password</td>
					<td>:<input name="pass" type="password" value="<?php echo $pass;?>">
					<br><span><?php echo $err_pass;?></span></td>
				</tr>
				
				<tr>
					<td></td>
					<td align="left"><input type="submit" value="Log In"></td>
				</tr>
			</table>
		</form>
	</body>
</html>