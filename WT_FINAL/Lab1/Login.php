<?php
	session_start();
	$uname="";
	$err_uname="";
	$pass="";
	$err_pass="";
	$hasError=false;
	
	$users = array ("tanvir"=>"1234","sabbir"=>"123","karim"=>"456","rahim"=>"789");
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		if(empty($_POST["uname"])){
			$hasError = true;
			$err_uname = "Username Required";
		}
		else{
			$uname=$_POST["uname"];
		}
		if(empty($_POST["pass"])){
			$hasError = true;
			$err_pass = "Password Required";
		}
		else{
			$pass=$_POST["pass"];
		}
		if (!$hasError){
			foreach($users as $u=>$p){
				if($uname == $u && $pass == $p){
					$_SESSION["loggeduser"] = $uname;
					setcookie("loogeduser",$uname,time()+120);
					header("Location: Dashboard.php");
				}
			}
			echo "Invalid username";
		}
	}
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