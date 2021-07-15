<?php 
	include 'header.php';
	include 'controllers/CategoryController.php';
 ?>
<html>
	<body>
		<form action="" method = "post">
			<table align="center">
					<tr>
						<td colspan="2" align="center"><h5 class="text-danger"><?php echo $err_db; ?> </h5></td>
					</tr>
					<tr>
						<td>Name: </td>
						<td align="center"><input name="Name" value="<?php echo $name;?>" type="text"></td><br> <span><?php echo $err_name;?></span></td>
					</tr>
					<tr>
						<td align="center" colspan="2"><input name="add_category" type="submit" value="Add Category"></td>
					</tr>
			</table>
		</form>
	</body>	
</html>
<?php include 'footer.php'; ?>