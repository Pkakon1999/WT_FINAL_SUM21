<?php 
	include 'header.php';
	include 'controllers/CategoryController.php';
	$id = $_GET["id"];
	$c = getCategory($id);
?>

<table>
	<tr>
		<td>
		<h5 class="text-danger"><?php echo $err_db;?></h5>
		<td>
	</tr>
	<form action="" method="post">
		<tr>
			<td>
			<h4>Name:</h4> 
			<input type="hidden" name="id" value="<?php echo $c["id"];?>">
			<input type="text" name="name" value="<?php echo $c["name"];?>">
			</td>
		</tr>

		<tr>
			<td>
			<input type="submit" name="edit_category" class="btn btn-success" value="Edit Category">
			</td>
		</tr>
	</form>
</table>


<?php include 'footer.php';?>