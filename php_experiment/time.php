<?php
	$t = date("H");
	if($t<10){
		echo "GOOD MORNING";
	}
	elseif($t<16){
		echo "GOOD DAY";
	}
	elseif($t<20){
		echo "GOOD EVENING";
	}
	else
		echo "GOOD NIGHT";
?>
