<?php
	$x = 10;
	$y = 12;
	$z = $x + $y;
	
	function print_hello(){
		echo "<b><i>Hello PHP</i></b>";
	}
	
	echo "Hello World<br>";
	echo 'Hello World';
	echo '<h1> Hello World </h1>';
	echo print_hello();
	
	echo "<br>Addition is $z<br>";
	echo "Addition is " .$z. "<br>";
	
	$name = "kakon Paul";
	echo "The length of $name is " .strlen($name);
	
	$pos = strpos($name, "o");
	echo "<br>Position of o is in $pos";
	
	$pos = strpos($name, "k");
	echo "<br>Position of k is in $pos";
	
	$c = 10;
	$d = "10";
	if ($c === $d) {
		echo "<br>same";
	}
	else {
		echo "<br>not same";
	}
?>
	