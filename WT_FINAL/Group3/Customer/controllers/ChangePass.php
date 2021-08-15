<?php
$db_server="localhost";
	$db_uname="root";
	$db_pass="";
	$db_name="Project";
	
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

if (count($_POST) > 0) {
    $result = mysqli_query($conn, "SELECT *from password WHERE id='" . $_SESSION["id"] . "'");
    $row = mysqli_fetch_array($result);
    if ($_POST["currentPassword"] == $row["password"]) {
        mysqli_query($conn, "UPDATE users set password='" . $_POST["newPassword"] . "' WHERE id='" . $_SESSION["id"] . "'");
        $message = "Password Changed";
    } else
        $message = "Current Password is not correct";
}
?>