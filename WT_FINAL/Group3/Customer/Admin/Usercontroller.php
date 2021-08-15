<?php
	//session_start();
	$uname="";
	$err_uname="";
	$pass="";
	$err_pass="";
	$hasError=false;
	
	$users = array("tanvir"=>"1234","kakon"=>"4567");
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		if(empty($_POST["uname"])){
			$hasError = true;
			$err_uname = "Uesrname Required";
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
		
		if(!$hasError){
			foreach($users as $u=>$p){
				if($uname == $u && $pass==$p){
					$_SESSION["loggeduser"] = $uname;
					header("Location: dashboard.php");
				}
			}
			echo "invalid username or password";
		}
	}
?>