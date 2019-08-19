<?php
for ($x = 1; $x <= 100; $x += 1) {
	switch ($x) {
		case $x % 15 == 0:
			$foo = "Linianos\n";
			break;
			
		case $x % 5 == 0:
			$foo = "IT\n";
			break;
			
		case $x % 3 == 0:
			$foo = "Linio\n";
			break;
			
		default:
			$foo = $x."\n";
	}
	
	echo $foo;
}
 ?>
