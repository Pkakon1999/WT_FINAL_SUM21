<?php

	include 'controllers/UserController.php';
?>

<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="styles/MyStyles.css">
	</head>
	<body>
	<body style = "background: url(https://i.pinimg.com/originals/08/f0/19/08f019f2c19f91cf1484d1a699851662.png); background-size: 100% 100%" ></body>
	<form action="" method="post">

		<h3 align = "center"><font color = 'red'>Customer Registration Form</font></h3>

		<table align = "center">
			<tr>
				<td  align='right'><b>First Name<font color = 'red'>*</font></b> </td><td><input type="text" value="<?php echo $name ?>" name="name" id="name">
				</td>
				<td>
                    <?php echo $err_name ?>
                </td>
			</tr>

			<tr>
				<td  align='right'><b>Last Name<font color = 'red'>*</font> </b></td><td><input type="text" name="lname" id="lastname" value="<?php echo $lname ?>">
				</td>
				<td>
                    <?php echo $err_lname ?>
                </td>
			</tr>

			<tr>
				<td  align='right'><b>Address<font color = 'red'>*</font> </b></td><td><input type="text" name="address" id="address" value="<?php echo $address ?>">
				</td>
				<td>
                    <?php echo $err_address ?>
                </td>
			</tr>

			<tr>
				<td> </td><td><input type='text'>
				</td>
			</tr>

			<tr>
				<td  align='right'><b>Phone <font color = 'red'>*</font></b></td><td><input type="text" name="telephone" id="phone" value="<?php echo $telephone ?>">
				</td>
				<td>
                    <?php echo $err_telephone ?>
                </td>
			</tr>

			<tr>
				<td  align='right'><b>Email<font color = 'red'>*</font> </b></td><td><input type="text" name="email" id="email" value="<?php echo $email ?>">
				</td>
				<td>
                    <?php echo $err_email ?>
                </td>
			</tr>
			
			<tr>
				<td align="right"><b>Gender<font color = 'red'>*</font></b></td>
				<td><input type="radio" name="gender" value="male" <?php if($gender=='male') echo "checked"; ?>>
                        <label>Male</label>
                        <input type="radio" name="gender" value="female" <?php if($gender=='female') echo "checked"; ?>>
                        <label>Female</label>
				</td>
				<td>
                    <?php echo $err_gender ?>
                </td>
			</tr>

			<tr>
				<td  align='right'><b>Blood Group </b></td><td><input type="text">
				</td>
			</tr>
			
			<tr>
				<td align="right"><b>Marital Status<font color = 'red'>*</font></b></td>
				<td><input type="radio" name="marital" value="married" <?php if($marital=='married') echo "checked"; ?>>
                        <label>Married</label>
                        <input type="radio" name="marital" value="unmarried" <?php if($marital=='unmarried') echo "checked"; ?>>
                        <label>Unmarried</label>
				</td>
				<td>
                    <?php echo $err_marital ?>
                </td>
			</tr>
			
			<tr>
				<td colspan='2'align='center'><input type='submit' value='Register'> 
				</td>
			</tr>

		</table>
		</form>
		
	</body>
</html>