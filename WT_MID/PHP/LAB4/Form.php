<?php
	$name="";
	$err_name="";
	$uname="";
	$err_uname="";
	$pass="";
	$err_pass="";
	$confirmPass="";
	$err_confirmPass="";
	$email="";
	$err_email="";
	$phoneNum="";
	$err_phone="";
	$address="";
	$err_address="";
	$birthDate="";
	$err_birthDate="";
	$gender="";
	$err_gender="";
	$aboutUs=[];
	$err_aboutUs="";
	$bio="";
	$err_bio="";
	
	$hasError=false;
	
	
	function aboutExist($h){
		global $aboutUs;
		foreach($aboutUs as $about){
			if ($h == $about)
			return true;
		}
		return false;
	}
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		if(empty($_POST["name"])){
			$hasError=true;
			$err_name="Name Required";
		}
		else
		{
			$name = $_POST["name"];
		}
		if(empty($_POST["username"])){
			$hasError=true;
			$err_uname="User Name Required";
		}
		elseif (strlen($_POST["username"]) <=5){
			$hasError = true;
			$err_uname = "Username must contain at least 6 characters";
		}
		else
		{
			$uname = $_POST["username"];
		}
		if(empty($_POST["password"])){
			$hasError=true;
			$err_pass="Password Required";
		}
		elseif (strlen($_POST["pass"]) <=7){
			$hasError = true;
			$err_pass = "Password must contain at least 8 characters";
		}
		elseif (!strpos ("pass","?")){
			$hasError = true;
			$err_pass = "Password cannot contain ?";
		}
		elseif (!strpos ("pass","#")){
			$hasError = true;
			$err_pass = "Password cannot contain #";
		}
		elseif (!ctype_upper ("pass")){
			$hasError = true;
			$err_pass = "Password must contain at least 1 uppercase characters";
		}
		elseif (!ctype_lower ("pass")){
			$hasError = true;
			$err_pass = "Password must contain at least 1 lowercase characters";
		}
		else
		{
			$pass = $_POST["password"];
		}
		if(!isset($_POST["confirmPass"])){
			$hasError=true;
			$err_confirmPass="Give Your Password Again";
		}
		else
		{
			$confirmPass = $_POST["confirmPass"];
		}
		if(!isset($_POST["email"])){
			$hasError=true;
			$err_email="Email Required";
		}
		elseif (!strpos("email", '@') && !strpos("email", '.')) {
			$hasError = true;
			$err_email = "Give a Valid Email";
		}
		else
		{
			$email = $_POST["email"];
		}
		if(!isset($_POST["phone"])){
			$hasError=true;
			$err_phone="Phone Number Required";
		}
		elseif (!is_numeric("phone"))
			$hasError = true;
			$err_phone = "Give a Valid Phone Number";
		}
		else
		{
			$phone = $_POST["phone"];
		}
		if(empty($_POST["address"])){
			$hasError=true;
			$err_address="Address Required";
		}
		else
		{
			$address = $_POST["address"];
		}
		if(empty($_POST["birthDate"])){
			$hasError=true;
			$err_birthDate="Birth Date Required";
		}
		else
		{
			$birthDate = $_POST["birthDate"];
		}
		if(!isset($_POST["gender"])){
			$hasError = true;
			$err_gender = "Gender Required";
		}
		else{
			$gender = $_POST["gender"];
		}
		if(!isset($_POST["aboutUs"])){
			$hasError = true;
			$err_aboutUs = "Please select at least one";
		}else{
			$aboutUs = $_POST["aboutUs"];
		}
		if(empty($_POST["bio"])){
			$hasError = true;
			$err_bio = "Bio Required";
		}
		else{
			$bio = $_POST["bio"];
		}
		
		if(!$hasError){
			echo $_POST["name"]."<br>";
			echo $_POST["username"]."<br>";
			echo $_POST["password"]."<br>";
			echo $_POST["confirmPass"]."<br>";
			echo $_POST["email"]."<br>";
			echo $_POST["phone"]."<br>";
			echo $_POST["address"]."<br>";
			echo $_POST["birthDate"]."<br>";
			echo $_POST["gender"]."<br>";
			echo $_POST["bio"]."<br>";
			$arr = $_POST["aboutUs"];
			
			foreach($arr as $e){
				echo "$e<br>";
			}
		}
		
	
	
