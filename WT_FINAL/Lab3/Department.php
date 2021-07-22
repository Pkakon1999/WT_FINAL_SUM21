<?php 
    require_once 'DeptController.php';
	$departments=getAllDepartments();
	
?>
<html>
	<head></head>
	<h3>Departments</h3>
	<table>
	<thead>
	    <th>Sl#</th>
		<th>Name</th>
		<th></th>
	</thead>
	<tbody>
	<?php 
	$i = 1;
	foreach($departments as $d){
		echo "<tr>";
		  echo "<td>$i</td>";
		  echo "<td>".$d["name"]."</td>";
		  echo "</tr>";
		  $i++;
	}
	
	?>
	</tbody>
	</table>
	</body>
</html>