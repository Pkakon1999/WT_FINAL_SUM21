<?php
	include 'header.php';
	include 'controllers/CategoryController.php';
	$categories = getAllCategory();
?>


<html>
	<body>
	<h1 align="center"> All Categories </h1>
			<table align="center">
			    <thead>
					<th>Sl#</th>
					<th>Category Name</th>
					<th></th>
				</thead>
				<tbody>
					<?php
						$i=1;
						foreach($categories as $c){
							$id= $c["id"];
							echo "<tr>";
								echo "<td>$i</td>";
								echo "<td>".$c["name"]."</td>";
								echo '<td><a href="editcategory.php?id='.$id.'" class="btn btn-success">Edit</a></td>';
								echo '<td><a class="btn btn-danger">delete</td>';
							echo "</tr>";
							$i++;
						}
					?>
				</tbody>
			</table>
	</body>
</html>