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
					<td><h1> WELCOME! <?php echo $_SESSION["loggeduser"];?> </h1></td>
				</tr>
				<tr>
					<td><a href="Fruits.php">Fruits</a></td>
				</tr>
			</table>
	</body>
</html>