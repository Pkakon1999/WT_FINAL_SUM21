<?php include 'main_header.php';?>
<?php

	include 'UserController.php';
?>
<html>
<div class="center-login">
	<h1 class="text text-center">Sign Up</h1>
	<form action="" method="post" class="form-horizontal form-material">
<div class="form-group">
			<h4 class="text text-center">Name</h4> 
			<input type="text" name="name" class="form-control">
		</div>
		<div class="form-group">
			<h4 class="text text-center">Address</h4> 
			<input type="text" name="address" class="form-control">
		</div>
		<div class="form-group">
			<h4 class="text text-center">Username</h4> 
			<input type="text" name="uname" onfocusout="checkUsername(this)" value="<?php echo $uname;?>" class="form-control">
			<span id="err_uname" class="text-danger"><?php echo $err_uname;?></span>
		</div>
		<div class="form-group">
			<h4 class="text text-center">Email</h4> 
			<input type="text" name="email" class="form-control">
		</div>
		<div class="form-group">
			<h4 class="text text-center">Password</h4> 
			<input type="password" name="pass" class="form-control">
		</div>
		<div class="form-group">
			<h4 class="text text-center">Phone</h4> 
			<input type="tel" name="phone" pattern="+880[0-9]" class="form-control">
		</div>
		<div class="form-group text-center">
			
			<input type="submit" name="sign_up" class="btn btn-success" value="Sign Up" class="form-control">
		</div>
	</form>
</div>
</html>