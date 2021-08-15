<?php include 'main_header.php';?>
<?php

	include 'UserController.php';
?>
<html>
<div class="center-login">
	<h1 class="text text-center">Edit Profile</h1>
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
			<h4 class="text text-center">Email</h4> 
			<input type="text" name="email" class="form-control">
		</div>
		<div class="form-group">
			<h4 class="text text-center">Old Password</h4> 
			<input type="password" name="pass" class="form-control">
		</div>
		<div class="form-group">
			<h4 class="text text-center"> NewPassword</h4> 
			<input type="password" name="pass" class="form-control">
		</div>
		<div class="form-group text-center">
			
			<input type="submit" name="Done" class="btn btn-success" value="Done" class="form-control">
		</div>
	</form>
</div>
</html>