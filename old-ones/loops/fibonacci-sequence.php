<?php
	$number = 6;
	$range = 0;
	$ans = "0 1 ";

	$x0 = 0;
	$x1 = 1;
	$total = 0;

	while ($range < $number - 2) {
		$total = $x0 + $x1;
		//echo $total . "\n";
		$ans .= $total . " ";
		$x0 = $x1;
		$x1 = $total;

		$range++;
	}
	//echo "\n";
	echo $ans;
?>