<?php
	function gpaPoint($gpa) {
		return match ($gpa) {
		  "A+" => "4",
		  "A" => "4",
		  "A-" => "3.7",
		  "B+" => "3.3",
		  "B" => "3",
		  "B-" => "2.8",
		  "C+" => "2.5",
		  "C" => "2",
		  "C-" => "1.8",
		  "D" => "1.5",
		  "F" => "0",
		  default => "-1",
		};
	  }

	echo gpaPoint("B-");
?>