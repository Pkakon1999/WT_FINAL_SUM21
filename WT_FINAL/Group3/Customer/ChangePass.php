<?php
	include 'controllers/ChangePass.php';
?>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="styles/MyStyles.css">
	<script src="Js/ChangePass.js"></script>
</head>

<body>
	<h1 align = "center">Change Password</h1>
    <form name="" method="post" action=""
        onSubmit="return validatePassword()">
		<br>
		<br>
		<br>
		<br>
        <div align ="center">
            <table>
                <tr>
                    <td>Current Password</td>
                    <td><input type="password" name="currentPassword" input="text"/><span id="currentPassword"></span></td>
                </tr>
				
                <tr>
                    <td>New Password</td>
                    <td><input type="password" name="newPassword" input="text"/><span id="newPassword"></span></td>
                </tr>
				
                <td>Confirm Password</td>
                <td><input type="password" name="confirmPassword" input="text"/><span id="confirmPassword"></span></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" name="submit"
                        value="Submit">
					</td>
                </tr>
            </table>
        </div>
    </form>
</body>
</html>
<?php include 'Footer.php';?>