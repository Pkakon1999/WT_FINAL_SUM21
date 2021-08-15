<?php
	include 'controllers/SignIn.php';
?>
<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="styles/MyStyles.css">
	</head>
	<body style = "background: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSSOX9ADqQSUAotXC1fDR6B9EHeuFXR5HDDmVINImXbxQhxfxD83731SH-zYjW4E1gnYcY&usqp=CAU); background-size: 100% 100%" ></body>
	<body>
		<form action="" method="post">
			<br><br>
			<br><br>
			<br><br>
			<br><br>
			<br><br>
			<br><br>
			<table align = "center">
			
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
<?php include 'Footer.php';?>