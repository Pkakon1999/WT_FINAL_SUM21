<?php
	include 'model/db_config.php';
	
	$name="";
	$err_name="";
	$lname="";
	$err_lname="";
	$address="";
	$err_address="";
	$telephone="";
	$err_telephone="";
	$email="";
	$err_email="";
	$gender="";
	$err_gender="";
	$marital="";
	$err_marital="";
	$err_db="";
	
	$hasError=false;
	
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		if(empty($_POST["name"])){
			$hasError=true;
			$err_name="First Name Required";
		}
		else
		{
			$name = $_POST["name"];
		}
		if(empty($_POST["lname"])){
			$hasError=true;
			$err_lname="Last Name Required";
		}
		else
		{
			$lname = $_POST["lname"];
		}
		if(empty($_POST["address"])){
			$hasError=true;
			$err_address="Address Required";
		}
		else
		{
			$address = $_POST["address"];
		}
		if(!isset($_POST["telephone"])){
			$hasError=true;
			$err_telephone="Telephone Number Required";
		}
		elseif (!is_numeric($_POST["telephone"]))
			$hasError = true;
			$err_telephone = "Give a Valid Phone Number";
		}
		else
		{
			$telephone = $_POST["telephone"];
		}
		if(empty($_POST["email"])){
			$hasError=true;
			$err_email="Email Required";
		}
		elseif (!(strpos($_POST["email"], '@')>0) && !(strpos($_POST["email"], '.')>0)) {
			$hasError = true;
			$err_email = "Give a Valid Email";
		}
		else
		{
			$email = $_POST["email"];
		}
		if(!isset($_POST["gender"])){
			$hasError=true;
			$err_gender="Gender Required";
		}
		else
		{
			$gender = $_POST["gender"];
		}	
		if(!isset($_POST["marital"])){
			$hasError=true;
			$err_merital="Marital Status Required Required";
		}
		else
		{
			$marital = $_POST["marital"];
		}
		if(!$hasError){
			$rs = insertUser($name,$uname,$_POST["email"],$_POST["pass"]);
			if($rs === true){
				header("Location: login.php");
			}
			$err_db = $rs;
		}
		
		elseif(isset($_POST["btn_login"])){
		
		if(empty($_POST["uname"])){
			$hasError  = true;
			$err_uname = "Username Required";
		}
		else{
			$uname = $_POST["uname"];
		}
		if(empty($_POST["pass"])){
			$hasError  = true;
			$err_pass = "Password Required";
		}
		else{
			$pass = $_POST["pass"];
		}
		if(!$hasError){
			if(authenticateUser($uname,$pass)){
				header("Location: dashboard.php");
			}
			$err_db  = "Username and password invalid";
		}
		
	}
	function insertUser($name,$lname,$address, $telephone, $email,$gender, $marital){
		$query = "insert into users values (NULL,'$name','$lname','$address','$telephone','$email','$gender','$marital')";
		return execute($query);
		
	}
	function authenticateUser($uname,$pass){
		$query = "select * from users where name='$name' and password='$pass'";
		$rs = get($query);
		if(count($rs) > 0){
			return true;
		}
		return false;
		
	}
	function checkUsername($uname){
		$query = "select name from users where name='$uname'";
		$rs = get($query);
		if(count($rs) > 0){
			return true;
		}
		return false;
		
	}
		
	
?>