<?php include 'admin_header.php';
	include 'Usercontroller.php';
?>

<html>

	
<div class="center-login">
	<h1 class="text text-center">Login</h1>
	<form action="" method="post" class="form-horizontal form-material">
		<div class="form-group">
			<h3 class="text text-center">Username</h3> 
			<input type="text" name="uname" value="<?php echo $uname;?>" class="form-control">
			<span class="text-danger"><?php echo $err_uname;?></span>
		</div>
		<div class="form-group">
			<h3 class="text text-center">Password</h3> 
			<input type="password" name="pass" value="<?php echo $pass;?>" class="form-control">
			<span class="text-danger"><?php echo $err_pass;?></span>
		</div>
		<div class="form-group text-center">
			
			<input type="submit" name="btn_login" class="btn btn-danger" value="Login" class="form-control">
		</div>
		<div class="form-group text-center">
			
			<a href="signup.php" class="btn btn-primary" >Sign Up</a>
		</div>
	</form>
</div>
</html>
