<?php
	session_start();
	$uname="";
	$err_uname="";
	$pass="";
	$err_pass="";
	$hasError=false;
	
	$users = array ("Kakon"=>"123","karim"=>"456","rahim"=>"789");
	
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