?>
<html>
	<body>
		<h1>Club Member Registration</h1>
		<form action="" method="post">
			<table>
				<tr>
					<td align="right">Name</td>
					<td>:<input name="name" value="<?php echo $name;?>" type="text"><br>
					<span><?php echo $err_name;?></span></td>
				</tr>
				<tr>
					<td align="right">Username</td>
					<td>:<input name="username" value="<?php echo $uname;?>" type="text"><br>
					<span><?php echo $err_uname;?></span></td>
				</tr>
				<tr>
					<td align="right">Password</td>
					<td>:<input name="password" value="<?php echo $pass;?>" type="password"><br>
					<span><?php echo $err_pass;?></span></td>
				</tr>
				<tr>
					<td align="right">Confirm Password</td>
					<td>:<input name="confirmPass" value="<?php echo $confirmPass;?>" type="password"><br>
					<span><?php echo $err_confirmPass;?></span></td>
				</tr>
				<tr>
					<td align="right">Email</td>
					<td>:<input name="email" value="<?php echo $email;?>" type="text"><br>
					<span><?php echo $err_email;?></span></td>
				</tr>
				<tr>
					<td align="right">Phone</td>
					<td>:<input name="phone" type="text" value="<?php echo $phone;?>" placeholder="code">-<input name="phone" value="<?php echo $phone;?>" type="text" placeholder="Number"><br>
					<span><?php echo $err_phone;?></span></td>
				</tr>
				<tr>
					<td align="right">Address</td>
					<td>:<input name="adress" type="text" value="<?php echo $address;?>" placeholder="Street Address"><br>
					<span><?php echo $err_address;?></span></td>
				</tr>
				<tr>
					<td align="right"></td>
					<td>:<input name="address" type="text" value="<?php echo $address;?>" placeholder="City">-<input name="address" value="<?php echo $address;?>" type="text" placeholder="State"><br>
					<span><?php echo $err_address;?></span></td>
				</tr>
				<tr>
					<td align="right"></td>
					<td>:<input name="address" type="text" value="<?php echo $address;?>" placeholder="Postal/Zip Code"><br>
					<span><?php echo $err_address;?></span></td>
				</tr>
				<tr>
					<td align="right">Birth Date</td>
					<td>:<input name="birthDate" value="<?php echo $birthDate;?>" type="date"><br>
					<span><?php echo $err_birthDate;?></span></td>
				</tr>
				<tr>
					<td align="right">Gender</td>
					<td>:<input type="radio" value="Male" <?php if($gender == "Male") echo "checked";?> name="gender"> Male <input type="radio" <?php if($gender == "Female") echo "checked";?> value="Female" name="gender"> Female<br>
					<span><?php echo $err_gender;?></span></td>
				</tr>
				<tr>
					<td align="right">Where did you hear <br> about us?</td>
					<td>
						<input type="checkbox" value="A Friend or Colleague" <?php if(aboutExist("A Friend or Colleague")) echo "checked";?>  name="aboutUs[]">A Friend or Colleague<br>
						<input value="Google" name="aboutUs[]" <?php if(aboutExist("Google")) echo "checked";?> type="checkbox">Google <br>
						<input value="Blog Post" name="aboutUs[]" <?php if(aboutExist("Blog Post")) echo "checked";?>  type="checkbox">Blog Post <br> 
						<input value="News Article" name="aboutUs[]" <?php if(aboutExist("News Article")) echo "checked";?>  type="checkbox">News Article
					
					<br><span><?php echo $err_aboutUs;?></span></td>
				</tr>
				<tr>
					<td align="right">Bio</td>
					<td>: <textarea name="bio"><?php echo $bio;?></textarea><br>
						<span><?php echo $err_bio;?></span>
					</td>
					
				</tr>
				<tr>
					<td align="right"></td>
					<td><input type="submit" value="Register"></td>
				</tr>
			</table>
		</form>
	</body>
</html>