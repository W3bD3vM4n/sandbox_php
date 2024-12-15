<?php
	$rows = 5;
	$columns = "";

	// pyramid height
	for ($i = 1; $i <= $rows; $i++) {

		// pyramid width
		for ($j = 0; $j < $i; $j++) {
			$columns .= "a ";
		}
		$columns .= "\n";
	}
	echo $columns;
?>