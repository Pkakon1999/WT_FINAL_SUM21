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
					<td colspan="2" align="center"><h1> Fruits </h1></td>
				</tr>
				
				<tr>
					<td>
						Mango <br> Jackfruit <br> Lichi
					</td>
				</tr>
			</table>
	</body>
</html>