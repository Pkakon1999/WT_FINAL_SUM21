<?php
    require_once 'DeptController.php';
	$students=getStudents()
?>
<html>
	<head></head>
	<h3>All Students</h3>
	<table>
	<thead>
	    <th>Sl#</th>
		<th>Name</th>
		<th></th>
	</thead>
	<tbody>
	<?php 
	$i = 1;
	foreach($students as $d){
		echo "<tr>";
		  echo "<td>$i</td>";
		  echo "<td>".$d["name"]."</td>";
		  echo "<td>".$d["dob"]."</td>";
		  echo "<td>".$d["cgpa"]."</td>";
		  echo "<td>".$d["credit"]."</td>";
		  echo "<td>".$d["dept_id"]."</td>";
		  
		  echo "</tr>";
		  $i++;
	}
	?>
	</tbody>
	</table>
	</body>
</html>