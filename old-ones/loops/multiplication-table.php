<?php
	$num = 5;
	$multiplier = 1;
	$ans = "";

	while ($multiplier <= 10) {

	  echo "$num x $multiplier = " . ($num * $multiplier) . "\n";
	  $ans .= ($num * $multiplier) . " ";
	  $multiplier++;

	}
	echo $ans;
?>