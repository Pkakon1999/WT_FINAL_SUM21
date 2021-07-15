<?php
	include 'models/db_config.php';
	
	$name="";
	$err_name="";
	$userName="";
	$err_userName="";
	$email="";
	$err_email="";
	$password="";
	$err_password="";
	$err_db="";
	
	$hasError=false;
	
	if(isset($_POST["sign_up"])){
		
		if(empty($_POST["name"])){
			$hasError=true;
			$err_name="Name Required";
		}
		elseif (strlen($_POST["name"]) <=2){
			$hasError = true;
			$err_name = "Name must be greater than 2 characters";
		}
		elseif (is_numeric($_POST["name"]))
		{
			$hasError = true;
			$err_name = "Name can't be numeric!!";
		}
		else{
			$name = $_POST["name"];
		}
		
		if(empty($_POST["userName"])){
			$hasError=true;
			$err_userName="UserName Required";
		}
		elseif (strlen($_POST["userName"]) <6){
			$hasError = true;
			$err_userName = "UserName must be greater than 6 characters";
		}
		elseif (strpos($_POST["userName"]," ")){
			$hasError = true;
			$err_userName = "UserName can't take space!!!";
		}
		else
		{
			$userName = $_POST["userName"];
		}
		
		if(empty($_POST["email"]))
				{
					$hasError=true;
					$err_email="Email Required";
				}
				elseif(strpos($_POST["email"],"@")== false && strpos($_POST["email"],".")== false)
				{
					$hasError = true;
					$err_email = " Email Invalid Id";
				}
				else
				{
					$email=$_POST["email"];
				}
				
		if(empty($_POST["password"]))
				{
					$hasError=true;
					$err_password="Password Required";
				}
			    elseif(strlen($_POST["password"])>= 5) 
				 {
					 $hasError = true;
					 $err_password = "Password must have atleast 5 character";
				 }
				elseif(!strpos($_POST["password"],"#") && !strpos($_POST["password"],"?"))
				{
					$hasError = true;
					$err_password = "Password must have atleast one special character(# or ?)";
				}
				elseif(!ctype_upper($_POST["password"]) && !ctype_lower($_POST["password"]))
				{
					$hasError = true;
					$err_password = "Password must have combination of upper and lower character";
				}
				else
				{
					$password=$_POST["password"];
				}
				
				
		if(!$hasError)	
			{	
				$rs = insertUser($name,$uname,$_POST["email"],$_POST["password"]);
				if($rs === true){
					header("Location: login.php");
				}
				$err_db = $rs;
			}
	}
	elseif(isset($_POST["btn_login"])){
		if(empty($_POST["userName"])){
			$hasError=true;
			$err_userName="UserName Required";
		}
		elseif (strlen($_POST["userName"]) <6){
			$hasError = true;
			$err_userName = "UserName must be greater than 6 characters";
		}
		elseif (strpos($_POST["userName"]," ")){
			$hasError = true;
			$err_userName = "UserName can't take space!!!";
		}
		else
		{
			$userName = $_POST["userName"];
		}
		
		if(empty($_POST["password"]))
				{
					$hasError=true;
					$err_password="Password Required";
				}
			    elseif(strlen($_POST["password"])>= 5) 
				 {
					 $hasError = true;
					 $err_password = "Password must have atleast 5 character";
				 }
				elseif(!strpos($_POST["password"],"#") && !strpos($_POST["password"],"?"))
				{
					$hasError = true;
					$err_password = "Password must have atleast one special character(# or ?)";
				}
				elseif(!ctype_upper($_POST["password"]) && !ctype_lower($_POST["password"]))
				{
					$hasError = true;
					$err_password = "Password must have combination of upper and lower character";
				}
				else
				{
					$password=$_POST["password"];
				}
				
		if(!$hasError)	
			{
				if(authenticateUser($userName,$password)){
					header("Location: dashboard.php");
				}
				$err_db = "Username and password invalid";
			}
	}
	function insertUser($name,$userName,$email,$password){
		$query = "insert into users values (NULL,'$name','$userName','$email','$password')";
		return execute ($query);
	}
	function authenticateUser($userName,$password){
		$query = "select*from users where username= '$userName' and password '$password'";
	    $rs = get($query);
		if(count($rs)>0){
			return true;
		}
		return false;
	}
?>