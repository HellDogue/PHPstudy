<?php
function selloff($money,$topoff){
	if (($money/2) > $topoff) {
		$money = $money - $topoff;
	}else{
		$money = $money/2;
	}
	return $money;
}
print (selloff(120,50));
?>